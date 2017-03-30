<?php
namespace PhpAcademy\Models;

use PhpAcademy\Models\Message;
use PDO;
class DBMessage extends Message
{

    private static $connection;

    public static function connectDB($host, $username, $password, $db_name)
    {
        if (!static::$connection) {
            static::$connection = new PDO("mysql:dbname = $db_name;host = $host", $username, $password);
            if (!static::$connection) {
                throw new Exception('Could not connect to DB ');
            }
        }
    }

    public function save()
    {
        $statementInsert = static::$connection->prepare(
            "INSERT INTO Local.messages
                  (subject, text , created_at, user, id)
                  VALUES (:subject, :text, NOW(), :user, :id)");
        try {
            $statementInsert->bindParam(':subject', $this->subject, PDO::PARAM_STR);
            $statementInsert->bindParam(':text', $this->text, PDO::PARAM_STR);
            $statementInsert->bindParam(':user', serialize($this->user), PDO::PARAM_STR);
            $statementInsert->bindParam(':id', $this->id, PDO::PARAM_STR);
            if($statementInsert->execute()) {
                return $this;
            }else{
                return false;
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public static function getAll()
    {
        $query = "SELECT * FROM  Local.messages";
        try {
            $messages = static::$connection->query($query)->fetchAll();
            return $messages;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public static function getRecordById($id){
        $query =
            "SELECT * FROM Local.messages
               WHERE id =". $id;
        try {
            $message = static::$connection->query($query)->fetch(PDO::FETCH_ASSOC);
            if($message){
               return $message;
            }else{
                return false;
            }

        } catch (\Exception $e) {
            throw $e;
        }
    }
    public static function deleteRecordById($id)
    {
        $statementDelete = static::$connection->prepare(
            "DELETE FROM Local.messages
                 WHERE id = :id");
        try {
                $statementDelete->bindParam(':id', $id, PDO::PARAM_STR);
                if($statementDelete->execute()){
                    return true;
                }else{
                    return false;
                }

        } catch (\Exception $e) {
            throw $e;
        }
    }


    public function updateRecordById($id){
        $statementUpdate = static::$connection->prepare(
            "UPDATE Local.messages
                  SET
                  subject   = :subject,
                  text      = :text, 
                  user      = :user,
                  WHERE id  = :id");
        try {
            $statementUpdate->bindParam(':subject', $this->subject, PDO::PARAM_STR);
            $statementUpdate->bindParam(':text', $this->text, PDO::PARAM_STR);
            $statementUpdate->bindParam(':user', serialize($this->user), PDO::PARAM_STR);
            $statementUpdate->bindParam(':id', $this->id, PDO::PARAM_STR);
            
            if($statementUpdate->execute()) {
                return $this;
            }else{
                return false;
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

}

<?php
namespace PhpAcademy\Models;

use PhpAcademy\Traits\MailSender;
use PhpAcademy\Models\Message;

class FileMessage extends Message
{
    use MailSender;

    private static $database;

    public static function getDatabase()
    {
        //return $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'messages.db';
        return $_SERVER['DOCUMENT_ROOT'].'/php-academy-29-11-ood/' . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'messages.db';

    }

    public function save()
    {
        try {
            //$list = [];
            touch(FileMessage::getDatabase());
            $list = unserialize(file_get_contents(FileMessage::getDatabase()));
            if($list){
                $obj = $list[count($list) - 1];
                $this->id = $obj->id + 1;
            }else{
                $this->id = 1;
            }
            if(!is_array($list)) {
                $list = [];
            }
            array_push($list, $this);

            file_put_contents(FileMessage::getDatabase(), serialize($list));
            var_dump($this->sendEmail('vasya@pupkin', 'Hello', 'Test'));
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public static function getAll()
    {
        try {
            return unserialize(file_get_contents(FileMessage::getDatabase()));
        } catch (\Exception $e) {
            throw $e;
        }
    }


    public static function getRecordById($id){
        try {
            touch(FileMessage::getDatabase());
            $list = unserialize(file_get_contents(FileMessage::getDatabase()));

            if(!is_array($list)) {
                return null;
            }
            foreach ($list as $obj){
                if($obj-> id == $id){
                    return $obj;
                }
            }

            return null;

        } catch (\Exception $e) {
            throw $e;
        }
    }
    public static function deleteRecordById($id){
        try {
            touch(FileMessage::getDatabase());
            $list = unserialize(file_get_contents(FileMessage::getDatabase()));

            if(!is_array($list)) {
                return false;
            }
            foreach ($list as $key =>$obj){
                if($obj-> id == $id){
                    unset($list[$key]);
                    file_put_contents(FileMessage::getDatabase(), serialize($list));
                    return true;
                }
            }
            return false;

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function updateRecordById($id){
        try {
            touch(FileMessage::getDatabase());
            $list = unserialize(file_get_contents(FileMessage::getDatabase()));

            if(!is_array($list)) {
                return false;
            }
            foreach ($list as $key =>$obj) {
                if ($obj->id == $id) {

                    foreach ($this as $key => $val) {
                        if($key != 'id')
                            $obj->$key = $val;
                    }

                    file_put_contents(FileMessage::getDatabase(), serialize($list));
                    return $obj;
                }
            }
            return false;

        } catch (\Exception $e) {
            throw $e;
        }
    }

}
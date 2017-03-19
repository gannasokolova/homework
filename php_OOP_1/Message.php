<?php
namespace PhpAcademy\Models;

use PhpAcademy\Models\User;


abstract class Message
{
    protected $subject;

    protected $text;

    protected $created_at;

    protected $user;

    protected $id;


    /**
     * Message constructor.
     * @param $subject
     * @param $text
     * @param $created_at
     * @param $user
     */
    public function __construct($subject, $text, \DateTime $created_at, User $user)
    {
        $this->subject = $subject;
        $this->text = $text;
        $this->created_at = $created_at;
        $this->user = $user;
    }


    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    function __toString()
    {
        return $this->getSubject() . ' : ' . $this->getText() . '(' . $this->user->getUsername() . ') at: ' . $this->created_at->format('d.m.Y h:i:s').' id ='. $this->id;
    }

    abstract static function getAll();
    abstract static function getRecordById($id);
    abstract function updateRecordById($id);
    abstract static function deleteRecordById($id);
    abstract function save();

}
<?php
class userRegister
{
    private $conn;
    private $table_name = "users";
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public function __construct($db) //constructor  เรียกใช้ทันที 
    {
        $this->conn = $db;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setConfirmPassword($confirm_password)
    {
        $this->confirm_password = $confirm_password;
    }
    public function validatePassword()
    {
        if ($this->password !== $this->confirm_password) {
            return false; // password does not match
        } else {
            return true;
        }
    }
}
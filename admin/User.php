<?php

include_once("Database/DatabaseFactory.php");

class User{
    public $username;
    public $passw;

    public function __construct($username, $passw)
    {
        $this->username = $username;
        $this->passw = $passw;
    }

    public function getConnection(){
        return DatabaseFactory::getDatabase();
    }

    public function login(){
        $query = "SELECT * FROM users WHERE username = $this->username AND passw = $this->passw";
        $conn = self::getConnection();
        $results = $conn->executeQuery($query);
        if($results->num_rows > 0)
            return true;
        else
            return false;
    }
}
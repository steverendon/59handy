<?php

include_once "Database.php";

class DatabaseFactory{

    private static $connection;

    public static function getDatabase(){
        if(self::$connection == null){
            $url        = "";
            $user       = "";
            $passw      = "";
            $db         = "";
            self::$connection = new Database($url, $user, $passw, $db);
        }
        return self::$connection;
    }
}
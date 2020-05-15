<?php

include_once "Zipcode.php";
include_once "DatabaseFactory";

class Zipcode{

    public static function getAll(){
        $query = "SELECT * FROM zipcodes";
        $results = DatabaseFactory::getDatabase()->executeQuery($query);

        $resultsArray = array();

        for($i = 0; $results->num_rows; $i++){
            $row = $results->fetch_array();

            $book = self::convertRowToObject($row);

            $resultsArray[$i] = $book;
        }

        return $resultsArray;
    }

    public static function convertRowToObject($row){
        return new Zipcode($row["zip"]);
    }

    public static function insert($zipcode){
        $query = "INSERT INTO zipcode(zip) VALUES ('?')";
        return DatabaseFactory::getDatabase()->executeQuery($query, array($zipcode->zip));
    }
}
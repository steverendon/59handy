<?php

class Database{

    protected $url;
    protected $user;
    protected $password;
    protected $db;
    protected $connection = null;

    public function __construct($url, $user, $password, $db)
    {
        $this->url = $url;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function __destruct()
    {
        if($this->connetion != null){
            $this->closeConnection();
        }
    }

    public function makeConnection(){
        $this->connection = new mysqli($this->url, $this->user, $this->password, $this->db);
        if($this->connection->connect_error){
            echo "Fail".$this->connection->connect_error;
        }
    }

    public function closeConnection(){
        if($this->connection != null){
            $this->connection->close();
            $this->connection = null;
        }
    }

    public function executeQuery($query, $params = null){
        $this->makeConnection();
        if($params != null){
            $queryParts = preg_split("/\?/", $query);
            if(count($queryParts) != count($params) +1){
                return false;
            }
            $finalQuery = $queryParts[0];
            for($i = 0; $i < count($params); $i++){
                $finalQuery = $finalQuery . $this->cleanParameters($params[$i]).$queryParts[$i+1];
            }
            $query = $finalQuery;
        }
        $result = $this->connection->query($query);
        return $result;
    }

    protected function cleanParameters($parameters){
        $result = $this->connection->real_escape_string($parameters);
        return $result;
    }
}
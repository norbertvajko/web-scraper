<?php

class Database
{

    private $host;
    private $username;
    private $password;
    private $db;

    public function __construct() { $this->connect(); }
    public function __destruct() { mysqli_close($this->connect()); }

    protected function connect() {

        $this->host = "internship.rankingcoach.com:13306";
        $this->username = "n.vajko";
        $this->password = "PQqNVaYk9V9ZWet";
        $this->db = "n_vajko";

        try {
            $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        } catch(Exception $e) {
            echo "Connection failed" . $e->getMessage();
        }

        return $connection;
    }

}


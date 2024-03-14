<?php

class Db
{
    protected $hostname = "localhost";
    protected $dbname = "yatidb";
    protected $user = "root";
    protected $password = "";
    public $con;

    public function dbConnection(): PDO
    {
        $dsn = "mysql:host=$this->hostname;dbname=$this->dbname;charset=UTF8";
        try {
            $this->con = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $this->con;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}



<?php


namespace dbConnect;


class dbConnect
{
    public $host = 'localhost';
    public $username = 'root';
    public $password = 'flexi140';
    public $database = 'stage';

    protected $connection;

    function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
            }
        }
        return $this->connection;
    }
}
<?php

class DB
    /**
     * This class handles connection to DB using PDO.
     */
{
    //  DB properties
    protected $server_name = '127.0.0.1';
    protected $user_name = 'root';
    protected $password = '12345678';
    public $db_name = 'DBase';
    // PDO connection object
    protected $connection;

    public function show_properties()
    {
        echo "Server Name   : $this->server_name" . "</br>";
        echo "User name     : $this->user_name"   . "</br>";
        echo "Password      : $this->password"    . "</br>";
        echo "Database name : $this->db_name"     . "</br>";
    }
    //  This method is used to connect to DB
    public function __construct()
    {
        try {
            $this -> connection = new PDO("mysql:host={$this->server_name};dbname={$this->db_name}", $this->user_name, $this->password);
            // set the PDO error mode to exception
            $this -> connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully" . "<br>" . PHP_EOL;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage(). "<br>" . PHP_EOL ;
        }
    }
    public function get_connection()
    {
        return $this->connection;
    }

    //  Destruct method if needed

    /* public function __destruct()
     {
             $this->connection = null;
             echo "Disconnected" . "<br>" . PHP_EOL;
     } */
}

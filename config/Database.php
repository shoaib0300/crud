<?php

class Database{
    private static $instance = null;
    private $pdo;

    private $host = "localhost";
    private $username = "mamp";
    private $pass = "";
    private $dbname = "crud";

    private function __construct(){

        $conn = "mysql:host={$this->host};dbname={$this->dbname};username={$this->username};pass={$this->pass}";

        try {
            $this->pdo = new PDO($conn, $this->username, $this->pass);
            // Set PDO to throw exceptions on error
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            die("Connection failed ". $e->getMessage());
        }

    }
    public function getinstence(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection(){
        return $this->pdo;
    }

}
$db = Database::getinstence();
$conn = Database::getConnection();


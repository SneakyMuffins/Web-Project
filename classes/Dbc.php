<?php 

//Using a PDO approach to make a class which allows connection to the database

class Dbc {
private $servername;
private $username;
private $dbname;
private $charset;

//Please input your database server name and password and databases name
public function connect(){
    $this->servername = "localhost";
    $this->username = "root";
    $this->dbname = "project";
    //characterset used inside the database
    $this->charset = "utf8mb4";

    try {
    //data source name
    $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
    //Create new PDO object with dsn,database server username and password as arguments to construct
    $pdo = new PDO($dsn, $this->username);
    //Runs a setattribute method to aid in error displaying
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    } catch (PDOException $e) {
        //Outputs a certain error in case the connection failed
        echo "Connection failed: ".$e->getMessage();
    }
}
}
?>
<?php 
 
 namespace App\Models\Services;

use PDO;
use PDOException;

 abstract class DbConnection {
    
    private string $host = "localhost";
    private string $name = "root";
    private string $password = "";
    private string $dbname = "academia";
    private object $connect;
    
    
    
    
    protected function getConnection(){
        try{
            $this->connect = new PDO("mysql:host={$this->host}; dbname=" . $this->dbname, $this->name, $this->password);
            

            return $this->connect;
        } catch(PDOException) {
            die("Connection failed. Try again");
        }
     }
 }

?>
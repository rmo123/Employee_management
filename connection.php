<?php
session_start();
class Database
{
    public $connection;
    public function __construct(){
        $this->connection=mysqli_connect("localhost","root","","employeedb");
        
    }
}
$obj=new Database;
?>
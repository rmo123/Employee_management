<?php

include "connection.php";

class DataOperation extends Database
{
    public function insert($table, $fields){
        $sql = "INSERT INTO ".$table;
        $sql .= "(".implode(",", array_keys($fields)).") VALUES";
        $sql .= "('".implode("','", array_values($fields))."')";
        $query=mysqli_query($this->connection,$sql);
        if($query){
            return true;
        }
    }
    public function fetch($table){
        $sql="SELECT * FROM ".$table;
        $array=array();
        $query=mysqli_query($this->connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[]=$row;
        }
        return $array;
    }
    public function select($table,$id)
    {
        $sql = "SELECT * FROM ".$table." WHERE ".$table.".e_id =".$id;
        $query=mysqli_query($this->connection,$sql);
        if($query)
        {
            while($row = mysqli_fetch_assoc($query)){
                $array[]=$row;
            }
            return $array;

        }
    }
    public function update($table,$id,$myarray)
    {
        $sql="";
        foreach($myarray as $key=> $value)
        {
            $sql .= $key . "='" . $value ."', ";
        }
        $sql=substr($sql,0,-2);
        $sql ="UPDATE ".$table." SET ".$sql." WHERE e_id=".$id;
        // echo $sql;
        if(mysqli_query($this->connection,$sql)){
            return true;
        }
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM ".$table." WHERE ".$table.".e_id =".$id;
        if(mysqli_query($this->connection,$sql)){
            
            return true;
        }

    }

    
}

?>
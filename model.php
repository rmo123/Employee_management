<?php
include "controller.php";

$obj= new DataOperation;
if(isset($_POST["register"]))
{
    $myArray=array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "gender" => $_POST["gender"],
        "hobbies" => implode(',',$_POST["hobbies"]),
        "age" => $_POST["age"],
        "dob" => $_POST["dob"]
    );
    if($obj->insert("employees",$myArray)){
        header("location:registration");
    }
}
if(isset($_GET["select"]))
{
    $id=$_GET["id"];
    if($obj->select("employees",$id)){
        
        header("location:update.php?id=".$id);
    }
}
if(isset($_POST["update"]))
{
    $id=$_GET["id"];
    $myArray=array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "gender" => $_POST["gender"],
        "hobbies" => implode(',',$_POST["hobbies"]),
        "age" => $_POST["age"],
        "dob" => $_POST["dob"]
    );
    if($obj->update("employees",$id,$myArray)){
        $_SESSION['status']= "Update Successfully id no.".$id;
        $_SESSION['status_code']= "thank you very much";
        header("location:admin");
    }
}
if(isset($_POST["multiple"]))
{
    $checkbox=$_POST['ids'];
    foreach($checkbox as $id)
    {
        $obj->multiple("employees",$id);
    } 
    $_SESSION['status']= "Multiple Delete Successfully";
    $_SESSION['status_code']= "thank you very much";
    header("location:admin");
}
if(isset($_GET["delete"]))
{
    $id= $_GET["id"];
    if($obj->delete("employees",$id)){
       
        $_SESSION['status']= "Delete Successfully id no.".$id;
        $_SESSION['status_code']= "thank you very much";
        header("location:admin");
    }
    else
    {
        $_SESSION['status']= "Delete not Successfully";
        $_SESSION['status_code']= "try later";
        header("location:admin");
    }
}
if(isset($_POST["searchbtn"]))
{
    $searchq=$_POST["search"];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $myrow=$obj->search("employees",$searchq);
}
else
{
    $myrow=$obj->fetch("employees");
}
?>
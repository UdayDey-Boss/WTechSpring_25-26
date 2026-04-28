<?php
include "../Model/db.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["name"];
    $password=$_POST["password"];

    $db=new db();
    $conn=$db->connection();

    $result=$db->signin($conn,"users",$name,$password);

    if($result && $result->num_rows>0)
    {
        $_SESSION["UserName"]=$name;
        $_SESSION["loggedIn"]=true;

        $row=$result->fetch_assoc();
        $_SESSION["filepath"]=$row["filepath"];

        header("Location: ../View/Dashboard.php");
    }
    else{
        echo "Invalid Login";
    }
}
?>
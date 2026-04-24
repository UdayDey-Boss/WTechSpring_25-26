<?php
include "../Model/db.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $pass = $_POST["password"];

    if(!empty($name) && strlen($pass)>=4)
    {
        $db = new db();
        $conn = $db->connection();

        $db->signup($conn,"users",$name,$pass);

        header("Location: ../View/Login.php");
    }
}
?>
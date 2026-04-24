<?php
include "../Model/db.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $pass = $_POST["password"];

    $db = new db();
    $conn = $db->connection();

    $result = $db->signin($conn,"users",$name,$pass);

    if($result && $result->num_rows > 0)
    {
        $_SESSION["user"] = $name;
        header("Location: ../View/form.php");
    }
    else{
        echo "Login Failed";
    }
}
?>
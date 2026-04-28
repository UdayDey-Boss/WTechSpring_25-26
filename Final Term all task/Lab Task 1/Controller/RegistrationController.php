<?php
include "../Model/db.php";
session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";
$password = "";

$datafile = "../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $file = $_FILES["file"];


    $valid = true;

    if(!empty($name) && !preg_match("/^[a-zA-Z ]*$/",$name)){
        echo "Invalid Name<br>";
        $valid = false;
    }

    if(!empty($email) && (!strpos($email,"@") || !strpos($email,"."))){
        echo "Invalid Email<br>";
        $valid = false;
    }

    if(!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)){
        echo "Invalid Website<br>";
        $valid = false;
    }

    if(empty($gender)){
        echo "Gender required<br>";
        $valid = false;
    }


    if($valid && !empty($name) && strlen($password) >= 4)
    {
        setcookie("UserName",$name,time()+3600,"/");

   
        $formdata = array(
            "name"=>$name,
            "email"=>$email,
            "website"=>$website,
            "comment"=>$comment,
            "gender"=>$gender,
            "password"=>$password
        );

        if(file_exists($datafile)){
            $data = file_get_contents($datafile);
            $tempdata = json_decode($data,true);
        }else{
            $tempdata = array();
        }

        if(!is_array($tempdata)){
            $tempdata = array();
        }

        $tempdata[] = $formdata;
        file_put_contents($datafile,json_encode($tempdata,JSON_PRETTY_PRINT));

 
        if($file){
            $target = "../File/";
            $path = $target.basename($file["name"]);
            move_uploaded_file($file["tmp_name"],$path);
        }else{
            $path = "";
        }


        $db = new db();
        $conn = $db->connection();

        $result = $db->signup(
            $conn,
            "users",
            $name,
            $email,
            $website,
            $comment,
            $gender,
            $password,
            $path
        );

        if($result){
            header("Location: ../View/Login.php");
        }
    }


    if(isset($_SESSION['name']) || isset($_COOKIE['UserName']))
    {
        echo "Welcome Back";
    }
}
?>
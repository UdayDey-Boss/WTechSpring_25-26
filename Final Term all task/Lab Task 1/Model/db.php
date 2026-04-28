<?php
class db{

function connection()
{
    return new mysqli("localhost","root","","form_project");
}

function signup($conn,$table,$name,$email,$website,$comment,$gender,$password,$filepath)
{
    $sql="INSERT INTO $table (name,email,website,comment,gender,password,filepath)
          VALUES ('$name','$email','$website','$comment','$gender','$password','$filepath')";
    return $conn->query($sql);
}

function signin($conn,$table,$name,$password)
{
    $sql="SELECT * FROM $table WHERE name='$name' AND password='$password'";
    return $conn->query($sql);
}
}
?>
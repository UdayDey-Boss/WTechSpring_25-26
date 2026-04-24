<?php
class db{

    function connection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "form_project";

        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);

        if($connection->connect_error)
        {
            die("Database connection failed: " . $connection->connect_error);
        }

        return $connection;
    }

     function signup($connection, $tablename, $username, $password){
        $sql = "INSERT INTO ".$tablename." (username,password) 
                VALUES ('".$username."', '".$password."')";
        return $connection->query($sql);
    }

    
    function signin($connection, $tablename, $username, $password){
        $sql = "SELECT * FROM ".$tablename." 
                WHERE username='".$username."' AND password='".$password."'";
        return $connection->query($sql);
    }

 
}
?>
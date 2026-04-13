<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

              if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
               if(isset($_POST["name"]))
    {
        $name = $_POST["name"];



        if(!empty($name) && preg_match("/^[a-zA-Z ]*$/",$name))
        {
            echo "Name: " . $name . "<br>";
        }


        else{
            echo "Invalid Name<br>";
        }
    }

    
    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];




        if(!empty($email) && strpos($email,"@") && strpos($email,"."))
        {
            echo "Email: " . $email . "<br>";
        }



        else{
            echo "Invalid Email<br>";
        }
    }

    
    if(isset($_POST["website"]))
    {
        $website = $_POST["website"];

                      if(!empty($website))
        {
            if(filter_var($website, FILTER_VALIDATE_URL))
            {
                echo "Website: " . $website . "<br>";
            }




            else{
                echo "Invalid Website URL<br>";
            }

        }
    }

   
                   if(isset($_POST["comment"]))
    {
       
       
       
                   $comment = $_POST["comment"];
        echo "Comment: " . $comment . "<br>";
    }

    
    if(isset($_POST["gender"]))
    {
        $gender = $_POST["gender"];
        echo "Gender: " . $gender . "<br>";
    }


    
    else{
        echo "Gender is required<br>";
    }
}

?>
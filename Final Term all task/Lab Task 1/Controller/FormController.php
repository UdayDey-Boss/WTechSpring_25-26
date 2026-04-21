<?php
session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

   $datafile = "../data.json";

                     
   
   
   
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




  
    if(!empty($name))
    {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time()+3600, "/");
        echo "Form Submitted Successfully!<br>";
    }




  
    $formdata = array(
                                 "name"=>$name,
                                     "email"=>$email,
                      "website"=>$website,
                        "comment"=>$comment,
                  
                  
                        "gender"=>$gender
    );

                 if(file_exists($datafile)){
        $existdata = file_get_contents($datafile);
        $tempdata = json_decode($existdata, true);
    }
    else{
        $tempdata = array();
    }

    if(!is_array($tempdata))
    {
        $tempdata = array();
    }

    $tempdata[] = $formdata;
    $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

    if(file_put_contents($datafile, $jsondata))
    {
        echo "Data Saved<br>";
    }
    else{
        echo "Please Try Again<br>";
    }

    
    $data = file_get_contents($datafile);
    $mydata = json_decode($data, true);

  
    if(isset($_SESSION['name']) || isset($_COOKIE['name']))
    {
        echo "Welcome Back<br>";
    }
    else{
        echo "Submit Again<br>";
    }
}
?>
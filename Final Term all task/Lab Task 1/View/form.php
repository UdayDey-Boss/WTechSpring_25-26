<?php
session_start();




if(!isset($_SESSION["user"]))
{


          header("Location: Login.php");
}
?>

<?php



                include "../Controller/FormController.php";


?>

<!DOCTYPE html>
<html>
<body>



                 <h2>PHP Form Validation Example</h2>

<form method="post" action="">

             Name: <input type="text" name="name"> *<br><br>

         E-mail: <input type="text" name="email"> *<br><br>


    Website: <input type="text" name="website"><br><br>

    Comment:<br>


    <textarea name="comment" rows="5" cols="40"></textarea>
                <br><br>

    Gender:
    
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Other"> Other *
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>
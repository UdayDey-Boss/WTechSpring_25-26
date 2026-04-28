<?php
session_start();
if(isset($_SESSION["loggedIn"]))
{
    header("Location: Dashboard.php");
}
?>

<h2>Login</h2>

<form method="post" action="../Controller/loginvalidation.php">
Name: <input type="text" name="name"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" value="Login">
</form>
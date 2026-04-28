<?php include "../Controller/RegistrationController.php"; ?>

<h2>Registration Page</h2>

<form method="post" enctype="multipart/form-data">

Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Website: <input type="text" name="website"><br><br>

Comment:<br>
<textarea name="comment"></textarea><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female<br><br>

Password: <input type="password" name="password"><br><br>

File: <input type="file" name="file"><br><br>

<input type="submit" value="Register">

</form>
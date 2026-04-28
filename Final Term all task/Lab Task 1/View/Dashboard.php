<?php
session_start();
if(!isset($_SESSION["UserName"]))
{
    header("Location: Login.php");
}

$name=$_SESSION["UserName"];
$filepath=$_SESSION["filepath"];
?>

<h2>Hello <?php echo $name; ?>, Database Connected Successfully</h2>

<a href="../Controller/Logout.php">Logout</a><br><br>

<?php if($filepath): ?>
<img src="<?php echo $filepath; ?>" width="200">
<?php else: ?>
<p>No Image</p>
<?php endif; ?>
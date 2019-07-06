<?php

session_start();

//connect to database code here

$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");






$username=$_POST['user'];
$password=$_POST['password'];


//basic cleaning up

$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);

$sql = "SELECT * from users WHERE user_name = '$username' AND password = '$password'";

$result = mysqli_query($connection,$sql) or die (mysqli_error());

$count = 0;

$count = mysqli_num_rows($result);

if ($count ==1)
{
$_SESSION['loggedin'] = "true";
header("Location: edit_close_ec.html"); //What page to redirect to if login is good
}
else
{
$_SESSION['loggedin'] = "false";
header("Location: tech_loginfailed_ec.php"); //what page to redirect to if login failed
}

?>


<?php

session_start();

//connect to database code here

$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");




$username=$_POST['user'];
$password=$_POST['password'];


//basic cleaning up

$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$sql = "SELECT * from users WHERE user_name = '$username' AND password = '$password'";

$result = mysql_query($sql) or die (mysql_error());

$count = 0;

$count = mysql_num_rows($result);

if ($count ==1)
{
$_SESSION['loggedin'] = "true";
header("Location: edit_close_gau.html"); //What page to redirect to if login is good
}
else
{
$_SESSION['loggedin'] = "false";
header("Location: tech_loginfailed_gau.php"); //what page to redirect to if login failed
}

?>


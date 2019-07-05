<html>
<head>

<title>Update Job page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<h2>The Job Has Been closed</h2>

<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_nc.php');
	exit;
}

$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");



$query= "UPDATE job_track_nc SET
	close_job='$_POST[close_job]', date_closed= NOW()
	where job_id='$_POST[job_id]' AND assigned_tech != 'None'";
	

$result= mysql_query($query)
or die ("Query failed: " .mysql_error());



mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="10_close_job_nc.php">Back</a> 
</p>
</td>

</body>
</html>

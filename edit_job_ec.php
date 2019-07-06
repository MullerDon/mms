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

<h3>The Job Has Been Updated</h3> <br /><h1>Now, please enter the job costs and KM's for this job</h1>
<a href="job_cost_ec.html"><b>CLICK HERE! to enter job costs and KM's</b></a> 
<?php
session_start();

if (!strlen(trim($_POST['repair_descr'])))
{
	header ('Location: go_back_ec.php');
	exit;
}


$repair_descrip = strip_tags($_POST['repair_descr']); //this will remove any html tags from user input and stores it in $repair_descrip

$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");






$repair_descr = mysqli_real_escape_string($connection,$repair_descrip);//This allows special characters in $repair_descrip and stores it in $repair_descr

$query= "UPDATE job_track_ec SET
	fault_status='$_POST[fault_status]', repair_descr='$repair_descr', date_completed= NOW(), job_completed='$_POST[job_completed]'
	where job_id='$_SESSION[jobec]' AND assigned_tech != 'None' AND job_ack != 'No'";	

$result= mysqli_query($connection,$query)
or die ("Query failed: " .mysqli_error());



mysqli_close ($connection);

?>

<td>
<p class="footer">
<a href="easterncape.html">Home</a> 
</p>
</td>

</body>
</html>


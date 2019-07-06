<html>
<head>

<title>New Job page</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>




<?php

if ($_POST['eqpmnt_type'] == "" || $_POST['location'] == "" || $_POST['emp_id'] == ""|| (!strlen(trim($_POST['fault_descr']))))
{
	header ('Location: go_back_ec.php');
	exit;
}
$fault_descrip = strip_tags($_POST['fault_descr']);//this will remove any html tags
//$job_id = strip_tags($_POST['job_id']);//this will remove any html tags
$emp_id=strip_tags($_POST['emp_id']);//this will remove any html tags
$repeat_id=strip_tags($_POST['job_repeat_id']);//this will remove any html tags
$comment_strip=strip_tags($_POST['comment']);//this will remove any html tags

$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");




$fault_descr = mysqli_real_escape_string($connection,$fault_descrip);//This allows special characters such as quotes
$comment_real = mysqli_real_escape_string($connection,$comment_strip);//This allows special characters such as quotes
//-------------------------------------------removed array operation
//$str = implode(',', $_POST['location']);//implode the 'location' array to normal string so all values fit in one line

//-------------------------------------------------------------------------------------
//$query= "insert into job_track_ec values
	//(NULL,'$_POST[eqpmnt_type]', '$fault_descr', NOW(), '$str', '$_POST[type]','$_POST[repeat]','not complete','$repeat_id','None','No',NULL,NULL,'No', 'Open', NULL,'No',NULL,NULL,'$emp_id','$_POST[client]',NULL,'$comment_real')";
//---------------------------------------Removed multiple selection option $str changed to $_POST[location]
$query= "insert into job_track_ec values
	(NULL,'$_POST[eqpmnt_type]', '$fault_descr', NOW(), '$_POST[location]', '$_POST[type]','$_POST[repeat]','not complete','$repeat_id','None','No',NULL,NULL,'No', 'Open', NULL,'No',NULL,NULL,'$emp_id','$_POST[client]',NULL,'$comment_real')";

$result= mysqli_query($connection,$query)
or die ("Query failed: " .mysqli_error());

if ($result)
	echo mysqli_affected_rows($connection).' fault logged into the database.';
	
	echo'<strong><br />The Job ID is:  '. "EC".mysqli_insert_id($connection);
	

	mail("jobtrack@weathersa.co.za,infope@weathersa.co.za,donald.muller@weathersa.co.za,sisa.fihlani@weathersa.co.za,
brent.appel@weathersa.co.za,sandile.mdose@weathersa.co.za,webster.ngoepe@weathersa.co.za,floyd.ngwato@weathersa.co.za,
riaan.lourens@weathersa.co.za,rydall.jardine@weathersa.co.za,buhle.shandu@weathersa.co.za,lunga.marula@weathersa.co.za,jessica.erasmus@weathersa.co.za","New Job logged", "A new job has been logged for the Eastern Cape region -- EC" .mysqli_insert_id($connection)."---The equipment type is $_POST[eqpmnt_type]--The job has been logged by- $emp_id----Station name--$_POST[location]");

mysqli_close ($connection);


?>
<td>

<p class="footer">
<a href="easterncape.html">Home</a> 
</p>
</td>


</body>
</html>


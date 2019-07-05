<html>
<head>

<title>Decline job page</title>
</head>

<body>
<b>You have now been removed from this job!<br /> Please notify the person who assigned the job to you, so that they can assign the job to someone else...</b>
<br />
<br />

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>





<?php


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");



$query= "UPDATE job_track_mp SET
	assigned_tech = 'None', action_plan= NULL, date_ack=NULL
	where job_id='$_POST[job_id]'";
	

$result= mysql_query($query)
or die ("Query failed: Try again or " .mysql_error());



mysql_close ($connection);
?>
<td>

<p class="footer">
<a href="mpumalanga.html">Home</a> 
</p>
</td>

</body>
</html>

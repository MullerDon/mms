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


$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");





$query= "UPDATE job_track_ec SET
	assigned_tech = 'None', action_plan= NULL, date_ack=NULL
	where job_id='$_POST[job_id]'";
	

$result= mysqli_query($connection,$query)
or die ("Query failed: Try again or " .mysqli_error());



mysqli_close ($connection);
?>
<td>

<p class="footer">
<a href="easterncape.html">Home</a> 
</p>
</td>

</body>
</html>

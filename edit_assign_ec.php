<html>
<head>

<title>Assign Tech page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>Job assigned</b>

<?php

if (!strlen(trim($_POST['job_id'])) or ($_POST['assigned_tech'] == ""))
{
	header ('Location: go_back_ec.php');
	exit;
}


$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");






$query= "UPDATE job_track_ec SET
	assigned_tech='$_POST[assigned_tech]',date_assigned= NOW()
	where job_id='$_POST[job_id]' AND fault_status != 'completed' AND assigned_tech = 'None'";//assigned_tech = None:check if tech already assigned
	

$result= mysqli_query($connection,$query)
or die ("Query failed:" .mysqli_error());
//email to assigned person, to notify that a job has been assigned to him/her---------------

mail("$_POST[assigned_tech]@weathersa.co.za","JOB ASSIGNED TO YOU", "JOB EC$_POST[job_id]--Has been assigned to you, please accept or decline the job");

//-------------------------------------------------------------------------------------------

//-----------------OR simpler code-------------------------------------------------------------------

//mail("$assigned_tech@weathersa.co.za","JOB ASSIGNED TO YOU", "JOB EC$job_id--Has been assigned to you, please accept or decline the job");

//---------------------------------------------------------------------------------------------------

mysqli_close ($connection);
?>

<td>
<p class="footer">
<a href="edit_ec.html">Back</a> 
</p>
</td>

</body>
</html>


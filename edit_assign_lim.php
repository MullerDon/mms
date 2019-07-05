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
	header ('Location: go_back_lim.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");




$query= "UPDATE job_track_lim SET
	assigned_tech='$_POST[assigned_tech]',date_assigned= NOW()
	where job_id='$_POST[job_id]' AND fault_status != 'completed' AND assigned_tech = 'None'";//assigned_tech = None:check if tech already assigned
	

$result= mysql_query($query)
or die ("Query failed:" .mysql_error());
//email to assigned person, to notify that a job has been assigned to him/her---------------

mail("$_POST[assigned_tech]@weathersa.co.za","JOB ASSIGNED TO YOU", "JOB LIM$_POST[job_id]--Has been assigned to you, please accept or decline the job");

//-------------------------------------------------------------------------------------------

//-----------------OR simpler code-------------------------------------------------------------------

//mail("$assigned_tech@weathersa.co.za","JOB ASSIGNED TO YOU", "JOB LIM$job_id--Has been assigned to you, please accept or decline the job");

//---------------------------------------------------------------------------------------------------



mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="edit_lim.html">Back</a> 
</p>
</td>

</body>
</html>


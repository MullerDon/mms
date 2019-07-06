<html>
<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<p>You have accepted the job<br /><b>OR</b><br />
Please note that if you have accepted a job that has <b>NOT</b> been assigned to you yet, the job will remain as not accepted.<br />
<b>Please make sure that the job has been assigned to you first!!</b></b></p>

<?php

if (!strlen(trim($_POST['job_id'])) or ($_POST['action_plan'] == ""))
{
	header ('Location: go_back_ec.php');
	exit;
}
if ($_POST['job_ack'] == "NO")
{
	header('Location: job_decline_ec.php');
	exit;
}
$action_plann = strip_tags($_POST['action_plan']);//this will remove any html tags

$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");



$action_plan = mysqli_real_escape_string($connection,$action_plann);//This allows special characters such as quotes


$query= "UPDATE job_track_ec SET
	job_ack='$_POST[job_ack]', action_plan='$action_plan', date_ack=NOW(), support_staff='$_POST[support_staff]'
	where job_id='$_POST[job_id]' AND job_ack !='yes' AND assigned_tech !='None' ";
	

$result= mysqli_query($connection,$query)
or die ("Query failed: Try again or " .mysqli_error());



mysqli_close ($connection);
?>

<td>
<p class="footer">
<a href="edit_ec.html">Back</a> 
</p>
</td>

</body>
</html>

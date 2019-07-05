<html>
<head>

<title>Open Faults Edit Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
.floatbox {width: 155px;height: 560px;float: right;background-color: #ffff66;/*yellow*/padding: 1em;border: solid black 1px;}
</style>


<b>Information on the requested job</b>
<br />

<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_fs.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_fs
WHERE job_id= '$_POST[job_id]' AND fault_status= 'not complete'";



$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );




echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date</th><th>Status</th><th>Location</th><th>Job assigned to</th><th>Job accepted?</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "FS".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['job_ack'], "</td>";

Echo "</tr>";

}

echo "</table>";
?>

<html>
<br />
<br />
<fieldset>
<legend><b>Please add changes to mark fault as complete</b></legend>
<p class="floatbox">
<i><b>Note1</b><br>Make sure somebody is assigned to the job if you want to mark it as complete.<br><b>Note2</b><br>Make sure the job has been accepted<br><b>Note3</b><br> If you choose <b>No</b> to the question. <b>Can this job be closed?</b> Then this means that a new job must be logged and set as a repeat job including the job ID of the job being repeated.</i>
</p>

<form action="edit_job_fs.php" method ="post">

<p>Please confirm the job ID that you want to mark as complete:</p>
<tr>
<td><b>FS</b></td><td><input type="text" name="job_id"></td>
</tr>
<br />
<br />




<p>Change job status:</p>
<select name="fault_status">
	<option selected value="not complete">Not Complete</option>
	<option value="completed">Completed</option>	
</select>
<br />
<p>Enter the fault completion date in <b>YYYY-MM-DD</b> format below:</p>
<tr>
<td><input type="text" name="date_completed"></td>
</tr>
<br />
<p>Please enter the repair description below:</p>
<textarea name="repair_descr" rows="10" cols="100">
</textarea>
<br />
<br />
<p>Can this job be closed?</p>
<select name="job_completed">
	<option selected value="no">No</option>
	<option value="yes">Yes</option>	
</select>
<br />
<br />

	<input type="submit" value="Update">
	<input type="reset" value="Clear all entries" />

</form>
</fieldset>
</html>




<?php

mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="edit_close_fs.html">Back</a> 
</p>
</td>

</body>
</html>


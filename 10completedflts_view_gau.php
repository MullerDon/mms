<html>
<head>

<title>All completed Jobs</title>
</head>

<body>
<style type="text/css">

.footer {text-align: left;}
.header {text-align: center;}
.h3 {text-align: center;}
.floatbox {width: 145px;height: 285px;float: right;background-color: #ffff66;/*yellow*/padding: 1em;border: solid black 1px;}
</style>

<p class="floatbox">
<i><b>Please Note!</b><br>If <b>"Job status"</b> shows <b>completed</b> and <b>"Can job be closed?"</b> shows <b>NO</b> then the job can be closed, but a new job must be logged with job repeat set to repeat and the ID of the job being repeated must be entered.</i>
</p>

<b>All jobs in the Gauteng database that have been completed but not closed</b><br>
<br />
<?php


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_gau
WHERE fault_status= 'completed' AND close_job='open'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date Logged</th><th>Work performed</th><th>Job Status</th><th>Date Job completed</th><th>Location</th><th>Job assigned to</th><th>Job is</th><th>Job logged by</th><th>Can job be closed?</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "GAU".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['repair_descr'], "</td><td>", $row['fault_status'], "</td><td>",$row['date_completed'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['close_job'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_completed'], "</td>";


Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="10_close_job_gau.php">Back</a> 
</p>
</td>

</body>
</html>

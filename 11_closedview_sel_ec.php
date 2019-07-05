<html>
<head>
<title>Closed jobs</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>All closed jobs between selected dates</b>
<br />
<br />

<?php
/*
if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_ec.php');
	exit;
}
*/
if ($_POST['start_date'] == "" || $_POST['end_date'] == "")
{
	header ('Location: back_ec.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_ec
WHERE fault_status= 'completed' AND close_job = 'closed' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );
/*
echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date</th><th>Status</th><th>DateCompleted</th><th>Repairs</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Can job be closed?</th><th>Job Status</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "EC".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['date_completed'], "</td><td>", $row['repair_descr'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_completed'], "</td><td>", $row['close_job'], "</td>";

Echo "</tr>";

}

echo "</table>";
*/
echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Date Logged</th><th>Date Completed</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "EC".$row['job_id'], "</td><td>", $row['date_logged'], "</td><td>", $row['date_completed'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td></td>";

Echo "</tr>";

}

echo "</table>";





mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_ec.php">Home</a> 
</p>
</td>

</body>
</html>


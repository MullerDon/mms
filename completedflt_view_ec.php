<html>
<head>

<title>Completed Faults View page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>All completed faults</b>
<br />
<br />

<?php




$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");




$query = "SELECT * FROM job_track_ec
WHERE fault_status = 'completed' AND close_job = 'open'";

$result = mysqli_query($connection,$query)
	or die ("Query failed: " . mysqli_error() );

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date</th><th>Fault Status</th><th>DateCompleted</th><th>Repairs</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Can job be closed?</th><th>Job Status</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>", "EC".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['date_completed'], "</td><td>", $row['repair_descr'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_completed'], "</td><td>", $row['close_job'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysqli_close ($connection);
?>

<td>
<p class="footer">
<a href="completed_faults_ec.php">Back</a> 
</p>
</td>

</body>
</html>


<html>
<head>

<title>assigned Jobs View page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Assigned jobs not acknowledged</b><br>
<br />
<?php




$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");




$query = "SELECT * FROM job_track_ec
WHERE assigned_tech != 'none' AND job_ack != 'yes'";

$result = mysqli_query($connection,$query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date</th><th>Status</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Job acknowledged?</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>","EC".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_ack'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysqli_close ($connection);
?>

<td>
<p class="footer">
<a href="view_ec.html">Back</a> 
</p>
</td>

</body>
</html>


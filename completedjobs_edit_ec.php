<html>
<head>
<title>Completed Faults Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>View specific completed fault</b>
<br />
<br />

<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_ec.php');
	exit;
}


$connection = mysqli_connect('localhost', 'root', 'mysqlroot','jobs')
	or die ("Couldn't connect to the DB");




$query = "SELECT * FROM job_track_ec
WHERE job_id= '$_POST[job_id]' AND fault_status= 'completed' AND close_job = 'open'";

$result = mysqli_query($connection,$query)
	or die ("Query failed: " . mysqli_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date</th><th>Status</th><th>DateCompleted</th><th>Repairs</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Can job be closed?</th><th>Job Status</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>","EC". $row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['date_completed'], "</td><td>", $row['repair_descr'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_completed'], "</td><td>", $row['close_job'], "</td>";

echo "</tr>";

}

echo "</table>";


mysqli_close ($connection);
?>

<td>
<p class="footer">
<a href="view_ec.html">Home</a> 
</p>
</td>

</body>
</html>


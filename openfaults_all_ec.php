<html>
<head>

<title>All Open Jobs</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>All open jobs in Eastern Cape database</b><br />
<br />

<?php

/*-------------------------------------------------------------*/


$connection = mysqli_connect("localhost", "root", "mysqlroot","jobs")
	or die ("Couldn't connect to the DB ");
/*--------------------------------------------------------------*/


$query = "SELECT * FROM job_track_ec
WHERE fault_status= 'not complete'ORDER BY job_id";


/*--------------------------------------------------------------*/
$result = mysqli_query($connection,$query)
	or die ("Query failed: " . mysqli_error() );

/*--------------------------------------------------------------*/



echo "<table border='1'cellpadding='5'cellspacing='0'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date Logged</th><th>Status</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Job accepted?</th><th>Client</th>";
echo "</tr>";
/*--------------------------------------------------------------*/
while ($row = mysqli_fetch_array($result))
/*--------------------------------------------------------------*/
{
echo "<tr>";

echo "<td>", "EC".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_ack'], "</td><td>", $row['client'], "</td>";

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


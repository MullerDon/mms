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

<b>All open jobs in the Mpumalanga database</b><br />
<br />
<?php




$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_mp
WHERE fault_status= 'not complete'ORDER BY job_id";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellpadding='5'cellspacing='0'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date Logged</th><th>Status</th><th>Location</th><th>Job assigned to</th><th>Job logged by</th><th>Job accepted?</th><th>Client</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "MP".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['fault_status'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_ack'], "</td><td>", $row['client'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="view_mp.html">Back</a> 
</p>
</td>

</body>
</html>


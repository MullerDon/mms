<html>
<head>

<title>Response Time Statistics</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Response Time Statistics</b><br />
<br />
<?php

if ($_POST['start_date'] == "" || $_POST['end_date'] == "")
{
	header ('Location: back_ec.php');
	exit;
}



$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT AVG(DATEDIFF(date_ack,date_assigned))FROM job_track_ec
WHERE fault_status = 'completed' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";


$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "</table>";
echo "<table border='0'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>Average Response Time for the Eastern Cape</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "Day(s)".$row['AVG(DATEDIFF(date_ack,date_assigned))'],"</td>";

Echo "</tr>";

}




$query = "SELECT DATEDIFF(date_ack,date_assigned),job_id, assigned_tech FROM job_track_ec
WHERE fault_status = 'completed' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";


$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>Response Time per Job</th><th>Job ID</th><th>Technician</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "Day(s)".$row['DATEDIFF(date_ack,date_assigned)'],"</td><td>", "EC".$row['job_id'], "</td><td>",$row['assigned_tech'],"</td>" ;

Echo "</tr>";

}




echo "</table>";




mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_ec.php">Back</a> 
</p>
</td>

</body>
</html>


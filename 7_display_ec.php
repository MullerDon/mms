
<html>
<head>

<title>Assignee Stats</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Assignee Stats</b><br />
<br />
<?php

$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");

/*-------------------Total costs-----------------------------*/
$query = "SELECT SUM(st_cost),SUM(accom_cost),SUM(fuel_cost),SUM(km_total)FROM job_cost_ec INNER JOIN job_track_ec USING (job_id)
WHERE assigtech_cost ='$_POST[assigtech_cost]' AND date_logged BETWEEN '$_POST[start_date]' and '$_POST[end_date]'";



$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='0'cellspacing='0'cellpadding='5'>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<tr><td>","Assignee: ". $_POST['assigtech_cost'], "</td></tr>


	<tr><td>","S&T Total: "."R".$row['SUM(st_cost)'], "</td></tr>
	<tr><td>","Accommodation Total: "."R".$row['SUM(accom_cost)'], "</td></tr>
	<tr><td>","Fuel Total: "."R".$row['SUM(fuel_cost)'], "</td></tr>
	<tr><td>","Total KM's: ".$row['SUM(km_total)']."km", "</td></tr>";

echo "</tr>";

}

echo "</table>";
/*-------------------Response time-----------------------------*/
$query = "SELECT AVG(DATEDIFF(date_ack,date_assigned))FROM job_track_ec INNER JOIN job_cost_ec USING (job_id)
WHERE assigtech_cost ='$_POST[assigtech_cost]' AND fault_status = 'completed' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";


$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "</table>";
echo "<table border='0'cellspacing='0' cellpadding='5'>";
/*echo "<tr>";
echo "<th>Average Response Time</th>";
echo "</tr>";
*/
while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<tr><td>","Average Response Time: ".$row['AVG(DATEDIFF(date_ack,date_assigned))']." Day(s)","</td></tr>";

Echo "</tr>";

}

/*-------------------------Turnaround time-------------------------*/
$query = "SELECT AVG(DATEDIFF(date_completed,date_ack))FROM job_track_ec INNER JOIN job_cost_ec USING (job_id)
WHERE assigtech_cost ='$_POST[assigtech_cost]' AND fault_status = 'completed' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";


$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "</table>";
echo "<table border='0'cellspacing='0' cellpadding='5'>";
/*echo "<tr>";
echo "<th>Average Turnaround Time</th>";
echo "</tr>";
*/
while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<tr><td>","Average Turnaround Time: ".$row['AVG(DATEDIFF(date_completed,date_ack))']." Day(s)","</td></tr>";

Echo "</tr>";

}


/*----------------------------------------------------*/

mysql_close ($connection);

?>

<td>
<p class="footer">
<a href="management_ec.php">Back</a> 
</p>
</td>

</body>
</html>


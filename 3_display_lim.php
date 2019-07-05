<html>
<head>

<title>Job Cost and KM's View</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Costs for the job</b><br />
<br />

<?php

if ($_POST['job_id'] == "")
{
	header ('Location: back_lim.php');
	exit;
}



$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_cost_lim
WHERE job_id = '$_POST[job_id]'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Job assigned to</th><th>S&T</th><th>Accommodation</th><th>Fuel</th><th>KM's</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "LIM".$row['job_id'], "</td><td>", $row['assigtech_cost'], "</td><td>", "R".$row['st_cost'], "</td><td>", "R".$row['accom_cost'], "</td><td>", "R".$row['fuel_cost'], "</td><td>",$row['km_total']."km", "</td>";

echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_lim.php">Back</a> 
</p>
</td>

</body>
</html>


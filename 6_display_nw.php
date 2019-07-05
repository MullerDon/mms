<html>
<head>

<title>Total Fuel Cost and KM's View</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>
<br />
<b>Total fuel cost and KM's travelled</b><br />
<br />
<?php




$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT SUM(fuel_cost),SUM(km_total) FROM job_cost_nw INNER JOIN job_track_nw USING (job_id)
WHERE date_logged BETWEEN '$_POST[start_date]' and '$_POST[end_date]'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>Fuel Total</th><th>KM's</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "R".$row['SUM(fuel_cost)'], "</td><td>", $row['SUM(km_total)']."km","</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_nw.php">Back</a> 
</p>
</td>

</body>
</html>


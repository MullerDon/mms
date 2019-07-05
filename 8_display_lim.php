<html>
<head>

<title>Total Equipment Type Costs and KM's</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Total Equipment Type Costs and KM's</b><br />
<br />
<?php

$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT SUM(st_cost),SUM(accom_cost),SUM(fuel_cost),SUM(km_total)FROM job_cost_lim INNER JOIN job_track_lim USING (job_id)
WHERE eqpmnt_type ='$_POST[eqpmnt_type]' AND date_logged BETWEEN '$_POST[start_date]' AND '$_POST[end_date]'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>Equipment Type</th><th>S&T Total</th><th>Accommodation Total</th><th>Fuel Total</th><th>KM's</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", $_POST['eqpmnt_type'], "</td><td>","R".$row['SUM(st_cost)'], "</td><td>","R".$row['SUM(accom_cost)'], "</td><td>","R".$row['SUM(fuel_cost)'], "</td><td>",$row['SUM(km_total)']."km", "</td>";

Echo "</tr>";

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


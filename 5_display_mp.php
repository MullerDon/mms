<html>
<head>

<title>Total Accommodation Cost View</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>Total accommodation costs</b><br />
<br />
<?php




$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT SUM(accom_cost) FROM job_cost_mp INNER JOIN job_track_mp USING (job_id)
WHERE date_logged BETWEEN '$_POST[start_date]' and '$_POST[end_date]'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>Accommodation Total</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "R".$row['SUM(accom_cost)'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="management_mp.php">Back</a> 
</p>
</td>

</body>
</html>


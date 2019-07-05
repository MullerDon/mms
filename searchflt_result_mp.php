<html>
<head>
<title>Search Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>Search faults and repairs</b>
<br />
<br />

<?php
$searchterm = strip_tags($_POST['searchterm']);//this will remove any html tags


if (!$searchterm)
{
	echo 'You have not entered a search term or you have entered illegal characters. Please go back and try again.';
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");

$searchterm = mysql_real_escape_string($searchterm);//This allows special characters such as quotes

$query = "SELECT job_id, eqpmnt_type, fault_descr, repair_descr FROM job_track_mp
WHERE MATCH(repair_descr) AGAINST ('$searchterm')";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Equipment Type</th><th>Fault Description</th><th>Repair Description</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "MP".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['repair_descr'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="view_mp.html">Home</a> 
</p>
</td>

</body>
</html>


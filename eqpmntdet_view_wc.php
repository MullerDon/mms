<html>
<head>
<title>Equipment Faults Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>View equipment fault and repair</b>
<br />
<br />

<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_wc.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT eqpmnt_type, fault_descr, repair_descr FROM job_track_wc
WHERE job_id= '$_POST[job_id]' AND fault_status= 'completed'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0'cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Equipment Type</th><th>Fault Description</th><th>Repair Description</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "WC".$_POST['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['repair_descr'], "</td>";

Echo "</tr>";

}

echo "</table>";


mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="view_wc.html">Home</a> 
</p>
</td>

</body>
</html>


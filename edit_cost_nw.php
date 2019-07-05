<html>
<head>

<title>Job Cost to Database</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<h1>Job costs have been updated to the database</h1>

<?php
if ($_POST['job_id'] == "" || $_POST['assigtech_cost'] == "")
{
	header ('Location: go_back_nw.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");





$query= "insert into job_cost_nw values
	(NULL,'$_POST[job_id]','$_POST[assigtech_cost]','$_POST[st_cost]','$_POST[accom_cost]', '$_POST[fuel_cost]', '$_POST[km_total]','$_POST[man_hrs]','$_POST[travel_hrs]','$_POST[cost_centre]','$_POST[gl_acc]','$_POST[part_descr]','$_POST[part_cost]')";	

$result= mysql_query($query)
or die ("Query failed: " .mysql_error());



mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="northwest.html">Home</a> 
</p>
</td>

</body>
</html>

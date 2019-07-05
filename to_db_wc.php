<html>
<head>

<title>New Job page</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>




<?php

if ($_POST['eqpmnt_type'] == "" || $_POST['location'] == "" || $_POST['emp_id'] == ""|| (!strlen(trim($_POST['fault_descr']))))
{
	header ('Location: go_back_wc.php');
	exit;
}
$fault_descrip = strip_tags($_POST['fault_descr']);//this will remove any html tags
//$job_id = strip_tags($_POST['job_id']);//this will remove any html tags
$emp_id=strip_tags($_POST['emp_id']);//this will remove any html tags
$repeat_id=strip_tags($_POST['job_repeat_id']);//this will remove any html tags
$comment_strip=strip_tags($_POST['comment']);//this will remove any html tags

$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$fault_descr = mysql_real_escape_string($fault_descrip);//This allows special characters such as quotes
$comment_real = mysql_real_escape_string($comment_strip);//This allows special characters such as quotes

$str = implode(',', $_POST['location']);//implode the 'location' array to normal string so all values fit in one line

$query= "insert into job_track_wc values
	(NULL,'$_POST[eqpmnt_type]', '$fault_descr', NOW(), '$str', '$_POST[type]','$_POST[repeat]','not complete','$repeat_id','None','No',NULL,NULL,'No', 'Open', NULL,'No',NULL,NULL,'$emp_id','$_POST[client]',NULL,'$comment_real')";


$result= mysql_query($query)
or die ("Query failed: " .mysql_error());

if ($result)
	echo mysql_affected_rows().' fault logged into the database.';
	
	echo'<strong><br />The Job ID is:  '. "WC".mysql_insert_id();
	

	mail("jobtrack@weathersa.co.za,donald.muller@weathersa.co.za,johan.stander@weathersa.co.za,peter.roux@weathersa.co.za,nicolene.swart@weathersa.co.za,
natheer.tofa@weathersa.co.za,jan.crous@weathersa.co.za,danie.ferreira@weathersa.co.za,
patrick.jacobs@weathersa.co.za,buhle.shandu@weathersa.co.za,sandile.mdose@weathersa.co.za,rydall.jardine@weathersa.co.za,
riaan.lourens@weathersa.co.za,webster.ngoepe@weathersa.co.za,floyd.ngwato@weathersa.co.za,nomvuzo.busizi@weathersa.co.za",
"New Job logged", "A new job has been logged for the Western Cape region -- WC" .mysql_insert_id()."---The equipment type is $_POST[eqpmnt_type]--The job has been logged by- $emp_id----Station name(s)--$str");

mysql_close ($connection);


?>
<td>

<p class="footer">
<a href="westerncape.html">Home</a> 
</p>
</td>


</body>
</html>


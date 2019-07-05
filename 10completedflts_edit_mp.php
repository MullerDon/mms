<html>
<head>

<title>Completed Faults Edit Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
.floatbox {width: 145px;height: 290px;float: right;background-color: #ffff66;/*yellow*/padding: 1em;border: solid black 1px;}
</style>


<b>Information on the requested job</b>
<br />




<!--
<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: back_gau.php');
	exit;
}



$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$query = "SELECT * FROM job_track_gau
WHERE job_id= '$_POST[job_id]' AND fault_status= 'completed' AND close_job='open'";

$result = mysql_query($query)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1'cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>JobID</th><th>Type</th><th>Fault</th><th>Date Logged</th><th>Work performed</th><th>Job Status</th><th>Date Job completed</th><th>Location</th><th>Job assigned to</th><th>Job is</th><th>Job logged by</th><th>Can job be closed?</th>";
echo "</tr>";

while ($row = mysql_fetch_array($result))
{
echo "<tr>";

echo "<td>", "GAU".$row['job_id'], "</td><td>", $row['eqpmnt_type'], "</td><td>", $row['fault_descr'], "</td><td>", $row['date_logged'], "</td><td>", $row['repair_descr'], "</td><td>", $row['fault_status'], "</td><td>",$row['date_completed'], "</td><td>", $row['location'], "</td><td>", $row['assigned_tech'], "</td><td>", $row['close_job'], "</td><td>", $row['emp_id'], "</td><td>", $row['job_completed'], "</td>";

Echo "</tr>";

}

echo "</table>";
?>
-->
<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_mp.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$data = "SELECT * FROM job_track_mp 
WHERE job_id= '$_POST[job_id]'";

$query = mysql_query($data)
	or die ("Query failed: " . mysql_error() );



$data2 = mysql_fetch_array($query);

?>
<fieldset><legend>Job Report</legend>
<form>
<table border="0" width="100%">
<tr>
<td width="25%">
Job ID:<br><input type ="text" value="<?php echo 'MP'.$data2['job_id']?>"/> 
</td>
<td width="35%">
Date logged:<br><input type ="text" value="<?php echo $data2['date_logged']?>"/>
</td>
<td width="35%">
Logged by:<br><input type ="text" value="<?php echo $data2['emp_id']?>"/> </br></br>
</td>
</tr>
</table>

<table border="0" width="100%">
<tr>
<td width="25%">
Equipment type:<br><input type ="text" size ="24" value="<?php echo $data2['eqpmnt_type']?>"/>
</td>

<td width="35%"> 
Location:<br><textarea name="location" rows="3" cols="30"><?php echo $data2['location']?></textarea><br />
</td>
<td width="35%"> 
Job type:<br><input type ="text" value="<?php echo $data2['job_type']?>"/> </br></br>
</td>
</tr>
</table>

<table border="0" width="100%">
<tr>
<td width="25%">
Job assigned to:<br><input type ="text" value="<?php echo $data2['assigned_tech']?>"/>
</td>
<td width="35%">  
Date job assigned:<br><input type ="text" value="<?php echo $data2['date_assigned']?>"/> </br></br>
</td>
<td width="35%">  
Support staff used?<br><input type ="text" value="<?php echo $data2['support_staff']?>"/> </br></br>
</td>
</tr>
</table>

<table border="0" width="100%">
<tr>
<td width="25%">
Date job accepted:<br><input type ="text" value="<?php echo $data2['date_ack']?>"/>
</td>
<td width="35%">  
Client type:<br><input type ="text" value="<?php echo $data2['client']?>"/> </br></br>
</td>
<td width="35%">  
Comment:<br><textarea name="comment" rows="3" cols="49"><?php echo $data2['comment']?></textarea><br />
</td>
</tr>
</table>

<table border="0" width="100%">
<tr>
<td width="70%">
<!--Fault/Work description:<br><input type ="text" size="130" value="<?php echo $data2['fault_descr']?>"/> </br></br>-->
Fault/Work description:<br><textarea name="fault_descr" rows="3" cols="145"><?php echo $data2['fault_descr']?></textarea> </br></br>
</td>
</tr>
</table>
<table border="0" width="100%">
<tr>
<td width="50%">
<!--Action plan:<br><input type="text" size="130" value="<?php echo $data2['action_plan']?>"/> </br></br>-->
Action Plan:<br><textarea name="action_plan" rows="3" cols="145"><?php echo $data2['action_plan']?></textarea> </br></br>
</td>
</tr>
</table>
<table border="0" width="100%">
<tr>
<td width="25%">
Date fault completed:<br><input type ="text" value="<?php echo $data2['date_completed']?>"/>
</td>
<td width="35%">  
Repeat job?<br><input type ="text" value="<?php echo $data2['job_repeat']?>"/>
</td>
<td width="35%">  
Original job ID:<br><input type ="text" value="<?php echo 'MP'.$data2['job_repeat_id']?>"/> </br></br>
</td>
</table>
<table border="0" width="100%">
<tr>
<td width="70%">
<!--Repairs/Work done:<br><input type ="text"  size="130"" value="<?php echo $data2['repair_descr']?>"/> </br></br>-->
Repairs/Work done:<br><textarea name="repair_descr" rows="3" cols="145"><?php echo $data2['repair_descr']?></textarea> </br></br>
</td>
</tr>
</table>
<table border="0" width="100%">
<tr>
<td width="25%">			
Job status:<br><input type ="text" value="<?php echo $data2['close_job']?>"/>
</td>
<td width="70%">
Date job closed:<br><input type ="text" value="<?php echo $data2['date_closed']?>"/> </br>
</td>
</tr>
</table>


</form>
</fieldset>
<fieldset><legend>Job costs</legend>
<?php
$data = "SELECT * FROM job_cost_mp
WHERE job_id= '$_POST[job_id]'";

$query = mysql_query($data)
	or die ("Query failed: " . mysql_error() );

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>";
echo "<th>Assignee</th><th>Cost Centre</th><th>GL Acc</th><th>S&T</th><th>Accommodation</th><th>Fuel</th><th>KM's</th><th>Work hrs</th><th>Travel hrs</th><th>Part Description</th><th>Part cost</th>";
echo "</tr>";

//echo "<table border='1' cellspacing='0' cellpadding='5'>";

while ($data3 = mysql_fetch_array($query)){

echo "<tr>";

echo "<td>",$data3['assigtech_cost'],"</td><td>","CC".$data3['cost_centre'],"</td><td>","GL".$data3['gl_acc'],"</td><td>","R".$data3['st_cost'],"</td><td>","R".$data3['accom_cost'],"</td><td>","R".$data3['fuel_cost'],"</td><td>",$data3['km_total']."km","</td><td>",$data3['man_hrs'],"</td><td>",$data3['travel_hrs'],"</td><td>",$data3['part_descr'],"</td><td>",$data3['part_cost'], "</td>";
echo "</tr>";
}
echo "</table>";
?>
</fieldset>
<?php
mysql_close ($connection);
?>


<html>
<br />
<br />
<fieldset>
<legend><b>Please add changes to close the job</b></legend>
<p class="floatbox">
<b>Please Note!</b><br>If <b>Job status</b> shows <b>completed</b> but <b>Can job be closed?</b> shows <b>NO</b> then the job can be closed, but a new job must be logged with job repeat set to repeat and the ID of the job being repeated must be entered.</i>
</p>

<form action="10edit_closejob_mp.php" method ="post">

<p>Please confirm the job ID that you want to close:</p>
<tr>
<td><b>MP</b></td><td><input type="text" name="job_id"></td>
</tr>
<br />
<br />




<p>Close job:</p>
<select name="close_job">
	<option selected value="open">Open</option>
	<option value="closed">Closed</option>	
</select>
<br />
<!--<p>Enter the closing date in <b>YYYY-MM-DD</b> format below:</p>
<tr>
<td><input type="text" name="date_closed"></td>
</tr>
<br />
-->
<br />


	<input type="submit" value="Update">
	<input type="reset" value="Clear all entries" />

</form>
</fieldset>
</html>




<?php

mysql_close ($connection);
?>

<td>
<p class="footer">
<a href="10_close_job_mp.php">Back</a> 
</p>
</td>

</body>
</html>


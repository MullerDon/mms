<html>
<head>
<title>Report Page</title>
</head>

<body>

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<b>FORM: Maintenance Job Card</b>
<br />
<br />

<?php

if (!strlen(trim($_POST['job_id'])))
{
	header ('Location: go_back_lim.php');
	exit;
}


$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
	or die ("Couldn't connect to the DB server");

$db= mysql_select_db("jobs",$connection)
	or die ("can't select database");


$data = "SELECT * FROM job_track_lim 
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
Job ID:<br><input type ="text" value="<?php echo 'LIM'.$data2['job_id']?>"/> 
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
Fault/Work description:<br><textarea name="fault_descr" rows="5" cols="145"><?php echo $data2['fault_descr']?></textarea> </br></br>
</td>
</tr>
</table>
<table border="0" width="100%">
<tr>
<td width="50%">
<!--Action plan:<br><input type="text" size="130" value="<?php echo $data2['action_plan']?>"/> </br></br>-->
Action Plan:<br><textarea name="action_plan" rows="5" cols="145"><?php echo $data2['action_plan']?></textarea> </br></br>
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
Original job ID:<br><input type ="text" value="<?php echo 'LIM'.$data2['job_repeat_id']?>"/> </br></br>
</td>
</table>
<table border="0" width="100%">
<tr>
<td width="70%">
<!--Repairs/Work done:<br><input type ="text"  size="130"" value="<?php echo $data2['repair_descr']?>"/> </br></br>-->
Repairs/Work done:<br><textarea name="repair_descr" rows="6" cols="145"><?php echo $data2['repair_descr']?></textarea> </br></br>
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
$data = "SELECT * FROM job_cost_lim
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

<td>
<p class="footer">
<a href="job_report_lim.php">Back</a> 
</p>
<p>Job Management System: Job card - Ver:001</p>
</td>

</body>
</html>


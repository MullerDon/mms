<html>
<head>

<title>Job Total Cost</title>
</head>

<body>
<style type="text/css">

.footer {text-align: left;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>


<?php






//$connection = mysql_pconnect('localhost', 'root', 'mysqlroot')
//	or die ("Couldn't connect to the DB server");

//$db= mysql_select_db("jobs",$connection)
//	or die ("can't select database");



?>

<html>
<b>Total cost and KM's for a specific job</b>
<br />
<form action="3_display_kzn.php" method ="post">

<p>Please enter the job ID:</p>

<tr>
<td><b>KZN</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />






	<input type="submit" value="Total Cost">
	<input type="reset" value="Clear all entries" />

</form>

</html>




<?php

//mysql_close ($connection);
?>
<td>

<p class="footer">
<a href="management_kzn.php">Back</a> 
</p>
</td>

</body>
</html>


<html>
<head>

<title>Total Fuel Cost and KM's </title>
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
<b>Total fuel costs and KM's </b><br />
<br />
<form action="6_display_gau.php" method ="post">

<p>Please enter the start date in YYYY-MM-DD format:</p>
<tr>
<td><input type="text" name="start_date"></td>
</tr>
<br />
<br />
<p>Please enter the end date in YYYY-MM-DD format:</p>
<tr>
<td><input type="text" name="end_date"></td>
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
<a href="management_gau.php">Back</a> 
</p>
</td>

</body>
</html>


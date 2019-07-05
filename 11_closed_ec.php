<html>
<head>

<title>View Closed Jobs Page</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>
<!------------------------------------------------------
<b>View all closed jobs</b><br>
<br />

<form action="closed_view_ec.php" method ="post">

<p>Click the button to view all closed jobs:</p>
<input type="submit" value="View All Closed Jobs" />

</form>
-------------------------------------->
<br />
<br />
<!-------------------------------------------
<form action="closedview_sel_ec.php" method ="post">

<p>If you know the job ID, enter it below:</p>
<tr>
<td><b>EC</b></td><td><input type="text" name="job_id"></td>
</tr>
<br />
<br />

	<input type="submit" value="Select Job">
	<input type="reset" value="Clear All Text" />

</form>
------------------------------------------------>
<b>View Closed Jobs</b>

<form action="11_closedview_sel_ec.php" method ="post">

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



	<input type="submit" value="Get info">
	<input type="reset" value="Clear all entries" />

</form>

</html>




<td>
<p class="footer">
<a href="management_ec.php">Back</a> 
</p>
</td>


</body>
</html>



<html>
<head>

<title>View Completed Faults Page</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<b>View all completed faults...</b><br>
<br />

<form action="completedflt_view_wc.php" method ="post">

<p>Click the button to view all completed faults:</p>
<input type="submit" value="View All Completed Faults" />

</form>

<br />
<br />

<form action="completedjobs_edit_wc.php" method ="post">

<p>If you know the job ID, enter it below:</p>
<tr>
<td><b>WC</b></td><td><input type="text" name="job_id"></td>
</tr>
<br />
<br />

	<input type="submit" value="Select Job">
	<input type="reset" value="Clear All Text" />

</form>

<td>
<p class="footer">
<a href="view_wc.html">Back</a> 
</p>
</td>


</body>
</html>



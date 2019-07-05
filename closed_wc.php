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

<b>View all closed jobs</b><br>
<br />

<form action="closed_view_wc.php" method ="post">

<p>Click the button to view all closed jobs:</p>
<input type="submit" value="View All Closed Jobs" />

</form>

<br />
<br />

<form action="closedview_sel_wc.php" method ="post">

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



<html>
<head>

<title>View Edit Complete Open Jobs page</title>
</head>

<body>
<b>View - Edit - Complete open jobs</b>
<br />
<br />
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<form action="openfaults_view_wc.php" method ="post">

<p>If you don't know the job ID, click the button to view all open jobs:</p>

	<input type="submit" value="View All Uncompleted Jobs"/>
	
</form>

<br />

<form action="openfaults_edit_wc.php" method ="post">

<p>If you know the job ID, enter it below:</p>
<tr>
<td><b>WC</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />

	<input type="submit" value="Select Job">
	<input type="reset" value="Clear All Text" />

</form>

<td>
<p class="footer">
<a href="edit_close_wc.html">Back</a> 
</p>
</td>

</body>
</html>



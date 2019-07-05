<html>
<head>

<title>Close completed job page</title>
</head>

<body>
<b>Close completed job</b>
<br />
<br />
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
.floatbox {width: 125px;height: 260px;float: right;background-color: #ffff66;/*yellow*/padding: 1em;border: solid black 1px;}
</style>



<form action="10completedflts_view_nw.php" method ="post">

<p>If you don't know the job ID, click the button to view all completed jobs:</p>

	<input type="submit" value="View All completed Jobs"/>
	
</form>

<br />

<form action="10completedflts_edit_nw.php" method ="post">

<p>If you know the job ID, enter it below:</p>
<tr>
<td><b>NW</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />

	<input type="submit" value="Select Job">
	<input type="reset" value="Clear All Text" />

</form>

<td>
<p class="footer">
<a href="management_nw.php">Back</a> 
</p>
</td>

</body>
</html>



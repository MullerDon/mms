<html>
<head>

<title>Accept job page</title>
</head>

<body>

<br />
<br />
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
.floatbox {width: 155px;height: 460px;float: right;background-color: #ffff66;/*yellow*/padding: 1em;border: solid black 1px;}
</style>

<p class="floatbox">
<i><b>Are you sure the job has been assigned to you?</b><br />Please acknowledge that you have accepted/declined and are aware of the job that was assigned to you.<br> Your action plan must include when and how you will attend to the job, and list possible causes and the resources that you will require.<br /><b>NOTE:</b>If you are declining the job please state why. Even if you are declining the job, please populate all fields</i>
</p>


<form action="accept_db_gau.php" method ="post">
<fieldset>
<legend><b>Acknowledge and accept/decline the job that has been assigned to you</b></legend>
<p>Enter the job ID below:</p>
<tr>
<td><b>GAU</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />

<table border="0" width="100%">
<tr>
<td width="75%"><p>Do you accept this Job?<br/>
<input type="radio" name="job_ack" value="NO" checked="checked" /> NO
<input type="radio" name="job_ack" value="YES" /> YES
</p></td>
</tr>
</table>
<!--
<p>Enter the acceptance date in <b>YYYY-MM-DD</b> format below:</p>
<tr>
<td><input type="text" name="date_ack"></td>
</tr>
-->
<br />
<p>Please enter your action plan below:</p>
<textarea name="action_plan" rows="10" cols="100">
</textarea>
<br />
<br />
<table border="0" width="100%">
<tr>
<td width="75%"><p>Will other staff be working on this job with you?<br/>
<input type="radio" name="support_staff" value="NO" checked="checked" /> NO
<input type="radio" name="support_staff" value="YES" /> YES
</p></td>
</tr>
</table>
</fieldset>
<br />
<br />

	<input type="submit" value="submit">
	<input type="reset" value="Clear All Text" />

</form>

<td>
<p class="footer">
<a href="edit_gau.html">Back</a> 
</p>
</td>

</body>
</html>



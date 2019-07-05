<html>
<head>

<title>Total Equipment Type Cost and KM's</title>
</head>

<body>
<style type="text/css">

.footer {text-align: left;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>




<b>Total equipment type costs and KM's</b><br />
<br />
<form action="8_display_nw.php" method ="post">

<p>Select the equipment type:</p>
	<select name="eqpmnt_type">
	<option value="ARS">ARS</option>
	<option value="AWOS">AWOS</option>
	<option value="AWS">AWS</option>
	<option value="BUOYS">BUOYS</option>
	<option value="CCTV">CCTV</option>
	<option value="CCTV/AWS Hybrid">CCTV/AWS Hybrid</option>
	<option value="COMPUTER">COMPUTER</option>
	<option value="DRIFTERS">DRIFTERS</option>
	<option value="HYDROGEN GENERATOR">HYDROGEN GENERATOR</option>
	<option value="LDN">LDN</option>
	<option value="LUT">LUT</option>
	<option value="Manual Raingauge">Manual Raingauge</option>
	<option value="MARINE AWS">MARINE AWS</option>
	<option value="NETWORK">NETWORK</option>
	<option value="PRINTER">PRINTER</option>
	<option value="RADAR">RADAR</option>
	<option value="Telephone System">Telephone System</option>
	<option value="UPS">UPS</option>
	<option value="UV">UV</option>
	<option value="VIDEO CONFERENCE">VIDEO CONFERENCE</option>
	<option value="WAVE RIDERS">WAVE RIDERS</option>
	<option value="OTHER">OTHER</option>
	<option selected> </option>
</select>
<br />
<br />

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







<td>

<p class="footer">
<a href="management_nw.php">Back</a> 
</p>
</td>

</body>
</html>


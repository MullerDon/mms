
<html>
<head>

<title>Fault logging page</title>
</head>

<body>
<b>Coming soon, under development <!--(Please log the new fault...)--></b><br>
<br />

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>
<!--
<form action="to_db_ec.php" method ="post">
<fieldset>



<fieldset>
<table border="0" width="100%">
<tr>
<td width="75%"><p>Select the job type:<br/>
<input type="radio" name="type" value="RM" checked="checked" /> Reactive/Adhoc(RM)
<input type="radio" name="type" value="PM" /> Preventative Maintenance(PM)<br />
</p></td>
<td width="25%"><p>Please enter your name (Person logging job).</p></td><br/>
<td><input type="text" name="emp_id"></td>
</tr>
</table>
</fieldset>
<fieldset>
<table border="0" width="100%">
<tr>
<td width="75%"><p>Select client type:</p>
		<select name="client">
		<optgroup label="Internal">
			<option value="CEO Office">CEO Office</option>
			<option value="FINANCE/SCM">FINANCE/SCM</option>
			<option value="HCM">HCM</option>
			<option value="ICT">ICT</option>
			<option value="OPS Aviation">OPS Aviation</option>
			<option value="OPS Climate">OPS Climate</option>
			<option value="OPS Marine">OPS Marine</option>
			<option value="OPS Other">OPS Other</option>
			<option value="OPS Regional Office">OPS Regional office</option>
			<option value="OPS Research">OPS Research</option>
			<option value="OPS Technical" selected>OPS Technical</option>
			<option value="SAAQIS">SAAQIS</option>
		</optgroup>
		<optgroup label="External">
			<option value="ACSA">ACSA</option>
			<option value="ATNS">ATNS</option>
			<option value="Commercial">Commercial</option>
			<option value="Public Good">Public Good</option>
			<option value="Other (External)">Other (External)</option>
		</optgroup>
	</select>
</td>
<td width="25%"><p>If OTHER is chosen please specify.</p></td><br/>
<td><input type="text" name="comment"></td>
</tr>
</table>
</fieldset>
<fieldset>
<table border="0" width="100%">
<tr>
<td width="40%"><p>Is this a repeat job?<br/>
<input type="radio" name="repeat" value="New" checked="checked" /> NO
<input type="radio" name="repeat" value="Repeat" /> YES
</p></td>
<td width="60%"><p>If this is a repeat job, please enter the job ID of the job being repeated.</p></td><br/>
<td><b>EC</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
</tr>
</table>
</fieldset>


<p>Select equipment type:</p>
	<select name="eqpmnt_type">
	<option value="AAWS">AAWS</option>
	<option value="Airconditioner">Airconditioner</option>
	<option value="Antenna">Antenna</option>
	<option value="ARS">ARS</option>
	<option value="AWOS">AWOS</option>
	<option value="AVR">AVR</option>
	<option value="AWS">AWS</option>
	<option value="BUOYS">BUOYS</option>
	<option value="CCTV">CCTV</option>
	<option value="CCTV/AWS Hybrid">CCTV/AWS Hybrid</option>
	<option value="Climate St">Climate St</option>
	<option value="COMPUTER">COMPUTER</option>
	<option value="DRIFTERS">DRIFTERS</option>
	<option value="Backup Generator">Backup Generator</option>
	<option value="HYDROGEN GENERATOR">HYDROGEN GENERATOR</option>
	<option value="LDN">LDN</option>
	<option value="LUT">LUT</option>
	<option value="Manual Rainfall St">Manual Rainfall St</option>
	<option value="MARINE AWS">MARINE AWS</option>
	<option value="NETWORK">NETWORK</option>
	<option value="PRINTER">PRINTER</option>
	<option value="RADAR C-Band">RADAR C-Band</option>
	<option value="RADAR S-Band">RADAR S-Band</option>
	<option value="RADAR X-Band">RADAR X-Band</option>
	<option value="Radio Link">Radio Link</option>
	<option value="Sun Tracker">Sun Tracker</option>
	<option value="Telephone System">Telephone System</option>
	<option value="UPS">UPS</option>
	<option value="UV">UV</option>
	<option value="VIDEO CONFERENCE">VIDEO CONFERENCE</option>
	<option value="VSAT">VSAT</option>
	<option value="WAVE RIDERS">WAVE RIDERS</option>
	<option value="Wi-Fi">Wi-Fi</option>
	<option value="Other">Other</option>
	<option selected> </option>
</select>
<br />

<p>Select location:</p>
	<select name="location">
		<optgroup label="East London Office">
			<option selected> </option>
			<option value="Aberdeen">Aberdeen</option>
			<option value="Aliwal North">Aliwal North</option>
			<option value="Bisho">Bisho</option>
			<option value="Bridle Drift">Bridle Drift</option>
			<option value="Buffelsfontein">Buffelsfontein</option>
			<option value="Dohne">Dohne</option>
			<option value="Double Drift">Double Drift</option>
			<option value="East London">East London</option>
			<option value="Elliot">Elliot</option>
			<option value="Granta">Granta</option>
			<option value="Jamestown">Jamestown</option>
			<option value="Nahoon">Nahoon</option>
			<option value="Queenstown">Queenstown</option>
			<option value="Other (EL Office)">Other (EL Office)</option>
		</optgroup>
		<optgroup label="Mthatha Office">
			<option value="All Saints">AllSaints</option>
			<option value="Mthatha Airport">Mthatha Airport</option>
			<option value="Mthatha JOC">Mthatha JOC</option>
			<option value="Mthatha Radar Site">Mthatha Radar Site</option>
			<option value="Mthatha Water Tower">Mthatha Water Tower</option>	
			<option value="Port St Johns">Port St Johns</option>
			<option value="Other (UT Office)">Other (UT Office)</option>
		</optgroup>
		<optgroup label="Port Elizabeth Office">	
			<option value="Addo Elephant Park">Addo Elephant Park</option>
			<option value="Barkley East">Barkley East</option>
			<option value="Bird Island">Bird Island</option>
			<option value="Blue Horizons Bay">Blue Horizons Bay</option>
			<option value="Cape St Francis">Cape St Francis</option>
			<option value="Cradock-Mun">Cradock-Mun</option>
			<option value="Darlington Dam">Darlington Dam</option>
			<option value="Elands River">Elands River</option>
			<option value="Flower Reserve">Flower Reserve</option>
			<option value="Fort Beaufort">Fort Beaufort</option>
			<option value="Graaf-Reinet">Graaf-Reinet</option>
			<option value="Grahamstown">Grahamstown</option>
			<option value="Kliplaat">Kliplaat</option>
			<option value="Kriegers Kraal">Kriegers Kraal</option>
			<option value="Ngqura">Ngquara(Coega)</option>
			<option value="Patensie">Patensie</option>
			<option value="Port Alfred">Port Alfred</option>
			<option value="PE Airport">PE Airport</option>
			<option value="PE AWS">PE AWS</option>
			<option value="PE Chatty AWS">PE Chatty AWS</option>
			<option value="PE Chatty Fire Stn ARS">PE Chatty Fire Stn ARS</option>
			<option value="PE Coega River L">PE Coega River L</option>
			<option value="PE Coega River U">PE Coega River U</option>
			<option value="PE Fettes Rd">PE Fettes Rd</option>
			<option value="PE Lovemore Res">PE Lovemore Res</option>
			<option value="PE Motherwell">PE Motherwell</option>
			<option value="PE Riverstone Br">PE Riverstone Br</option>
			<option value="PE Shark Rock Pier">PE Shark Rock Pier</option>
			<option value="PE Third Avenue Dip">PE Third Avenue Dip</option>
			<option value="Somerset East">Somerset East</option>
			<option value="Spring Valley">Spring Valley</option>
			<option value="St Albans Prison">St Albans Prison</option>
			<option value="Uitenhage">Uitenhage</option>
			<option value="Wriggleswade">Wriggleswade</option>
			<option value="Other (PE Office)">Other (PE OFFICE)</option>
		</optgroup>
		</optgroup>
		<optgroup label="External regions">
			<option value="Free State">Free State</option>
			<option value="Gauteng">Gauteng</option>
			<option value="Gough Island">Gough Island</option>
			<option value="KZN">KZN</option>
			<option value="Limpopo">Limpopo</option>
			<option value="Marion Island">Marion Island</option>
			<option value="Mpumalanga">Mpumalanga</option>	
			<option value="Northern Cape">Northern Cape</option>
			<option value="North West">North West</option>
			<option value="Western Cape">Western Cape</option>
			<option value="Other (External region)">Other (External region)</option>
		</optgroup>
	</select>
<br />

<p>Enter the fault description below:</p>
<textarea name="fault_descr" rows="10" cols="100">
</textarea>
<br />
	<input type="submit" value="Submit">
	<input type="reset" value="Clear the form" />
</fieldset>
</form>


<td>

<p class="footer">
<a href="technicalservices.html">Home</a> 
</p>
</td>
-->
</body>
</html>



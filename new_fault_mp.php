
<html>
<head>

<title>Fault logging page</title>
</head>

<body>
<b>Please log the new fault...</b><br>
<br />

<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>

<form action="to_db_mp.php" method ="post">
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
<td><textarea name="comment" rows="4" cols="20">
</textarea></td>
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
<td><b>MP</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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
	<p>Select location:<br><i>(To select multiple locations hold down the control key and click on your chosen locations) </i></p>
	<select name="location[]" size=10 multiple = multiple><!--I use 'location[]' because it is an array, to accomodate multiple selections-->

		<optgroup label="Nelspruit">
			
			<option value="Nelspruit Office">Nelspruit Office</option>
			<option value="Nelspruit">Nelspruit</option>
			<option value="Alkmaar">Alkmaar</option>
			<option value="Berlin BOS">Berlin BOS</option>
			<option value="Bourkes Luck">Bourkes Luck</option>
			<option value="Crocodile Bridge">Crocodile Bridge</option>
			<option value="Elandshoogte">Elandshoogte</option>
			<option value="Graskop">Graskop</option>
			<option value="Highlands">Highlands</option>
			<option value="Hoedspruit Airforce Base">Hoedspruit Airforce Base</option>
			<option value="Hoedspruit SAPS">Hoedspruit SAPS</option>
			<option value="Houtboschrand">Houtboschrand</option>
			<option value="Ingwelala">Ingwelala</option>
			<option value="Kamhlabane">Kamhlabane</option>
			<option value="Kingfisherspruit">Kingfisherspruit</option>
			<option value="Komatidraai">Komatidraai</option>
			<option value="Kruger">Kruger</option>
			<option value="Letaba Mahlangeni">Letaba Mahlangeni</option>
			<option value="Letaba Mooiplaas">Letaba Mooiplaas</option>
			<option value="Letaba Rest Camp">Letaba Rest Camp</option>
			<option value="Louws Creek SAPS">Louws Creek SAPS</option>
			<option value="Lydenburg">Lydenburg</option>
			<option value="Malelane">Malelane</option>
			<option value="Maruleng Test Ground">Maruleng Test Ground</option>
			<option value="Mayfern">Mayfern</option>
			<option value="Mbuzini Monument">Mbuzini Monument</option>
			<option value="Mbyamiti">Mbyamiti</option>
			<option value="Nelshoogte BOS">Nelshoogte BOS</option>
			<option value="Nwanedzi">Nwanedzi</option>
			<option value="Olifants">Olifants</option>
			<option value="Onverwacht">Onverwacht</option>
			<option value="Phalaborwa Excellence">Phalaborwa Excellence</option>
			<option value="Stolznek">Stolznek</option>
			<option value="Tshokwane">Tshokwane</option>
			<option value="Vaalkop">Vaalkop</option>
			<option value="Nelspruit Other">Nelspruit Other</option>
		</optgroup>
		<optgroup label="Ermelo">
			
			<option value="Ermelo Office">Ermelo Office</option>
			<option value="Ermelo">Ermelo</option>
			<option value="Athole AGR">Athole AGR</option>
			<option value="Balbrogie">Balbrogie</option>
			<option value="Belfast">Belfast</option>
			<option value="Blaauwkop">Blaauwkop</option>
			<option value="Broadholms">Broadholms</option>
			<option value="Carolina">Carolina</option>
			<option value="Chelmsford Dam">Chelmsford Dam</option>
			<option value="Chrissiesmeer POL">Chrissiesmeer POL</option>
			<option value="Dannhauser">Dannhauser</option>
			<option value="De Emigratie">De Emigratie</option>
			<option value="Dundee POL">Dundee POL</option>
			<option value="Elandslaagte">Elandslaagte</option>
			<option value="Glencoe MUN">Glencoe MUN</option>
			<option value="Hattingspruit POL">Hattingspruit POL</option>
			<option value="Hendriena">Hendriena</option>
			<option value="Hlobane">Hlobane</option>
			<option value="Jessievale Bos">Jessievale Bos</option>
			<option value="Kingsley POL">Kingsley POL</option>
			<option value="Lothair">Lothair</option>
			<option value="Machadodorp">Machadodorp</option>
			<option value="Magudu">Magudu</option>
			<option value="Marthinusdrift">Marthinusdrift</option>
			<option value="Memel MUN">Memel MUN</option>
			<option value="Moorside">Moorside</option>
			<option value="Morgenzon MUN">Morgenzon MUN</option>
			<option value="Ncome">Ncome</option>
			<option value="Nerston POL">Nerston POL</option>
			<option value="Newcastle">Newcastle</option>
			<option value="Ngome Bos">Ngome Bos</option>
			<option value="Nongoma">Nongoma</option>
			<option value="Rietpoort">Rietpoort</option>
			<option value="Secunda">Secunda</option>
			<option value="Swartwater">Swartwater</option>
			<option value="Tafelkoppies">Tafelkoppies</option>
			<option value="Tweefontein">Tweefontein</option>
			<option value="Volksrust TNK">Volksrust TNK</option>
			<option value="Vryheid">Vryheid</option>
			<option value="Waterval TNK">Waterval TNK</option>
			<option value="Watervaldrift">Watervaldrift</option>
			<option value="Zaaihoek Dam">Zaaihoek Dam</option>
			<option value="Zaaiplaats">Zaaiplaats</option>
			<option value="Ermelo Other">Ermelo Other</option>
		</optgroup>
		
		
		
		<optgroup label="EXTERNAL REGIONS">
		
			<optgroup label="Eastern Cape">
				<option value="Aberdeen">Aberdeen</option>
				<option value="Aliwal North">Aliwal North</option>
				<option value="East London">East London</option>
				<option value="Mthatha">Mthatha</option>
				<option value="Port Elizabeth">Port Elizabeth</option>
				<option value="Eastern Cape - Other">Eastern Cape - Other</option>
			</optgroup>
	
			
			<optgroup label="Free State">
				<option value="Bloemfontein">Bloemfontein</option>
				<option value="Bethlehem">Bethlehem</option>
				<option value="Free State - Other">Free State - Other</option>
			</optgroup>

			<optgroup label="Gauteng">
				<option value="Bolepi">Bolepi</option>
				<option value="Irene">Irene</option>
				<option value="Lanseria">Lanseria</option>
				<option value="ORT">ORT</option>
				<option value="Gauteng - Other">Gauteng - Other</option>
			</optgroup>


			<optgroup label="Islands">
				<option value="Gough Island">Gough Island</option>
				<option value="Marion Island">Marion Island</option>
				<option value="Islands - Other">Islands - Other</option>
			</optgroup>


			<optgroup label="KZN">
				<option value="Durban">Durban</option>
				<option value="King Shaka Int">King Shaka Int</option>
				<option value="Richards Bay">Richards Bay</option>
				<option value="Vryheid">Vryheid</option>
				<option value="KZN - Other">KZN - Other</option>
			</optgroup>

			
			<optgroup label="Limpopo">
				<option value="Lebowa Kgomo">Lebowa Kgomo</option>
				<option value="Lephalale">Lephalale</option>
				<option value="Musina">Musina</option>
				<option value="Polokwane">Polokwane</option>
				<option value="Thohoyandou">Thohoyandou</option>
				<option value="Limpopo - Other">Limpopo - Other</option>
			</optgroup>

			<!--
			<optgroup label="Mpumalanga">
				<option value="Ermelo">Ermelo</option>
				<option value="Nelspruit">Nelspruit</option>
				<option value="Satara">Satara</option>
				<option value="Mpumalanga - Other">Mpumalanga - Other</option>
			</optgroup>-->

			<optgroup label="Northern Cape">
				<option value="Alkantpan">Alkantpan</option>
				<option value="Calvinia">Calvinia</option>
				<option value="De Aar">De Aar</option>
				<option value="Kathu">Kathu</option>
				<option value="Kimberley">Kimberley</option>
				<option value="Springbok">Springbok</option>
				<option value="Upington">Upington</option>
			</optgroup>

			<optgroup label="North West">
				<option value="Mafikeng">Mafikeng</option>
				<option value="North West - Other">North West - Other</option>
			</optgroup>
		
			<optgroup label="Western Cape">
				<option value="Cape Point">Cape Point</option>
				<option value="Cape Town">Cape Town</option>
				<option value="George">George</option>
				<option value="Western Cape - Other">Western Cape - Other</option>
			</optgroup>
			<optgroup label="SADC">
				<option value="Botswana">Botswana</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Namibia">Namibia</option>
				<option value="Swaziland - Ngwazini">Swaziland - Ngwazini</option>
				<option value="SADC - Other">SADC - Other</option>
			</optgroup>
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
<a href="mpumalanga.html">Home</a> 
</p>
</td>

</body>
</html>



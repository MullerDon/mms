
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

<form action="to_db_nw.php" method ="post">
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
<td><b>NW</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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

		<optgroup label="Mahikeng">
			
			<option value="Mahikeng Office">Mahikeng Office</option>
			<option value="Mafikeng">Mafikeng</option>
			<option value="Abjaterskop">Abjaterskop</option>
			<option value="Boschrand">Boschrand</option>
			<option value="Boskopdam Nat Res">Boskopdam Nat Res</option>
			<option value="Botsalano Gate3">Botsalano gate3</option>
			<option value="Botsalano Game Res">Botsalano Game Res</option>
			<option value="Brey POL">Brey POL</option>
			<option value="Coligny POL">Coligny POL</option>
			<option value="Delareyville POL">Delareyville POL</option>
			<option value="Delareyville Barberspan">Delareyville Barberspan</option>
			<option value="Delareyville Rietpan 2">Delareyville Rietpan 2</option>
			<option value="Derdepoort Gate">Derdepoort Gate</option>
			<option value="Doornhoek">Doornhoek</option>
			<option value="Driefontein">Driefontein</option>
			<option value="Dwarsfontein">Dwarsfontein</option>
			<option value="Enzelberg">Enzelberg</option>
			<option value="Gopane">Gopane</option>
			<option value="Grootpan">Grootpan</option>
			<option value="Kameelboom">Kameelboom</option>
			<option value="Klerksdorp">Klerksdorp</option>
			<option value="Klerksdorp Hartbeesfonte">Klerksdorp Hartbeesfonte</option>
			<option value="Klerksdorp Mon Repos">Klerksdorp Mon Repos</option>
			<option value="Klippan">Klippan</option>
			<option value="Koster POL">Koster POL</option>
			<option value="Kromdraai">Kromdraai</option>
			<option value="Leeukop">Leeukop</option>
			<option value="Leliefontein">Leliefontein</option>
			<option value="Lichtenburg">Lichtenburg</option>
			<option value="Lichtenburg Dorp">Lichtenburg Dorp</option>
			<option value="Lichtenburg Manana">Lichtenburg Manana</option>
			<option value="Lichtenburg Silverton">Lichtenburg Silverton</option>
			<option value="Lichtenburg TNK">Lichtenburg TNK</option>
			<option value="Lindleyspoort">Lindleyspoort</option>
			<option value="Lusthof Kooperasie">Lusthof Kooperasie</option>
			<option value="Madikwe">Madikwe</option>
			<option value="Mafikeng Game Res">Mafikeng Game Res</option>
			<option value="Magong">Magong</option>
			<option value="Marico">Marico</option>
			<option value="Mogobe Botsalano Game Res">Mogobe Botsalano Game Res</option>
			<option value="Mokopong Grenspos">Mokopong Grenspos</option>
			<option value="Molatedi Gate">Molatedi Gate</option>
			<option value="Molemane Eye">Molemane Eye</option>
			<option value="Molopo Nat Res">Molopo Nat Res</option>
			<option value="Mooigenoeg">Mooigenoeg</option>
			<option value="Naaupoort">Naaupoort</option>
			<option value="Nietverdiend">Nietverdiend</option>
			<option value="Ottosdal">Ottosdal</option>
			<option value="Ottosdal POL">Ottosdal POL</option>
			<option value="Phitshane">Phitshane</option>
			<option value="Piet Plessis">Piet Plessis</option>
			<option value="Plaasverlies">Plaasverlies</option>
			<option value="Potchefstroom">Potchefstroom</option>
			<option value="Potchefstroom Bushy Ben">Potchefstroom Bushy Ben</option>
			<option value="Potchefstroom Mimosa Pa">Potchefstroom Mimosa Pa</option>
			<option value="Potchefstroom Noyjons">Potchefstroom Noyjons</option>
			<option value="Potchefstroom RSV">Potchefstroom RSV</option>
			<option value="Rietpan">Rietpan</option>
			<option value="Sannieshof POL">Sannieshof POL</option>
			<option value="Setlagole POL">Setlagole POL</option>
			<option value="Slurry">Slurry</option>
			<option value="Stella">Stella</option>
			<option value="Swartruggens POL">Swartruggens POL</option>
			<option value="Tau Gate">Tau Gate</option>
			<option value="Tosca">Tosca</option>
			<option value="Tswasa">Tswasa</option>
			<option value="Tuscany">Tuscany</option>
			<option value="Twyfelspoort">Twyfelspoort</option>
			<option value="Vaal Reefs West">Vaal Reefs West</option>
			<option value="Ventersrust">Ventersrust</option>
			<option value="Vleisfontein">Vleisfontein</option>
			<option value="Vredefort">Vredefort</option>
			<option value="Vryburg">Vryburg</option>
			<option value="Vryburg Bryngwyn">Vryburg Bryngwyn</option>
			<option value="Vryburg Ganyesa">Vryburg Ganyesa</option>
			<option value="Vryburg Lourensgeluk">Vryburg Lourensgeluk</option>
			<option value="Vryburg Palmyra">Vryburg Palmyra</option>
			<option value="Vryburg Tipperary">Vryburg Tipperary</option>
			<option value="Vryburg Welgeleven">Vryburg Welgeleven</option>
			<option value="Welbedacht Agri">Welbedacht Agri</option>
			<option value="Welverdiend POL">Welverdiend POL</option>
			<option value="Werk-Met-Lus">Werk-Met-Lus</option>
			<option value="Winkelhaak">Winkelhaak</option>
			<option value="Witkleigat">Witkleigat</option>
			<option value="Wolmaranstad">Wolmaranstad</option>
			<option value="Wolwespruit">Wolwespruit</option>
			<option value="Wonderboom Gate">Wonderboom Gate</option>
			<option value="Zeerust">Zeerust</option>
			<option value="Mahikeng Other">Mahikeng Other</option>
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

			
			<optgroup label="Mpumalanga">
				<option value="Ermelo">Ermelo</option>
				<option value="Nelspruit">Nelspruit</option>
				<option value="Satara">Satara</option>
				<option value="Mpumalanga - Other">Mpumalanga - Other</option>
			</optgroup>

			<optgroup label="Northern Cape">
				<option value="Alkantpan">Alkantpan</option>
				<option value="Calvinia">Calvinia</option>
				<option value="De Aar">De Aar</option>
				<option value="Kathu">Kathu</option>
				<option value="Kimberley">Kimberley</option>
				<option value="Springbok">Springbok</option>
				<option value="Upington">Upington</option>
			</optgroup>

			<!--<optgroup label="North West">
				<option value="Mafikeng">Mafikeng</option>
				<option value="North West - Other">North West - Other</option>
			</optgroup>-->
		
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
<a href="northwest.html">Home</a> 
</p>
</td>

</body>
</html>




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

<form action="to_db_gau.php" method ="post">
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
<td><b>GAU</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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
		<optgroup label="Bolepi">
			
			<option value="Bolepi Office">Bolepi Office</option>
			<option value="Bakgatla Gate">Bakgatla Gate</option>
			<option value="Bakubung Gate">Bakubung Gate</option>
			<option value="Baviaanspoort">Baviaanspoort</option>
			<option value="Blesbokfontein">Blesbokfontein</option>
			<option value="Boekenhoutskloof">Boekenhoutskloof</option>
			<option value="Bronkerspruit">Bronkerspruit</option>
			<option value="Buffelsdoorns">Buffelsdoorns</option>
			<option value="Buffelspoort">Buffelspoort</option>
			<option value="Bulgerrivier Pol">Bulgerrivier Pol</option>
			<option value="Constantia Park">Constantia Park</option>
			<option value="De Kroon IIR">De Kroon IIR</option>
			<option value="Dorset Pol">Dorset Pol</option>
			<option value="Dwarsfontein">Dwarsfontein</option>
			<option value="Geluk IIR">Geluk IIR</option>
			<option value="Hartebeespoort Dam">Hartebeespoort Dam</option>
			<option value="Hoopdal Pol">Hoopdal Pol</option>
			<option value="Irene">Irene</option>
			<option value="Jericho">Jericho</option>
			<option value="Kameeldrift">Kameeldrift</option>
			<option value="Kameeldrift IIR">Kameeldrift IIR</option>
			<option value="Kareepoort">Kareepoort</option>
			<option value="Klipfontein">Klipfontein</option>
			<option value="Kungwini Mun">Kungwini Mun</option>
			<option value="Kwa Maritane">Kwa Maritane</option>
			<option value="Leeupoort Mun">Leeupoort Mun</option>
			<option value="Magalies Pol">Magalies Pol</option>
			<option value="Mamerotse">Mamerotse</option>
			<option value="Mamogalieskraal">Mamogalieskraal</option>
			<option value="Nooitgedacht">Nooitgedacht</option>
			<option value="Naboomspruit">Naboomspruit</option>
			<option value="Nylstroom Mun">Nylstroom Mun</option>
			<option value="Nylsvley">Nylsvley</option>
			<option value="Olifantspoort">Olifantspoort</option>
			<option value="Pelindaba">Pelindaba</option>
			<option value="Pilangsberg Centre">Pilangsberg Centre</option>
			<option value="Pta Burgerspark">Pta Burgerspark</option>
			<option value="Pta Eendracht">Pta Eendracht</option>
			<option value="Pta Presidency">Pta Presidency</option>
			<option value="Pta Powerstation">Pta Powerstation</option>
			<option value="Pta Mountainview">Pta Mountainview</option>
			<option value="Pta Rietondale">Pta Rietondale</option>
			<option value="Ramkie Oor-Willows">Ramkie Oor-Willows</option>
			<option value="Rankins Pass Pol">Rankins Pass Pol</option>
			<option value="Rashoop IIR">Rashoop IIR</option>
			<option value="Rhenosterfontein">Rhenosterfontein</option>
			<option value="Rooidam">Rooidam</option>
			<option value="Ruighoek Gate">Ruighoek Gate</option>
			<option value="Rus De Winter IIR">Rus De Winter IIR</option>
			<option value="Sandfontein IIR">Sandfontein IIR</option>
			<option value="Stockpoort Pol">Stockpoort Pol</option>
			<option value="Tawoomba">Tawoomba</option>
			<option value="Thabazimbi">Thabazimbi</option>
			<option value="Thabazimbi Amandebult">Thabazimbi Amandabult</option>
			<option value="Tuinplaas Pol">Tuinplaas Pol</option>
			<option value="UP Proefplaas">UP Proefplaas</option>
			<option value="Vaalwater Pol">Vaalwater Pol</option>
			<option value="Visserhoek">Visserhoek</option>
			<option value="Wonderboom">Wonderboom</option>
			<option value="Bolepi Other">Bolepi Other</option>
		</optgroup>
		<optgroup label="Irene">
			<option value="Irene Office">Irene Office</option>
			<option value="Alexandra">Alexandra</option>
			<option value="Aquaville">Aquaville</option>
			<option value="Badplaas Pol">Badplaas Pol</option>
			<option value="Bankfontein">Bankfontein</option>
			<option value="Belfast Pol">Belfast Pol</option>
			<option value="Bergvliet Bos">Bergvliet Bos</option>
			<option value="Brooklands Bos">Brooklands Bos</option>
			<option value="Cullinan-Edandale Ind">Cullinan-Edendale Ind</option>
			<option value="Delmas Witklip">Delmas Witklip</option>
			<option value="Diepsloot">Diepsloot</option>
			<option value="Dobsonville">Dobsonville</option>
			<option value="Dube">Dube</option>
			<option value="Dunnottar">Dunnottar</option>
			<option value="Goedehoop">Goedehoop</option>
			<option value="Hendriksdal">Hendriksdal</option>
			<option value="Irene">Irene</option>
			<option value="Ivory Park">Ivory Park</option>
			<option value="Kriel">Kriel</option>
			<option value="Laersdrift">Laersdrift</option>
			<option value="Loskop">Loskop</option>
			<option value="Machadodorp">Machadodorp</option>
			<option value="Marble Hall">Marble Hall</option>
			<option value="Middleburg">Middleburg</option>
			<option value="Morgenzon Bos">Morgenzon Bos</option>
			<option value="Nooitgedacht">Nooitgedacht</option>
			<option value="Ohrigstad Pol">Ohrigstad Pol</option>
			<option value="Oudestad">Oudestad</option>
			<option value="Pilanesberg">Pilanesberg</option>
			<option value="Pilgrims Rest Nat Con">Pilgrims Rest Nat Con</option>
			<option value="Pta UNISA">Pta UNISA</option>
			<option value="Rietspruit">Rietspruit</option>
			<option value="Rustenburg">Rustenburg</option>
			<option value="Rustplaats">Rustplaats</option>
			<option value="Sabie">Sabie</option>
			<option value="Sabie Klipkraal">Sabie Klipkraal</option>
			<option value="Spitskop Bos">Spitskop Bos</option>
			<option value="Tswaing">Tswaing</option>
			<option value="Tweefontein Bos">Tweefontein Bos</option>
			<option value="Uitsoek">Uitsoek</option>
			<option value="Vandyksdrift">Vandyksdrift</option>
			<option value="Ventersdorp Makokskraal">Ventersdorp Makokskraal</option>
			<option value="Welgevonden">Welgevonden</option>
			<option value="Wellkom">Wellkom</option>
			<option value="Weltevreden">Weltevreden</option>
			<option value="Wilgeboom Bos">Wilgeboom Bos</option>
			<option value="Witbank Kleinkopje Col">Witbank Kleinkopje Col</option>
			<option value="Witbank Mun">Witbank Mun</option>
			<option value="Witklip Bos">Witklip Bos</option>
			<option value="Irene Other">Irene Other</option>
		</optgroup>
		<optgroup label="ORT">
			<option value="ORT Office">ORT Office</option>	
			<option value="Barage RWB">Barage RWB</option>
			<option value="Beerlaagte">Beerlaagte</option>
			<option value="Blyvooruitzicht">Blyvooruitzicht</option>
			<option value="Carletonville">Carletonville</option>
			<option value="Delmas Vlakplaas">Delmas Vlakplaas</option>
			<option value="Deneysville">Deneysville</option>
			<option value="Fochville">Fochville</option>
			<option value="Goudkoppies">Goudkoppies</option>
			<option value="Grand Central">Grand Central</option>
			<option value="Grootvlei">Grootvlei</option>
			<option value="Heidelberg">Heidelberg</option>
			<option value="JHB Bot Gardens">JHB Bot Gardens</option>
			<option value="JHB Leeukop">JHB Leeukop</option>
			<option value="JHB Turffontein">JHB Turffontein</option>
			<option value="JHB Zoo">JHB Zoo</option>
			<option value="Kloof Gold Mine">Kloof Gold Mine</option>
			<option value="Krugersdorp">Krugersdorp</option>
			<option value="Leslie Leandra">Leslie Leandra</option>
			<option value="Lanseria">Lanseria</option>
			<option value="Meyerton">Meyerton</option>
			<option value="Middelpan">Middelpan</option>
			<option value="Midrand">Midrand</option>
			<option value="Nigel">Nigel</option>
			<option value="Parys">Parys</option>
			<option value="Randfontein">Randfontein</option>
			<option value="Redwing">Redwing</option>
			<option value="Roodepoort">Roodepoort</option>
			<option value="Roodepoort Waterval">Roodepoort Waterval</option>
			<option value="Sasolburg">Sasolburg</option>
			<option value="Schikfontein">Schikfontein</option>
			<option value="Springs">Springs</option>
			<option value="Sundra">Sundra</option>
			<option value="Vereeniging">Vereeniging</option>
			<option value="Walter Sisulu BotGardens">Walter Sisulu BotGardens</option>
			<option value="Witbank Strehla">Witbank Strehla</option>
			<option value="Zuurbekom">Zuurbekom</option>
			<option value="ORT Other">ORT Other</option>
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
				<option value="Virginia">Virginia</option>
				<option value="Free State - Other">Free State - Other</option>
			</optgroup>

			<!--<optgroup label="Gauteng">
				<option value="Bolepi">Bolepi</option>
				<option value="Irene">Irene</option>
				<option value="Lanseria">Lanseria</option>
				<option value="ORT">ORT</option>
				<option value="Gauteng - Other">Gauteng - Other</option>
			</optgroup>-->


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
				<option value="Mozambique">Mozanbique</option>
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
<a href="gauteng.html">Home</a> 
</p>
</td>

</body>
</html>




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

<form action="to_db_lim.php" method ="post">
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
<td><b>LIM</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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

		

		<optgroup label="Polokwane">
			
			<option value="Polokwane Office">Polokwane Office</option>
			<option value="Polokwane Hospital">Polokwane Hospital</option>
			<option value="Allandale">Allandale</option>
			<option value="Alldays Haly">Alldays Haly</option>
			<option value="Bakenberg">Bakenberg</option>
			<option value="Bandelierkop SAPS">Bandelierkop SAPS</option>
			<option value="Belvedere">Belvedere</option>
			<option value="Bergzicht">Bergzicht</option>
			<option value="Broadlands">Broadlands</option>
			<option value="Chloe Sisal Project">Chloe Sisal Project</option>
			<option value="Consolidated M Mine">Consolidated M Mine</option>
			<option value="Dendron">Dendron</option>
			<option value="Doornfontein">Doornfontein</option>
			<option value="Doornplaas">Doornplaas</option>
			<option value="Ebenezer Dam">Ebenezer Dam</option>
			<option value="Eiland Spa atkv">Eiland Spa atkv</option>
			<option value="Fraaifontein">Fraaifontein</option>
			<option value="Grootgeluk Mine">Grootgeluk Mine</option>
			<option value="Gravellotte Rubber Vale">Gravellotte Rubber Vale</option>
			<option value="Gravellotte SAPS">Gravellotte SAPS</option>
			<option value="Haenertsburg SAPS">Haenertsburg SAPS</option>
			<option value="Hans Merensky High School">Hans Merensky High School</option>
			<option value="Hans Merensky Nat Res">Hans Merensky Nat Res</option>
			<option value="Hebron Bos">Hebron Bos</option>
			<option value="Jonkmansdrift">Jonkmansdrift</option>
			<option value="Kalkfontein">Kalkfontein</option>
			<option value="Kordon">Kordon</option>
			<option value="Lephalale">Lephalale</option>
			<option value="Lephalale SAPS">Lephalale SAPS</option>
			<option value="Letsitele La Gratitude">Letsitele La Gratitude</option>
			<option value="Mahwelereng">Mahwelereng</option>
			<option value="Makhado Air Force Base">Makhado Air Force Base</option>
			<option value="Mara">Mara</option>
			<option value="Mara SAPS">Mara SAPS</option>
			<option value="Marieskop Bos">Marieskop Bos</option>
			<option value="Marken">Marken</option>
			<option value="Maruleng Boerseun">Maruleng Boerseun</option>
			<option value="Mokopane">Mokopane</option>
			<option value="Montrombi">Montrombi</option>
			<option value="Moorddrift">Moorddrift</option>
			<option value="New Agatha Bos">New Agatha Bos</option>
			<option value="Onverwag">Onverwag</option>
			<option value="Palmer Estate">Palmer Estate</option>
			<option value="Phalaborwa">Phalaborwa</option>
			<option value="Phalaborwa Grietjie">Phalaborwa Grietjie</option>
			<option value="Platjan Grenspos SAPS">Platjan Grenspos SAPS</option>
			<option value="Podrift SAPS">Podrift SAPS</option>
			<option value="Saamboubrug SAPS">Saamboubrug SAPS</option>
			<option value="Salique Bos">Salique Bos</option>
			<option value="Sekororo Hospital">Sekororo Hospital</option>
			<option value="Soekmekaar SAPS">Soekmekaar SAPS</option>
			<option value="Spelonken Bos">Spelonken Bos</option>
			<option value="Steenbokfontein">Steenbokfontein</option>
			<option value="Sterkrivier">Sterkrivier</option>
			<option value="Syferkuil">Syferkuil</option>
			<option value="Thabina Dam">Thabina Dam</option>
			<option value="Tolwe SAPS">Tolwe SAPS</option>
			<option value="Tom Burke">Tom Burke</option>
			<option value="Tours Dam">Tours Dam</option>
			<option value="Tubatse Agric">Tubatse Agric</option>
			<option value="Tzaneen Dam">Tzaneen Dam</option>
			<option value="Una Agricultural">Una Agricultural</option>
			<option value="Venetia Mine">Venetia Mine</option>
			<option value="Verdoornsdraai">Verdoornsdraai</option>
			<option value="Vergelegen">Vergelegen</option>
			<option value="Villa Norra SAPS">Villa Norra SAPS</option>
			<option value="Voorspoed Bos">Voorspoed Bos</option>
			<option value="Waterpoort SAPS">Waterpoort SAPS</option>
			<option value="Welgevonden Bos">Welgevonden Bos</option>
			<option value="Westfalia">Westfalia</option>
			<option value="Westfalia Estate">Westfalia Estate</option>
			<option value="Wolkberg Serale Bos">Wolkberg Serale Bos</option>
			<option value="Woodbush">Woodbush</option>
			<option value="Zomerkomst Bos">Zomerkomst Bos</option>
			<option value="Zwartrandjies">Zwartrandjies</option>
			<option value="Polokwane Other">Polokwane Other</option>
		</optgroup>

		<optgroup label="Thohoyandou">
			<option value="Thohoyandou Office">Thohoyandou Office</option>
			<option value="Dzanani Biaba Agric Office">Dzanani Biaba Agric Office</option>
			<option value="Elim Hospital">Elim Hospital</option>
			<option value="Entabeni Bos">Entabeni Bos</option>
			<option value="Folovhodwe">Folovhodwe</option>
			<option value="Giyani">Giyani</option>
			<option value="Giyani Ntsami Dam">Giyani Ntsami Dam</option>
			<option value="Goedehoop">Goedehoop</option>
			<option value="Hanglip">Hanglip</option>
			<option value="Joubertstroom">Joubertstroom</option>
			<option value="Klein Australie">Klein Australie</option>
			<option value="Kleinfontein">Kleinfontein</option>
			<option value="Krugerwildtuin Shangoni">Krugerwildtuin Shangoni</option>
			<option value="Letaba Woodlands">Letaba Woodlands</option>
			<option value="Livubu">Livubu</option>
			<option value="Matiwa">Matiwa</option>
			<option value="Modjadji Dam">Modjadji Dam</option>
			<option value="Motseketla Primary School">Motseketla Primary School</option>
			<option value="Mphephu">Mphephu</option>
			<option value="Mukumbani Tea Estate">Mukumbani Tea Estate</option>
			<option value="Nolitgedacht">Nolitgedacht</option>
			<option value="Olifants Camp">Olifants Camp</option>
			<option value="Palmaryville">Palmaryville</option>
			<option value="Phiphidi Treating Plant">Phiphidi Treating Plant</option>
			<option value="Punda Maria">Punda Maria</option>
			<option value="Rambuda">Rambuda</option>
			<option value="Roodewal Bos">Roodewal Bos</option>
			<option value="Rosbach Plantation">Rosbach Plantation</option>
			<option value="Shingwedzi Vlakteplaas">Shingwedzi Vlakteplaas</option>
			<option value="Teba Pafuri">Teba Pafuri</option>
			<option value="Tshanowa Primary School">Tshanowa Primary School</option>
			<option value="Tshifhire Plantation">Tshifhire Plantation</option>
			<option value="Tshivhase Tea estate">Tshivhase Tea Estate</option>
			<option value="Tsianda Fruit Farm">Tsianda Fruit Farm</option>
			<option value="Tzaneen Middle Letaba Dam">Tzaneen Middle Letaba Dam</option>
			<option value="Vondo Bos">Vondo Bos</option>
			<option value="Vreemdeling">Vreemdeling</option>
			<option value="Vuwani Agri Service">Vuwani Agri Service</option>
			<option value="Thohoyandou Other">Thohoyandou Other</option>
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
				<option value="Mahikeng">Mahikeng</option>
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

			<!--
			<optgroup label="Limpopo">
				<option value="Lebowa Kgomo">Lebowa Kgomo</option>
				<option value="Lephalale">Lephalale</option>
				<option value="Musina">Musina</option>
				<option value="Polokwane">Polokwane</option>
				<option value="Thohoyandou">Thohoyandou</option>
				<option value="Limpopo - Other">Limpopo - Other</option>
			</optgroup>-->

			
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
<a href="limpopo.html">Home</a> 
</p>
</td>

</body>
</html>




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

<form action="to_db_kzn.php" method ="post">
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
<td><b>KZN</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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

		<optgroup label="Durban/King Shaka">
		
			<option value="King Shaka Office">King Shaka Office</option>
			<option value="Allerton Vet">Allerton Vet</option>
			<option value="Babanango">Babanango</option>
			<option value="Baynesfield Est">Baynesfield Est</option>
			<option value="Bergville Mag">Bergville Mag</option>
			<option value="Blackburn est">Blackburn Est</option>
			<option value="Boscombe Est">Boscombe Est</option>
			<option value="Botha's Hill Clinic">Botha's Hill Clinic</option>
			<option value="Camperdown Mag">Camperdown Mag</option>
			<option value="Cape Vidal">Cape Vidal</option>
			<option value="Castleburn Res">Castleburn Res</option>
			<option value="Cathedral Peak Hotel">Cathedral Peak Hotel</option>
			<option value="Cedara">Cedara</option>
			<option value="Cedarville SAP">Cedarville SAP</option>
			<option value="Charters Creek">Charters Creek</option>
			<option value="Charterscreek Res">Charterscreek Res</option>
			<option value="Cobham Forest">Cobham Forest</option>
			<option value="Coleford Res">Coleford Res</option>
			<option value="Cramond SAP">Cramond SAP</option>
			<option value="Creighton SAP">Creighton SAP</option>
			<option value="Deemount Farm">Deemount Farm</option>
			<option value="Dougvale/Palm Grove Est">Dougvale/Palm Grove Est</option>
			<option value="Dukuduku For">Dukuduku For</option>
			<option value="Durban">Durban</option>
			<option value="Durban Bot Gardens">Durban Bot Gardens</option>
			<option value="Durban Heights Pur">Durban Heights Pur</option>
			<option value="Durban South">Durban South</option>
			<option value="Emerald Dale">Emerald Dale</option>
			<option value="Empangeni Mag">Empangeni Mag</option>
			<option value="Enhlanhleni/Montrose">Enhlanhleni/Montrose</option>
			<option value="Eshowe MUN">Eshowe MUN</option>
			<option value="Estcourt">Estcourt</option>
			<option value="Eureka Farm">Eureka Farm</option>
			<option value="Evat SAP">Evat SAP</option>
			<option value="False Bay">False Bay</option>
			<option value="Franklin SAP">Franklin SAP</option>
			<option value="Giants Castle">Giants Castle</option>
			<option value="Giants Castle Res">Giants Castle Res</option>
			<option value="Gingindhlovu">Gingindhlovu</option>
			<option value="Glen Doone Farm">Glen Doone Farm</option>
			<option value="Glenora Farm">Glenora Farm</option>
			<option value="Goedgeloof">Goedgeloof</option>
			<option value="Greytown">Greytown</option>
			<option value="Hearts Ease Farm">Hearts Ease Farm</option>
			<option value="Highmoor Res">Highmoor Res</option>
			<option value="Hillendale Farm">Hillendale Farm</option>
			<option value="Hilltop Camp">Hilltop Camp</option>
			<option value="Hilltop Research">Hilltop Research</option>
			<option value="Himeville Mag">Himeville Mag</option>
			<option value="Ixopo">Ixopo</option>
			<option value="Kamberg Res">Kamberg Res</option>
			<option value="Kangela">Kangela</option>
			<option value="Kenneth Stainbank Res">Kenneth Stainbank Res</option>
			<option value="Kokstad">Kokstad</option>
			<option value="Kokstad AGR">Kokstad AGR</option>
			<option value="Kosi Bay">Kosi Bay</option>
			<option value="Kosi Bay Res">Kosi Bay Res</option>
			<option value="Kranskop Prison">Kranskop Prison</option>
			<option value="KSIA">KSIA</option>
			<option value="Kwamashu W/W">Kwamashu W/W</option>
			<option value="Kwambonambi Forest">Kwambonambi Forest</option>
			<option value="Ladysmith">Ladysmith</option>
			<option value="Lake Eland">Lake Eland</option>
			<option value="Langewaght Plant">Langewaght Plant</option>
			<option value="Loskop Agric">Loskop Agric</option>
			<option value="Makakatana Res">Makakatana Res</option>
			<option value="Makatini">Makatini</option>
			<option value="Mandini">Mandini</option>
			<option value="Mandini Pvt">Mandini Pvt</option>
			<option value="Manguzi">Manguzi</option>
			<option value="Mapumulo Prison">Mapumulo Prison</option>
			<option value="Margate">Margate</option>
			<option value="Margate Airport">Margate Airport</option>
			<option value="Masinda Camp">Masinda Camp</option>
			<option value="Mbazwana">Mbazwana</option>
			<option value="Mbazwana Res">Mbazwana Res</option>
			<option value="Mbona Est">Mbona Est</option>
			<option value="Mbuzana Outpost">Mbuzana Outpost</option>
			<option value="Mdumu">Mdumu</option>
			<option value="Melmoth SAP">Melmoth SAP</option>
			<option value="Mhlabatini">Mhlabatini</option>
			<option value="Minnehaha Farm">Minnehaha Farm</option>
			<option value="Mission Rocks">Mission Rocks</option>
			<option value="Mistley Est">Mistley Est</option>
			<option value="Mkuze Res">Mkuze Res</option>
			<option value="Monks Cowl Res">Monks Cowl Res</option>
			<option value="Mooi River">Mooi River</option>
			<option value="Mount Edgecombe">Mount Edgecombe</option>
			<option value="Mpila Res">Mpila Res</option>
			<option value="Mposa/Maduna">Mposa/Maduna</option>
			<option value="Mtunzini">Mtunzini</option>
			<option value="Nagle Dam">Nagle Dam</option>
			<option value="Ndwedwe School">Ndwedwe School</option>
			<option value="Newark SAP">Newark SAP</option>
			<option value="New Hanover">New Hanover</option>
			<option value="Nqutu Arg">Nqutu Arg</option>
			<option value="Oribi Airport">Oribi Airport</option>
			<option value="Osisweni Agr">Osisweni Agr</option>
			<option value="Paddock">Paddock</option>
			<option value="Peters Regional Office">Peters Regional Office</option>
			<option value="Pennington South">Pennington South</option>
			<option value="Pietermaritzburg">Pietermaritzburg</option>
			<option value="Pietermaritzburg Bot Gardens">Pietermaritzburg Bot Gardens</option>
			<option value="PMB Darville">PMB Darville</option>
			<option value="Port Durnford">Port Durnford</option>
			<option value="Port Edward">Port Edward</option>
			<option value="Pongola">Pongola</option>
			<option value="Pongolapoort Dam">Pongolapoort Dam</option>
			<option value="Qudeni Plant">Qudeni Plant</option>
			<option value="Queensburgh Metro">Queensburgh Metro</option>
			<option value="Qwaka Arg">Qwaka Arg</option>
			<option value="Rietvlei SAP">Rietvlei SAP</option>
			<option value="Riverview">Riverview</option>
			<option value="Royal National Park">Royal National Park</option>
			<option value="Richards Bay Airport">Richards Bay Airport</option>
			<option value="Richmond">Richmond</option>
			<option value="Richmond POL">Richmond POL</option>
			<option value="Rosleigh Pvt">Rosleigh Pvt</option>
			<option value="Salem Est">Salem Est</option>
			<option value="Sanipass SAP">Sanipass SAP</option>
			<option value="Sarnia Plant">Sarnia Plant</option>
			<option value="Savoti Farm">Savoti Farm</option>
			<option value="Scottburgh MUN">Scottburgh MUN</option>
			<option value="Shongweni Dam">Shongweni Dam</option>
			<option value="Snowhill Farm">Snowhill Farm</option>
			<option value="Sodwana Bay">Sodwana Bay</option>
			<option value="Stanger Mag">Stanger Mag</option>
			<option value="St. Lucia For">St. Lucia For</option>
			<option value="Straalhoek Plant">Straalhoek Plant</option>
			<option value="Summerford Farm">Summerford Farm</option>
			<option value="Surprise Store">Surprise Store</option>
			<option value="Thanhurst Est">Thanhurst Est</option>
			<option value="The Meadows Farm">The Meadows farm</option>
			<option value="The Valleys Farm">The Valleys Farm</option>
			<option value="Tugela Ferry">Tugela Ferry</option>
			<option value="Uhmlanga">Uhmlanga</option>
			<option value="Uloa Agr">Uloa Agr</option>
			<option value="Ulundi Airport">Ulundi Airport</option>
			<option value="Ulundi W/W">Ulundi W/W</option>
			<option value="Umbumbulu Pvt">Umbumbulu Pvt</option>
			<option value="Umhlali/Balito Beach">Umhlali/Balito Beach</option>
			<option value="Umkhomazi Res">Umkhomazi Res</option>
			<option value="Umzinto Sew">Umzinto Sew</option>
			<option value="Underberg">Underberg</option>
			<option value="University Zululand">University Zululand</option>
			<option value="Virginia Airport">Virginia Airport</option>
			<option value="Vryheid">Vryheid</option>
			<option value="Weza Plant">Weza Plant</option>
			<option value="Durban/King Shaka Other">Durban/King Shaka Other</option>
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

			<!--
			<optgroup label="KZN">
				<option value="Durban">Durban</option>
				<option value="King Shaka Int">King Shaka Int</option>
				<option value="Richards Bay">Richards Bay</option>
				<option value="Vryheid">Vryheid</option>
				<option value="KZN - Other">KZN - Other</option>
			</optgroup>-->

			
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
<a href="kwazulunatal.html">Home</a> 
</p>
</td>

</body>
</html>



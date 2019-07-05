
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
<td><textarea name="comment" rows="4" cols="20">
</textarea></td>
</tr>

<!--<input type="text" name="comment"></td>-->
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
<!--removed array option for multiple location selection-->
<!--<p>Select location:<br><i>(To select multiple locations hold down the control key and click on your chosen locations) </i></p>
	<select name="location[]" size=10 multiple = multiple><!--I use 'location[]' because it is an array, to accomodate multiple selections-->
<p>Select location:</p>
	<select name="location">
		<optgroup label="East London Office">
			<option selected> </option>
			<option value="Aliwal North">Aliwal North</option>
			<option value="Amatola SF">Amatola SF</option>
			<option value="Barkly East">Barkly East</option>
			<option value="Barkly East Tnk">Barkly East Tnk</option>
			<option value="Berlin-Roslyn Frm">Berlin-Roslyn Frm</option>
			<option value="Bisho">Bisho</option>
			<option value="Bridle Drift">Bridle Drift</option>
			<option value="Buffelsfontein">Buffelsfontein</option>
			<option value="Cata Plantation">Cata Plantation</option>
			<option value="Cathcart Pol">Cathcart Pol</option>
			<option value="Dohne">Dohne</option>
			<option value="Dontsa Plantation">Dontsa Plantation</option>
			<option value="Dordrecht Clark Sd">Dordrecht Clark Sd</option>
			<option value="Dordrecht TNK">Dordrecht TNK</option>
			<option value="Double Drift">Double Drift</option>
			<option value="East London">East London</option>
			<option value="East London Airport">East London Airport</option>
			<option value="East London Office">East London Office</option>
			<option value="Elliot">Elliot</option>
			<option value="Evelyn Valley Bos">Evelyn Valley Bos</option>
			<option value="Exwell Park">Exwell Park</option>
			<option value="Fairview">Fairview</option>
			<option value="Frt Cunnynghame">Frt Cunnynghame</option>
			<option value="Funnystone">Funnystone</option>
			<option value="Granta">Granta</option>
			<option value="Haga-Haga">Haga-Haga</option>
			<option value="Hazelmere">Hazelmere</option>
			<option value="Henderson Pol">Henderson Pol</option>
			<option value="Hopewell">Hopewell</option>
			<option value="Hotfire">Hotfire</option>
			<option value="Indwe Mun">Indwe Mun</option>
			<option value="Invergwali">Invergwali</option>
			<option value="Izeleni Plantation">Izeleni Plantation</option>
			<option value="Jamestown">Jamestown</option>
			<option value="Jamestown Den Haag">Jamestown Den Haag</option>
			<option value="Kei Bridge">Kei Bridge</option>
			<option value="Keilands Mission">Keilands Mission</option>
			<option value="Keimouth">Keimouth</option>
			<option value="Kidds Beach">Kidds Beach</option>
			<option value="Kologha Bos">Kologha Bos</option>
			<option value="Komani Hosp">Komani Hosp</option>
			<option value="KWT Mun">KWT Mun</option>
			<option value="Kubusie SF">Kubusie SF</option>
			<option value="Leeufontein">Leeufontein</option>
			<option value="Maclear">Maclear</option>
			<option value="Molteno Broughton">Molteno Broughton</option>
			<option value="Mount Fletcher Tnk">Mount Fletcher Tnk</option>
			<option value="Nahoon">Nahoon</option>
			<option value="Queenstown">Queenstown</option>
			<option value="Queenstown Mun">Queenstown Mun</option>
			<option value="Queenstown Vet">Queenstown Vet</option>
			<option value="Rossouw">Rossouw</option>
			<option value="Spring Valley">Spring Valley</option>
			<option value="Sterkstroom">Sterkstroom</option>
			<option value="Stutterheim Tnk">Stutterheim Tnk</option>
			<option value="Thomas River">Thomas River</option>
			<option value="Tylden Pol">Tylden Pol</option>
			<option value="Ugie Mun">Ugie Mun</option>
			<option value="Umzoniana">Umzoniana</option>
			<option value="Waterdown Dam">Waterdown Dam</option>
			<option value="Wildeperdehoek">Wildeperdehoek</option>
			<option value="Willopark">Willopark</option>
			<option value="Wriggelswade Dam">Wriggelswade Dam</option>
			<option value="Other (EL Office)">Other (EL Office)</option>
		</optgroup>
		<optgroup label="Mthatha Office">
			<option value="All Saints">AllSaints</option>
			<option value="Amanzamnyama">Amanzamnyama</option>
			<option value="Baziya">Baziya</option>
			<option value="Bele">Bele</option>
			<option value="Butterworth">Butterworth</option>
			<option value="Cengcane">Cengcane</option>
			<option value="Cezu">Cezu</option>
			<option value="Coffee Bay">Coffee Bay</option>
			<option value="Cwebe Nat Res">Cwebe Nat Res</option>
			<option value="Dwesa Nat Res">Dwesa Nat Res</option>
			<option value="Engcobo Pris">Engcobo Pris</option>
			<option value="Engcobo Manina">Engcobo Manina</option>
			<option value="Etwa">Etwa</option>
			<option value="Fort Donald">Fort Donald</option>
			<option value="Gomo">Gomo</option>
			<option value="Ibika">Ibika</option>
			<option value="Indlunkulu">Indlunkulu</option>
			<option value="Intsizwa">Intsizwa</option>
			<option value="Kentane">Kentane</option>
			<option value="Langeni Forest">Langeni Forest</option>
			<option value="Libode">Libode</option>
			<option value="Lusikisiki">Lusikisiki</option>
			<option value="Manubie">Manubie</option>
			<option value="Mhlahlane">Mhlahlane</option>
			<option value="Mkhambathi Nat Res">Mkhambathi Nat Res</option>
			<option value="Mthatha Airport">Mthatha Airport</option>
			<option value="Mthatha JOC">Mthatha JOC</option>
			<option value="Mthatha Pris">Mthatha Pris</option>
			<option value="Mthatha Radar Site">Mthatha Radar Site</option>
			<option value="Mthatha Water Tower">Mthatha Water Tower</option>
			<option value="Mthintloni">Mthintloni</option>
			<option value="Ndlindindi">Ndlindindi</option>
			<option value="Ngqeleni">Ngqeleni</option>
			<option value="Ngunduza">Ngunduza</option>
			<option value="Nomadamba">Nomadamba</option>
			<option value="Nkobongo">Nkobongo</option>
			<option value="Nqadu Heights">Nqadu Heights</option>
			<option value="Nququ">Nququ</option>
			<option value="Ntsubane">Ntsubane</option>
			<option value="Ntywenka">Ntywenka</option>
			<option value="Papane">Papane</option>	
			<option value="Port St Johns">Port St Johns</option>
			<option value="PortStJohns Pol">PortStJohns Pol</option>
			<option value="Qunu">Qunu</option>
			<option value="Sebeni">Sebeni</option>
			<option value="Silaka Nat Res">Silaka Nat Res</option>
			<option value="Tsojana">Tsojana</option>
			<option value="Wilo">Wilo</option>
			<option value="Xhorana">Xhorana</option>
			<option value="Xhorha Pris">Xhorha Pris</option>
			<option value="Other (UT Office)">Other (UT Office)</option>
		</optgroup>
		<optgroup label="Port Elizabeth Office">
			<option value="Aberdeen">Aberdeen</option>
			<option value="Addo Agr">Addo Agr</option>	
			<option value="Addo Elephant Park">Addo Elephant Park</option>
			<option value="Adendorp">Adendorp</option>
			<option value="Albert Vale farm">Albert Vale farm</option>
			<option value="Alexandria Bos">Alexandria Bos</option>
			<option value="Barkley East">Barkley East</option>
			<option value="Bedford Mun">Bedford Mun</option>
			<option value="Beelhouersfontein">Beelhouersfontein</option>
			<option value="Bird Island">Bird Island</option>
			<option value="Bloemhof">Bloemhof</option>
			<option value="Blue Horizons Bay">Blue Horizons Bay</option>
			<option value="Buffelsfontein">Buffelsfontein</option>
			<option value="Bultfontein">Bultfontein</option>
			<option value="Cape St Francis">Cape St Francis</option>
			<option value="Coetzeeskraal">Coetzeeskraal</option>
			<option value="Colchester">Colchester</option>
			<option value="Cradock-Mun">Cradock-Mun</option>
			<option value="Darlington Dam">Darlington Dam</option>
			<option value="De Hoogte">De Hoogte</option>
			<option value="Elandsfontein">Elandsfontein</option>
			<option value="Elands River">Elands River</option>
			<option value="Flower Reserve">Flower Reserve</option>
			<option value="Fort Beaufort">Fort Beaufort</option>
			<option value="Fort Beaufort Mun">Fort Beaufort Mun</option>
			<option value="Fort Brown SAPS">Fort Brown SAPS</option>
			<option value="Gelegsfontein">Gelegsfontein</option>
			<option value="Glen Roy">Glen Roy</option>
			<option value="Graaf-Reinet">Graaf-Reinet</option>
			<option value="Grahamstown">Grahamstown</option>
			<option value="Grahamstown Cor Service">Grahamstown Cor Service</option>
			<option value="Grahamstown Mun">Grahamstown Mun</option>
			<option value="Groendal Bos">Groendal Bos</option>
			<option value="Grootdam">Grootdam</option>
			<option value="Grapevale">Grapevale</option>
			<option value="Hankey Pol">Hankey Pol</option>
			<option value="Harmonie Frm">Harmonie Frm</option>
			<option value="Hillston">Hillston</option>
			<option value="Hoeksfontein">Hoeksfontein</option>
			<option value="Hogsback Plantation">Hogsback Plantation</option>
			<option value="Hofmeyer Mun">Hofmeyer Mun</option>
			<option value="Hopevale">Hopevale</option>
			<option value="Humansdorp">Humansdorp</option>
			<option value="Humewood Golf Club">Humewood Golf Club</option>
			<option value="Jeffreys Bay">Jeffreys Bay</option>
			<option value="Kamferskraal">Kamferskraal</option>
			<option value="Kareedouw Pol">Kareedouw Pol</option>
			<option value="Kendrew Estates">Kendrew Estates</option>
			<option value="Klipfontein">Klipfontein</option>
			<option value="Kliplaat">Kliplaat</option>
			<option value="Knell">Knell</option>
			<option value="Kouga Dam">Kouga Dam</option>
			<option value="Kriegers Kraal">Kriegers Kraal</option>
			<option value="Leliekloof">Leliekloof</option>
			<option value="Loskop">Loskop</option>
			<option value="Ngqura">Ngquara(Coega)</option>
			<option value="Nooitgedacht">Nooitgedacht</option>
			<option value="Patensie">Patensie</option>
			<option value="Philadelphia">Philadelphia</option>
			<option value="Port Alfred">Port Alfred</option>
			<option value="Port Alfred Golf Club">Port Alfred Golf Club</option>
			<option value="Port of Ngqura">Port of Ngqura</option>
			<option value="PE Airport">PE Airport</option>
			<option value="PE AWS">PE AWS</option>
			<option value="PE Chatty AWS">PE Chatty AWS</option>
			<option value="PE Chatty Fire Stn ARS">PE Chatty Fire Stn ARS</option>
			<option value="PE Coega River L">PE Coega River L</option>
			<option value="PE Coega River U">PE Coega River U</option>
			<option value="PE Fettes Rd">PE Fettes Rd</option>
			<option value="PE Longmore Bos">PE Longmore Bos</option>
			<option value="PE Lovemore Res">PE Lovemore Res</option>
			<option value="PE Motherwell">PE Motherwell</option>
			<option value="PE Riverstone Br">PE Riverstone Br</option>
			<option value="PE Shark Rock Pier">PE Shark Rock Pier</option>
			<option value="PE Third Avenue Dip">PE Third Avenue Dip</option>
			<option value="Prospect farm">Prospect farm</option>
			<option value="Quaggasdrift">Quaggasdrift</option>
			<option value="Rocklands">Rocklands</option>
			<option value="Roodebloem">Roodebloem</option>
			<option value="Rooikop">Rooikop</option>
			<option value="Rygerspoort">Rygerspoort</option>
			<option value="Schuinspad">Schuinspad</option>
			<option value="Skilderkrans">Skilderkrans</option>
			<option value="Somerset East">Somerset East</option>
			<option value="Spring Valley">Spring Valley</option>
			<option value="St Albans Prison">St Albans Prison</option>
			<option value="Steynsburg">Steynsburg</option>
			<option value="Steytlerville Mag">Steytlerville Mag</option>
			<option value="Struishoek">Struishoek</option>
			<option value="Studtis Pol">Studtis Pol</option>
			<option value="Swartkops">Swartkops</option>
			<option value="Swartkops PS">Swartkops PS</option>
			<option value="Tafelberg Hall">Tafelberg Hall</option>
			<option value="Telpoort">Telpoort</option>
			<option value="The Pines">The Pines</option>
			<option value="Tygerhoek">Tygerhoek</option>
			<option value="Uitenhage">Uitenhage</option>
			<option value="Van Stadens rsv">Van Stadens rsv</option>
			<option value="vd Waltshoek">vd Waltshoek</option>
			<option value="Vleiplaats">Vleiplaats</option>
			<option value="Walplaas">Walplaas</option>
			<option value="Winterhoek">Winterhoek</option>
			<option value="Witelsbos Bos">Witelsbos Bos</option>
			<option value="Wriggleswade">Wriggleswade</option>
			<option value="Zuur Anys">Zuur Anys</option>
			<option value="Zuurberg Bos">Zuurberg Bos</option>
			<option value="Other (PE Office)">Other (PE OFFICE)</option>
		</optgroup>
		
		<optgroup label="EXTERNAL REGIONS">
		
			<!--<optgroup label="Eastern Cape">
				<option value="Aberdeen">Aberdeen</option>
				<option value="Aliwal North">Aliwal North</option>
				<option value="East London">East London</option>
				<option value="Mthatha">Mthatha</option>
				<option value="Port Elizabeth">Port Elizabeth</option>
				<option value="Eastern Cape - Other">Eastern Cape - Other</option>
			</optgroup>-->
	
			
			<optgroup label="Free State">
				<option value="Bloemfontein">Bloemfontein</option>
				<option value="Bethlehem">Bethlehem</option>
				<option value="Virginia">Virginia</option>
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
<a href="easterncape.html">Home</a> 
</p>
</td>

</body>
</html>




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

<form action="to_db_wc.php" method ="post">
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
<td><b>WC</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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
		<optgroup label="Cape Point Office">
			
			<option value="Cape Point">Cape Point</option>
			<option value="Cape Point Other">Cape Point Other</option>
		</optgroup>
		<optgroup label="Cape Town">
			<option value="Cape Town Office">Cape Town Office</option>
			<option value="Achtervlei">Achtervlei</option>
			<option value="Alpha">Alpha</option>
			<option value="Altydgedacht">Altydgedacht</option>
			<option value="Ashton">Ashton</option>
			<option value="Atlantis">Atlantis</option>
			<option value="Bellville-Golf Course">Bellville-Golf Course</option>
			<option value="Bellevue">Bellevue</option>
			<option value="Bettys Bay">Bettys Bay</option>
			<option value="Blydskap">Blydskap</option>
			<option value="Bokveldskloof">Bokveldskloof</option>
			<option value="Bonnievale-Sonskyn">Bonnievale-Sonskyn</option>
			<option value="Bontebokpark">Bontebokpark</option>
			<option value="Boontjieskraal">Boontjieskraal</option>
			<option value="Boskloof">Boskloof</option>
			<option value="Bredasdorp">Bredasdorp</option>
			<option value="Bredasdorp Klipdale Agri">Bredasdorp Klipdale Agri</option>
			<option value="Buffelsjag">Buffelsjag</option>
			<option value="Cape Algulhas">Cape Algulhas</option>
			<option value="Cape Columbine">Cape Columbine</option>
			<option value="Ceres">Ceres</option>
			<option value="CT Royal Yacht Club">CT Royal Yacht Club</option>
			<option value="Danger Point">Danger Point</option>
			<option value="De Doorns">De Doorns</option>
			<option value="De Mond">De Mond</option>
			<option value="Durbanville-Blaauwblommetjieskloof">Durbanville-Blaauwblommetjieskloof</option>
			<option value="Dwarsrivier">Dwarsrivier</option>
			<option value="Eendekuil">Eendekuil</option>
			<option value="Elgin">Elgin</option>
			<option value="Elim SAPS">Elim SAPS</option>
			<option value="Excelsior">Excelsior</option>
			<option value="Fish Hoek">Fish Hoek</option>
			<option value="Franschhoek">Franschhoek</option>
			<option value="Geelbek">Geelbek</option>
			<option value="Genadendal Meulrivier">Genadendal Meulrivier</option>
			<option value="Grabouw">Grabouw</option>
			<option value="Greyton">Greyton</option>
			<option value="Groote Schuur">Groote Schuur</option>
			<option value="Haasvlakte">Haasvlakte</option>
			<option value="Helderberg">Helderberg</option>
			<option value="Hermanus">Hermanus</option>
			<option value="Houtbay Forestry">Houtbay Forestry</option>
			<option value="Jan De Boers">Jan De Boers</option>
			<option value="Jonkershoek">Jonkershoek</option>
			<option value="Kenilworth Race Course">Kenilworth Race Course</option>
			<option value="Kernkrag">Kernkrag</option>
			<option value="Kirstenbosch">Kirstenbosch</option>
			<option value="Klaasjagersberg">Klaasjagersberg</option>
			<option value="Kleinfontein">Kleinfontein</option>
			<option value="Kleinmond">Kleinmond</option>
			<option value="Klondyke">Klondyke</option>
			<option value="Kluitjieskraal">Kluitjieskraal</option>
			<option value="Koringberg">Koringberg</option>
			<option value="Kwaggaskloof">Kwaggaskloof</option>
			<option value="Laaiplek Hotel">Laaiplek Hotel</option>
			<option value="Langebaanweg">Langebaanweg</option>
			<option value="Langebaanweg Aviation">Langebaanweg Aviation</option>
			<option value="Langgewens">Langgewens</option>
			<option value="Lelyfontein">Lelyfontein</option>
			<option value="Maitland">Maitland</option>
			<option value="Malmesbury">Malmesbury</option>
			<option value="McGregor">McGregor</option>
			<option value="Middeldeurvlei">Middeldeurvlei</option>
			<option value="MitchellsPlain-Wolfgat">MitchellsPlain-Wolfgat</option>
			<option value="Molteno">Molteno</option>
			<option value="Montagu">Montagu</option>
			<option value="Montagu-Baden">Montagu-Baden</option>
			<option value="Monwabizi Beach M-Plain">Monwabizi Beach M-Plain</option>
			<option value="Moorresburg">Moorresburg</option>
			<option value="Moreson Slanghoek Valley">Moreson Slanghoek Valley</option>
			<option value="Nuweberg">Nuweberg</option>
			<option value="Odessa">Odessa</option>
			<option value="Oudebos">Oudebos</option>
			<option value="Overberg">Overberg</option>
			<option value="Paarl">Paarl</option>
			<option value="Piketberg">Piketberg</option>
			<option value="Plaatjieskraal">Plaatjieskraal</option>
			<option value="Porterville">Porterville</option>
			<option value="Remhoogte">Remhoogte</option>
			<option value="Rhebokskraal">Rhebokskraal</option>
			<option value="Robben Island">Robben Island</option>
			<option value="Robertson">Robertson</option>
			<option value="Robertson-Heartstone Vineyard">Robertson-Heartstone Vineyard</option>
			<option value="Robertsvlei">Robertsvlei</option>
			<option value="Rondevlei">Rondevlei</option>
			<option value="Rustfontein">Rustfontein</option>
			<option value="SAAO">SAAO</option>
			<option value="Saldanha Kuspatrollie">Saldanha Kuspatrollie</option>
			<option value="Silvermine">Silvermine</option>
			<option value="Simonstown">Simonstown</option>
			<option value="Slangkop">Slangkop</option>
			<option value="Somerset West">Somerset West</option>
			<option value="Steenbras 1">Steenbras 1</option>
			<option value="Steenbras 2">Steenbras 2</option>
			<option value="Steenbras 3">Steenbras 3</option>
			<option value="Steenbras 4">Steenbras 4</option>
			<option value="Stellenbosch">Stellenbosch</option>
			<option value="Stettynskloof">Stettynskloof</option>
			<option value="Strand">Strand</option>
			<option value="Struisbaai">Struisbaai</option>
			<option value="Swellendam">Swellendam</option>
			<option value="Swellendam-Marloth">Swellendam-Marloth</option>
			<option value="Swellendam-Napkysmond">Swellendam-Napkysmond</option>
			<option value="Table Mountain House">Table Mountain House</option>
			<option value="Tierhoek Piketberg">Tierhoek Piketberg</option>
			<option value="Touwsrivier">Touwsrivier</option>
			<option value="Tulbagh">Tulbagh</option>
			<option value="Tulbagh-Obiqua">Tulbagh-Obiqua</option>
			<option value="Tussenbeide">Tussenbeide</option>
			<option value="Tygerhoek">Tygerhoek</option>
			<option value="Villiersdorp-SOS">Villiersdorp-SOS</option>
			<option value="Vredenburg">Vredenburg</option>
			<option value="Vrugbaar">Vrugbaar</option>
			<option value="Walker Bay">Walker Bay</option>
			<option value="Watervalberg">Watervalberg</option>
			<option value="Welbedacht">Welbedacht</option>
			<option value="Welgegund">Welgegund</option>
			<option value="Wellington">Wellington</option>
			<option value="Wolseley">Wolseley</option>
			<option value="Woodhead Dam">Woodhead Dam</option>
			<option value="Worcester">Worcester</option>
			<option value="Zoetensdalvlei">Zoetensdalvlei</option>
			<option value="Cape Town Other">Cape Town Other</option>
		</optgroup>
		<optgroup label="George">
			<option value="George Office">George Office</option>
			<option value="Albertinia">Albertinia</option>
			<option value="Allemansdrif">Allemansdrif</option>
			<option value="Anysrivier">Anysrivier</option>
			<option value="Avontuur Bellevue">Avontuur Bellevue</option>
			<option value="Avontuur Boskloof">Avontuur Boskloof</option>
			<option value="Barrydale">Barrydale</option>
			<option value="Barrydale Kleindoornrivier">Barrydale Kleindoornrivier</option>
			<option value="Baviaans">Baviaans</option>
			<option value="Beaufort-Wes">Beaufort-Wes</option>
			<option value="Beaufort-Wes Dorp">Beaufort-Wes Dorp</option>
			<option value="Beaufort-Wes Stolshoek">Beaufort-Wes Stolshoek</option>
			<option value="Bergplaas Bos">Bergplaas Bos</option>
			<option value="Blouboskuil">Blouboskuil</option>
			<option value="Bloukrans Bos">Bloukrans Bos</option>
			<option value="Blueliliesbush Bos">Blueliliesbush Bos</option>
			<option value="Bosleliesteeg">Bosleliesteeg</option>
			<option value="Braamrivier">Braamrivier</option>
			<option value="Brandhoek">Brandhoek</option>
			<option value="Bruinklip">Bruinklip</option>
			<option value="Buffelsklip">Buffelsklip</option>
			<option value="Buffelsnek Bos">Buffelsnek Bos</option>
			<option value="Calitzdorp Pol">Calitzdorp Pol</option>
			<option value="Calitzdorp Waterwerke">Calitzdorp Waterwerke</option>
			<option value="Calitzdorp Dam">Calitzdorp Dam</option>
			<option value="Concordia Bos">Concordia Bos</option>
			<option value="Damaskus">Damaskus</option>
			<option value="De Hoop">De Hoop</option>
			<option value="De Rust">De Rust</option>
			<option value="Die Eiland">Die Eiland</option>
			<option value="Diepkloof">Diepkloof</option>
			<option value="Dwars-in-die-weg">Dwars-in-die-weg</option>
			<option value="Dysselsdorp">Dysselsdorp</option>
			<option value="Farleigh Bos">Farleigh Bos</option>
			<option value="Floriskraaldam">Floriskraaldam</option>
			<option value="Garcia Bos">Garcia Bos</option>
			<option value="George">George</option>
			<option value="George Airport">George Airport</option>
			<option value="George Geelhoutboom">George Geelhoutboom</option>
			<option value="George Jonkershoek">George Jonkershoek</option>
			<option value="George Piek">George Piek</option>
			<option value="George Tierkop">George Tierkop</option>
			<option value="George Waboomskraal">George Waboomskraal</option>	
			<option value="George Witfontein">George Witfontein</option>
			<option value="Glentana">Glentana</option>
			<option value="Goudveld Bos">Goudveld Bos</option>
			<option value="Gouna Bos">Gouna Bos</option>
			<option value="Gouritsmond">Gouritsmond</option>
			<option value="Grootbrakrivier">Grootbrakrivier</option>
			<option value="Harkerville Bos">Harkerville Bos</option>
			<option value="Heidelberg C/K Pol">Heidelberg C/K Pol</option>
			<option value="Heidelberg-Kruisrivier">Heidelberg-Kruisrivier</option>
			<option value="Herold">Herold</option>
			<option value="Herold-Lovain">Herold Lovain</option>
			<option value="Jonkersberg Bos">Jonkersberg Bos</option>
			<option value="Joubertina School">Joubertina School</option>
			<option value="Joubertina 2">Joubertina 2</option>
			<option value="Kammanassieberg Vinkrivier">Kammanassieberg Vinkrivier</option>
			<option value="Karatara Bos">Karatara Bos</option>
			<option value="Keurboomsrivier Bos">Keurboomsrivier Bos</option>
			<option value="Klaarstroom El Yolo">Klaarstroom El Yolo</option>
			<option value="Klaarstroom Pol">Klaarstroom Pol</option>
			<option value="Knysna">Knysna</option>
			<option value="Knysna Charlesford">Knysna Charlesford</option>
			<option value="Knysna Diepwalle">Knysna Diepwalle</option>
			<option value="Knysna-Klein Grysbos">Knysna-Klein Grysbos</option>
			<option value="Knysna Meer">Knysna Meer</option>
			<option value="Knysna-Plat Bos Kop">Knysna-Plat Bos Kop</option>
			<option value="Knysna TNK">Knysna TNK</option>
			<option value="Kruisfontein Bos">Kruisfontein Bos</option>
			<option value="Kruisrivier">Kruisrivier</option>
			<option value="Laingsburg">Laingsburg</option>
			<option value="Laingsburg Blaauwfontein">Laingsburg Blaauwfontein</option>
			<option value="Laingsburg Excelsior">Laingsburg Excelsior</option>
			<option value="Laingsburg Middeldrif">Laingsburg Middeldrif</option>
			<option value="Laingsburg Middelplaas">Laingsburg Middelplaas</option>
			<option value="Laingsburg Mun">Laingsburg Mun</option>
			<option value="Laingsburg Sandkraal">Laingsburg Sandkraal</option>
			<option value="Ladismith">Ladismith</option>
			<option value="Ladismith Anysberg">Ladismith Anysberg</option>
			<option value="Ladismith Buffelsvlei">Ladismith Buffelsvlei</option>
			<option value="Ladismith TNK">Ladismith TNK</option>
			<option value="Lottering Bos">Lottering Bos</option>
			<option value="Matjesvlei Gamka-Bo">Matjesvlei Gamka-Bo</option>
			<option value="Merweville Pol">Merweville Pol</option>
			<option value="Mooredale">Mooredale</option>
			<option value="Mossel Bay">Mossel Bay</option>
			<option value="Mossel Bay Kwepertuin">Mossel Bay Kwepertuin</option>
			<option value="Mossel Bay Robinson Pass">Mossel Bay Robinson Pass</option>
			<option value="Mossel Bay Rooiblom">Mossel Bay Rooiblom</option>
			<option value="Mosselbaai-TNK">Mosselbaai-TNK</option>
			<option value="Oudtshoorn">Oudtshoorn</option>
			<option value="Oudtshoorn Cango">Oudtshoorn Cango</option>
			<option value="Oudtshoorn De Hoek">Oudtshoorn De Hoek</option>
			<option value="Ou Mure">Ou Mure</option>
			<option value="Plettenbergbaai">Plettenbergbaai</option>
			<option value="Plettenberg Bay Eden Village">Plettenberg Bay Eden Village</option>
			<option value="Plettenberg Bay Newlands">Plettenberg Bay Newlands</option>
			<option value="Prince Albert Combrinkskraal">Prince Albert Combrinkskraal</option>
			<option value="Prince Albert TNK">Prince Albert TNK</option>
			<option value="Prins Albert Swartrivier">Prins Albert Swartrivier</option>
			<option value="Rietbron">Rietbron</option>
			<option value="Rietbron-De Puts">Rietbron-De Puts</option>
			<option value="Riversdal Grootbos">Riversdal Grootbos</option>
			<option value="Riversdale">Riversdale</option>
			<option value="Riversdale Assegaaibosch">Riversdale Assegaaibosch</option>
			<option value="Rolhoek">Rolhoek</option>
			<option value="Rondawel">Rondawel</option>
			<option value="Rondekop">Rondekop</option>
			<option value="Rondevlei">Rondevlei</option>
			<option value="Rooiklip">Rooiklip</option>
			<option value="Rooirivier">Rooirivier</option>
			<option value="Saaiplaas">Saaiplaas</option>
			<option value="Sandhoogte-PUR">Sandhoogte-PUR</option>
			<option value="Sedgefield-Groenvlei">Sedgefield-Groenvlei</option>
			<option value="Stilbaai">Stillbaai</option>
			<option value="Stilbaai SAPD">Stilbaai SAPD</option>
			<option value="Stormriver Forest Fern Farm">Stormriver Forest Fern Farm</option>
			<option value="Stormriver Witteklip">Stormriver Witteklip</option>
			<option value="Stormsrivier Dorp">Stormsrivier Dorp</option>
			<option value="Strawberry Hill Bos">Strawberry Hill Bos</option>
			<option value="Suurbrak Lismore">Suurbrak Lismore</option>
			<option value="Tsitsikamma">Tsitsikamma</option>
			<option value="Uniondale">Uniondale</option>
			<option value="Uniondale-De Hoop">Uniondale-De Hoop</option>
			<option value="Van Reenens Crest">Van Reenens Crest</option>
			<option value="Van Wyksdorp">Van Wyksdorp</option>
			<option value="Welbedag">Welbedag</option>
			<option value="Welgelegen">Welgelegen</option>
			<option value="Weltevreden">Weltevreden</option>
			<option value="Wilderness Dieprivier">Wilderness Dieprivier</option>
			<option value="Wilderness Heights">Wilderness Heights</option>
			<option value="Wildernis">Wildernis</option>
			<option value="Willowmore">Willowmore</option>
			<option value="Witsand Westfield">Witsand Westfield</option>
			<option value="Zachariasfontein">Zachariasfontein</option>
			<option value="Zeekoevlei">Zeekoevlei</option>
			<option value="Zoar-Col">Zoar-Col</option>
			<option value="George Other">George Other</option>
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
		
			<!--<optgroup label="Western Cape">
				<option value="Cape Point">Cape Point</option>
				<option value="Cape Town">Cape Town</option>
				<option value="George">George</option>
				<option value="Western Cape - Other">Western Cape - Other</option>
			</optgroup>-->
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
<a href="westerncape.html">Home</a> 
</p>
</td>

</body>
</html>



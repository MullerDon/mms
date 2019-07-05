
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

<form action="to_db_fs.php" method ="post">
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
<td><b>FS</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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

		<optgroup label="Bethlehem">
			
			<option value="Bethlehem Office">Bethlehem Office</option>
			<option value="Arlington">Arlington</option>
			<option value="Balquidder">Balquidder</option>
			<option value="Belfry">Belfry</option>
			<option value="Bellavista">Bellavista</option>
			<option value="Belmont">Belmont</option>
			<option value="Bethesda">Bethesda</option>
			<option value="Bethlehem">Bethlehem</option>
			<option value="Bethlehem TNK">Bethlehem TNK</option>
			<option value="Berlin">Berlin</option>
			<option value="Catharinasvlei">Catharinasvlei</option>
			<option value="Clocolan">Clocolan</option>
			<option value="Concordia Landgoed">Concordia Landgoed</option>
			<option value="De Kamp">De Kamp</option>
			<option value="Dewetshoop">Dewetshoop</option>
			<option value="Doornkloof">Doornkloof</option>
			<option value="Driefontein">Driefontein</option>
			<option value="Edenville MUN">Edenville MUN</option>
			<option value="Elizabeth">Elizabeth</option>
			<option value="Elma">Elma</option>
			<option value="Erfdeel">Erfdeel</option>
			<option value="Eureka">Eureka</option>
			<option value="Evening Star">Evening Star</option>
			<option value="Ficksburg">Ficksburg</option>
			<option value="Ficksburg POL">Ficksburg POL</option>
			<option value="Florida">Florida</option>
			<option value="Fouriesburg POL">Fouriesburg POL</option>
			<option value="Frankfort">Frankfort</option>
			<option value="Groenvlei">Groenvlei</option>
			<option value="Harrismith TNK">Harrismith TNK</option>
			<option value="Heilbron Prison">Heilbron Prison</option>
			<option value="Hennerman">Hennerman</option>
			<option value="Jacobsdal">Jacobsdal</option>
			<option value="Kalkfontein">Kalkfontein</option>
			<option value="Kestell POL">Kestell POL</option>
			<option value="Kestell VRB">Kestell VRB</option>
			<option value="Koeberg">Koeberg</option>
			<option value="Koppies Weltevrede">Koppies Weltevrede</option>
			<option value="Kroonstad">Kroonstad</option>
			<option value="Kroonstad - Belmont">Kroonstad - Belmont</option>
			<option value="Kroonstad - Katbos">Kroonstad - Katbos</option>
			<option value="Lambertina">Lambertina</option>
			<option value="Leliefontein">Leliefontein</option>
			<option value="Le Long">Le Long</option>
			<option value="Lindley MUN">Lindley MUN</option>
			<option value="Lorina">Lorina</option>
			<option value="Marne Monsanto">Marne Monsanto</option>
			<option value="Marquard POL">Marquard POL</option>
			<option value="Mequatlingsnek">Mequatlingsnek</option>
			<option value="Mooimanshoek">Mooimanshoek</option>
			<option value="Moreson">Moreson</option>
			<option value="Oorsprongberg">Oorsprongberg</option>
			<option value="Oosthuishoek">Oosthuishoek</option>
			<option value="Oppermanskraal">Oppermanskraal</option>
			<option value="Paul Roux MUN">Paul Roux MUN</option>
			<option value="Pekabrug POL">Pekabrug POL</option>
			<option value="Petra">Petra</option>
			<option value="Petrus Steyn MUN">Petrus Steyn MUN</option>
			<option value="Pot-The-Red">Pot-The-Red</option>
			<option value="Record">Record</option>
			<option value="Reitz - Silo">Reitz - Silo</option>
			<option value="Rietfontein">Rietfontein</option>
			<option value="Rocco">Rocco</option>
			<option value="Rooibuilt">Rooibuilt</option>
			<option value="Rust - Petrus Steyn">Rust - Petrus Steyn</option>
			<option value="Schoongezicht">Skoongezicht</option>
			<option value="Senekal AGR">Senekal AGR</option>
			<option value="Slaapplaats">Slaapplaats</option>
			<option value="Smalfontein">Smalfontein</option>
			<option value="Soetvelde FARM">Soetvelde FARM</option>
			<option value="Spioenkop">Spioenkop</option>
			<option value="Stephanium">Stephanium</option>
			<option value="Sterkfontein Dam">Sterkfontein Dam</option>
			<option value="Steynsrus MUN">Steynsrus MUN</option>
			<option value="Strydfontein">Strydfontein</option>
			<option value="Swartkoppie">Swartkoppie</option>
			<option value="Swinburne">Swinburne</option>
			<option value="Taaibos">Taaibos</option>
			<option value="Tertuis">Tertuis</option>
			<option value="Tevrede">Tevrede</option>
			<option value="Trentham">Trentham</option>
			<option value="Tweeling POL">Tweeling POL</option>
			<option value="Tygerfontein">Tygerfontein</option>
			<option value="Uintjieshoek">Uintjieshoek</option>
			<option value="Vadersgift">Vadersgift</option>
			<option value="Van Reneen">Van Reneen</option>
			<option value="Varkenspruit">Varkenspruit</option>
			<option value="Ventersburg MAG">Ventersburg MAG</option>
			<option value="Venus">Venus</option>
			<option value="Verkykerskop POL">Verkykerskop POL</option>
			<option value="Viljoenskroon SAPS">Viljoenskroon SAPS</option>
			<option value="Visgat">Visgat</option>
			<option value="Vrede">Vrede</option>
			<option value="Warden-Heritage">Warden-Heritage</option>
			<option value="Warden Skoolstraat">Warden Skoolstraat</option>
			<option value="Wasklip">Wasklip</option>
			<option value="Waterstroom">Waterstroom</option>
			<option value="Weltevrede">Weltevrede</option>
			<option value="Wildealskraal">Wildealskraal</option>
			<option value="Winburg DCS">Winburg DCS</option>
			<option value="Witsieshoek">Witsieshoek</option>
			<option value="Wonderkuil">Wonderkuil</option>
			<option value="Woudzicht">Woudzicht</option>
			<option value="W.P.Wildtuin">W.P.Wildtuin</option>
			<option value="Zuurkloof">Zuurkloof</option>
			<option value="Zybradina">Zybradina</option>
			<option value="Bethlehem Other">Bethlehem Other</option>
		</optgroup>

		<optgroup label="Bloemfontein">
			<option value="Bloemfontein Airport">Bloemfontein Airport</option>
			<option value="Bloemfontein City">Bloemfontein City</option>
			<option value="Bloemfontein Office">Bloemfontein Office</option>
			<option value="Aliwal North">Aliwal North</option>
			<option value="Amalia POL">Amalia POL</option>
			<option value="Bainsvlei MUN">Bainsvlei MUN</option>
			<option value="Balkfontein">Balkfontein</option>
			<option value="Benoni">Benoni</option>
			<option value="Bethulie POL">Bethulie POL</option>
			<option value="Bleskop">Bleskop</option>
			<option value="Bloemhof">Bloemhof</option>
			<option value="Boshof TNK">Boshof TNK</option>
			<option value="Bothaville MUN">Bothaville MUN</option>
			<option value="Bultfontein MUN">Bultfontein MUN</option>
			<option value="Burgersdorp POL">Burgersdorp POL</option>
			<option value="Burnet">Burnet</option>
			<option value="Christiana TNK">Christiana TNK</option>
			<option value="Convamore">Convamore</option>
			<option value="Cyferfontein">Cyferfontein</option>
			<option value="Dankbaar">Dankbaar</option>
			<option value="Dealsville MAG">Dealsville MAG</option>
			<option value="De Hoop">De Hoop</option>
			<option value="Dewetsdorp POL">Dewetsdorp POL</option>
			<option value="Doornpoort">Doornpoort</option>
			<option value="Driekop">Driekop</option>
			<option value="Eensaam">Eensaam</option>
			<option value="Ellesmere">Ellesmere</option>
			<option value="Excelsoir">Excelsoir</option>
			<option value="Fauresmith">Fauresmith</option>
			<option value="Geluksvlei">Geluksvlei</option>
			<option value="Glen">Glen</option>
			<option value="Goedehoop">Goedehoop</option>
			<option value="Goedemoed POL">Goedemoed POL</option>
			<option value="Grasfontein">Grasfontein</option>
			<option value="Graspan">Graspan</option>
			<option value="Grootkuil">Grootkuil</option>
			<option value="Hamelfontein">Hamelfontein</option>
			<option value="Helvellyn">Helvellyn</option>
			<option value="Hendrik Theron">Hendrik Theron</option>
			<option value="Hertzogville POL">Hertzogville POL</option>
			<option value="Hobhouse POL">Hobhouse POL</option>
			<option value="Hoopstad">Hoopstad</option>
			<option value="Hughenden">Hughenden</option>
			<option value="Idomia">Idomia</option>
			<option value="Jagersfontein POL">Jagersfontein POL</option>
			<option value="Ketelfontein">Ketelfontein</option>
			<option value="Kingswood">Kingswood</option>
			<option value="Knellpoort Dam">Knellpoort Dam</option>
			<option value="Kommissiepoort">Kommissiepoort</option>
			<option value="Koppiesvlei">Koppiesvlei</option>
			<option value="Krugersdrift">Krugersdrift</option>		
			<option value="Lady Grey">Lady Grey</option>
			<option value="Leeudoringstad SKL">Leeudoringstad SKL</option>
			<option value="Leeuheuwel">Leeuheuwel</option>
			<option value="Leyden">Leyden</option>
			<option value="Lillydale">Lillydale</option>
			<option value="Luckhoff POL">Luckhoff POL</option>
			<option value="Majuba">Majuba</option>
			<option value="Maselspoort Dam">Maselspoort Dam</option>
			<option value="Middelplaats">Middelplaats</option>
			<option value="Mooi Gelee">Mooi Gelee</option>
			<option value="Nelsdrift">Nelsdrift</option>
			<option value="Odendaalsrus">Odendaalsrus</option>
			<option value="Oranje">Oranje</option>
			<option value="Paradys">Paradys</option>
			<option value="Philippolis POL">Philippolis POL</option>
			<option value="Reddersburg POL">Reddersburg POL</option>
			<option value="Riviera">Riviera</option>
			<option value="Roodepoort">Roodepoort</option>
			<option value="Rosary">Rosary</option>
			<option value="Rouxville POL">Rouxville POL</option>
			<option value="Sacsonia">Sacsonia</option>
			<option value="SA Lombard Nat Res">SA Lombard Nat Res</option>
			<option value="Scheenspost">Scheenspost</option>
			<option value="Schweizer-Reneke POL">Schweizer-Reneke POL</option>
			<option value="Slangfontein">Slangfontein</option>
			<option value="Smithfield MUN">Smithfield MUN</option>
			<option value="Springfontein MUN">Springfontein MUN</option>
			<option value="Steunmekaar POL">Steunmekaar</option>
			<option value="Swartkoppies">Swartkoppies</option>
			<option value="Sweetwater">Sweetwater</option>
			<option value="Tevrede">Tevrede</option>
			<option value="Thaba Nchu">Thaba Nchu</option>
			<option value="The Cliff">The Cliff</option>
			<option value="Theunissen Groenpunt">Theunissen Groenpunt</option>
			<option value="Tierpoort POL">Tierpoort POL</option>
			<option value="Trompsburg POL">Trompsburg POL</option>
			<option value="Tweespruit">Tweespruit</option>
			<option value="Vanrooyenshek POL">Vanrooyenshek POL</option>
			<option value="Verkeerdevlei POL">Verkeerdevlei POL</option>
			<option value="Waterland">Waterland</option>
			<option value="Waterpaslaagte">Waterpaslaagte</option>
			<option value="Welkom">Welkom</option>
			<option value="Wepener">Wepener</option>
			<option value="Westminister Estate">Westminister Estate</option>
			<option value="Whitbourne">Whitbourne</option>
			<option value="Williamstrip">Williamstrip</option>
			<option value="Zastron TNK">Zastron TNK</option>
			<option value="Bloemfontein Other">Bloemfontein Other</option>
		</optgroup>

		<!--<optgroup label="Mahikeng">
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
			<option value="Wonderboom Gate">Wonderboom Gate</option>
			<option value="Zeerust">Zeerust</option>
			<option value="Mahikeng Other">Mahikeng Other</option>
		</optgroup>-->
		
		<optgroup label="EXTERNAL REGIONS">
		
			<optgroup label="Eastern Cape">
				<option value="Aberdeen">Aberdeen</option>
				<option value="Aliwal North">Aliwal North</option>
				<option value="East London">East London</option>
				<option value="Mthatha">Mthatha</option>
				<option value="Port Elizabeth">Port Elizabeth</option>
				<option value="Eastern Cape - Other">Eastern Cape - Other</option>
			</optgroup>
	
			<!--
			<optgroup label="Free State">
				<option value="Bloemfontein">Bloemfontein</option>
				<option value="Bethlehem">Bethlehem</option>
				<option value="Mahikeng">Mahikeng</option>
				<option value="Free State - Other">Free State - Other</option>
			</optgroup>-->

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
<a href="freestate.html">Home</a> 
</p>
</td>

</body>
</html>



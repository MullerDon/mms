
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

<form action="to_db_nc.php" method ="post">
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
<td><b>NC</b></td><td><input type="text" value="0"name="job_repeat_id"></td>
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

		<optgroup label="Calvina">
			
			<option value="Calvinia Office">Calvinia Office</option>
			<option value="Calvinia Blinkklip">Calvinia Blinkklip</option>
			<option value="Calvinia Bo-Downes">Calvinia Bo-Downes</option>
			<option value="Calvinia Brakfontein">Calvinia Brakfontein</option>
			<option value="Calvinia Doega">Calvinia Doega</option>
			<option value="Calvinia Driekuil">Calvinia Driekuil</option>
			<option value="Calvinia Kalkgat">Calvinia Kalkgat</option>
			<option value="Calvinia Nature Reserve">Calvinia Nature Reserve</option>
			<option value="Agterkop">Agterkop</option>
			<option value="Algeria Bos">Algeria Bos</option>
			<option value="Ayesfontein">Ayesfontein</option>
			<option value="Bastiaanskolk">Bastiaanskolk</option>
			<option value="Bleskrans">Bleskrans</option>
			<option value="Blomkool">Blomkool</option>
			<option value="Brandekraal">Brandekraal</option>
			<option value="Brandvlei">Brandvlei</option>
			<option value="Brandvlei Groenberg">Brandvlei Groenberg</option>
			<option value="Bulshoekdam">Bulshoekdam</option>
			<option value="Carnavon Gannabos">Carnavon Gannabos</option>
			<option value="Citrusdal">Citrusdal</option>
			<option value="Citrusdal Topdrift">Citrusdal Topdrift</option>
			<option value="Clanwilliam">Clanwilliam</option>
			<option value="De Hoop">De Hoop</option>
			<option value="Diepdrift">Diepdrift</option>
			<option value="Doornrivier">Doornrivier</option>
			<option value="Droekloof">Droekloof</option>
			<option value="Elandsbaai">Elandsbaai</option>
			<option value="Elandsfontein">Elandsfontein</option>
			<option value="Eldorado">Eldorado</option>
			<option value="Enkeldoorn">Enkeldoorn</option>
			<option value="Fonteinplaas">Fonteinplaas</option>
			<option value="Fraserburg">Fraserburg</option>
			<option value="Fraserburg Sonop">Fraserburg Sonop</option>
			<option value="Fraserburg Vlieekraal">Fraserburg Vlieekraal</option>
			<option value="Goraas">Goraas</option>
			<option value="Graafwater">Graafwater</option>
			<option value="Grootfontein Fraserburg">Grootfontein Fraserburg</option>
			<option value="Grootfontein Merweville">Grootfontein Merweville</option>
			<option value="Grootfontein Williston">Grootfontein Williston</option>
			<option value="Grootrivier">Grootrivier</option>
			<option value="Handelkraal">Handelkraal</option>
			<option value="Jan Frederikskolk">Jan Frederikskolk</option>
			<option value="Kalkgat">Kalkgat</option>
			<option value="Kanolvlei">Kanolvlei</option>
			<option value="Koekenaap">Koekenaap</option>
			<option value="Kombuis">Kombuis</option>
			<option value="Kraandraai">Kraandraai</option>
			<option value="Kreitzberg">Kreitzberg</option>
			<option value="Kromrivier">Kromrivier</option>
			<option value="Lambertsbaai">Lambertsbaai</option>
			<option value="Lambertsbaai Nortier">Lambertsbaai Nortier</option>
			<option value="Leeufontein Berg">Leeufontein Berg</option>
			<option value="Leeufontein Huis">Leeufontein Huis</option>
			<option value="Loeriesfontein Hotel">Loeriesfontein Hotel</option>
			<option value="Lokenburg">Lokenburg</option>
			<option value="Lutzville Hotel">Lutzville Hotel</option>
			<option value="Matjiesrivier">Matjiesrivier</option>
			<option value="Melkbospunt">Melkbospunt</option>
			<option value="Mertenhof">Mertenhof</option>
			<option value="Middelpos SAPD">Middelpos SAPD</option>
			<option value="Nieuwoudtville">Nieuwoudtville</option>
			<option value="Niewoudville SAPD">Niewoudville SAPD</option>
			<option value="Onderplaas">Onderplaas</option>
			<option value="Platberg">Platberg</option>
			<option value="Plattekraal">Plattekraal</option>
			<option value="Pus">Pus</option>
			<option value="Redelinghuys">Redelinghuys</option>
			<option value="Reenen">Reenen</option>
			<option value="Rhenostervlei">Rhenostervlei</option>
			<option value="Rietfontein">Rietfontein</option>
			<option value="Rosendal">Rosendal</option>
			<option value="Rusoord">Rusoord</option>
			<option value="Saaifontein">Saaifontein</option>
			<option value="Sandtuin">Sandtuin</option>
			<option value="Sandvlei">Sandvlei</option>
			<option value="Skietfontein">Skietfontein</option>
			<option value="Skuinshoogte">Skuinshoogte</option>
			<option value="Springfontein">Springfontein</option>
			<option value="Stiebeulsvlei">Stiebeulsvlei</option>
			<option value="Sutherland">Sutherland</option>
			<option value="Sutherland Gunsfontein">Sutherland Gunsfontein</option>
			<option value="Sutherland Komsberg">Sutherland Komsberg</option>
			<option value="Swartfontein Van Wyksvlei">Swartfontein Van Wyksvlei</option>
			<option value="Tafelberg">Tafelberg</option>
			<option value="Tankwa Nat Park">Tankwa Nat Park</option>
			<option value="Van Rhynsdorp">Van Rhynsdorp</option>
			<option value="Volstruisfontein">Volstruisfontein</option>
			<option value="Vondeling">Vondeling</option>
			<option value="Vondelingsfontein">Vondelingsfontein</option>
			<option value="Vredendal">Vredendal</option>
			<option value="Weltevrede">Weltevrede</option>
			<option value="Williston">Williston</option>
			<option value="Williston Abrahamsvlei">Williston Abrahamsvlei</option>
			<option value="Williston Potloer">Williston Potloer</option>
			<option value="Williston Witkalk">Williston Witkalk</option>
			<option value="Witfontein">Witfontein</option>
			<option value="Witputs">Witputs</option>
			<option value="Wuppertal">Wuppertal</option>
			<option value="Zonderwater">Zonderwater</option>
			<option value="Calvinia Other">Calvinia Other</option>
		</optgroup>

		<optgroup label="De Aar">
			<option value="De Aar Office">De Aar Office</option>
			<option value="De Aar">De Aar</option>
			<option value="Agtertang">Agtertang</option>
			<option value="Annadale">Annadale</option>
			<option value="Arundel">Arundel</option>
			<option value="Beestekraal">Beestekraal</option>
			<option value="Bell Rock">Bell Rock</option>
			<option value="Biesjesfontein">Biesjesfontein</option>
			<option value="Bosduiwekop">Bosduiwekop</option>
			<option value="Brakfontein">Brakfontein</option>
			<option value="Britstown POL">Britstown POL</option>
			<option value="Buisvlei">Buisvlei</option>
			<option value="Carnarvon POL">Carnarvon POL</option>
			<option value="Colesberg">Colesberg</option>
			<option value="Dombietersfontein">Dombietersfontein</option>
			<option value="Donkerhoek">Donkerhoek</option>
			<option value="Eendefontein">Eendefontein</option>
			<option value="Gannakraal">Gannakraal</option>
			<option value="Gariepdam">Gariepdam</option>
			<option value="Goedehoop">Goedehoop</option>
			<option value="Grootmodderfontein">Grootmodderfontein</option>
			<option value="Hanover">Hanover</option>
			<option value="Hopetown Tnk">Hopetown Tnk</option>
			<option value="Jakkalskuil">Jakkalskuil</option>
			<option value="Kalabasput">Kalabasput</option>
			<option value="Kareekloof">Kareekloof</option>
			<option value="Koppiesdam">Koppiesdam</option>
			<option value="Kweekwa">Kweekwa</option>
			<option value="Lekkervlei">Lekkervlei</option>
			<option value="Loxton POL">Loxton POL</option>
			<option value="Middelburg C/K Tnk">Middelburg C/K Tnk</option>
			<option value="Montagu (Uitkomsfontein)">Montagu (Uitkomsfontein)</option>
			<option value="Morewag">Morewag</option>
			<option value="Nelspoortjie">Nelspoortjie</option>
			<option value="Nieuwejaarsfontein">Nieuwejaarsfontein</option>
			<option value="Nooitgedag">Nooitgedag</option>
			<option value="Noupoort">Noupoort</option>
			<option value="Nuwejaarsfontein">Nuwejaarsfontein</otion>
			<option value="Orange River Salt Pan">Orange River Salt Pan</option>
			<option value="Orania">Orania</option>
			<option value="Oufontein">Oufontein</option>
			<option value="Perdeput">Perdeput</option>
			<option value="Petrusville POL">Petrusville POL</option>
			<option value="Philipstown Tnk">Philipstown Tnk</option>
			<option value="Prieska">Prieska</option>
			<option value="Prinshof">Prinshof</option>
			<option value="Rheboksfontein">Rheboksfontein</option>
			<option value="Richmond C/K Tnk">Richmond C/K Tnk</option>
			<option value="Rietfontein">Rietfontein</option>
			<option value="Rolfontein">Rolfontein</option>
			<option value="Rondom">Rondom</option>
			<option value="Roodewal">Roodewal</option>
			<option value="Rooisloot">Rooisloot</option>
			<option value="Rooiwal">Rooiwal</option>
			<option value="Sandpan">Sandpan</option>
			<option value="Spioenpan">Spioenpan</option>
			<option value="Strydenburg POL">Strydenburg POL</option>
			<option value="Thomasgat">Thomasgat</option>
			<option value="Uitsig">Uitsig</option>
			<option value="Vanderkloofdam">Vanderkloofdam</option>
			<option value="Vanwyksvlei">Vanwyksvlei</option>
			<option value="Victoria West Tnk">Victoria West Tnk</option>
			<option value="Vlakfontein">Vlakfontein</option>
			<option value="Wagenaarskraal">Wagenaarskraal</option>
			<option value="Wanda POL">Wanda POL</option>
			<option value="De Aar Other">De Aar Other</option>
		</optgroup>

		<optgroup label="Kimberley">
			<option value="Kimberley Office">Kimberley Office</option>
			<option value="Kimberley Golf Club">Kimberley Golf Club</option>
			<option value="Aucampsrus">Aucampsrus</option>
			<option value="Barkly West Tnk">Barkly West Tnk</option>
			<option value="Benfontein">Benfontein</option>
			<option value="Boetsap POL">Boetsap POL</option>
			<option value="Danielskuil">Danielskuil</option>
			<option value="De Doorns">De Doorns</option>
			<option value="Delportshoop POL">Delportshoop POL</option>
			<option value="Dingle">Dingle</option>
			<option value="Dippenaarshoop">Dippenaarshoop</option>
			<option value="Douglas POL">Douglas POL</option>
			<option value="Driedoorn">Driedoorn</option>
			<option value="Dunmurray">Dunmurray</option>
			<option value="Elandslaagte">Elandslaagte</option>
			<option value="Eureka">Eureka</option>
			<option value="Fouross">Fouross</option>
			<option value="Gannahoek IRR">Gannahoek IRR</option>
			<option value="Gertspan">Gertspan</option>
			<option value="Griquatown Tnk">Griquatown POL</option>
			<option value="Hartswater">Hartswater</option>
			<option value="Holpan IRR">Holpan IRR</option>
			<option value="Hopkins">Hopkins</option>
			<option value="Jacobsdal POL">Jacobsdal POL</option>
			<option value="Kagisho POL">Kagisho POL</option>
			<option value="Klipfontein IRR">Klipfontein IRR</option>
			<option value="Klokfontein IRR">Klokfontein IRR</option>
			<option value="Koekama">Koekama</option>
			<option value="Koffiefontein POL">Koffiefontein POL</option>
			<option value="Kuruman">Kuruman</option>
			<option value="Leliefontein">Leliefontein</option>
			<option value="Magagong">Magagong</option>
			<option value="Manthestad">Manthestad</option>
			<option value="Modderrivier POL">Modderrivier POL</option>
			<option value="Mooidraai">Mooidraai</option>
			<option value="Moreson">Moreson</option>
			<option value="Mothibistad">Mothibistad</option>
			<option value="Mount Carmel">Mount Carmel</option>
			<option value="Niekerkshoop POL">Niekerkshoop POL</option>
			<option value="Nooitgedacht IRR">Nooitgedacht IRR</option>
			<option value="Nuwejaarskraal">Nuwejaarskraal</option>
			<option value="Oranjeoord">Oranjeoord</option>
			<option value="Pampierstad">Pampierstad</option>
			<option value="Poplars">Poplars</option>
			<option value="Postmasburg">Postmasburg</option>
			<option value="Pramberg IRR">Pramberg IRR</option>
			<option value="Rietrivier IRR">Rietrivier IRR</option>
			<option value="Rocklands">Rocklands</option>
			<option value="Taung">Taung</option>
			<option value="Tierkop">Tierkop</option>
			<option value="Tsineng POL">Tsineng POL</option>
			<option value="Tweefontein">Tweefontein</option>
			<option value="Vaalharts">Vaalharts</option>
			<option value="Vaal River Estate Draaihoek">Vaal River Estate Draaihoek</option>
			<option value="Vryburg-Mooilaagte">Vryburg-Mooilaagte</option>
			<option value="Warrenton MUN">Warrenton MUN</option>
			<option value="Windsorton POL">Windsorton POL</option>
			<option value="Witwater">Witwater</option>
			<option value="Wolhaarkop">Wolhaarkop</option>
			<option value="Kimberley Other">Kimberley Other</option>
		</optgroup>

		<optgroup label="Springbok">
			<option value="Springbok Office">Springbok Office</option>
			<option value="Springbok">Springbok</option>
			<option value="Springbok Bulletrap">Springbok Bulletrap</option>
			<option value="Springbok Dabeep">Springbok Dabeep</option>
			<option value="Springbok Gladkop">Springbok Gladkop</option>
			<option value="Aggeneys">Aggeneys</option>
			<option value="Alexanderbay">Alexanderbay</option>
			<option value="Bitterfontein Kamaboes">Bitterfontein Kamaboes</option>
			<option value="Bladgrond">Bladgrond</option>
			<option value="Buffelsrivier">Buffelsrivier</option>
			<option value="Carolusberg">Carolusberg</option>
			<option value="Claimpeak">Claimpeak</option>
			<option value="Concordia">Concordia</option>
			<option value="Eksteenfontein Inligtingskantoor">Eksteenfontein Inligtingskantoor</option>
			<option value="Garies">Garies</option>
			<option value="Garies Droekraal">Garies Droekraal</option>
			<option value="Hondeklipbaai">Hondeklipbaai</option>
			<option value="Kamieskroon">Kamieskroon</option>
			<option value="Kharkams">Kharkams</option>
			<option value="Kleinsee">Kleinsee</option>
			<option value="Kliprand">Kliprand</option>
			<option value="Klipvlei">Klipvlei</option>
			<option value="Koeroegab">Koeroegab</option>
			<option value="Koiingnaas">Koiingnaas</option>
			<option value="Kommaggas">Kommaggas</option>
			<option value="Koringhoek">Koringhoek</option>
			<option value="Kuboes">Kuboes</option>
			<option value="Lekkerdrink">Lekkerdrink</option>
			<option value="Lekkersing">Lekkersing</option>
			<option value="Leliefontein">Leliefontein</option>
			<option value="Lutzville Elandsfontein">Lutzville Elandsfontein</option>
			<option value="Nababeep">Nababeep</option>
			<option value="Naries Springbok">Naries Springbok</option>
			<option value="Nuwedam">Nuwedam</option>
			<option value="Nuwerus">Nuwerus</option>
			<option value="Onseepkans">Onseepkans</option>
			<option value="Pella">Pella</option>
			<option value="Pofadder">Pofadder</option>
			<option value="Port Nolloth">Port Nolloth</option>
			<option value="Richtersveld Helskloof">Richterveld Helskloof</option>
			<option value="Rietpoort">Rietpoort</option>
			<option value="Rooiberg">Rooiberg</option>
			<option value="Rooifontein">Rooifontein</option>
			<option value="Sarrisam">Sarrisam</option>
			<option value="Steinkopf">Steinkopf</option>
			<option value="Suurwater">Suurwater</option>
			<option value="Tatasberg">Tatasberg</option>
			<option value="Vioolsdrift">Vioolsdrift</option>
			<option value="Witbank">Witbank</option>
			<option value="Wolfkraal">Wolfkraal</option>
			<option value="Zandkraal">Zandkraal</option>
			<option value="Springbok Other">Springbok Other</option>
		</optgroup>

		<optgroup label="Upington">
			<option value="Upington Office">Upington Office</option>
			<option value="Upington">Upington</option>
			<option value="Upington Landbou Navorsing">Upington Landbou Navorsing</option>
			<option value="Augrabies">Augrabies</option>
			<option value="Augrabies Falls">Agrabies Falls</option>
			<option value="Bishopshood">Bishopshood</option>
			<option value="Boegoebergdam">Boegoebergdam</option>
			<option value="Deben">Deben</option>
			<option value="Dedeben">Dedeben</option>
			<option value="Droegrond">Droegrond</option>
			<option value="GBP Rainfall (14 stations)">GBP Rainfall (14 stations)</option>
			<option value="Gemsbok Grenspos">Gemsbok Grenspos</option>
			<option value="Groblershoop">Groblershoop</option>
			<option value="Hopkins">Hopkins</option>
			<option value="Kakamas">Kakamas</option>
			<option value="Kampe">Kampe</option>
			<option value="Kathu">Kathu</option>
			<option value="Keimoes">Keimoes</option>
			<option value="Kenhardt">Kenhardt</option>
			<option value="Knapzak">Knapzak</option>
			<option value="Louisvale">Louisvale</option>
			<option value="Lutzputs">Lutzputs</option>
			<option value="Maansrust">Maansrust</option>
			<option value="Marydale">Marydale</option>
			<option value="Mata Mata">Mata Mata</option>
			<option value="Milner">Milner</option>
			<option value="Noenieput">Noenieput</option>
			<option value="Nossob">Nossob</option>
			<option value="Olifanthoek">Olifanthoek</option>
			<option value="Rietfontein">Rietfontein</option>
			<option value="Sandkolk">Sandkolk</option>
			<option value="Severn">Severn</option>
			<option value="Smythe">Smythe</option>
			<option value="Thornlea">Thornlea</option>
			<option value="Twee Rivieren">Twee Rivieren</option>
			<option value="Vanzylsrus">Vanzylsrus</option>
			<option value="Voordeelspan">Voordeelspan</option>
			<option value="Weltevrede">Weltevrede</option>
			<option value="Wheynbah">Wheynbah</option>
			<option value="Winton">Winton</option>
			<option value="Witdraai">Witdraai</option>
			<option value="Upington Other">Upington Other</option>
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
			<!--
			<optgroup label="Northern Cape">
				<option value="Alkantpan">Alkantpan</option>
				<option value="Calvinia">Calvinia</option>
				<option value="De Aar">De Aar</option>
				<option value="Kathu">Kathu</option>
				<option value="Kimberley">Kimberley</option>
				<option value="Springbok">Springbok</option>
				<option value="Upington">Upington</option>
			</optgroup>-->

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
<a href="northerncape.html">Home</a> 
</p>
</td>

</body>
</html>



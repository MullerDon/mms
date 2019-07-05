<html>
<head>

<title>Total assignee Cost</title>
</head>

<body>
<style type="text/css">

.footer {text-align: left;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>



<br />
<b>Total assignee costs</b>

<form action="7_display_gau.php" method ="post">

<p>Jobs assigned to:</p>
	<select name="assigtech_cost">

		<optgroup label="Bolepi Office">
			<option selected> </option>
			<option value="Abednego.Gumede">Abednego Gumede</option>
			<option value="Dan Maputle">Dan Maputle</option>
			<option value="Dithuso Mogapi">Dithuso Mogapi</option>
			<option value="Joseph Nkosi">Joseph Nkosi</option>
			<option value="Kabelo Moabi">Kabelo Moabi</option>	
			<option value="Marlin Coert">Marlin Coert</option>
			<option value="Peter Lekala">Peter Lekala</option>
			<option value="Simon Tshwana">Simon Tshwana</option>
			<option value="Victor Mafata">Victor Mafata</option>
			<option value="Other (Bolepi)">Other (Bolepi)</option>
		</optgroup>	
		<optgroup label="Irene Office">
			<option value="Ambrose.Gambushe">Ambrose Gambushe</option>
			<option value="Charmaine.Shibambo">Charmaine Shibambo</option>
			<option value="Dikobote.Makhutle">Dikobote Makhutle</option>
			<option value="Duduzile.Dzondzi">Duduzile Dzondzi</option>
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Emily.Maredi">Emily Maredi</option>
			<option value="Floyd.Ngwato">Floyd Ngwato</option>
			<option value="Hendrik.Swart">Hendrik Swart</option>
			<option value="Jessica.Erasmus">Jessica Erasmus</option>
			<option value="John.Khanyile">John Khanyile</option>
			<option value="Joseph.Lekwadu">Joseph Lekwadu</option>
			<option value="Lati.Selepe">Lati Selepe</option>
			<option value="Machoene.Thupana">Machoene Thupana</option>
			<option value="Misokuhle.Bulayane">Misokuhle Bulayane</option>
			<option value="Moaginyane.Molalugi">Moaginyane Molalugi</option>
			<option value="Nomvuso.Busizi">Nomvuso Busizi</option>
			<option value="Peter.Mabasa">Peter Mabasa</option>
			<option value="Phillip.Mothokoa">Phillip Mothokoa</option>
			<option value="Riaan.Lourens">Riaan Lourens</option>
			<option value="Rydall.Jardine">Rydall Jardine</option>
			<option value="Sandile.Mdose">Sandile Mdose</option>
			<option value="Saul.Hlatswayo">Saul Hlatswayo</option>	
			<option value="Segale.Motseto">Segale Motseto</option>
			<option value="Sello.Motsetso">Sello Motsetso</option>
			<option value="Simon.Molato">Simon Molato</option>
			<option value="Solly.Shaku">Solly Shaku</option>
			<option value="Thabiso.Sekhoto">Thabiso Sekhoto</option>
			<option value="Velelo.Mazele">Velelo Mazele</option>
			<option value="Webster.Ngoepe">Webster Ngoepe</option>
			<option value="Zamikhaya.Magogotya">Zamikhaya Magogotya</option>
			<option value="Other (Irene)">Other (Irene)</option>
		</optgroup>
			<optgroup label="ORT Office">
			<option value="Bawinile Mgedesi">Bawinile Mgedesi</option>
			<option value="Dineo Matsana">Dineo Matsana</option>
			<option value="Denzil Subramani">Denzil Subramani</option>
			<option value="Enny Tsebe">Enny Tsebe</option>
			<option value="Kobus Viljoen">Kobus Viljoen</option>
			<option value="Menthiam Sebesho">Menthiam Sebesho</option>
			<option value="Thabo Molemohi">Thabo Molemohi</option>
			<option value="Sifiso Mkwanazi">Sifiso Mkwanazi</option>
			<option value="Yandiswa Sahula">Yandiswa Sahula</option>
			<option value="Zanele Magomezulu">Zanele Magomezulu</option>
			<option value="Other (ORT)">Other (ORT)</option>			
		</optgroup>
		<optgroup label="Technologist Group">
			<option value="Ambrose.Gambushe">Ambrose Gambushe</option>
			<option value="Charmaine.Shibambo">Charmaine Shibambo</option>
			<option value="Davis.Moshweunyane">Davis Moshweunyane</option>
			<option value="Donald.Muller">Donald Muller</option>	
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Edward.Barnies">Edward Barnies</option>
			<option value="Floyd.Ngwato">Floyd Ngwato</option>
			<option value="Lati.Selepe">Lati Selepe</option>
			<option value="Natheer.Tofa">Natheer Tofa</option>
			<option value="Dumisani.Mhlophe">Dumisani Mhlophe</option>
			<option value="Peter.Roux">Peter Roux</option>
			<option value="Riaan.Lourens">Riaan Lourens</option>
			<option value="Sandile.Mdose">Sandile Mdose</option>
			<option value="Tankiso.Seboka">Tankiso Seboka</option>
			<option value="Webster.Ngoepe">Webster Ngoepe</option>
			<option value="Zamikhaya.Magogotya">Zamikhaya Magogotya</option>
			<option value="Technologists - Other">Technologists - Other</option>
		</optgroup>
	</select>
<br />
<br />

<p>Please enter the start date in YYYY-MM-DD format:</p>
<tr>
<td><input type="text" name="start_date"></td>
</tr>
<br />
<br />
<p>Please enter the end date in YYYY-MM-DD format:</p>
<tr>
<td><input type="text" name="end_date"></td>
</tr>

<br />
<br />



	<input type="submit" value="Total Cost">
	<input type="reset" value="Clear all entries" />

</form>







<td>

<p class="footer">
<a href="management_gau.php">Back</a> 
</p>
</td>

</body>
</html>


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

<form action="7_display_mp.php" method ="post">

<p>Jobs assigned to:</p>
	<select name="assigtech_cost">


		<optgroup label="Nelspruit Office">
			<option selected> </option>
			<option value="Bongani.Chibi">Bongani Chibi</option>
			<option value="Chris.Nkosi">Chris Nkosi</option>
			<option value="Isa.Mlambo">Isa Mlambo</option>
			<option value="Lebogang.Mashile">Lebogang Mashile</option>
			<option value="Nondumiso.Gwebu">Nondumiso Gwebu</option>
			<option value="Phumza.Mbali">Phumza Mbali</option>
			<option value="Rudzani.Malala">Rudzani Malala</option>
			<option value="Sizwe.Mlima">Sizwe Mlima</option>
			<option value="Tebogo.Moloi">Tebogo Moloi</option>
			<option value="Thabo.Bela">Thabo Bela</option>
			<option value="Thato.Mothopi">Thato Mothopi</option>
			<option value="Thuso.Otukile">Thuso Otukile</option>
			<option value="Webster.Maringa">Webster Maringa</option>
			<option value="Winnie.Mlambo">Winnie Mlambo</option>
			<option value="Other (Nelspruit)">Other (Nelspruit)</option>
			
		</optgroup>

		<optgroup label="Ermelo Office">
			<option value="Bongani Ntshangasi">Bongani Ntshangasi</option>
			<option value="Elsie Mekwa">Elsie Mekwa</option>
			<option value="Ken Short">Ken Short</option>
			<option value="Wayne Smit">Wayne Smit</option>
			<option value="Other (Ermelo)">Other (Ermelo)</option>
			
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
<a href="management_mp.php">Back</a> 
</p>
</td>

</body>
</html>


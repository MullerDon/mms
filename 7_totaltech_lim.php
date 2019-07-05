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

<form action="7_display_lim.php" method ="post">

<p>Jobs assigned to:</p>
	<select name="assigtech_cost">

		<optgroup label="Polokwane Office">
			<option value="Jannie Ferreira">Jannie Ferreira</option>
			<option value="Joel Hamese">Joel Hamese</option>
			<option value="Louise Janse Van Vuuren">Louise Janse Van Vuuren</option>
			<option value="Thabo Bela">Thabo Bela</option>
			<option value="Thatego Magopane">Thatego Magopane</option>
			<option value="William Ngobeni">William Ngobeni</option>
			<option value="Other (Polokwane)">Other (Polokwane)</option>
		</optgroup>

		<optgroup label="Thohoyandou Office">
			<option selected> </option>
			<option value="Albert Nemurangoni">Albert Nemurangoni</option>
			<option value="Bjorn Perks">Bjorn Perks</option>
			<option value="Koot Kamfer">Koot Kamfer</option>
			<option value="Mulatwa Ralufhe">Mulatwa Ralufhe</option>
			<option value="Nico Theron">Nico Theron</option>
			<option value="Raymond Magaela">Raymond Magaela</option>
			<option value="Refilwe Raito">Refilwa Raito</option>
			<option value="Titus Mosweu">Titus Mosweu</option>
			<option value="Webster Maringa">Webster Maringa</option>
			<option value="Yvonne.Sello">Yvonne Sello</option>
			<option value="Other (Thohoyandou)">Other (Thohoyandou)</option>
			
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
<a href="management_lim.php">Back</a> 
</p>
</td>

</body>
</html>


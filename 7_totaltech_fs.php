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

<form action="7_display_fs.php" method ="post">

<p>Jobs assigned to:</p>
	<select name="assigtech_cost">

		<optgroup label="Bethlehem Office">
			<option value="Mogomotsi Madibo">Mogomotsi Madibo</option>
			<option value="Nonky Sebatana">Nonky Sebatana</option>
			<option value="Tsholo Naledi">Tsholo Naledi</option>
			<option value="Tumo Xaba">Tumo Xaba</option>
			<option value="Other (Bethlehem)">Other (Bethlehem)</option>
		</optgroup>

		<optgroup label="Bloemfontein Office">
			<option selected> </option>
			<option value="Berend Maepa">Berend Maepa</option>
			<option value="Charne Reyneke">Charne Reyneke</option>
			<option value="Dianah Mabizela">Dianah Mabizela</option>
			<option value="Francis Mosetlho">Francis Mosetlho</option>
			<option value="Lerato Mabatla">Lerato Mabatla</option>
			<option value="Moitheri Ramatsa">Moitheri Ramatsa</option>
			<option value="Nozi Radebe">Nozi Radebe</option>
			<option value="Petrus Mokoena">Petrus Mokoena</option>
			<option value="Sechaba Nyaku">Sechaba Nyaku</option>
			<option value="Tankiso Seboka">Tankiso Seboka</option>
			<option value="Other (Bloemfontein)">Other (Bloemfontein)</option>
			
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
<a href="management_fs.php">Back</a> 
</p>
</td>

</body>
</html>


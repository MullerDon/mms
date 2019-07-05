<html>
<head>

<title>Job Assignment</title>
</head>

<body>
<style type="text/css">

.footer {text-align: center;}
.header {text-align: center;}
.h3 {text-align: center;}
</style>







<form action="edit_assign_nw.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>NW</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<!--<optgroup label="Bethlehem Office">
			<option value="Mogomotsi Madibo">Mogomotsi Madibo</option>
			<option value="Nonky Sebatana">Nonky Sebatana</option>
			<option value="Tsholo Naledi">Tsholo Naledi</option>
			<option value="Tumo Xaba">Tumo Xaba</option>
			<option value="Other (Bethlehem)">Other (Bethlehem)</option>
		</optgroup>

		<optgroup label="Bloemfontein Office">
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
			
		</optgroup>-->	
		<optgroup label="Mahikeng Office">
			<option selected> </option>
			<option value="Absolom.Tshehle">Absolom Tshehle</option>
			<option value="Joseph.Moholowagae">Jopseph Moholowgae</option>
			<option value="Kabelo.Moabi">Kabelo Moabi</option>
			<option value="Sakeng.Ranyane">Sakeng Ranyane</option>
			<option value="Shadrack.Podile">Shadrack Podile</option>
			<option value="Tankiso.Seboka">Tankiso Seboka</option>
			<option value="Titus.Mosweu">Titus Mosweu</option>
			<option value="Other (Mahikeng)">Other (Mahikeng)</option>
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
<br />
<!--
<p>Enter the assigned date in <b>YYYY-MM-DD</b> format below:</p>
<tr>
<td><input type="text" name="date_assigned"></td>
</tr>
-->
<br />
<br />
</fieldset>

	<input type="submit" value="Assign Job">
	<input type="reset" value="Clear all entries" />

</form>







<td>
<p class="footer">
<a href="edit_nw.html">Back</a> 
</p>
</td>

</body>
</html>


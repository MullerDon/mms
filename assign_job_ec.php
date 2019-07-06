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







<form action="edit_assign_ec.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>EC</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="East London Office">
			<option selected> </option>
			<option value="Andile.Duda">Andile.Duda</option>
			<option value="Donald.Muller">Donald Muller</option>
			<option value="Lunga.Marula">Lunga Marula</option>
			<option value="Luyanda.Nanto">Luyando Nanto</option>
			<option value="Mark.Human">Mark Human</option>	
			<option value="Mxolisi.Cuba">Mxolisi Cuba</option>
			<option value="Phelisa.Nqambule">Phelisa.Nqambule</option>
			<option value="Zukiswa.Pethu">Zukiswa Pethu</option>
		</optgroup>	
		<optgroup label="Mthatha Office">
			<option value="Gordon.Matee">Gordon Matee</option>
			<option value="Manti.Mabizela">Manti Mabizela</option>
			
			<option value="Phathiwe.Mininye">Phathiwe Mininye</option>
			<option value="Sinethemba.Makalima">Sinethemba Makalima</option>	
			<option value="Sisa.Fihlani">Sisa Fihlani</option>
			<option value="Yandiswa.Sahula">Yandiswa Sahula</option>
		</optgroup>
			<optgroup label="Port Elizabeth Office">
			<option value="Brent.Appel">Brent Appel</option>
			<option value="Deon.VanderMescht">Deon Van der Mescht</option>
			<option value="Garth.Sampson">Garth Sampson</option>
			<option value="Gerald.Pretorius">Gerald Pretorius</option>
			<option value="Hendrik.Swart">Hendrik Swart</option>
			<option value="Hugh.VanNiekerk">Hugh Van Niekerk</option>
			<option value="Jean.Viviers">Jean Viviers</option>
			<option value="Lungile.Jele">Lungile Jele</option>
			<option value="Mandise.Manetsa">Mandise Manetsa</option>
			<option value="Msindisi.Gantsho">Msindisi Gantsho</option>
			<option value="Phumzile.Hermanus">Phumzile Hermanus</option>
			<option value="Phumla.Goba">Phumla Goba</option>
			<option value="Quinton.Jacobs">Quinton Jacobs</option>
			<option value="Shaun.Thesnaar">Shaun Thesnaar</option>
			<option value="Siviwe.Mcako">Siviwe Mcako</option>
			<option value="Tennielle.Jacobs">Tennielle Jacobs</option>
			<option value="Varsha.Prinsloo">Varsha Prinsloo</option>
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
<a href="edit_ec.html">Back</a> 
</p>
</td>

</body>
</html>


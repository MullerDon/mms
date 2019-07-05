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







<form action="edit_assign_wc.php" method ="post">
<fieldset>
<legend>Enter the job ID and select a person to assign the job to</legend>
<p>Please enter the job ID:</p>
<tr>
<td><b>WC</b></td><td><input type="text" name="job_id"</td>
</tr>
<br />
<br />


<p>Assign job to:</p>
	<select name="assigned_tech">

		<optgroup label="Cape Point Office">
			<option value="Bhawoodien.Parker">Bhawoodien Parker</option>
			<option value="Casper.Labuschagne">Casper Labuschagne</option>
			<option value="Danie.vanderSpuy">Danie Van Der Spuy</option>
			<option value="Ernst.Brunke">Ernst Brunke</option>
			<option value="Thumeka.Mkololo">Thumeka Mkololo</option>
			<option value="Other (Cape Point)">Other (Cape Point)</option>
		</optgroup>

		<optgroup label="Cape Town Office">
			<option selected> </option>
			<option value="Adele.vanEeden">Adele Van Eeden</option>
			<option value="Carlton.Fillis">Carlton Fillis</option>
			<option value="Gail.Linnow">Gail Linnow</option>
			<option value="Henning.Grobler">Henning Grobler</option>
			<option value="Jan.Crous">Jan Crous</option>
			<option value="Johan.Labuschagne">Johan Labuschagne</option>
			<option value="Johan.Singleton">Johan Singleton</option>
			<option value="Kate.Turner">Kate Turner</option>
			<option value="Mardene.deVilliers">Mardene de Villiers</option>
			<option value="Natheer.Tofa">Natheer Tofa</option>
			<option value="Nicolene.Swart">Nicolene Swart</option>
			<option value="Nolwazi.Mpela">Nolwazi Mpela</option>
			<option value="Patrick.Jacobs">Patrick Jacobs</option>
			<option value="Peter.Roux">Peter Roux</option>
			<option value="Phumza.Mbali">Phumza Mbali</option>
			<option value="Rian.Smit">Rian Smit</option>
			<option value="Robin-lee.Burger">Robin-Lee Burger</option>
			<option value="Santjie.DuToit">Santjie Du Toit</option>
			<option value="Siviwe.Khabiqheya">Siviwe Khabiqheya</option>
			<option value="Johan.Stander">Johan Stander</option>
			<option value="Stella.Nake">Stella Nake</option>
			<option value="Sydney.Marais">Sydney Marais</option>
			<option value="Thabisile.Ntleko">Thabisile Ntleko</option>
			<option value="Tshikana.Rasehlomi">Tshikana Rasehlomi</option>
			<option value="Other (Cape Town)">Other (Cape Town)</option>
			<option value="InterMet Diel">InterMet Diel</option>
			<option value="Technical Service Irene">Technical Service Irene</option>
		</optgroup>	
		<optgroup label="George Office">
			<option value="Anthea.Ayshlie">Anthea Ayshlie</option>
			<option value="Bjorn.Perks">Bjorn Perks</option>
			<option value="Collins.Ngoepe">Collins.Ngoepe</option>
			<option value="Danie.Ferreira">Danie.Ferreira</option>
			<option value="Nico.Theron">Nico Theron</option>
			<option value="Sidney.Notshulwana">Sidney.Notshulwana</option>
			
			<option value="Other (George)">Other (George)</option>
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
<a href="edit_wc.html">Back</a> 
</p>
</td>

</body>
</html>


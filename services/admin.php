<!DOCTYPE html>
<html>
<body>
<h1 align="center">Welcome Admin</h1>
<hr />
Please Add new Doctor's to the Hospital Record
<br />(Doctor's data will directly get reflected in Department and Appointment sections)
<br /><br />

<form ACTION="updateRecord.php" METHOD="POST" id="addDoctor">

<table border="1">
<tr>
<th>Doctor's Name</th><th>Field of Work</th>
</tr>
<tr>
<td><input name="doctor" type="text" size="50" required></input></td>
<td>
<select name="field" form="addDoctor">
    <option value="General Physician">General Physician</option>
	<option value="ENT Specialist">ENT Specialist</option>
	<option value="Cardiologist">Cardiologist</option>
	<option value="Neurologist">Neurologist</option>
	<option value="Child Specialist">Child Specialist</option>
	<option value="Pathologist">Pathologist</option>
	<option value="Dermatologist">Dermatologist</option>
	<option value="Surgeon">Surgeon</option>
	<option value="Gynaecologist">Gynaecologist</option>
    <option value="Gastroenterologist">Gastroenterologist</option>
</select>
</td>

</tr>
</table>
<br />
<input type="submit" value="Add Doctor in Hospital Record"></input>
</form>

</body>
</html>

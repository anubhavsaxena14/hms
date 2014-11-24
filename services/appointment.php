<!DOCTYPE html>
<html>
<head>
<style type="text/css">
</style>
</head>
<div align="center">
  <h1 class="style1">APPOINTMENT</h1><hr />
</div>
NOTE:
<ul>
<li><font size="5" color="red">Online Appointments are made only for the next week</font> <br /> For current week you need to visit hospital and collect advance token.</li>
<li>Appointments can only be made between 8AM - 12PM and 2PM - 7PM from Monday to Saturday.</li>
<li>Lunch Break is observed from 12 noon to 1PM and between 1PM - 2PM Doctors will be at rounds.</li>
<li>Sundays and Public Holidays are observed as close. But in case of Emergency, Doctor's will be available.</li>
</ul>
<br /> <br />

<form id="form1" name="form1" method="post" action="getAppointment.php">

    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hms";
		$tablename = "department";

		// Create connection
		$con = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
		}

		$sql = "SELECT name, field FROM $tablename ORDER BY name";
		$result = $con->query($sql);
		echo "<label>SELECT DOCTOR";
		echo "<select name='doctor' id='select'>";
		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['name'] . " ( " . $row['field'] . " ) " . "'>" . $row['name'] . " ( " . $row['field'] . " ) </option>";
		}
		echo "</select>";
		echo "</label>";
	?>
  <br /><br />
  
  FULL NAME OF PATIENT <input type="text" name="patient" placeholder="John Smith" required id="patient" />
  <br /><br />
  REGISTRATION NUMBER <input type="number" name="registration" maxlength="10" required id="registration" />
  <br />
  
  <p>
    <label>SELECT DAY
    <select name="day" id="select2">
      <option value="monday">monday</option>
      <option value="tuesday">tuesday</option>
      <option value="wednesday">wednesday</option>
      <option value="thursday">thursday</option>
      <option value="friday">friday</option>
	  <option value="saturday">saturday</option>
    </select>
    </label>
  </p>
  <p>
    <label>SELECT TIME SLOT
    <select name="time" id="select3">
      <option value="8-8:30 AM">8-8:30 AM</option>
      <option value="8:30-9 AM">8:30-9 AM</option>
	  <option value="9-9:30 AM">9-9:30 AM</option>
      <option value="9:30-10 AM">9:30-10 AM</option>
      <option value="10-10:30 AM">10-10:30 AM</option>
	  <option value="10:30-11 AM">10:30-11 AM</option>
	  <option value="11-11:30 AM">11-11:30 AM</option>
	  <option value="11:30-12 PM">11:30-12 PM</option>
	  <option value="2-2:30 PM">2-2:30 PM</option>
	  <option value="2:30-3 PM">2:30-3 PM</option>
	  <option value="3-3:30 PM">3-3:30 PM</option>
	  <option value="3:30-4 PM">3:30-4 PM</option>
	  <option value="4-4:30 PM">4-4:30 PM</option>
	  <option value="4:30-5 PM">4:30-5 PM</option>
	  <option value="5-5:30 PM">5-5:30 PM</option>
	  <option value="5:30-6 PM">5:30-6 PM</option>
	  <option value="6-6:30 PM">6-6:30 PM</option>
	  <option value="6:30-7 PM">6:30-7 PM</option>
        </select>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="get appointment" />
    </label>
  </p>
</form>
</html>

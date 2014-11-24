<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hms", $con);

$sql="INSERT INTO appointment(doctor,patient,registrationNumber,day,time)
VALUES
('$_POST[doctor]','$_POST[patient]','$_POST[registration]','$_POST[day]','$_POST[time]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "	<h3>APPOINTMENT DETAILS</h3><hr />
		Thank You for having the appointment. We are here to help you.<br /><br />
		<u><b>Appointment Details:</b></u><br />
		<b>Patient:</b> $_POST[patient]<br />
		<b>Doctor:</b> $_POST[doctor]<br />
		<b>Day:</b> Next Week's $_POST[day]<br />
		<b>Time Slot Booked:</b> $_POST[time]
	";

mysql_close($con);
?>

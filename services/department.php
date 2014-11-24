<!DOCTYPE html>
<html>
<body>
<h1 align="center">DEPARTMENTS</h1><hr width="50%"/><br /><br />
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

$sqlDept = "SELECT DISTINCT field FROM $tablename ORDER BY field";
$resultDept = $con->query($sqlDept);

if ($resultDept->num_rows > 0) {
    // output data of each row
    while($rowDept = $resultDept->fetch_assoc()) {
        echo "<br/ ><font size='6'>" . $rowDept["field"]. "<font /><hr/>";

		$sql = "SELECT name, field FROM $tablename WHERE field = '$rowDept[field]'";
		$result = $con->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<font size='4'>" . $row["name"] . "<font /><br>";
			}
		} else {}
	}
} else {
    echo "No Doctor's present in Hospital Records!";
}

$con->close();
?> 
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<h1 align="center">Welcome Admin</h1>
<hr />

<?php
$doctor=$_POST["doctor"];
$field=$_POST["field"];

if(!$_POST["doctor"] || !$_POST["field"]) {
	die('Data Insufficient');
}

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

$sql = "INSERT INTO $tablename (name, field) VALUES ('$doctor', '$field')";

if ($con->query($sql) === TRUE) {
    echo "Wonderful! " . $doctor . ", an expert in " . $field . " field, is now a part of our Hospital.";
} else {
    echo "Oh Gosh! Error: " . $sql . "<br />" . $con->error;
}

$con->close();
?>

</body>
</html>

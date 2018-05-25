<?php
$servername = "mysql.ilab.sit.kmutt.ac.th";
$username = "std60130500217";
$password = "LptX2386";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

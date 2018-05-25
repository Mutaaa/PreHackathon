<?php
$servername = "mysql.ilab.sit.kmutt.ac.th";
$username = "std60130500217";
$password = "LptX2386";
$dbname = "std60130500217";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$con_password = $_POST['confirm_password'];


$sql = "INSERT INTO users (username, first_name, last_name, email, password)
VALUES ('$username','$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE && $con_password == $password) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

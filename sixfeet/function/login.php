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

$sql = "SELECT * FROM users WHERE username='" . $_POST['username'] . "' AND password='" .$_POST['password']. "'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["first_name"]. " - Name: ". $row["last_name"]. " " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

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

$options = [
    'cost' => 11,
];
// Get the password from post
$passwordFromPost = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='" . $_POST['username'] ."'";
$result = $conn->query($sql);

$check = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if(password_verify($passwordFromPost, $row['password'])){
        echo "pass";
        $check++;
      }
    }
    if( $check == 0 ) {
      echo "wrong password naja";
    }
} else {
    echo "no username found";
}

$conn->close();
?>

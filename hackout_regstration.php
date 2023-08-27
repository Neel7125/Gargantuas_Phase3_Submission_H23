<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_phone = $_POST['r_phone'];
$r_clg = $_POST['r_clg'];
$r_event = $_POST['r_event'];
$r_payment = $_POST['r_payment'];
$r_img = $_POST['r_img'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_detail (r_name, r_email, r_phone, r_clg , r_event , r_payment, r_img)
VALUES ('$r_name', '$r_email', '$r_phone', '$r_clg', '$r_event', '$r_payment', '$r_img')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
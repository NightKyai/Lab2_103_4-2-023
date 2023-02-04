<?php
$servername = "localhost";
$username = "Cpe1512";
$password = "Night.46";
$dbname ="Cpe1512";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
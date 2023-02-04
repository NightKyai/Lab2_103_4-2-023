<?php
$servername = "localhost";
$username = "Cpe1512";
$password = "Night.46";
$dbname = "cpe1512";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age, gender,marry_status From survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["gender"]=="m"){
      if($row["age"]<15){
        echo"ด.ช.";
      }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
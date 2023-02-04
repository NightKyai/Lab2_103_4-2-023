<?php
$servername = "localhost";
$username = "Cpe1512";
$password = "Night.46";
$dbname = "cpe1512";

$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age, gender, marry_status FROM survey where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<form action="save_edit_people.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $row["name"];?>"><br>
    Age: <input type="text" name="age" value="<?php echo $row["age"];?>"><br>
    Gender: <select name="gender">
        <option value="M" <?php if($row["gender"]=="m") echo "selected";?>>Male</option>
        <option value="F" <?php if($row["gender"]=="f") echo "selected";?>>Female</option>
    </select><br>
    Marry Status: <select name="marry_status">
        <option value="S" <?php if($row["marry_status"]=="S") echo "selected";?>>Single</option>
        <option value="M" <?php if($row["marry_status"]=="m") echo "selected";?>>Married</option>
    </select><br>
    <input type="submit" value="Send">
</form>
<?php
}
?>
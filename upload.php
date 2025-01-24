<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
echo $fname;
echo $lname;



$servername = "localhost";
$username = "root";
$password = "Satara@123";
$dbname = "facebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (fname, lname) VALUES ('$fname','$lname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<?php
//MySQLi Procedural
$servername = "localhost";
$username = "root";
$password = "Chandrala107!";
$dbName = "art_gallery";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// Create database
// $sql = "CREATE DATABASE art_gallery";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }
//$conn->close();
?>

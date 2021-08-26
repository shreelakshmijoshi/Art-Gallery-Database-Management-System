<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM staff WHERE staffID= '$staffID'";
mysqli_query($conn,$query);
header('location:display.php');









?>

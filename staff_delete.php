<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM staff WHERE StaffID='$StaffID'";
$result = mysqli_query($conn,$query);
header('location:staff_display.php');
?>

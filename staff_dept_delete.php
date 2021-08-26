<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM staff_dept WHERE ID='$ID'";
$result = mysqli_query($conn,$query);
header('location:staff_dept_display.php');
?>

<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM art WHERE artID='$artID'";
$result = mysqli_query($conn,$query);
header('location:art_display.php');
?>

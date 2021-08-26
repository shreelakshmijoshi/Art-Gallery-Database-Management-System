<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM ticketSale WHERE TranID='$TranID'";
$result = mysqli_query($conn,$query);
header('location:ticketSale1_display.php');
?>

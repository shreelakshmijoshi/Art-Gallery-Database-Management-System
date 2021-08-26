<?php
include 'open_connection.php';
extract($_GET);
$query = "DELETE FROM ticket WHERE ticketID='$ticketID'";
$result = mysqli_query($conn,$query);
header('location:ticket_display.php');
?>

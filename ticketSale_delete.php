<?php
include 'open_connection.php';
extract ($_GET);
$query = "DELETE FROM ticketSale WHERE TranID = '$TranID'";
echo $query;
mysqli_query($conn,$query);
header('location: ticketSale_display.php');

?>

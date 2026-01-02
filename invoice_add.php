<?php
include 'db_inc.php';
$title ='Quote View';
$SKU = $_GET['SKU'];
$price = $_GET['price'];
$Ticket = $_GET['Ticket'];
    
$sql = "INSERT INTO cm_invoice_parts (SKU, price, Ticket) VALUES ('$SKU','$price','$Ticket')";
$result = mysqli_query($conn,$sql);
if (!$result) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item Inserted<br><br>Add <a href="fle_update.php?Ticket=';
$content .= $Ticket;
$content .='">Invoice Info</a>.';
}


    include 'template_bootstrap.php';
?>

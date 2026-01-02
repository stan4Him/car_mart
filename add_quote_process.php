<?php
include 'db_conn.php';
$title ='Quote Added';
$SKU = $_POST['SKU'];
$price = $_POST['price'];
$Ticket = $_POST['Ticket'];
$SKU2 = $_POST['SKU2'];
$price2 = $_POST['price2'];
$SKU3 = $_POST['SKU3'];
$price3 = $_POST['price3'];
$SKU4 = $_POST['SKU4'];
$price4 = $_POST['price4'];
$SKU5 = $_POST['SKU5'];
$price5 = $_POST['price5'];
$today = date('Y-m-d');
$QuoteNumber = $_POST['QuoteNumber'];


$notify= 'spowell@fulllineexhaust.com'; // an email address required in case of errors



$sql = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU','$price','$Ticket')";
$result = mysqli_query($conn,$sql);
if (!$result) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item Inserted<br><br>';
}
if ($price2 !=='') {
  $sql2 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU2','$price2','$Ticket')";
$result2 = mysqli_query($conn,$sql2);
if (!$result2) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item 2 Inserted<br><br>';
}
}

if ($price3 !=='') {
$sql3 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU3','$price3','$Ticket')";
$result3 = mysqli_query($conn,$sql3);
if (!$result3) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item 3 Inserted<br><br>';
}
}
if ($price4 !=='') {
$sql4 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU4','$price4','$Ticket')";
$result4 = mysqli_query($conn,$sql4);
if (!$result4) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item 4 Inserted<br><br>';
}
}
if ($price5 !=='') {
$sql5 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU5','$price5','$Ticket')";
$result5 = mysqli_query($conn,$sql5);
if (!$result5) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Item 5 Inserted<br><br>';
}
}
$query = "UPDATE cm_ticket SET date_updated = '$today', status = 'quoted' WHERE Ticket = '$Ticket'";
$res = mysqli_query($conn,$query);
if (!$res) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'DB Updated.Item Status Quoted.<br><br>';
}

$query3 = "INSERT INTO cm_iqs (QuoteNumber,Ticket) VALUES ('$QuoteNumber','$Ticket')";
$res3 = mysqli_query($conn,$query3) or die(mysqli_error($conn));

$content .= 'DB Updated.Item Quote Added!!!!!<br><br>';

include 'template_bootstrap.php';
?>
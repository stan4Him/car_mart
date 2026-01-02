<?php
include 'db_conn.php';
$title ='Shipment Update';
$today = date('Y-m-d');
$Shipper = $_POST['Shipper'];
$TrackingNumber = $_POST['TrackingNumber'];
$Ticket = $_POST['Ticket'];

  
$sql = "UPDATE car_mart_ticket_new SET Shipper = '$Shipper',TrackingNumber = '$TrackingNumber', `status` = 'shipped' WHERE Ticket = '$Ticket'";
$result = mysqli_query($conn,$sql);
if (!$result) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content = 'Shipping Updated for Ticket<br><br>';
}
/*
Changed back to original processing
$sql2 = "INSERT INTO cm_iqs_shipped SELECT *FROM cm_iqs WHERE Ticket = '$Ticket'";
$result2 = mysqli_query($conn,$sql2);
if (!$result2) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Shipping Data Archived.<br><br>';
}
$sql3 = "DELETE FROM cm_iqs WHERE Ticket = '$Ticket'";
$result3 = mysqli_query($conn,$sql3);
if (!$result3) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Shipping Data Removed<br><br>';
}
*/
//Changed back to original table
//$query = "UPDATE cm_ticket SET date_updated = '$today', status = 'shipped' WHERE Ticket = '$Ticket'";
//This moves to a new table
//$query = "INSERT INTO cm_ticket_shipped SELECT *FROM cm_ticket WHERE Ticket = '$Ticket'";
//$res = mysqli_query($conn,$query);

/*if (!$res) {
  trigger_error(mysqli_error($conn), E_USER_ERROR);
}
else {
$content .= 'Ticket Updated.<br><br>';
}*/
//Update Shipment status
//$q2 =  mysqli_query($conn,"UPDATE cm_ticket_shipped SET status = 'shipped' WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
//Delete Parts (Deprecated)
//$q2 =  mysqli_query($conn,"DELETE FROM cm_parts WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
//Delete Tickets
//$q3 =  mysqli_query($conn,"DELETE FROM cm_ticket WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
    include 'template_bootstrap.php';
?>

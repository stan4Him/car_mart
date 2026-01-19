<?php

include 'db_conn.php';


$title = "Quote Process";
$Ticket = $_POST['Ticket'];
$VIN = $_POST['VIN'];
$car_info = $_POST['car_info'];
$shop_info = $_POST['shop_info'];
//$part_type = $_POST['part_type'];
$date_added = date('Y-m-d');
$QuoteNumber = $_POST['QuoteNumber'];
$today = date('Y-m-d');
if(isset($_POST['warranty'])) {
    $warranty = $_POST['warranty'];
}



// $success = 'wgutierrez@fulllineexhaust.com,bill.kalt@car-mart.com,arlie.bartholomew@car-mart.com,shelby.hale@car-mart.com';
//$success = 'support@fulllineexhaust.com';
//$notify= 'spowell@fulllineexhaust.com'; // an email address required in case of errors

//$subject = 'Quote Confirmation: ';
//$subject .= $QuoteNumber;
//$message = 'Quote Submitted. Awaiting PO.';
$post = 'There was a Data Entry Error';




$sql = "INSERT INTO car_mart_ticket_new(Ticket,VIN,car_info,shop_info,status,date_added,QuoteNumber,warranty) VALUES('$Ticket','$VIN','$car_info','$shop_info','quoted','$date_added','$QuoteNumber','$warranty')";
$result = mysqli_query($conn,$sql);



 /*
  $query = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU','$price','$Ticket')";
$res = mysqli_query( $con,$query);
if (!$res) {
  trigger_error(mysqli_error( $con), E_USER_ERROR);
}
else {
$content .= 'Item Inserted<br><br>';
}
if ($price2 !=='') {
  $sql2 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU2','$price2','$Ticket')";
$result2 = mysqli_query( $con,$sql2);
if (!$result2) {
  trigger_error(mysqli_error( $con), E_USER_ERROR);
}
else {
$content .= 'Item 2 Inserted<br><br>';
}
}

if ($price3 !=='') {
$sql3 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU3','$price3','$Ticket')";
$result3 = mysqli_query( $con,$sql3);
if (!$result3) {
  trigger_error(mysqli_error( $con), E_USER_ERROR);
}
else {
$content .= 'Item 3 Inserted<br><br>';
}
}
if ($price4 !=='') {
$sql4 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU4','$price4','$Ticket')";
$result4 = mysqli_query( $con,$sql4);
if (!$result4) {
  trigger_error(mysqli_error( $con), E_USER_ERROR);
}
else {
$content .= 'Item 4 Inserted<br><br>';
}
}
if ($price5 !=='') {
$sql5 = "INSERT INTO cm_parts (SKU, price, Ticket) VALUES ('$SKU5','$price5','$Ticket')";
$result5 = mysqli_query( $con,$sql5);
if (!$result5) {
  trigger_error(mysqli_error( $con), E_USER_ERROR);
}
else {
$content .= 'Item 5 Inserted<br><br>';
}
}
*/
//$sql6 = "INSERT INTO cm_iqs (QuoteNumber,Ticket) VALUES ('$QuoteNumber','$Ticket')";
//$result6 = mysqli_query($conn,$sql6);

/*
 $message .="Quote Number: ";
 $message .= $QuoteNumber;
 $message .="
 ";
 $message .="Ticket Number: ";
 $message .= $Ticket;
*/

 if (!$result) {
    $content =  ('Car Mart Quote. Quote Not Inserted.Hey! Where you going? There was a data entry error. Please try again. Ticket number entered? ' . mysqli_error($conn));
    //mail($notify, 'Car Mart Quote', $post . mysqli_error($con));
    }    else
    $content = 'DB Updated.Item Quote Added!!!!!<br><br>';
    //mail($success,$subject,$message);



include 'template_bootstrap.php';
?>
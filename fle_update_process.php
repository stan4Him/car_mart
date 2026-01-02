<?php
include 'db_conn.php';
$title ='Invoice Update';
$today = date('Y-m-d');
$PO = $_POST['PO'];
$Invoice = $_POST['Invoice'];
$Ticket = $_POST['Ticket'];
$success = 'wgutierrez@fulllineexhaust.com,bill.kalt@car-mart.com,arlie.bartholomew@car-mart.com,shelby.hale@car-mart.com';
$subject = 'PO Confirmation: ';
$subject .= $PO;
$message = 'PO recieved and invoiced. Shipping to follow.';
//$notify = 'wgutierrez@fulllineexhaust.com';
    

$sql = "UPDATE car_mart_ticket_new SET PONumber = '$PO', InvoiceNumber = '$Invoice' WHERE Ticket = '$Ticket'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$content = 'PO Invoiced.<br><br>';


$query = "UPDATE car_mart_ticket_new SET date_updated = '$today', status = 'invoiced' WHERE Ticket = '$Ticket'";
$res = mysqli_query($conn,$query) or die(mysqli_error($conn));



$content .= 'Ticket Updated.<br><br>';

/*mail($success,$subject,$message);

    if (!$result) {
        mail($notify, 'Car Mart Quote', 'Quote Not Completely Updated.' . mysqli_error($con));
    }    
*/
    include 'template_bootstrap.php';
?>



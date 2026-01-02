<?php
$today = date('Y-m-d');
$title = "Total Ticket";
$Ticket = $_GET['Ticket'];
// Config
include 'db_conn.php';

$sql = "SELECT * FROM car_mart_ticket_new WHERE Ticket = '$Ticket'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
/*$sql2 = "SELECT * FROM cm_ticket_shipped,cm_iqs WHERE cm_ticket. Ticket = cm_iqs.Ticket AND cm_ticket_shipped.Ticket = '$Ticket'";
$result2 = mysqli_query($conn,$sql2) or die(mysqli_error_no($conn));

*/

$content = '<h3 class="text-center">Total Ticket : ';
$content .= $Ticket;
$content .= '</h3>';
$content .= '<div class="container-fluid">';


while ($row = mysqli_fetch_array($result)) {
    $content .= '<div class="row">';
    $content .= '<p>Ticket Info</p>';
    $content .= '<div class="col-2">VIN: <br/>';
    $content .= $row['VIN'];
    $content .= '</div>';
     $content .= '<div class="col-2">Car Info: <br/>';
    $content .= $row['car_info'];
    $content .= '</div>';
     $content .= '<div class="col-2">Shop Info: <br/>';
    $content .= $row['shop_info'];
    $content .= '</div>';
     $content .= '<div class="col-2">Status: <br/>';
    $content .= $row['status'];
    $content .= '</div>';
     $content .= '<div class="col-2">Date Added: <br/>';
    $content .= $row['date_added'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Invoice Info</p>';
    $content .= '<div class="col-2">PO: <br/>';
    $content .= $row['PONumber'];
    $content .= '</div>';
     $content .= '<div class="col-2">Invoice: <br/>';
    $content .= $row['InvoiceNumber'];
    $content .= '</div>';
    $content .= '<div class="col-2">Quote: <br/>';
    $content .= $row['QuoteNumber'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Shipping Info</p>';
    $content .= '<div class="col-2">Shipper : <br/>';
    $content .= $row['Shipper'];
    $content .= '</div>';
     $content .= '<div class="col-2">Tracking Number: <br/>';
    $content .= $row['TrackingNumber'];
    $content .= '</div>';
    $content .= '</div>';
    
    
    
    
    }

/* while ($row2 = mysqli_fetch_array($result2)) {
    $content .= '<div class="row">';
    $content .= '<p>Ticket Info</p>';
    $content .= '<div class="col-2">VIN: <br/>';
    $content .= $row2['1'];
    $content .= '</div>';
    $content .= '<div class="col-2">Car Info: <br/>';
    $content .= $row2['2'];
    $content .= '</div>';
    $content .= '<div class="col-2">Shop Info: <br/>';
    $content .= $row2['3'];
    $content .= '</div>';
    $content .= '<div class="col-2">Status: <br/>';
    $content .= $row2['4'];
    $content .= '</div>';
    $content .= '<div class="col-2">Date Added: <br/>';
    $content .= $row2['6'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Invoice Info</p>';
    $content .= '<div class="col-2">PO: <br/>';
    $content .= $row2['10'];
    $content .= '</div>';
    $content .= '<div class="col-2">Invoice: <br/>';
    $content .= $row2['9'];
    $content .= '</div>';
    $content .= '<div class="col-2">Quote: <br/>';
    $content .= $row2['8'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Shipping Info</p>';
    $content .= '<div class="col-2">Shipper : <br/>';
    $content .= $row2['11'];
    $content .= '</div>';
    $content .= '<div class="col-2">Tracking Number: <br/>';
    $content .= $row2['12'];
    $content .= '</div>';
    $content .= '</div>';




}

    $content .= '<div class="row">';
    $content .= '<p>Parts Info</p>';
    while ($row2 = mysqli_fetch_array($result2)) {
        
    $content .= '<div class="col-6">';
    $content .= 'SKU:';
    $content .= $row2[0];
    $content .= '</div>';
    $content .= '<div class="col-6">';
    $content .= 'Price: ';
    $content .= $row2[1];
    $content .= '</div>';    
    
    
    }
    $result3 = mysqli_query($conn,"SELECT SUM(price) AS value_sum FROM cm_parts WHERE Ticket = '$Ticket'") or die( mysqli_error($conn)); 
    $row3 = mysqli_fetch_assoc($result3); 
    $content .= "<br><br>Invoice Value: ";
    $content .= $row3['value_sum'];
    $content .= '</div>'; 
    $content .= '</div>';
*/
    include 'template_bootstrap.php';
?>

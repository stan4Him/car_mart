<?php
$today = date('Y-m-d');
$title = "Total Ticket";
$Ticket = $_GET['Ticket'];
// Config
include 'db_conn.php';

$sql = "SELECT * FROM cm_ticket_shipped,cm_iqs WHERE cm_ticket_shipped. Ticket = cm_iqs.Ticket AND cm_ticket_shipped.Ticket = '$Ticket'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));



$content .= '<h3 class="text-center">Total Ticket : ';
$content .= $Ticket;
$content .= '</h3>';
$content .= '<div class="container-fluid">';


while ($row = mysqli_fetch_array($result)) {
    $content .= '<div class="row">';
    $content .= '<p>Ticket Info</p>';
    $content .= '<div class="col-2">VIN: <br/>';
    $content .= $row['1'];
    $content .= '</div>';
    $content .= '<div class="col-2">Car Info: <br/>';
    $content .= $row['2'];
    $content .= '</div>';
    $content .= '<div class="col-2">Shop Info: <br/>';
    $content .= $row['3'];
    $content .= '</div>';
    $content .= '<div class="col-2">Status: <br/>';
    $content .= $row['4'];
    $content .= '</div>';
    $content .= '<div class="col-2">Date Added: <br/>';
    $content .= $row['6'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Invoice Info</p>';
    $content .= '<div class="col-2">PO: <br/>';
    $content .= $row['10'];
    $content .= '</div>';
    $content .= '<div class="col-2">Invoice: <br/>';
    $content .= $row['9'];
    $content .= '</div>';
    $content .= '<div class="col-2">Quote: <br/>';
    $content .= $row['8'];
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="row">';
    $content .= '<p>Shipping Info</p>';
    $content .= '<div class="col-2">Shipper : <br/>';
    $content .= $row['11'];
    $content .= '</div>';
    $content .= '<div class="col-2">Tracking Number: <br/>';
    $content .= $row['12'];
    $content .= '</div>';
    $content .= '</div>';
}
include 'template_bootstrap.php';
?>

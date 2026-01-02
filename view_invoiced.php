<?php
$today = date('Y-m-d');
$title = "Invoiced Tickets";
// Config
include 'db_conn.php';


$sql = "SELECT * FROM car_mart_ticket_new WHERE status = 'invoiced'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
$content = '<h3 class="text-center">Invoiced Tickets</h3>';
$content .= '<div class="container-fluid">';
$content .= '<table class ="table">';
$content .= '<thead><tr><th>Add Shipping</th><th>Ticket</th><th>VIN</th><th>Shop</th><th>Car Info</th><th>Invoice</th><th>PO Number</th><th>Updated</th></tr></thead>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>';
    $content .= '<td>';
    $content .= '<a href=http://172.16.128.7:8080/car_mart/ship_update.php?Ticket=';
    $content .= $row['Ticket'];
    $content .= '>';
    $content .= 'Add Shipping';
    $content .= '</a></td>';
    $content .= '<td>';
    $content .= $row['Ticket'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['VIN'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['shop_info'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['car_info'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['InvoiceNumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['PONumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['date_updated'];
    $content .= '</td>';
    }
    $content .= '</table></div>';

    include 'template_bootstrap.php';
?>

<?php
$today = date('Y-m-d');
$title = "Shipped Tickets";
// Config
include 'db_conn.php';

/** Query */
$sql = "select * from car_mart_ticket_new WHERE date_updated >= now()-INTERVAL 1 month AND status = 'shipped' ORDER BY date_updated DESC";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$content = '<h3 class="text-center">Shipped Tickets</h3>';
$content .= '<div class="container-fluid">';
$content .= '<table class ="table">';
$content .= '<thead><tr><th>Ticket</th><th>Quote Number</th><th>Invoice Number</th><th>PO Number</th><th>Shipper</th><th>Tracking</th></tr></thead>';
while ($row = mysqli_fetch_array($result)) {
    $content .= '<tr>';
    $content .= '<td>';
    $content .= $row['Ticket'];
    $content .= '</a></td>';
    $content .= '<td>';
    $content .= $row['QuoteNumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['InvoiceNumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['PONumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['Shipper'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['TrackingNumber'];
    $content .= '</td>';
    }
    $content .= '</table></div>';

    include 'template_bootstrap.php';

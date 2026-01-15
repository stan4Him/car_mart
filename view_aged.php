<?php
$today = date('Y-m-d');
$title = "Aged Out Quotes";
// Config
include 'db_conn.php';


$sql = "SELECT * FROM car_mart_ticket_aged  ORDER BY date_added ASC";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$content .= '<h3 class="text-center">Aged Quotes</h3>';
$content .= '<div class="container-fluid text-center">';
$content .=  '<p class="bg-primary text-white">More Than 30 days old.</p>';
$content .= '<table class ="table">';
$content .= '<thead><tr><th>Ticket #</th><th>VIN</th><th>Shop</th><th>Vehicle</th><th>Added</th><th>Updated</th></tr></thead>'; 
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>';
    $content .= '<td>';
    $content .= $row['Ticket'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['QuoteNumber'];
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
    $content .= $row['date_added'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['date_updated'];
    $content .= '</td>';
    }
    $content .= '</table></div>';

       

    include 'template_bootstrap.php';
?>

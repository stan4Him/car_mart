<?php
$today = date('Y-m-d');
$title = "New Tickets";
// Config
include 'db_conn.php';


$sql = "SELECT * FROM cm_ticket WHERE status = 'New'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
$content .= '<h3 class="text-center">New Tickets</h3>';
$content .= '<div class="container-fluid text-center">';
$content .= '<table class ="table">';
$content .= '<thead><tr><th>&nbsp;</th><th>Ticket</th><th>VIN</th><th>Shop</th><th>Car Info</th><th>Added</th></tr></thead>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>';
    $content .= '<td>';
    $content .= '<a href=http://172.16.128.7:8080car_mart/add_quote.php?Ticket=';
    $content .= $row['Ticket'];
    $content .= ' </a>';
    $content .= 'Add Quote';
    $content .= '</td>';
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
    $content .= $row['date_added'];
    $content .= '</td>';
    }
    $content .= '</table></div>';



    include 'template_bootstrap.php';
?>

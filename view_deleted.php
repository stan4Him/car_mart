<?php
$today = date('Y-m-d');
$title = "Deleted Tickets";
// Config
include 'db_conn.php';


$sql = "SELECT * FROM cm_deleted";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
$content .= '<h3 class="text-center">Deleted Tickets</h3>';
$content .= '<div class="container-fluid">';
$content .= '<table class ="table" >';
$content .= '<thead><tr><th>Ticket</th><th>VIN</th><th>Car info</th><th>Shop Info</th><th>Part Type</th><th>Added</th><th>Updated</th><th>PO Number</th><th>Invoice</th><th>Note</th></tr></thead>'; 
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>
    ';
    $content .= '<td>';
    $content .= $row['Ticket'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['VIN'];
    $content .= '</td>';
    $content .= '<td>';
        $content .= $row['car_info'];
        $content .= '</td>';
    $content .= '<td>';
        $content .= $row['shop_info'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['part_type'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['date_added'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['date_updated'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['PONumber'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['InvoiceNumber'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['note'];
        $content .= '</td>';
        $content .= '<br>';
    }
    $content .= '</table></div>';

    include 'template_bootstrap.php';
?>

<?php
$today = date('Y-m-d');
// Config
include 'db_conn.php';


$sql = "SELECT * FROM cm_ticket WHERE Status = 'Open'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
$content .= '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>';
    $content .= '<td>';
     
    $content .= '<a href=https://172.16.128.7:8080/car_mart/add_quote.php?VIN=';
    $content .= $row['VIN'];
    $content .= '>';
    $content .= 'Add A Quote';
    $content .= '</a>';
    $content .= '</td>';
    $content .= '<td>';
        $content .= 'VIN:  '; 
        $content .= $row['VIN'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'PO:  '; 
        $content .= $row['PO'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Quote:  '; 
        $content .= $row['Quote'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Contact:  '; 
        $content .= $row['shop_info'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Invoice:  '; 
        $content .= $row['Invoice'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Fit:  '; 
        $content .= $row['car_info'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Status:  '; 
        $content .= $row['status'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Added:  '; 
        $content .= $row['date_added'];
        $content .= '</td>';
        $content .= '<tr>';
    }
    $content .= '</table>';

    include 'template_bootstrap.php';
?>

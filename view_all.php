<?php
/*
$today = date('Y-m-d');
// Config
include 'db_inc.php';


$sql = "SELECT * FROM cm_ticket WHERE Status = 'Open'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no());
$content .= '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .=''
    $content .= '<tr>';
    $content .= '<td>';
     
    $content .= '<a href=http://172.16.128.7:8080car_mart/add_po.php?VIN=';
    $content .= $row['VIN'];
    $content .= '>';
    $content .= 'Add A P.O.';
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
        $content .= '<td>';
        $content .= 'Updated:  '; 
        $content .= $row['date_updated'];
        $content .= '</td>';
        $content .= '<tr>';
    }
    $content .= '</table>';
*/
$title="All Invoices View";
$content = 'This feature is under development..';
    include 'template_bootstrap.php';
?>

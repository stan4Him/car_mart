<?php
$VIN = $_GET['VIN'];
// Config
include 'db_conn.php';

$content .= '<table>';
$sql = "SELECT * FROM carmart_details WHERE VIN = 'VIN'";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
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
        $content .= $row['Contact'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Invoice:  '; 
        $content .= $row['Invoice'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Fit:  '; 
        $content .= $row['Fit'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= 'Status:  '; 
        $content .= $row['Status'];
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

    include 'template_bootstrap.php';
?>
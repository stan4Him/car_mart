<?php

$title = "Shipped Where ??";
$Invoice = $_GET['Invoice'];
// Config
include 'db_conn.php';

$sql = "SELECT * FROM cm_ship_to WHERE InvoiceNumber = '$Invoice'";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));


$content = '<h3 class="text-center">Where it went : ';
//$content .= $Ticket;
$content .= '</h3>';
$content .= '<div class="container-fluid">';


while ($row = mysqli_fetch_array($result)) {
    $content .= '<div class="row">';
    $content .= '<p>Shipped To Info</p>';
    $content .= '<div class="col-2">ID: <br/>';
    $content .= $row['ID'];
    $content .= '</div>';
     $content .= '<div class="col-2">Invoice: <br/>';
    $content .= $row['InvoiceNumber'];
    $content .= '</div>';
     $content .= '<div class="col-2">Name: <br/>';
    $content .= $row['Shipto_Name'];
    $content .= '</div>';
     $content .= '<div class="col-2">Address: <br/>';
    $content .= $row['Shipto_Address'];
    $content .= '</div>';
     $content .= '<div class="col-2">City: <br/>';
    $content .= $row['Shipto_City'];
    $content .= '</div>';
    $content .= '<div class="col-2">State: <br/>';
    $content .= $row['ST'];
    $content .= '</div>';
    $content .= '<div class="col-2">Invoice Total: <br/>';
    $content .= $row['Invoice_Total'];
    $content .= '</div>';
    $content .= '</div>';
    
    
    
    
    
    }


    include 'template_bootstrap.php';
?>

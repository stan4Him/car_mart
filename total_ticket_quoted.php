<?php
$today = date('Y-m-d');
$title = "Total Ticket";
$Ticket = $_GET['Ticket'];
// Config
include 'db_conn.php';

$sql = "SELECT * FROM cm_ticket, cm_iqs WHERE cm_ticket.Ticket = cm_iqs.Ticket AND cm_ticket.Ticket = '$Ticket'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$sql2 = "SELECT *  FROM cm_parts WHERE Ticket = '$Ticket'";
$result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));



$content = '<h3 class="text-center">Total Ticket Quoted: ';
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
    $content .= '<p>Quote Info</p>';
    $content .= '<div class="col-2">Ticket : <br/>';
    $content .= $row['7'];
    $content .= '</div>';
     $content .= '<div class="col-2">Quote: <br/>';
    $content .= $row['8'];
    $content .= '</div>';
    $content .= '</div>';
    
    
    
    
    }
    $content .= '<div class="row">';
    $content .= '<p>Parts Info</p>';
    while ($row2 = mysqli_fetch_array($result2)) {
        
    $content .= '<div class="col-6">';
    $content .= 'SKU:';
    $content .= $row2[0];
    $content .= '</div>';
    $content .= '<div class="col-6">';
    $content .= 'Price: ';
    $content .= $row2[1];
    $content .= '</div>';    
    
    
    }
    $result3 = mysqli_query($conn,"SELECT SUM(price) AS value_sum FROM cm_parts WHERE Ticket = '$Ticket'") or die( mysqli_error($conn)); 
    $row3 = mysqli_fetch_assoc($result3); 
    $content .= "<br><br>Quoted Value: ";
    $content .= $row3['value_sum'];
    $content .= '</div>'; 
    $content .= '</div>';

    include 'template_bootstrap.php';
?>

<?php
$title = 'Move Older';
// Config
include 'db_conn.php';

$query = "SELECT * FROM cm_ticket WHERE status = 'quoted' AND DATE(date_added) <= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
    $Ticket = $row['0'];

    $q =  mysqli_query($conn,"INSERT INTO cm_iqs_older SELECT * FROM cm_ticket WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
//    $q2 =  mysqli_query($conn,"DELETE FROM cm_parts WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
    $q3 =  mysqli_query($conn,"DELETE FROM cm_ticket_older WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
}


$content = 'Older Ticket Archived. Associated Quote/Invoice Info Archived.';


include 'template_bootstrap.php';
?>
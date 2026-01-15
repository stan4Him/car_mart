<?php
$title = 'Move Older';
// Config
include 'db_conn.php';

$query = "SELECT * FROM car_mart_ticket_new WHERE status = 'quoted' AND DATE(date_added) <= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
    $Ticket = $row['0'];

    $q =  mysqli_query($conn,"INSERT INTO car_mart_ticket_aged SELECT * FROM car_mart_ticket_new WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));

    $q3 =  mysqli_query($conn,"DELETE FROM car_mart_ticket_new WHERE Ticket ='$Ticket'") or die(mysqli_error($conn));
}


$content = 'Older Ticket Archived. Associated Quote/Invoice Info Archived.';


include 'template_bootstrap.php';
?>
<?php

$title = 'Car Mart Notes';
include 'db_conn.php';


$sql = "SELECT * FROM cm_ticket_notes";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));;
$content = '<table class ="table">';
$content .= '<thead><tr><th>Ticket</th><th>Note</th><th>Date Added</th></tr></thead>';
while ($row = mysqli_fetch_assoc($result)){

    $content .= '<tr>';
    $content .= '<td>';
    $content .=  $row['Ticket'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['Note'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['date_added'];
    $content .= '</td>';
    $content .= '</tr>';
}
$content .= '</table>';

include 'template_bootstrap.php';
?>
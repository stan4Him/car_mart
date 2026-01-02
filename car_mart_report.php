<?php
include 'db_conn.php';

$title ='Car Mart Report';
$today = date('Y-m-d');
$success = 'spowell@fulllineexhaust.com,';
$subject = 'Car Mart Report For ';
$subject .= $today;


$query = "DELETE FROM `cm_po_check`
WHERE `PONumber` in (SELECT DISTINCT `PONumber` FROM `car_mart_ticket_new`)";
$res = mysqli_query($conn,$query) or die(mysqli_error($conn));

$query2 = "DELETE FROM `cm_ticket_check`
WHERE `Ticket` in (SELECT DISTINCT `Ticket` FROM `car_mart_ticket_new`)";
$result = mysqli_query($conn,$query2) or die(mysqli_error($conn));

$sql = "SELECT Ticket FROM cm_ticket_check";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql2 = "SELECT PONumber FROM cm_po_check";
$result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));



$content = '<table>
        <tr>
        <td>Tickets Not found.</td></tr>
        ';


    while ($row = mysqli_fetch_array($result)) {
        $content .= '
        <tr>
        <td>Ticket:  ';
        $content .= $row[0];
        $content .= '</tr>';

    }



$content .='</table><br><br>';



    $content .= '<table>
        <tr>
        <td>POs Not Found</td></tr>';

    while ($row2 = mysqli_fetch_array($result2)) {
        $PONumber = $row2[0];

$content .= '
        <tr>
        <td>PO:';
        $content .= $PONumber;
        $content .='</td>
        </tr>';
    }
    


$content .='</table><br><br>';

include 'template_bootstrap.php';


    




<?php
$today = date('Y-m-d');
$title = "Quotes";
// Config
include 'db_conn.php';

$sql = "SELECT * FROM car_mart_ticket_new WHERE `status` = 'quoted' AND DATE(date_added) > DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY QuoteNumber DESC";
//$sql = "SELECT * FROM cm_ticket,cm_iqs WHERE cm_ticket.status = 'quoted' AND cm_ticket.Ticket = cm_iqs.Ticket AND DATE(date_added) > DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY QuoteNumber DESC";
$result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
$content = '<h3 class="text-center">Quotes</h3>';
$content .= '<div class="container-fluid text-center">';
$content .=  '<p class="bg-primary text-white">Less Than 7 days</p>';
$content .= '<table class ="table">';
$content .= '<thead><tr><th>Add Invoice Info</th><th>Ticket #</th><th>Quote</th><th>VIN</th><th>Shop</th><th>Vehicle</th><th>Added</th><th>Updated</th></tr></thead>';
while ($row = mysqli_fetch_assoc($result)) {
    $content .= '<tr>';
    $content .= '<td>';
    $content .= '<a href=http://172.16.128.7:8080/car_mart/fle_update.php?Ticket=';
    $content .= $row['Ticket'];
    $content .= '> Add ';
    $content .= '</a></td>';
    $content .= '<td>';
    $content .= $row['Ticket'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['QuoteNumber'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['VIN'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['shop_info'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['car_info'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['date_added'];
    $content .= '</td>';
    $content .= '<td>';
    $content .= $row['date_updated'];
    $content .= '</td>';
    }
    $content .= '</table></div>';

    $sql = "SELECT * FROM car_mart_ticket_new  WHERE `status` = 'quoted' AND DATE(date_added) <= DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND DATE(date_added) > DATE_SUB(CURDATE(), INTERVAL 31 DAY) ORDER BY QuoteNumber DESC";
    $result = mysqli_query($conn,$sql) or die(mysqli_error_no($conn));
    $content .= '<h3 class="text-center">Quotes</h3>';
    $content .= '<div class="container-fluid text-center">';
    $content .=  '<p class="bg-secondary text-white">More Than 7 days</p>';
    $content .= '<table class ="table">';
    $content .= '<thead><tr><th>Add Invoice Info</th><th>Ticket #</th><th>Quote</th><th>VIN</th><th>Shop</th><th>Vehicle</th><th>Added</th><th>Updated</th></tr></thead>';
    while ($row = mysqli_fetch_assoc($result)) {
        $content .= '<tr>';
        $content .= '<td>';
        $content .= '<a href=http://172.16.128.7:8080/car_mart/fle_update.php?Ticket=';
        $content .= $row['Ticket'];
        $content .= '> Add ';
        $content .= '</a></td>';
        $content .= '<td>';
        $content .= $row['Ticket'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['QuoteNumber'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['VIN'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['shop_info'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['car_info'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['date_added'];
        $content .= '</td>';
        $content .= '<td>';
        $content .= $row['date_updated'];
        $content .= '</td>';
        }
        $content .= '</table></div>';    

   /* $query = "SELECT * FROM car_mart_ticket_new WHERE status = 'quoted'";
    if ($res = mysqli_query($conn,$query)) {
        $rowcount = mysqli_num_rows( $res );

        $content .= "Total Records: ";
        $content .= $rowcount;
    }
    ;

*/
    include 'template_bootstrap.php';
?>

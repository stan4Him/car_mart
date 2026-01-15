<?php
$title = 'Dashboard';
$content = '
<table class="search table table-bordered" style="width:100%">
<caption style="caption-side: top;">Should these quotes be invoiced?</caption>
        <thead>
            <tr>
                <th>Ticket</th>
                <th>VIN</th>
                <th>Car</th>
                <th>Shop</th>
                <th>Status</th>
                <th>Updated</th>
                <th>Added</th>
                <th>Quote</th>
                <th>Invoice</th>
                <th>PO</th>
                <th>Shipper</th>
                <th>Tracking</th>
                <th>Warranty</th>
            </tr>
        </thead>
        <tbody>';
include 'db_conn.php';  
$query = "SELECT * FROM car_mart_ticket_new WHERE Ticket LIKE '60570%' AND `status` = 'quoted' OR PONumber !='' AND `status` = 'quoted'";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";
$content .= $row['Ticket'];
$content .= "</td>";

     $content .= "<td>";
     $content .= $row['VIN'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['car_info'];
     $content .= "</td>";
$content .= "<td>";
     $content .= $row['shop_info'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['status'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['date_updated'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['date_added'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['QuoteNumber'];
     $content .= "</td>";


     $content .= "<td>";
     $content .= $row['InvoiceNumber'];

     $content .= "</td>";


     $content .= "<td>";
     $content .= $row['PONumber'];
     $content .= "</td>";
    $content .= "<td>";
    $content .= $row['Shipper'];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row['TrackingNumber'];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row['warranty'];
    $content .= "</td>";
$content .= "</tr>";
}
$content .= "
</tbody>
</table>";
$content .= '<br><br>
<table class="search table table-bordered" style="width:100%">
<caption style="caption-side: top;">Should these be shipped?</caption>
        <thead>
            <tr>
                <th>Ticket</th>
                <th>VIN</th>
                <th>Car</th>
                <th>Shop</th>
                <th>Status</th>
                <th>Updated</th>
                <th>Added</th>
                <th>Quote</th>
                <th>Invoice</th>
                <th>PO</th>
                <th>Shipper</th>
                <th>Tracking</th>
                <th>Warranty</th>
            </tr>
        </thead>
        <tbody>';
include 'db_conn.php';  
$query = "SELECT * FROM car_mart_ticket_new WHERE `status` = 'invoiced' AND DATE(date_updated) < DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";
$content .= $row['Ticket'];
$content .= "</td>";

     $content .= "<td>";
     $content .= $row['VIN'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['car_info'];
     $content .= "</td>";
$content .= "<td>";
     $content .= $row['shop_info'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['status'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['date_updated'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['date_added'];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row['QuoteNumber'];
     $content .= "</td>";


     $content .= "<td>";
     $content .= $row['InvoiceNumber'];

     $content .= "</td>";


     $content .= "<td>";
     $content .= $row['PONumber'];
     $content .= "</td>";
    $content .= "<td>";
    $content .= $row['Shipper'];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row['TrackingNumber'];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row['warranty'];
    $content .= "</td>";
$content .= "</tr>";
}
$content .= "
</tbody>
</table>";
$content .= '<p>Track A PO:</p>
<form method=POST action="trackit.php">
<input type="text" name="PO" id="PO" placeholder="Enter PO to track">
<br><br>
<input type="submit" class="btn btn-primary" value="Send">
</form>
';

$sql = "SELECT * FROM car_mart_ticket_new WHERE status = 'shipped' AND  date_updated >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
$sql2 = "SELECT * FROM car_mart_ticket_new WHERE status = 'shipped' AND  date_updated >= DATE_SUB(CURDATE(), INTERVAL 90 DAY)";
$sql3 = "SELECT * FROM car_mart_ticket_new WHERE status = 'shipped' AND  date_updated >= DATE_SUB(CURDATE(), INTERVAL 180 DAY)";

if ($res = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $res );
    
    // Display result
    
        $content .= "<br>Tickets Shipped This Month: ";
        $content .= $rowcount;
    
    //printf("\r\nTickets Shipped This Month:  %d\n", $rowcount);
 }
 if ($res2 = mysqli_query($conn, $sql2)) {

    // Return the number of rows in result set
    $rowcount2 = mysqli_num_rows( $res2 );
    
    // Display result
   // printf("\r\nTickets Shipped This Quarter:  %d\n", $rowcount2);

    $content .= "<br>Tickets Shipped This Quarter: ";
    $content .= $rowcount2;
 }
 if ($res3 = mysqli_query($conn, $sql3)) {

    // Return the number of rows in result set
    $rowcount3 = mysqli_num_rows( $res3 );
    
    // Display result
    //printf("\r\nTickets Shipped Last 6 months:  %d\n", $rowcount3);
    $content .= "<br>Tickets Shipped Last 6 Months: ";
    $content .= $rowcount3;
 }

$content .= "
</tbody>
</table>";

include 'template_bootstrap.php';
?>
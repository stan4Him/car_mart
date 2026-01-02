<?php
$title = 'CarMart This Quarter';


require 'db_conn.php';

$sql = "SELECT * FROM cm_ticket WHERE status = 'shipped' AND  date_updated >= DATE_SUB(CURDATE(), INTERVAL 90 DAY)";


//$sql2 = "SELECT SUM(cm_parts.price) AS shipped_dollars FROM cm_ticket,cm_parts WHERE cm_ticket.Ticket = cm_parts.Ticket AND cm_ticket.`status` = 'shipped' AND  date_updated >= DATE_SUB(CURDATE(), INTERVAL 90 DAY)";


//$result2 = mysqli_query($conn,$sql2) or die ("Result not found");



if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("\r\nTickets Shipped This Quarter:  %d\n", $rowcount);
 }

 

 /*while ($row2 = mysqli_fetch_array($result2)) {
   echo "<br><br>Dollars This Quarter: ";
   echo $row2['0'];
}
*/






?>
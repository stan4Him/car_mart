<?php
$title = 'Search';
$content = '<div class="container">
<div class="form-group"> 
<div class="col-xs-2">

</div>
</div>
</div>

<table class="search table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Ticket</th>
                <th>Quote</th>
                <th>Invoice</th>
                <th>PO</th>
                <th>Shipper</th>
            </tr>
        </thead>
        <tbody>';
include 'db_conn.php';        
$query = "SELECT * FROM  cm_iqs,po_tracker WHERE cm_iqs.PONUmber = po_tracker.PONumber ORDER BY po_tracker.PONumber ASC";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";

$content .= $row[0];
$content .= "</a>";
$content .= "</td>";
     $content .= "<td>";
     $content .= $row[1];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[2];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[3];
     $content .= "</td>";
$content .= "<td>";
     $content .= $row[4];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[5];
     $content .= "</td>";
     
$content .= "</tr>";
}



$content .='        </tbody>
        
    </table>
    ';
   
include 'template_bootstrap.php';
?>
<?php
$title = 'Search';
$content = '<div class="container">
<div class="form-group"> 
<div class="col-xs-2">
<form>
<input type="search" placeholder="Enter any info from any column.." class="form-control search-input" data-table="search"/>
</form>
</div>
</div>
</div>

<table class="search table table-bordered" style="width:100%">
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
$query = "SELECT * FROM car_mart_ticket_new";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";
$content .= "<a href='http://172.16.128.7:8080/car_mart/total_ticket.php?Ticket=";
$content .= $row['Ticket'];
$content .= "' target=\"_blank\" width=600>";
$content .= $row['Ticket'];
$content .= "</a>";
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
     $content .= "<a href='http://172.16.128.7:8080/car_mart/where.php?Invoice=";
     $content .= $row['InvoiceNumber'];
     $content .= "' target=\"_blank\" width=600>";
     $content .= $row['InvoiceNumber'];
     $content .= "</a>";

/*
     $content .= $row['InvoiceNumber'];
   */  
     $content .= "</td>";
/*
     $content .= "<a href='http://172.16.128.7:8080/car_mart/where.php?Invoice=";
     $content .= $row['InvoiceNumber'];
     $content .= "' target=\"_blank\" width=600>";
     $content .= $row['InvoiceNumber'];
     $content .= "</a>";

*/

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



$content .='        </tbody>
        
    </table>
    ';
    $content .= '<!-- Search script -->
    <script>
            (function(document) {
                "use strict";
    
                var TableFilter = (function(myArray) {
                    var search_input;
    
                    function _onInputSearch(e) {
                        search_input = e.target;
                        var tables = document.getElementsByClassName(search_input.getAttribute("data-table"));
                        myArray.forEach.call(tables, function(table) {
                            myArray.forEach.call(table.tBodies, function(tbody) {
                                myArray.forEach.call(tbody.rows, function(row) {
                                    var text_content = row.textContent.toLowerCase();
                                    var search_val = search_input.value.toLowerCase();
                                    row.style.display = text_content.indexOf(search_val) > -1 ? "" : "none";
                                });
                            });
                        });
                    }
    
                    return {
                        init: function() {
                            var inputs = document.getElementsByClassName("search-input");
                            myArray.forEach.call(inputs, function(input) {
                                input.oninput = _onInputSearch;
                            });
                        }
                    };
                })(Array.prototype);
    
                document.addEventListener("readystatechange", function() {
                    if (document.readyState === "complete") {
                        TableFilter.init();
                    }
                });
    
            })(document);
        </script>
    <!-- Search script End -->' ;
include 'template_bootstrap.php';
?>
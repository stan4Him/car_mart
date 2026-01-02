<?php
$conn ='';
$title = ' Search';
$content = '<div class="container">
<div class="form-group"> 
<div class="col-xs-2">
<form>
<input type="search" placeholder="Search..." class="form-control search-input" data-table="search"/>
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
            </tr>
        </thead>
        <tbody>';

include 'db_conn.php';
$query = "SELECT * FROM cm_ticket, cm_iqs WHERE cm_iqs.Ticket = cm_ticket.Ticket";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


 while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";
$content .= "<a href='http://172.16.128.7:8080/car_mart/total_ticket.php?Ticket=";
$content .= $row[0];
$content .= "' target=\"_blank\" width=600>";
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
     $content .= "<td>";
     $content .= $row[6];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[8];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[9];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[10];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[11];
     $content .= "</td>";
     $content .= "<td>";
     $content .= $row[12];
     $content .= "</td>";
$content .= "</tr>";
}

/*$query2 = "SELECT * FROM cm_ticket_shipped, cm_iqs_shipped WHERE cm_iqs_shipped.Ticket = cm_ticket_shipped.Ticket";

$result2 = mysqli_query($conn,$query2);

if (!$result2) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


while ($row2 = mysqli_fetch_array($result2)) {
    $content .= "<tr>";
    $content .= "<td>";
    $content .= "<a href='http://172.16.128.7:8080car_mart/total_ticket.php?Ticket=";
    $content .= $row2[0];
    $content .= "' target=\"_blank\" width=600>";
    $content .= $row2[0];
    $content .= "</a>";
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[1];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[2];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[3];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[4];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[5];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[6];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[8];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[9];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[10];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[11];
    $content .= "</td>";
    $content .= "<td>";
    $content .= $row2[12];
    $content .= "</td>";
    $content .= "</tr>";
}
*/

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

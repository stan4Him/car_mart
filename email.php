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
                <th>ID</th>
                <th>Sender</th>
                <th>Sender Email</th>
                <th>To</th>
                <th>Date</th>
                <th>Subject</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>';
include 'db_conn.php';        
$query = "SELECT * FROM cm_email";

$result = mysqli_query($conn,$query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


 while ($row = mysqli_fetch_array($result)) {
$content .= "<tr>";
$content .= "<td>";
$content .= $row[0];
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
$content .= "</tr>";
}


$content .='        </tbody>
        
    </table>
    ';
    mysqli_close($conn);
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
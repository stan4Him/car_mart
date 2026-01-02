<?php
$conn ='';
if (isset($_POST['search'])) { 
$search = $_POST['search'];
} else { 
    $search = ''; // or handle the case as needed 
} 

$title = 'Search Email';

$content='
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
$query = "SELECT * FROM cm_email WHERE subject LIKE '%$search%' OR body LIKE '%$search%' ORDER BY DateSent ASC";

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
include 'template_bootstrap.php';

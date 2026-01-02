<?php
$title = "Email Deletion";
include 'db_conn.php';
$ID = $_GET['ID'];

$query3 = "DELETE FROM cm_email_archive WHERE ID = '$ID'";

$result3 = $conn->query($query3) or die("Error: ".mysqli_error($conn));
$content = "Item Deleted<br /><br />";

include 'template_bootstrap.php';
?>
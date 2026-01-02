<?php
include 'db_conn.php';
$title = "New Note Entry";
$Ticket = $_POST['Ticket'];
$Note = $_POST['Note'];
$date_added = date('Y-m-d');


$sql = "INSERT INTO cm_ticket_notes(Ticket, Note, date_added) VALUES('$Ticket','$Note','$date_added')";
$result = mysqli_query($conn,$sql);

if (!$result) {
    $content = 'Note Info Not Inserted.' . mysqli_error($con);
}
else {
    $content =  "New Note Added";
}




include 'template_bootstrap.php';
?>
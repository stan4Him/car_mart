<?php
$title = "New Ticket Entry";
$Ticket = $_POST['Ticket'];

$date_added = date('Y-m-d');




include 'db_conn.php';

$sql = "INSERT INTO cm_ticket_new(Ticket, date_added) VALUES('$Ticket','$date_added')";
$result = mysqli_query($conn,$sql);

if (!$result) {
    $content = 'New Ticket Not Inserted.' . mysqli_error($conn);
}
else {
    $content =  "New Ticket Added";
}




include 'template_bootstrap.php';
?>
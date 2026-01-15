<?php
$title = "Delete Ticket";
$Ticket = $_POST['Ticket'];


include 'db_conn.php';



$sql = "INSERT INTO car_mart_ticket_del select * from car_mart_ticket_new WHERE Ticket='$Ticket'";
$result = mysqli_query($conn,$sql);

if (!$result) {
    $content = 'Ticket Not Copied' . mysqli_error($conn);
}
else {
    $content =  "Ticket Copied";

}
/*
$sql2 = "INSERT INTO cm_parts_del select * from cm_parts WHERE Ticket='$Ticket'";
$result2 = mysqli_query($con,$sql2);

if (!$result2) {
    $content = 'Parts Not Copied' . mysqli_error($con);
}
else {
    $content .=  "<br > Parts Copied";

}

$sql3 = "INSERT INTO cm_iqs_del select * from cm_iqs WHERE Ticket='$Ticket'";
$result3 = mysqli_query($conn,$sql3);

if (!$result3) {
    $content .= 'IQS Not Copied' . mysqli_error($conn);
}
else {
    $content .=  "<br > IQS Copied";

}

*/
$sql4= "DELETE from car_mart_ticket_new WHERE Ticket='$Ticket'";
$result4 = mysqli_query($conn,$sql4);

if (!$result4) {
    $content .= 'Ticket Not Deleted' . mysqli_error($conn);
}
else {
    $content .=  "<br > Ticket Deleted";

}

/*

$sql6 = "DELETE from cm_iqs WHERE Ticket='$Ticket'";
$result6 = mysqli_query($conn,$sql6);

if (!$result6) {
    $content .= 'IQS Not Deleted' . mysqli_error($conn);
}
else {
    $content .=  "<br > IQS Deleted";

}
*/
include 'template_bootstrap.php';
?>
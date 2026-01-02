<?php
$title = "New PO Entry";
$PONumber = $_POST['PONumber'];
$date_added = date('Y-m-d');

	 /* mysql_list-1.1.php    Lists sites databases, their tables and columns. */
/**** some vars ****/
   $user  = "fullline_spowell";
   $userp = "Lovie777!";
   $my_db = "fullline_data";

/**** connect to database ****/
 $con = mysqli_connect("localhost:3306", $user, $userp,$my_db);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "INSERT INTO cm_po_new(PONumber, date_added) VALUES('$PONumber','$date_added')";
$result = mysqli_query($con,$sql);

if (!$result) {
    $content = 'New PO Not Inserted.' . mysqli_error($con);
}
else {
    $content =  "New PO Added";
}

include 'template_bootstrap.php';
?>
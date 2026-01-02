<?php
include 'db_conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$title = "Login";



$sql = "SELECT * FROM cm_users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
if ($row=mysqli_fetch_array($result))
{
   $content .= '<div align="left">Car Mart Info<br />';

    $content .= $rows;
     $content .= '<br>';
$content .= '<br>Search<br>';
$content .= '<br><a href=http://172.16.128.7:8080/car_mart/new_quote.php>New Quote</a><br>';  
$content .= '<br><a href=http://172.16.128.7:8080/car_mart/view_details.php>View Open</a><br>';
$content .= '<br /></div>';

} else {
   $content .= "User Not Authorized.";
}
include 'template_bootstrap.php';
?>
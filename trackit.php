<?php
$title = "PO Tracking";
$message = '';
$PO = $_POST['PO'];

$notify= 'spowell@fulllineexhaust.com'; // an email address required in case of errors
$success='support@fulllineexhaust.com';


include 'db_conn.php';

$sql = "SELECT * FROM cm_iqs WHERE PONumber = '$PO' AND Shipper = 'ups'";
$result = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM cm_iqs WHERE PONumber = '$PO' AND Shipper = 'fedex'";
$result2 = mysqli_query($conn,$sql2);


if(mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {

        $content = 'Here\'s your info: ';
        $content .= '<br>';
        $content .= 'PO Number: ';
        $content .= $row['PONumber'];
        $content .= '<br>';
        $content .= 'Shipper: ';
        $content .= $row['Shipper'];
        $content .= '<br>';
            $content .= 'Tracking Number: ';
            $content .= '<a href="https://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=';
            $content .= $row['TrackingNumber'];
            $content .= '">';
        $content .= $row['TrackingNumber'];
            $content .= '</a>';
            $content .= '<br>';

            $content .= '</a>';


    }
}

elseif(mysqli_num_rows($result2) > 0) {

    while ($row2 = mysqli_fetch_array($result2)) {


        $content = 'Here\'s your info: ';
        $content .= '<br>';
        $content .= 'PO Number: ';
        $content .= $row2['PONumber'];
        $content .= '<br>';
        $content .= 'Shipper: ';
        $content .= $row2['Shipper'];
        $content .= '<br>';
        $content .= 'Tracking Number: ';
        $content .= '<a href="https://www.fedex.com/fedextrack/?tracknumbers=+';
        $content .= $row2['TrackingNumber'];
        $content .= '&locale=en_US&cntry_code=us_english&language=english">';
        $content .= $row2['TrackingNumber'];
        $content .= '</a>';
        $content .= '<br>';

        $content .= '</a>';


    }
}
else {
    $content = 'Shipping info is not recorded for this PO..';
    $content .= '<br><br>';
}



include 'template_bootstrap_no_nav.php';
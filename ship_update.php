<?php
$title = 'Shipping Update';
$today = date('Y-m-d');
$Ticket = $_GET['Ticket'];

   $content = " </p>
    <form method='post' action='ship_update_process.php' >
    
        <h1>Ticket Update :</h1><br /><br />
     <div class='form-group row'>
        <label for='Shipper' class='col-sm-2 col-form-label'>Shipper: </label>
        <div class='col-sm-10'>
          <input type='text' class='form-control' id='Shipper' name='Shipper'>
        </div>
      </div>
    <div class='form-group row'>
        <label for='TrackingNumber' class='col-sm-2 col-form-label'>Tracking Number: </label>
        <div class='col-sm-10'>
          <input type='text' class='form-control' name='TrackingNumber'>
        </div>
      </div>
      </div>  
      <div class='form-group row'>
      <label for='Ticket' class='col-sm-2 col-form-label'>Ticket: </label>
      <div class='col-sm-10'>
        <input type='text' class='form-control' name='Ticket' value='$Ticket'>
      </div>
    </div>
    </div>  
        <button type='submit' class='btn btn-primary'>Submit</button>
        </form>";

        include 'template_bootstrap.php';
    
?>
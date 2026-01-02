<?php
$title = 'Ticket Update';
$today = date('Y-m-d');
$Ticket = $_GET['Ticket'];

   $content = "
    <form method='post' action='fle_update_process.php' >
    
        <h1>Ticket Update :</h1><br /><br />
     <div class='form-group row'>
        <label for='PO' class='col-sm-2 col-form-label'>PO: </label>
        <div class='col-sm-10'>
          <input type='text' class='form-control' id='PO' name='PO'>
        </div>
      </div>
    <div class='form-group row'>
        <label for='Invoice Number' class='col-sm-2 col-form-label'>Invoice Number: </label>
        <div class='col-sm-10'>
          <input type='text' class='form-control' name='Invoice'>
        </div>
      </div>
      <div class='form-group row'>
        <label for='Ticket' class='col-sm-2 col-form-label'>Ticket: </label>
        <div class='col-sm-10'>
          <input type='text' class='form-control' name='Ticket' value='$Ticket'>
        </div>
      </div>
      <div>
      <button type='submit' class='btn btn-primary'>Submit</button>
      </div>  
        
        </form>";

        include 'template_bootstrap.php';
    
?>
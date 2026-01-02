<?php
$title ='New Quote';
$content .= '
<form method="post" action="new_entry_process.php" >

	<h1>New Quote :</h1><br><br>
 <div class="form-group row">
    <label for="Ticket" class="col-2 col-form-label">Ticket: </label>
    <div class="col-10">
      <input type="text" class="form-control" id="Ticket" name="Ticket" placeholder="Ticket Number">
    </div>
    </div>
    <div class="form-group row">
    <label for="VIN" class="col-2 col-form-label">VIN: </label>
    <div class="col-10">
      <input type="text" class="form-control" id="VIN" name="VIN" placeholder="VIN">
    </div>
  </div>
  <div class="form-group row">
  <label for="car_info" class="col-2 col-form-label">Car info:</label>
  <div class="col-10">
    <input type="text" class="form-control" id="car_info" name="car_info" placeholder="YMME for vehicle">
  </div>
</div>  
<div class="form-group row">
    <label for="shop_info" class="col-2 col-form-label">Shop info:</label>
    <div class="col-10">
      <input type="text" class="form-control" id="shop_info" name="shop_info" placeholder="Shop Info Here">
    </div>
  </div>';
$content .='  
<div class="form-group row">
<label for="QuoteNumber" class="col-sm-2 col-form-label">Quote Number:</label>
<div class="col-sm-10">
  <input type="text" class="form-control" name= "QuoteNumber" placeholder="Enter Quote Number Here">
  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>';

    include 'template_bootstrap.php';
?>
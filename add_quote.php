<?php
$title ='Add A Quote';
$Ticket = $_GET['Ticket'];
$content = '<form method="post" action="add_quote_process.php" >

	<h1>Add A Quote:</h1><br /><br />

<div class="form-group row">
  </div>
  <div class="form-group row">
    <label for="SKU" class="col-sm-2 col-form-label">SKU:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SKU" name="SKU" >
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-sm-2 col-form-label">Price:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" name="price" >
    </div>
  </div>
  <div class="form-group row">
  </div>
  <div class="form-group row">
    <label for="SKU2" class="col-sm-2 col-form-label">SKU2:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SKU2" name="SKU2" >
    </div>
  </div>
  <div class="form-group row">
    <label for="price2" class="col-sm-2 col-form-label">price2:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price2" name="price2" >
    </div>
  </div>
  <div class="form-group row">
  </div>
  <div class="form-group row">
    <label for="SKU3" class="col-sm-2 col-form-label">SKU3:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SKU3" name="SKU3" >
    </div>
  </div>
  <div class="form-group row">
    <label for="price3" class="col-sm-2 col-form-label">price3:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price3" name="price3" >
    </div>
  </div>
  <div class="form-group row">
  </div>
  <div class="form-group row">
    <label for="SKU4" class="col-sm-2 col-form-label">SKU4:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SKU4" name="SKU4" >
    </div>
  </div>
  <div class="form-group row">
    <label for="price4" class="col-sm-2 col-form-label">price4:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price4" name="price4" >
    </div>
  </div>
  <div class="form-group row">
  </div>
  <div class="form-group row">
    <label for="SKU5" class="col-sm-2 col-form-label">SKU5:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="SKU5" name="SKU5" >
    </div>
  </div>
  <div class="form-group row">
    <label for="price5" class="col-sm-2 col-form-label">price5:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price5" name="price5" >
    </div>
  </div>
<div class="form-group row">
<label for="Ticket" class="col-sm-2 col-form-label">Ticket:</label>
<div class="col-sm-10">
  <input type="text" class="form-control" name= "Ticket" value="';
  $content .= $Ticket;
  $content .= '" >
</div>
</div>
<div class="form-group row">
<label for="QuoteNumber" class="col-sm-2 col-form-label">Quote Number:</label>
<div class="col-sm-10">
  <input type="text" class="form-control" name= "QuoteNumber">
</div>
</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>';
    include 'template_bootstrap.php';
?>
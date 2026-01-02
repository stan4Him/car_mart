<?php
$title ='Add Note';
$query = '';
$result = '';
$content .= '
<form method="post" action="add_note_process.php" >

	<h1>New info Entry:</h1><br /><br />
 <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Ticket: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Ticket" name="Ticket" placeholder="Ticket">
    </div>
  </div>
<div class="form-group row">
    <label for="Note" class="col-sm-2 col-form-label">Note:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Note" name="Note" >
    </div>
  </div>
  
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>';


    include 'template_bootstrap.php';
?>
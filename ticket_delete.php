<?php
$title ='Delete Ticket Number';
$query = '';
$result = '';
$content = '
<form method="post" action="ticket_delete_process.php" >

	<h1>Delete My Ticket:</h1><br /><br />
 <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Ticket Number: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Ticket" name="Ticket" placeholder="Ticket">
    </div>
  </div>


	<button type="submit" class="btn btn-primary">Submit</button>
	</form>';


include 'template_bootstrap.php';
?>
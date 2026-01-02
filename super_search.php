<?php
$title = 'Super Search';
$content = '<div class="container-fluid">
<div class="row">
  <div class="col-2"><form method="post" action="search_vin_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search Last 4 of VIN">
        </form> 
</div>
</div>
<div class="row">
<div class="col-2"><form method="post" action="search_car_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search Make or Model of Vehicle">
        </form> 
</div>
</div>
<div class="row">
<div class="col-2"><form method="post" action="search_inv_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search Invoice">
        </form> 
</div>
</div>
<div class="row">
<div class="col-2"><form method="post" action="search_po_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search PO">
        </form> 
</div>
</div>
<div class="row">
<div class="col-2"><form method="post" action="search_ticket_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search Ticket">
        </form> 
</div>
</div>
<div class="row">
<div class="col-2"><form method="post" action="search_quote_process.php" >
          <input type="text" class="form-control" id="Search" name="Search" placeholder="Search Quote">
        </form> 
</div>
</div>
</div>';

include 'template_bootstrap.php';
?>
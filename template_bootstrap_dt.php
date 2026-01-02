<!DOCTYPE html>
<html lang="en">
<head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
global $title,$content;
?>
<meta charset="utf-8">

<title><?php echo $title; ?></title>
 
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<!-- Set the page to the width of the device and set the zoom level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">


     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="/css/datable.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script   src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script   src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script   src="/apps/jquery.dataTables.min.js"></script>
    <script   src="/apps/nhpup_1.1.js"></script>

 
 <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css">

 <style>
.header{
    font-family: 'Alegreya';
    font-size:30px;
  } 
 #logo {
  vertical-align:middle;
}
.navbar-brand span {
  font-size:2rem;
  line-height:1.2;
  font-weight: 200;
  display:inline-block;
  vertical-align:middle;
  padding:0 0 0 15px;
}
.navbar-brand b {
  display:block;
  font-size:50%;
  line-height:1;
}
.navbar-nav {
  margin-left:auto;
}
.responsive-map-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.responsive-map-container iframe,   
.responsive-map-container object,  
.responsive-map-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


</style>
    <script>
        $(document).ready(function() {
            //Page Length Setting
            $('#example').DataTable( {
                "lengthMenu": [[30, 60, 90, -1], [30, 60, 90, "All"]]
            } );

            // Setup - add a text input to each footer cell
            $('#example thead td').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#example').DataTable();

            // Apply the search
            table.columns().every( function () {
                var that = this;

                $( 'input', this.header() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
    </script>
</head>
<body>


<nav class="navbar navbar-expand-md bg-light navbar-light"> 
  <!-- Brand --> 
  <a class="navbar-brand" href="#"> <img id="logo" alt="Logo" src="car_mart.jpg">  </a> 
  
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
  
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" href="ticket_entry.php">Ticket Entry</a> </li>
      <li class="nav-item"> <a class="nav-link" href="view_quoted.php">Quoted</a> </li>
      <li class="nav-item"> <a class="nav-link" href="view_invoiced.php">Invoiced</a> </li>
      <li class="nav-item"> <a class="nav-link" href="view_shipped.php">Shipped</a> </li>
      <li class="nav-item">  <a class="nav-link" href="index.php">Search</a></li>
        <li class="nav-item">  <a class="nav-link" href="ticket_delete.php">Delete Ticket</a></li>
        <li class="nav-item">  <a class="nav-link" href="po_tracker.php">PO Tracker</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
  <div class="col-12">
   <? echo $content; ?>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
        <div class="col-12" style="background-color: #000065;color: white;"> 
        <p>&copy; <?php echo date('Y'); ?> Full Line Exhaust, Inc.<br><br><br></p>
      </div>
  </div>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>
</body>
</html>
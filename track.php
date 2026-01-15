<?php
$title = "CarMart Tracking";
$content = '
<form method=POST action="trackit.php">
<input type="text" name="PO" id="PO" placeholder="Enter PO to track">
<br><br>
<input type="submit" class="btn btn-primary" value="Send">
</form>
';
include 'template_bootstrap.php';
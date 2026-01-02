<?php
/* mysql_list-1.1.php    Lists sites databases, their tables and columns. */
/**** some vars ****/
   $user  = "stanpfle";
   $userp = "SP7826fle";
   $my_db = "carmart";

/**** connect to database ****/
 $conn = mysqli_connect("localhost:3306", $user, $userp, $my_db);
    if (!$conn)
  {
  echo ('Could not connect: ' . mysqli_error($conn));
  }

?>
<?php
include("config.php");
 
//getting id of the data from url
$Client_id = $_GET['Client_id'];
 
//deleting the row from table
$m = mysqli_query($conn, "DELETE FROM medical_store WHERE Client_id=$Client_id");
 
//redirecting to the display page (index in our case)
header("Location:dcrpage.php");
?>
<?php
include("config.php");
 
//getting id of the data from url
$id = $_GET['Client_id'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM doctor WHERE Client_id=$Client_id");
 
//redirecting to the display page (index in our case)
header("Location:dcrpage.php");
?>
<?php
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$m = mysqli_query($conn, "DELETE FROM message WHERE id=$id");
 
//redirecting to the display page (index in our case)
header("Location:dcrpage.php");
?>
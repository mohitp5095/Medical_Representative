<?php
 include('config.php'); 
$email = $_POST['email'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscribe (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {

    header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

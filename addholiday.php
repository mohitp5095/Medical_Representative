<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $date = $_POST['date'];
    $day = $_POST['day'];
    $event = $_POST['event'];
        
    // checking empty fields
    if(empty($date) || empty($day) || empty($event)) {                
        if(empty($date)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($day)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($event)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO holiday(date,day,event)VALUES('$date','$day','$event')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='holiday.php'>View Result</a>";
    }
}
?>
</body>
</html>
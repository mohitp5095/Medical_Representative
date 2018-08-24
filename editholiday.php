<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $date=$_POST['date'];
    $day=$_POST['day'];
    $event=$_POST['event'];    
    
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
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE holiday SET date='$date',day='$day',event='$event' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: holiday.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM holiday WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $date = $res['date'];
    $day = $res['day'];
    $event = $res['event'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="holiday.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="editholiday.php">
        <table border="0">
			<tr> 
                <td>Date</td>
               
                <td><input type="date" name="date" value="<?php echo $date;?>"></td>
            </tr>
            <tr> 
                <td>Day</td>
                <td><select name="day" value="<?php echo $day;?>">
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
				<option>Saturday</option>
				</select></td>
            </tr>
            <tr> 
                <td>Event</td>
                <td><input type="text" name="event" value="<?php echo $event;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html
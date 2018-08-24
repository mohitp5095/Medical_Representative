<?php
session_start();

if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}
?>	

<?php	
//including the database connection file
include 'config.php';
$login_id=$_SESSION['login_user'];
if(isset($_POST['Submit'])) {    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];
	$reg = $_POST['reg'];
    $email = $_POST['email'];
	$DOB = $_POST['DOB'];
	$speciality = $_POST['speciality'];
	$mob = $_POST['mob'];
	$Emp_id=$_SESSION['login_user'];

	
    // checking empty fields
    if(empty($first) || empty($last) || empty($address)|| empty($reg)|| empty($email)|| empty($DOB)|| empty($speciality)|| empty($mob)) {                
        if(empty($first)) {
            echo "<font color='red'>Please enter first name.</font><br/>";
        }
        
        if(empty($last)) {
            echo "<font color='red'>Please enter last name.</font><br/>";
        }
        
        if(empty($address)) {
            echo "<font color='red'>address places field is empty.</font><br/>";
        }
          
        if(empty($reg)) {
            echo "<font color='red'>Please enter Registration no.</font><br/>";
        }
		  
        if(empty($email)) {
            echo "<font color='red'>Please enter email.</font><br/>";
        }  
		
		if(empty($DOB)) {
            echo "<font color='red'>Please enter date of birth.</font><br/>";
        }
		
		if(empty($speciality)) {
            echo "<font color='red'>Please enter date of speciality.</font><br/>";
        }
		
		if(empty($mob)) {
            echo "<font color='red'>Please enter date of Mobile number.</font><br/>";
        }
     
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO doctor(First_name,Last_name,Address,Reg_no,Email,Date,Speciality,Mob_no,Emp_id) VALUES('$first','$last', '$address','$reg','$email','$DOB','$speciality','$mob','$Emp_id')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='dcrpage.php'>View Result</a>";
    }
}
?>
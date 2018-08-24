<?php
include("config.php");
 
if(isset($_POST['Submit'])) 
{    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$message = $_POST['message'];
	$city = $_POST['city'];
	
    // checking empty fields
    if(empty($name) || empty( $email) || empty($mobile)|| empty($message)|| empty($city)) {                
        if(empty($name)) 
		{
            echo "<font color='red'>Day field is empty.</font><br/>";
        }
        
        if(empty($email)) 
		{
            echo "<font color='red'>Date field is empty.</font><br/>";
        }
        
        if(empty($mobile))
		{
            echo "<font color='red'>Mobile field is empty.</font><br/>";
        }
          
        if(empty($message))
		{
            echo "<font color='red'>Doctors field is empty.</font><br/>";
        }
		  if(empty($city))
		  {
			  echo"<font color='red'>City Field Empty</font></br>";
		  }
       
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($conn,"INSERT INTO message(name,email,mobile,message,city,readed) VALUES('$name','$email','$mobile','$message','$city',0)");
    
        //display success message
        header('Location:contact_us.php');
		
		}
}
?>
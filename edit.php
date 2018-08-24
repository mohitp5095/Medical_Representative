<head>
<?php include 'back_header.php';?>
</head>
<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{    
    $Client_id = $_POST['Client_id'];
	$first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];
	$reg = $_POST['reg'];
    $email = $_POST['email'];
	$Date = $_POST['Date'];
	$speciality = $_POST['speciality'];
	$mob = $_POST['mob'];
    // checking empty fields
	if(empty($first) || empty($last) || empty($address)|| empty($reg)|| empty($email)|| empty($Date)|| empty($speciality)|| empty($mob)) {                
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
		
		if(empty($Date)) {
            echo "<font color='red'>Please enter date of Visit.</font><br/>";
        }
		
		if(empty($speciality)) {
            echo "<font color='red'>Please enter date of speciality.</font><br/>";
        }
		
		if(empty($mob)) {
            echo "<font color='red'>Please enter date of Mobile number.</font><br/>";
        }
     
    } else {    
        //updating the table
        $result = mysqli_query($conn,"UPDATE doctor SET First_name='$first',Last_name='$last',Address='$address',Reg_no='$reg',Email='$email',Date='$Date',Speciality='$speciality',Mob_no='$mob' WHERE Client_id=$Client_id");
		echo "";
        
        //redirectig to the display page. In our case, it is dcrpage.php.php
        header("Location: dcrpage.php");
    }
}
?>
<?php
$Client_id = $_GET['Client_id'];
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM doctor WHERE Client_id=$Client_id");
 
while($res= mysqli_fetch_array($result))
{
    $Client_id = $res['Client_id'];
	$first = $res['First_name'];
    $last = $res['Last_name'];
    $address = $res['Address'];
	$reg = $res['Reg_no'];
    $email = $res['Email'];
	$Date = $res['Date'];
	$speciality = $res['Speciality'];
	$mob = $res['Mob_no'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
 <div class="col-md-6 col-md-push-3">
    <a href="dcrpage.php">Back</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
         <div class="form-group">Date of visit :
                  <input type="date" class="form-control" name="Date" id="Date" placeholder="Date of Visit" data-rule="minlen:4" data-msg="" value="<?php echo $Date;?>" />
                  <div class="validation"></div>
                </div>
			
			<div class="form-group">
                  <input type="text" name="first" class="form-control" id="first" placeholder="First Name" data-rule="minlen:4" data-msg="" value="<?php echo $first;?>"/>
                  <div class="validation"></div>
                </div>
				
				
				<div class="form-group">
                  <input type="text" name="last" class="form-control" id="last" placeholder="Last Name" data-rule="minlen:4" data-msg="" value="<?php echo $last;?>"/  >
                  <div class="validation"></div>
                </div>
				
				
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:5" data-msg=""value="<?php echo $email;?>" />
                  <div class="validation"></div>
                </div>
				
				
                <div class="form-group">
                  <input type="text" class="form-control" name="reg" id="reg" placeholder="Registration No" data-rule="minlen:4" data-msg="" value="<?php echo $reg;?>"/>
                  <div class="validation"></div>
                </div>
				
				
                <div class="form-group">
                  <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="" value="<?php echo $address;?>" placeholder="Address" /><?php echo $address;?></textarea>
                  <div class="validation"></div>
                </div>
				
				
				
				<div class="form-group">
                  <input type="text" class="form-control" name="speciality" id="reg" placeholder="Speciality" data-rule="minlen:4" data-msg="" value="<?php echo $speciality;?>"/>
                  <div class="validation"></div>
                </div>
				
				<div class="form-group">
                  <input type="text" class="form-control" name="mob" id="mob" placeholder="Mobile Number" data-rule="minlen:4" data-msg="" value="<?php echo $mob;?>"/>
                  <div class="validation"></div>
                </div>
            <tr>
                <td><input type="hidden" name="Client_id" value=<?php echo $_GET['Client_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
session_start();

if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}
?>
<html>
<?php
//including the database connection file
include 'config.php';
$login_session=$_SESSION['user_name'];
$login_id=$_SESSION['login_user'];

$nothing=" ";
//echo $login_id;
include 'config.php'; 
$result = mysqli_query($conn, "SELECT * FROM doctor where Emp_id='$login_id' ORDER BY date ASC "); // using mysqli_query instead
$result_c = mysqli_query($conn, "SELECT * FROM medical_store where Emp_id='$login_id' ORDER BY date ASC "); // using mysqli_query instead

$doc = "SELECT COUNT(Client_id) as dc from doctor where Emp_id='$login_id' ";
$chem = "SELECT COUNT(Client_id) as cc from medical_store where Emp_id='$login_id' ";


//for doctor count
$dres = $conn->query($doc);
if($dres->num_rows > 0){
		 while($row = $dres->fetch_assoc()) {
        $d_count=$row["dc"];
		 }
} else{
		 echo " 0 results";
		 }
//for chemist count 
$cres = $conn->query($chem);
if($cres->num_rows > 0){
		 while($row = $cres->fetch_assoc()) {
        $c_count=$row["cc"];
		 }
} else{
		 echo " 0 results";
		 }



// for msg count
$sql = "select count(id) as msgr from message where readed=0";
$resul = $conn->query($sql);
if ($resul->num_rows > 0) {
    // output data of each row
    while($row = $resul->fetch_assoc()) {
        $msgread=$row["msgr"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<head>    
<?php include 'back_header.php';?>
<style>
th, td {
    text-align: left;
    padding: 5px;
	
}

tr:nth-child(even){background-color: white;}
</style>
    <title>DSR | User profile</title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <h3 style="color:white;">Sales Team Activity</h3>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="back.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="active"><a href="dsr.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DSR</span></a></li>
                        <li ><a href="dcrpage.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DCR</span></a></li>                    
                        <li><a href="schedule.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Holidays</span></a></li>
						<li><a href="message.php"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Message (<?php echo $msgread; ?>)*</span></a></li>
						
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div style=";">
                                <marquee> For any help cantact Admin @180-1800-363655</marquee>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">                                                                        
                                    <li>
                                        <a href="message.php" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary"><?php echo $msgread; ?></span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user-account.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span class="col-md-12">
													<?php															$login_session=$_SESSION['user_name'];
													echo $login_session;?>
													</span>
                                                    </br>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="logout.php" class="view btn-sm active">Logout</a>
													
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">   
					<h3><center>Daily Sells Report</center></h3>
					</br>
					<table width='100%' border= px;>
						<tr bgcolor='#CCCCCC'>
							
							<td>Doctor </td>
							<td>chemist</td>
							<td>Describe</td>
						</tr>
						<?php 
						 // mysqli_fetch_array is deprecated, we need to use mysqli_fetch_array 
						while($res = mysqli_fetch_array($result) AND $res_c = mysqli_fetch_array($result_c)) {  
							//$date_d = $res['Date'];
							//$date_c = $res_c['Date'];
							if($d_count >0 AND $c_count >0){
							echo "<tr>";							
							echo "<td>".$d_count."</td>";
							echo "<td>".$c_count."</td>";			
							echo "<td><a href=\"dcrpage.php?Emp_id=$res[Emp_id]\">View</a></td>";       							
							}
							elseif($d_count > 0 AND $d_count == 0){
							echo "<tr>";							
							echo "<td>"."0"."</td>";
							echo "<td>".$c_count."</td>";			
							echo "<td><a href=\"dcrpage.php?Emp_id=$res[Emp_id]\">View</a></td>";
							}
							elseif($d_count = 0 AND $d_count > 0){
							echo "<tr>";							
							echo "<td>".$d_count."</td>";
							echo "<td>"."0"."</td>";			
							echo "<td><a href=\"dcrpage.php?Emp_id=$res[Emp_id]\">View</a></td>";
							}
							else{
							echo "<tr>";							
							echo "<td>"."0"."</td>";
							echo "<td>"."0"."</td>";			
							echo "<td><a href=\"dcrpage.php?Emp_id=$res[Emp_id]\">View</a></td>";
							}
						}
						?>
					</table>
                </div>
            </div>
        </div>

    </div>
</body>
 <footer>
<div class="copyright" style="background-color:black; color:white; font-family:'Nunito', sans-serif;">
      <div class="container" >
        <div class="col-sm-12">
          <p><center>&copyCopyright2017 | PRISMA PHARMA All rights reserved. <img src="images/mapIcon.png" ></center></p>
        </div>
      </div>
    </div>
</footer>
</html>
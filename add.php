<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}
?>
<html>
<head>
<?php include 'back_header.php';
include 'config.php';
$login_session=$_SESSION['user_name'];
$login_id=$_SESSION['login_user'];?>
    <title>Add Data</title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                   <h3 style="color:white;">Sales Team Activity</h3>
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="back.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="dsr.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DSR</span></a></li>
                        <li class="active"><a href="dcrpage.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DCR</span></a></li>                    
                        <li><a href="schedule.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Holidays</span></a></li>
						<li
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
                           
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                   
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user-account.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>
													<?php															$login_session=$_SESSION['user_name'];
													echo $login_session;?>
													</span>
                                                    
                                                    <div class="divider">
                                                    </div>
                                                    <a href="logout.php" type="button" class="btn btn-primary active">Logout</a>
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
                   <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#doctor">Doctor Visit</a></li>
    <li><a data-toggle="pill" href="#chemist">Chemist visit</a></li>
  </ul>
 <div class="tab-content">
    <div id="doctor" class="tab-pane fade in active">
      <h3>Enter Doctor Details:</h3>
     <?php include 'doctor_visit.php';?>
    </div>
    <div id="chemist" class="tab-pane fade">
      <h3>Enter Chemist Details:</h3>
      <?php include'chemist_visit.php';?>
    </div>


	
	
	
	

                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>



 
<body>

</body>
</html>
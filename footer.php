<?php
@session_start();
?>
<html>
<body>

<!---Footer--->
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--footer start from here-->
    <footer >
      <div class="container">
        <div class="row">
          <div class="col-lg-3  footer-col">
            <div class="logofooter fluid "> Prisma Pharma Ltd</div>
            <p class="text-justify">We are committed to 'Serve Health Care Needs Worldwide'.</p>
            <p><i class="fa fa-map-pin"></i> 98, Prisma House, Charkop, Kandivili (West), Mumbai, Maharashtra 400067</p>
            <p><i class="fa fa-phone"></i> Phone (India) : +91 9975 538 587</p>
            <p><i class="fa fa-envelope"></i> E-mail : info@prismapharma.com</p>

          </div>
          <div class="col-lg-3 footer-col">
            <h6 class="heading7">GENERAL LINKS</h6>
            <ul class="footer-ul">
              <li><a href="http://www.ajantapharma.com/Careers.aspx"> Career</a></li>
              <li><a href="http://www.ajantapharma.com/NewsUpdates.aspx"> News</a></li>
              <li><a href="products.php" target="_top"> Products</a></li>
              <li><a href="About_us.php" target="_top"> About us</a></li>
              <li><a href="Contact_us.php" target="_top"> Contact us</a></li>
              <li><a href="http://www.ajantapharma.com/privacy-policy.html" target="_top"> Privacy Policy</a></li>             
            </ul>
          </div>
          <div class="col-lg-3  footer-col">
            <h6 class="heading7">Subscribe to Newsletter</h6>
				<form action="subscribe.php" method="post">
					<input name="email"  type="text" placeholder="Email">
					<button type="submit" class="btn_email" onclick="myFunction()">Subscribe</button>
				</form>
          </div>
          <div class="col-lg-3  footer-col">
            <h6 class="heading7">Social Media</h6>
            <ul class="footer-social">
              <li><a href="https://www.linkedin.com/company/263285/"><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></a></li>
              <li><a href="https://mobile.facebook.com/Ajanta-Pharma-Ltd-292676427482523/"><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/search?q=ajanta%20pharma&src=typd"><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://plus.google.com/112426542806525304157"><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
      <div class="container">
        <div class="col-md-12 col-md-offset-3">
          <p>&copyCopyright2017 | PRISMA PHARMA All rights reserved. <img src="images/mapIcon.png" ></p>

        </div>
      </div>
    </div>

</body>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
</html>

  <script>
function myFunction() {
    alert("Your subscription started...! ");
}


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

</script>



<div class="modal fade" id="login-modal"  role="dialog"  aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
		<div class="loginmodal-container">
			<h1>Login to Your Account</h1><br>
				<form name="login" method="post">
					<input type="text" name="Emp_id" placeholder="Emp_id">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="submit" class="login loginmodal-submit" value="Login">
				</form>
				<div class="login-help">
				<a href="#">Register</a> - <a href="#">Forgot Password</a>
			</div>
		</div>
	</div>
</div>
<?php
if (isset($_POST['submit']))
	{
			include 'config.php';
			// Create connection

$Emp_id=$_POST['Emp_id'];
$password=$_POST['password'];

//echo $Emp_id,$password;
 $query="SELECT Emp_name FROM representatives WHERE Emp_id='$Emp_id' and password='$password'";
 
$rel = mysqli_query($conn,$query);

$d= mysqli_num_rows($rel);
 if ($d > 0)
{
	
	
	$_SESSION['login_user']=$Emp_id;
	
	while($value=mysqli_fetch_array($rel))
	{
		$_SESSION['user_name']=$value[0];
	}
	echo "<script language='javascript' type='text/javascript'> location.href='back.php' </script>";
	//header('location:home.php');
  }
  else
  {
	  
echo "<script type='text/javascript'> alert('User Name Or Password Invalid!')</script>";
}


$conn = null;


}
?>


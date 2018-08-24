<!DOCTYPE html>

<html lang="en">
    <head>
		<?php include'header.php' ?>
        <title>About us</title>
    </head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Prisma Pharma Ltd.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="About_us.php">About us</a></li>
        <li class="active"><a href="Contact_us.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
	
	
	
	<!--==========================
  Contact Section
============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Have a little something, something you wanna talk to us about? Well give us a ring,
		  send us an email, or fill out that nifty form below. </p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>98, Prisma House, Kandivili,<br>Mumbai, Maharashtra-400067</p>
            </div>
            
            <div>
              <i class="fa fa-envelope"></i>
              <p> info@prismapharma.com</p>
            </div>
            
            <div>
              <i class="fa fa-phone"></i>
              <p>+91 9975 538 587</p>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-5 col-md-push-2">
          <div class="form">
            
            <div id="errormessage"></div>
            <form action="addcontact.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
				<div class="form-group">
                  <input type="text" name="city" class="form-control" id="city" placeholder="Your city" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
				
                <div class="text-center"><button type="Submit" value="add" name="Submit" onclick="myFunction()">Send Message</button></div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>

	</body>
	<?php include'footer.php' ?>
	
	<script>
	function myFunction() {
    alert("Your message has been sent. we'll be in touch with you soon !");
}
	</script>
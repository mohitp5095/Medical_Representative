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
			<li class="active"><a href="About_us.php">About us</a></li>
			<li><a href="Contact_us.php">Contact</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>

    <section id="about" class="col-md-12">
      <div class="container wow fadeInUp" >
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">About Us</h2>
            <div class="section-title-divider"></div>
            <p class="section-description"><h3 style="text-align:center;"></h3></p>

          </div>
        </div>
      </div>
      <div class="container about-container col-md-12">
        <div class="col-md-6">
            <img class="img-thumbnail" src="images/pharama2.jpg" style="width:550px;margin-top:50px; margin-left:30px;" >
        </div>
        <div class="row">
          <div class="col-md-6 about-content">
            <h2 class="about-title">The best in our field for the best in yours</h2>
            <p class="about-text">
              Prisma Pharma is a leading global pharmaceutical company, dedicated to high-quality, branded and generic medicines. We are trusted by healthcare professionals and patients across geographies. Over the last 2 decades, we have strengthened our leadership in India’s pharmaceutical industry and fortified our promise of ‘Caring for Life’.
            </p>
            <p class="about-text">
              The Company manufactures, markets and distributes a wide range of healthcare products. The company is a leading supplier to both the private and public sectors of the market.

            </p>
            <p class="about-text">
              Prisma Pharma is the only local pharmaceutical company offering a full service pharmaceutical distribution solution. As a leading pharmaceutical company, Prisma Pharma does direct distribution nationally to wholesalers, hospitals, pharmacies, and home deliveries to patients. In a significant move to expand the distribution offering, Prisma Pharma has acquired Virtual Logistics (Pty) Ltd, a national and cross border fine distribution company. This acquisition brings the Company closer to realising a fully compliant network and will make Prisma Pharma one of the largest fine distributors in the country.
            </p>
          </br>
          <h4>Our Parent Organization</h4>
          <img src="images/aj.gif" style="width:70%; height:auto; ">

          </div>
        </div>
      </div>
    </section>



  <section id="team" style="margin-bottom:0px;">
      <div class="container">
          <div class="section_header">
              <h3>Meet our Team</h3>
          </div>

          <div class="row people">
              <div class="row row1">
                  <div class="col-sm-6 bio_box">
                      <img class="img-circle img-thumbnail" src="images/vp.jpg" style="width:50%; height:50%;">
                      <div class="info">
                          <p class="name">Vilesh Patil</p>
                          <p class="area">Area Manager</p>
                          <a href="#"><i style="font-size:24px" class="fa">&#xf230;</i></a>
                         <a href="#"><i style="font-size:24px" class="fa">&#xf08c;</i></a>
                      </div>
                  </div>

                  <div class="col-sm-6 bio_box bio_boxr">
                      <img class="img-circle img-thumbnail" src="images/abhi.jpg" alt="" style="width:50%; height:50%;">
                      <div class="info">
                          <p class="name">Abhishek Mishra</p>
                          <p class="area">Zonal Manager</p>
                             <a href="#"><i style="font-size:24px" class="fa">&#xf230;</i></a>
                         <a href="#"><i style="font-size:24px" class="fa">&#xf08c;</i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</body>
<!---Footer--->
<?php include'footer.php' ?>

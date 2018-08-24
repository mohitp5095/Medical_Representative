
<html>
<head>
<?php include 'back_header.php';?>
</head>
<body>
<div class="col-md-6 col-md-push-2">
	<div class="form">
        <form action="chemist_valid.php" method="post"  class="contactForm">
			<div class="form-group">
                  <input type="date" class="form-control" name="Date" id="Date" placeholder="Date of Visit" data-rule="minlen:4" data-msg="" />
                  <div class="validation"></div>
                </div>
			
			<div class="form-group">
                  <input type="text" name="first" class="form-control" id="first" placeholder="First Name" data-rule="minlen:4" data-msg="" />
                  <div class="validation"></div>
                </div>
				
				
				<div class="form-group">
                  <input type="text" name="last" class="form-control" id="last" placeholder="Last Name" data-rule="minlen:4" data-msg="" />
                  <div class="validation"></div>
                </div>
				
				
                
				
				
                <div class="form-group">
                  <input type="text" class="form-control" name="reg" id="reg" placeholder="Registration No" data-rule="minlen:4" data-msg="" />
                  <div class="validation"></div>
                </div>
				
				
                <div class="form-group">
                  <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="" placeholder="Address"></textarea>
                  <div class="validation"></div>
                </div>
				
				
				
				<div class="form-group">
                  <input type="text" class="form-control" name="mob" id="mob" placeholder="Mobile Number" data-rule="minlen:4" data-msg="" />
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" value="add" name="Submit">Submit</button></div>
            </form>
          </div>
		</div>
		
		
		
</body>
</html>
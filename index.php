<!DOCTYPE html>
<html lang="en">
<head>
	<title>mastercook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/head.php'; ?>
</head>
<body>

	<?php include 'includes/menu.php'; ?>

	<!-- banner section -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>

	  </ol>

  	<!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="myimages/slider2.png" alt="" class="img-responsive">
	    </div>

	    <div class="item">
	      <img src="myimages/slider1.jpg" alt="" class="img-responsive">
	    </div>

	   </div>

  		<!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	<!-- banner section end -->

	<!-- about section -->
	<div class="about-section-n pt-55 pb-40">
		<div class="container">
			<div class="row">
				<h1 class="text-center"><span class="text-blue">About</span> <span class="text-green"> Us</span> </h1>
				<br>
				<div class="col-sm-7">
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>
				<div class="col-sm-5">
					<img src="http://www.cbc.ca/stevenandchris/content/images/when_pressure_pays_off_in_the_kitchen.jpg" alt="" class="img-responsive" >
				</div>
			</div>
		</div>
	</div>

	<div class="service-section-n pt-55 pb-40">
		<div class="container">
			<h1 class="text-center"><span class="text-blue">Our </span><span class="text-green">Product</span> </h1>
			<br>
	    <div class="row">
	        <div class="col-md-4 col-sm-6">
	            <div class="serviceBox">
	                <div class="service-icon">
	                    <i class="fa fa-adjust"></i>
	                </div>
	                <h3 class="title">Electric Multiprocessor</h3>

	            </div>
	        </div>
	        <div class="col-md-4 col-sm-6">
	            <div class="serviceBox green">
	                <div class="service-icon">
	                    <i class="fa fa-list"></i>
	                </div>
	                <h3 class="title">3 in 1 Processor</h3>

	            </div>
	        </div>
					<div class="col-md-4 col-sm-6">
	            <div class="serviceBox ">
	                <div class="service-icon">
	                    <i class="fa fa-check"></i>
	                </div>
	                <h3 class="title">Automatic</h3>

	            </div>
	        </div>
	    </div>
		</div>
	</div>

	<div class="contact-section-n pt-55">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<img src="http://jobsindubaijobs.com/wp-content/uploads/2014/10/ContactusGirl2.png" alt="" class="img-responsive">
				</div>
				<div class="col-sm-6">
					<h1><span class="text-blue">Request A </span> <span class="text-green">Consultation</span> </h1>
					<br><br>
					<form class="" action="" method="post">

            <div class="row">
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="">Name :</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="name" value="" class="form-control" placeholder="Enter your name*">
                </div>
              </div>
            </div>
						<br>
            <div class="row">
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="">Email :</label>
                </div>
								<div class="col-sm-6">
                  <input type="email" name="email" value="" class="form-control" placeholder="Enter your email*">
                </div>
              </div>
            </div>
						<br>
						<div class="row">
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="">Mobile :</label>
                </div>
								<div class="col-sm-6">
                  <input type="text" name="mobile" value="" class="form-control" placeholder="Enter your Phone No*">
                </div>
              </div>
            </div>
						<br>
						<div class="row">
              <div class="form-group">
                <div class="col-sm-3">
                  <label for="">Message :</label>
                </div>
								<div class="col-sm-6">
                  <textarea name="message" rows="4" cols="80" class="form-control"></textarea>
                </div>
              </div>
            </div>
						<br>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-3">
								<input type="submit" name="submit" value="Send" class="btn btn-default">
							</div>

						</div>
          </form>
				</div>

			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>

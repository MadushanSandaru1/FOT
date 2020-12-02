<!DOCTYPE HTML>
<html>
	<?php require_once('header.php');?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<?php require_once('header_navbar.php');?>
	

	<div id="fh5co-blog">
		<div class="container">
			
			<div class="row row-padded-mb">
				<div class="col-md-12 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span class="icon"><i class="icon-study"></i></span></div>
						<h3><a href="#">Degree Program of BET(Hons)</a></h3>
						<p>The time duration of the Engineering Technology Honours degree program is full time 4 years. 
							The course consists of subjects in the areas of Basic Sciences, Mathematics, Workshop Technology, 
							Electrical Systems, Electronics, Mechatronics, Robotics, Automobile Technology, Material Engineering, 
							Technical Drawing and Computer Programming.Further, a total of 6 months of industrial training in a 
							recognize institution is a mandatory component of the degree program. In addition the students are 
							required to follow the complementary subjects offered by the Department of Multidisciplinary Studies 
							as recommended by the degree program. </p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="fh5co-blog animate-box">
						<!-- <a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a> -->
						<div class="blog-text">
							<h3><a href="#">First Year (Level I)</a></h3>
							<span class="posted_on"></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>
								Basic Sciences, Mathematics<br>Workshop Technology<br>Computer Programming<br>Electronics (Introductory)<br>
								Electrical Systems (Introductory) and Material Engineering.
							</p>
							<p><a href="#">Read More</a></p>
						</div> 
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="fh5co-blog animate-box">
						<!-- <a href="#" class="blog-img-holder" style="background-image: url(images/project-2.jpg);"></a> -->
						<div class="blog-text">
							<h3><a href="#">Second Year (Level II)</a></h3>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Electronics(Analogue and Digital)<br>Electrical Systems<br>Object Oriented Programming<br>Numerical Methods<br>
							   Automobile Technology<br>Technical Drawing<br>Circuit Analysis<br>Instrumentation and Calibration<br>
							   Workshop Technology.
							</p>
							<p><a href="#">Read More</a></p>
						</div> 
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="fh5co-blog animate-box">
						<!-- <a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a> -->
						<div class="blog-text">
							<h3><a href="#">Third Year (Level III)</a></h3>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>
								Electrical Power Systems<br>Robotics, Properties of Materials<br>Renewable and Alternative Energy Technology<br>
								Environmental Science<br>Art and Tradition<br>English<br>Accounting for Technologists<br>Safety and Risk Managements
							</p>
							<p><a href="#">Read More</a></p>
						</div> 
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="fh5co-blog animate-box">
						<!-- <a href="#" class="blog-img-holder" style="background-image: url(images/project-3.jpg);"></a> -->
						<div class="blog-text">
							<h3><a href="#">Fourth Year (Level IV)</a></h3>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>
								Mechatronics<br>Nanotechnology<br>Bio-Medical Equipment<br>Refrigeration and Air Conditioning<br>Welding Techniques<br>
								Design Project<br>Communication for Technologists<br>Creativity<br>Innovation and Entrepreneurship<br>Industrial Sociology
							</p>
							<p><a href="#">Read More</a></p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('footer.php');?>	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>


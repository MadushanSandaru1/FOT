<!DOCTYPE HTML>
<html>
	<?php require_once('header.php');?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<?php require_once('header_navbar.php');?>
	

	<div id="fh5co-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Department of Multidisciplinary</h2></div>
				</div>
			<br>
			<div class="row row-padded-mb">
				<div class="col-md-6 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span class="icon"><i class="icon-world"></i></span></div>
						<h3><a href="#">About</a></h3>
						<p>
						The Faculty of Technology is entrusted with offering degree programmes in the field of Engineering 
						Technology, Information and Communication Technology and Biosystems Technology. The Department of 
						Multidisciplinary Studies is one of the four departments of the Faculty that contributes towards these 
						degree programmes. Understanding the importance of our graduates to be accepted by society, the 
						Department of Multidisciplinary Studies is entrusted with the challenging task of developing soft 
						skills of undergraduates who come from different cultural and social backgrounds, providing them..
						</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span class="icon"><i class="icon-bulb"></i></span></div>
						<h3><a href="#">Main objectives of the program</a></h3>
						<p>
						To provide undergraduates with communication skills which are essential for individuals to acquire and 
						disseminate knowledge, and gain an advantage and excel in their chosen fields.To facilitate the 
						acquisition of additional knowledge and skills via non-technical course modules to effectively 
						complete the degree program.To bring about personality development of undergraduates by promoting 
						the core values required to live in the society.To produce well- balanced, capable and employable 
						individuals who would take challenges in the development of the society while taking the responsibility 
						for their own personal development.
						</p>
						<p><a href="#">Read More</a></p>
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


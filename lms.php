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
						<div class="date text-center"><span class="icon"><i class="icon-world"></i></span></div>
						<h3><a href="#">Sign In LMS</a></h3>
						<form action="">
							<input type="text" class="form-control" placeholder="Enter your Username" required><br>
							<input type="password" class="form-control" placeholder="Enter your Password" required><br>
							<input type="checkbox" name="" id=""> Remember Me<br><br>
							<input type="submit" class="btn btn-success" value="SignIn">
							<input type="reset" class="btn btn-danger" value="Cancel">
						</form>
						<p><a href="#">Forgotten your username or password?</a></p>
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


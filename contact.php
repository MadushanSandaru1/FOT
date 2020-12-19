<!DOCTYPE HTML>
<html>
    <?php require_once('header.php');?>
	<body>
		
		<div class="fh5co-loader"></div>
		<?php require_once('header_navbar.php');?>
		<div class="row">
			<div class="col-md-12 ">
				<br>
				<center>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.4969963732406!2d80.53975221448441!3d6.063504830022567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae141585ad5987d%3A0x717cf948bd5444ff!2sFaculty%20of%20Technology%2C%20University%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1606642731313!5m2!1sen!2slk" width="70%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</center>
			</div>
		</div>
		<div id="fh5co-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-push-1 animate-box">
					
						<div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">Faculty of Technology<br>
									University of Ruhuna <br> Karagoda Uyangoda<br>
									Kamburupitiya,Matara<br>
									Sri Lanka. 81000</li>
								<li class="phone"><a href="">+94-41-3006131</a></li>
								<li class="email"><a href="mailto:dean@tec.ruh.ac.lk">dean@tec.ruh.ac.lk</a></li>
							
							</ul>
						</div>

					</div>
					<div class="col-md-6 animate-box">
						<h3>Get In Touch</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-success">
								<input type="reset" value="Cancel" class="btn btn-danger">
							</div>

						</form>		
					</div>
				</div>
			
			</div>
		</div>
		<?php require_once('footer.php');?>				
	

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
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="js/google_map.js"></script>
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


<!DOCTYPE HTML>
<html>
	<?php require_once('header.php');?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<?php require_once('header_navbar.php');?>
	

	<div id="fh5co-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Department of Information Communication Technology</h2></div>
				</div>
			<br>
			<div class="row row-padded-mb">
				<div class="col-md-6 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span class="icon"><i class="icon-world"></i></span></div>
						<h3><a href="#">About</a></h3>
						<p>
						Department of Biosystems Technology offers the Biosystems Technology Honours Degree Program where it 
						produces Bachelors of Biosystems Technology. Department will be established in well-equipped new 
						buildings at the Faculty of Technology at Karagoda Uyangoda, Kamburupitiya. The curriculum of this 
						degree programme focuses in producing Technologists with the knowledge and technical expertise in 
						Biosystems in Agricultural, Biomedical, Bioprocessing and Environmental fields.
						</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span class="icon"><i class="icon-bulb"></i></span></div>
						<h3><a href="#">Main objectives of the program</a></h3>
						<p>
						 Agricultural systems & Food production: Developing new farming and industry machinery for the production 
						 and harvesting of raw materials for food and drinks.Food Processing: Developing efficient systems and 
						 equipment to process, handle and package foodstuffs to ensure quality of taste, health and safety of 
						 production.Biomaterials: Developing biomaterial production for the bio-energy and construction 
						 industries such as fuel crops or timber furniture.
						</p>
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
							Information Technology I<br>Basic Mathematics<br>General Biology <br>
							Plant Physiology<br>Animal Physiology<br>Introduction to Environmental Science
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
							<p>
							Application of Biosystems Technology<br>Engineering Properties of Biomaterials<br>Bioprocessing Technology<br>
							Bioenergy Systems<br>Bio-separation Processes <br>Biomechanics
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
							Environmental Monitoring and WasteManagement<br>Tissue Culture Technology<br>Industrial Microbiology <br>
							Laboratory Design and Equipment<br>Industrial Training
							<br><br><p><a href="#">Read More</a></p>
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
								Technological Perspectives of Food Processing and Packaging <br>Food Analyses and Quality Assurance
								<br>Fish Production Systems<br>Fisheries Technology<br>Horticulture Technology<br>
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


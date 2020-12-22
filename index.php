<?php
    $msg ="";
    if(isset($_POST['contact']))
    {
        $msg ="Contact message send successfully!";
    }

?>
<!DOCTYPE HTML>
<html>
	<?php require_once('header.php');?>
	<body>
		<div class="fh5co-loader"></div>

		<?php require_once('header_navbar.php');?>	
	
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
		   			<li style="background-image: url(images/fac3.jpeg);">
		   				<div class="overlay-gradient"></div>
		   				<div class="container">
		   					<div class="row">
			   					<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   						<div class="slider-text-inner">
			   							<h1>To be excellent in nurturing the nations experts for the next generation of technology</h1>
										
			   						</div>
			   					</div>
			   				</div>
		   				</div>
		   			</li>
		   			<li style="background-image: url(images/fac2.jpeg);">
		   				<div class="overlay-gradient"></div>
		   				<div class="container">
		   					<div class="row">
			   					<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   						<div class="slider-text-inner">
			   							<h1>To produce accredited professional technologists to meet the needs of the world of technology</h1>
										
			   						</div>
			   					</div>
			   				</div>
		   				</div>
		   			</li>
		   			<li style="background-image: url(images/fac4.jpg);">
		   				<div class="overlay-gradient"></div>
		   				<div class="container">
		   					<div class="row">
			   					<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   						<div class="slider-text-inner">
			   							<h1>We Help You to Learn New Things</h1>
										
			   						</div>
			   					</div>
			   				</div>
		   				</div>
		   			</li>		   	
		  		</ul>
	  		</div>
		</aside>

		<div id="fh5co-course-categories">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Service categories</h2>
						<p>In bellow you can quickly find out our services. And also you can get an idea about us.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-shop"></i>
							</span>
							<div class="desc">
								<h3><a href="https://www.lib.ruh.ac.lk/web/index.php" target="_blank">University Library</a></h3>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
							<i><img src="images/cal.png" alt=""></i>
							</span>
							<div class="desc">
								<h3><a href="academic_calender.php">Acadamic Calender</a></h3>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-photo"></i>
							</span>
							<div class="desc">
								<h3><a href="resources/handbook.pdf">Handbook</a></h3>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-world"></i>
							</span>
							<div class="desc">
								<h3><a href="tecmis.php">TECMIS</a></h3>
								<p></p>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i><img src="images/vac.png" alt=""></i>
							</span>
							<div class="desc">
								<h3><a href="vecancies.php">Vacancies</a></h3>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-bubble3"></i>
							</span>
							<div class="desc">
								<h3><a href="#fh5co-blog">News</a></h3>
								<p></p>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-3 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-world"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="600" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">All Students</span>
							</div>
							<div class="col-md-3 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-study"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="480" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Undergraduate Students</span>
							</div>
							<div class="col-md-3 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-bulb"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="0" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Passout Students</span>
							</div>
							<div class="col-md-3 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-head"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Acadamic Staff</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2><span>Dean Message</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row animate-box">
							<div class="owl-carousel owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<div class="user" style="background-image: url(images/DrHarsha.jpg)"></div>
										<span>Dr. Harshadewa Gunawardhana<br><small>Dean</small></span>
										<blockquote>
										<p>&ldquo;The Faculty of Technology offers learning and research opportunities in basic Technical and Mathamatical 
											for undergraduate. The academic departments of the faculty include Department of Information Communacation
											Technology,Department of Engineering Technology, Department of Bio System Technology,  
											Department of Multidisciplinary.  Majority of the academic staff of the Faculty of Technology has obtained 
											their postgraduate qualifications and professional experience from high ranking universities and institutions 
											around the world. &rdquo;</p>
										</blockquote>
									</div>
								</div>
							
								<div class="item">
									<div class="testimony-slide active text-center">
										<div class="user" style="background-image: url(images/DrHarsha.jpg)"></div>
										<span>Dr. Harshadewa Gunawardhana<br><small>Dean</small></span>
										<blockquote>
										<p>&ldquo;The Faculty of Technology offers learning and research opportunities in basic Technical and Mathamatical 
											for undergraduate. The academic departments of the faculty include Department of Information Communacation
											Technology,Department of Engineering Technology, Department of Bio System Technology,  
											Department of Multidisciplinary.  Majority of the academic staff of the Faculty of Technology has obtained 
											their postgraduate qualifications and professional experience from high ranking universities and institutions 
											around the world. &rdquo;</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Lates News &amp; Events</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
			
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-img-holder" style="background-image: url(images/felicit-ceremony.jpg);"></a>
							<div class="blog-text">
								<h3><a href="#">Felicitation Ceremony for the Founder Dean,Senior Professor W.G.D.Dharmarathne</a></h3>
								<span class="posted_on">30th of November, 2020</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<p>Senior Prof. W.G.D Dharmarathne, the former Dean of the Faculty of Technology, University of Ruhuna retired from his position recently as the founder Dean of the Faculty of Technology and</p>
								<p><a href="#">Read More</a></p>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-img-holder" style="background-image: url(images/group.jpg);"></a>
							<div class="blog-text">
								<h3><a href="#">Industrial Collaborations - Department of ICT</a></h3>
								<span class="posted_on">2020</span>
								<span class="comment"><a href="">20<i class="icon-speech-bubble"></i></a></span>
								<p>In producing an internationally accredited Technologist in the field of Information and Communication Technology, the Department of ICT has recently formed an Industrial Consultative Committee (ICC) in order to provide students with the necessary technical and professional skills to</p>
								<p><a href="#">Read More</a></p>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-img-holder" style="background-image: url(images/drama2020.jpg"></a>
							<div class="blog-text">
								<h3><a href="#">Interfaculty Drama Competition - 2020</a></h3>
								<span class="posted_on">06th of May 2020</span>
								<span class="comment"><a href="">37<i class="icon-speech-bubble"></i></a></span>
								<p>The Faculty of Technology, University of Ruhuna emerged the second runner-up of the Interfaculty Drama Competition organised by the Cultural Centre, University of Ruhuna to commemorate</p>
								<p><a href="#">Read More</a></p>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-course-categories">
			<div class="container">
			<form action="index.php" method="post">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Contact Message</h2>
						<p>If you have any problem or  any suggessions  please contact send to us. We are always trying to engage with you.</p>
					</div>
				</div>
<!--                --><?php //echo $msg;?>
				<div class="row">
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							
							<div class="desc">
								<input type="text" name="" id="name" class="form-control" placeholder="Your Name" required>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							
							<div class="desc">
								<input type="email" name="" id="email" class="form-control" placeholder="Your email address" required>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center animate-box">
						<div class="services">
							
							<div class="desc">
								<input type="text" name="" id="emailSubject" class="form-control" placeholder="Your email Subject" required>
								<p></p>
							</div>
						</div>
					</div>
				
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center animate-box">
						<div class="services">
							
							<div class="desc">
								<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Type your Message" required></textarea>
								<p></p>
							</div>
							<input type="submit" value="Send Message" class="btn btn-success" name="contact" data-toggle="modal" data-target="#exampleModal" onclick="setStatus()">
							<input type="reset" value="Clear Message" class="btn btn-danger">
						</div>
					</div>
				</div>
			</form>	
			</div>
		</div>
	

		<?php require_once('footer.php');?>
	</div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Contact message send successfully!.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
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
        <script type="text/javascript">
            function setStatus()
            {
                var firstname = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var email_sub = document.getElementById('emailSubject').value;
                var message = document.getElementById('message').value;

                if(firstname=="" || email == "" || email_sub == "" || message == "")
                {
                    document.getElementById("exampleModal").style.display="none";
                }
            }
        </script>
	</body>
</html>


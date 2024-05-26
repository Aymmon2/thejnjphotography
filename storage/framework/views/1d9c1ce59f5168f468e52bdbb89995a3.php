<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>JnJ Photography</title>
        <link rel="icon" href="img/welcome/jnjlogo.jpg">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .news-head img {
                width: 150%;
                height: 400px; /* Adjust the height as needed */
                object-fit: cover;
            }
        </style>
    </head>
<body>

		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li>Capturing Moments, Creating Memories: Your Vision, Our Artistry</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:thejnjphotography@gmail.com">thejnjphotography@gmail.com</a></li>
                                <li><i class="icofont-facebook"></i><a href="https://www.facebook.com/JnJphtgrpy">JnJ Photography</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href=""><img src="img/welcome/jnjlogo.jpg" alt=""></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
                                            <li><a href="<?php echo e(url('preview')); ?>">Home</a></li>
											<li><a href="<?php echo e(route('photobooth')); ?>">Events</a></li>
											<li><a href="<?php echo e(route('rentals')); ?>">Portraits</a></li>
											<li class="active"><a href="#">Studio</a></li>
                                            <li><a href="<?php echo e(route('developers')); ?>">Developers</a></li>
                                            <li><a href="<?php echo e(url('/')); ?>">Logout</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
                                <div class="get-appoint">
                                    <a href="#" class="btn" id="book-appointment-btn">Book Appointment</a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

		<!-- Start studio -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>STUDIO</h2>
							<i class="fa fa-camera" aria-hidden="true" style="color: white; font-size: 35px;"></i>
							<p>Elevate your image with a professional studio photoshoot at our studio!
								Book your session today and experience the difference of high-quality, beautifully lit photographs.
								Contact us now to learn about our special offers and packages!</p>
						</div>
					</div>
				</div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio3.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now-btn">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio2.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a href="#" class="btn booknow2" id="book-now1-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio4.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div class="">
                                <a class="btn booknow2" href="#" id="book-now2-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

        </div>
    </div>
</section>

<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio5.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now3-btn">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio7.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now4-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio6.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div class="">
                                <a class="btn booknow2" href="#" id="book-now5-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

        </div>
    </div>
</section>

<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio9.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now6-btn">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio8.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div>
                                <a class="btn booknow2" href="#" id="book-now7-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/studio/studio10.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center">
                            <div class="">
                                <a class="btn booknow2" href="#" id="book-now8-btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

        </div>
    </div>
</section>


		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Experience Photography Excellence: Reach Out to Secure Your Session Today!</h2>
							<i class="fa fa-camera" aria-hidden="true" style="color: white; font-size: 35px;"></i>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form id="booking-form" class="form" action="<?php echo e(route('submit-form')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Name:</label>
									<div class="form-group">
										<input name="name" type="text" placeholder="Name" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Email:</label>
									<div class="form-group">
										<input name="email" type="email" placeholder="Email" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Contact Number:</label>
                                    <div class="form-group">
                                        <input name="contact_number" type="tel" placeholder="Contact Number (e.g., +639 123 456)" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Date of Event:</label>
									<div class="form-group">
										<input name="date" type="date" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Occasion:</label>
									<div class="form-group">
										<input name="occasion" type="text" placeholder="Occasion" required>
									</div>
								</div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="" style="color: #fff;">Time of Event:</label>
                                    <div class="form-group">
                                        <input name="time" type="time" placeholder="Time" required>
                                    </div>
                                </div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Please Specify exactly what is needed" required></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book an Appointment</button> <br><br>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
                                    <?php if(session('success_message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('success_message')); ?>

                                    </div>
                                <?php endif; ?>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/welcome/jnjlogo.jpg" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->

		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>We are a team engaged in artistic photography. We preserve event into lastig memories.
									With the best talent and skills we shoot the best shots. Transform your special events
									into timeless memories with JnJ’s acclaimed photography skills. </p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="<?php echo e(route('photobooth')); ?>" ><i class="fa fa-caret-right" aria-hidden="true"></i>Events</a></li>
											<li><a href="<?php echo e(route('rentals')); ?>" ><i class="fa fa-caret-right" aria-hidden="true"></i>Portraits</a></li>
											<li><a href="<?php echo e(route('cakes')); ?>" ><i class="fa fa-caret-right" aria-hidden="true"></i>Studio</a></li>
                                            <li><a href="<?php echo e(route('developers')); ?>" ><i class="fa fa-caret-right" aria-hidden="true"></i>Developers</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Social Media</h2>
								<ul class="time-sidual">
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:thejnjphotography@gmail.com">thejnjphotography@gmail.com</a></li>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/JnJphtgrpy">JnJ Photography</a></li>
                                </ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Developers</h2>
								<ul class="time-sidual">
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/sprt.dr/">Audrey S. Espiritu</a></li>
									<li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/ianne.banaga">Ianne Carlo B. Bañaga</a></li>
									<li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/deGuzman24RoxanneJustine">Roxanne Justine DR. De Guzman</a></li>
									<li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/znvnglst">Zyra Nichole P. Evangelista</a></li>
									<a>BS Computer Engineering - 3A</a></li>
                                </ul>
							</div>
						</div>

					</div>
				</div>
			</div>

            <!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>Copyright © 2024 JnJ Photography</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->


     <!-- jquery Min JS -->
     <script src="js/jquery.min.js"></script>
     <!-- jquery Migrate JS -->
     <script src="js/jquery-migrate-3.0.0.js"></script>
     <!-- Popper JS -->
     <script src="js/popper.min.js"></script>
     <script src="js/slicknav.min.js"></script>
     <!-- Niceselect JS -->
     <script src="js/niceselect.js"></script>
     <!-- Owl Carousel JS -->
     <script src="js/owl-carousel.js"></script>
     <!-- Bootstrap JS -->
     <script src="js/bootstrap.min.js"></script>
     <!-- Main JS -->
     <script src="js/main.js"></script>

     <script>
        document.addEventListener('DOMContentLoaded', function() {
           function scrollToSection(buttonId, sectionSelector) {
               var button = document.getElementById(buttonId);
               var section = document.querySelector(sectionSelector);
               button.addEventListener('click', function(event) {
                   event.preventDefault();
                   section.scrollIntoView({ behavior: 'smooth' });
               });
           }
           scrollToSection('book-now-btn', '.appointment');
           scrollToSection('book-now1-btn', '.appointment');
           scrollToSection('book-now2-btn', '.appointment');
           scrollToSection('book-now3-btn', '.appointment');
           scrollToSection('book-now4-btn', '.appointment');
           scrollToSection('book-now5-btn', '.appointment');
           scrollToSection('book-now6-btn', '.appointment');
           scrollToSection('book-now7-btn', '.appointment');
           scrollToSection('book-now8-btn', '.appointment');
           scrollToSection('book-now9-btn', '.appointment');
           scrollToSection('book-now10-btn', '.appointment');
       });
   </script>
</body>
</html>
<?php /**PATH C:\Users\Aymmon\Downloads\Compressed\jnjphotography-main\resources\views/cakes.blade.php ENDPATH**/ ?>
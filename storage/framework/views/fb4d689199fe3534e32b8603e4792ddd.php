<!doctype html>
<html class="no-js" lang="zxx">
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
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
            }

            .editphoto {
                display: none;
                width: 100%;
                height: 400px;
            }

            .mySlides0 {
                display: none;
                width: 100%;
                height: 500px;
            }

			.special-image {
                width: 50% !important;
                object-fit: contain;
                margin-left: 200px;
            }

            .slideshow-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .prev, .next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #fff;
                text-align: center;
                line-height: 40px;
                font-size: 20px;
                color: black;
                cursor: pointer;
            }

            .prev {
                left: 0;
            }

            .next {
                right: 0;
            }

            .news-head img {
                width: 150%;
                height: 400px;
                object-fit: cover;
            }





        </style>
        
        <style>
            /* Adjust padding for smaller screens */
            @media (max-width: 768px) {
                .why-choose {
                    text-align: center;
                    margin-bottom: 10px;
                }
                .middle {
                    margin-top: 10px;
                }
            }
        </style>
        <style>
            @media (max-width: 425px) {
                .middle {
                    margin-left: 5%;
                }
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
                                <li><i class="fa fa-envelope"></i><a href="mailto:thejnjphotography@gmail.com">thejnjphotography@gmail.com</a></li>
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
											<li class="active"><a href="preview">Home</a></li>
											<li><a href="<?php echo e(route('photobooth')); ?>">Events</a></li>
											<li><a href="<?php echo e(route('rentals')); ?>">Portraits</a></li>
											<li><a href="<?php echo e(route('cakes')); ?>">Studio</a></li>
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

		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/welcome/sliderr1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Book Today and Let's<br><span> Capture Every Moment in Style</span></h1>
									<p>Transform your special events into timeless memories with JnJ’s acclaimed photography skills.
                                        Our expertise lies on flawlessly capturing every moment, be it a wedding or a corporate events,
                                        to guarantee that memories last a lifetime.
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/welcome/sliderr2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Book Today and Let's<br><span> Capture Every Moment in Style</span></h1>
									<p>Transform your special events into timeless memories with JnJ’s acclaimed photography skills.
                                        Our expertise lies on flawlessly capturing every moment, be it a wedding or a corporate events,
                                        to guarantee that memories last a lifetime.
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('img/welcome/sliderr3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Book Today and Let's<br><span> Capture Every Moment in Style</span></h1>
									<p>Transform your special events into timeless memories with JnJ’s acclaimed photography skills.
                                        Our expertise lies on flawlessly capturing every moment, be it a wedding or a corporate events,
                                        to guarantee that memories last a lifetime.
                                    </p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

        
        <div class="middle card">
            <div class="row px-2 cardholder">
                <div class="col pb-4">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="<?php echo e(asset('img/evnt/events1.jpg')); ?>"alt="..." />
                        </div>
                        <div class="card_content" id="openModalBtn">
                            <span class="card_title">Events</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                Birthday Celebrations <br>
                                Weddings <br>
                                Anniversaries <br>
                                Family Gathering <br>
                                Corporate Events.. <br><br>
                            </p>
                            <a href="<?php echo e(route('photobooth')); ?>" class="photobooth" style="color: black; font-size: 16px;">
                            LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col pb-4">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="<?php echo e(asset('img/portrait/portrait1.jpg')); ?>"alt="..." />
                        </div>
                        <div class="card_content">
                            <span class="card_title">Portraits</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                Individual Portraits <br>
                                Family Portraits <br>
                                Children's Portraits <br>
                                Prenuptial Portraits <br>
                                Maternity Portraits.. <br><br>
                            </p>
                            <a href="<?php echo e(route('rentals')); ?>" class="rentals" style="color: black; font-size: 16px;">
                                LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="cards shadow">
                        <div class="temporary_text">
                            <img class="img-fluid mb-3 mb-lg-0" src="<?php echo e(asset('img/studio/studio1.jpg')); ?>"
                                alt="..." />
                        </div>
                        <div class="card_content">
                            <span class="card_title">Studio</span>
                            <span class="card_subtitle"></span>
                            <p class="card_description">
                                Maternity and Newborn <br>
                                Couple Photograohy <br>
                                Individual Photography <br>
                                Group Photography <br>
                                Fashion and Glamour.. <br><br>
                            <a href="<?php echo e(route('cakes')); ?>" class="rentals" style="color: black; font-size: 16px;">
                            LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                            </p>
                        </div>
                    </article>
                </div>

            </div>
            
        </div>
        

        
        <section class="projects-section" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>EVENTS</h2>
							<i class="fa fa-camera" aria-hidden="true" style="color: white; font-size: 35px;"></i>
							<p>Eternalize your cherished moments with our all-encompassing event photography services,
							ensuring that each special occasion remains indelibly etched in memory.</p>
						</div>
					</div>
				</div>
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="slideshow-container">
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt3.jpg" alt="Slide 1" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt2.jpg" alt="Slide 2" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt1.jpg" alt="Slide 3" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt4.jpg" alt="Slide 4" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt5.jpg" alt="Slide 5" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt6.jpg" alt="Slide 6" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/welcome/envnt7.jpg" alt="Slide 7" />
                            </div>
                        </div>
                        <br>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div class="col-xl-4 col-lg-5 system">
                        <div class="featured-text text-center text-lg-left">
							<p class="text-black-50 mb-2">
                                <span style="color: white;">We are here to bring<br>
                                <span style="color: white;">your vision to life.<br>
								<span style="color: white;">Whether you're celebrating a<br> <br></p>
                            <h4>Birthday Celebrations</h4>
							<h4>Wedding Anniversaries</h4>
							<h4>Family Gathering</h4>
							<h4>Corporate Events</h4> <br><br>
                            <p class="text-black-50 mb-2">
                                <span style="color: white;">Book with us today<br>
                                <span style="color: white;">and create memories<br>
								<span style="color: white;">that will last a lifetime!<br> <br></p>
                            <a href="<?php echo e(route('photobooth')); ?>" class="photobooth" style="color: #FFF; font-size: 25px; margin-bottom: 20px;">
                                LEARN MORE <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

		<!-- Start portraits -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>PORTRAITS</h2>
							<i class="fa fa-camera" aria-hidden="true" style="color: white; font-size: 35px;"></i>
							<p>Capture your essence with a stunning portrait photoshoot at our studio!
							Our talented photographer will bring out your best side. Book your session today 
							and let us create timeless images you'll cherish forever. Contact us now for special offers and packages!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/welcome/prt1.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow3" href="<?php echo e(route('rentals')); ?>">LEARN MORE</a>
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
								<img src="img/welcome/prt2.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow3" href="<?php echo e(route('rentals')); ?>">LEARN MORE</a>
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
								<img src="img/welcome/prt3.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow3" href="<?php echo e(route('rentals')); ?>">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>

				</div>
			</div>
		</section>
		<!-- End portraits Blog Area -->

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
								<img src="img/welcome/std1.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow2" href="<?php echo e(route('cakes')); ?>">LEARN MORE</a>
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
								<img src="img/welcome/std3.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow2" href="<?php echo e(route('cakes')); ?>">LEARN MORE</a>
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
								<img src="img/welcome/std2.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
									<div>
										<a class="btn booknow2" href="<?php echo e(route('cakes')); ?>">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>

				</div>
			</div>
		</section>
		<!-- End studio Blog Area -->

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
								<p>We are a team engaged in artistic photography. We preserve event into lasting memories.
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
									<li><i class="fa fa-envelope"></i> <a href="mailto:@thejnjphotography@gmail.com">thejnjphotography@gmail.com</a></li>
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
            var slideIndex = 1;
            photoSlides(slideIndex);

            function plusSlides(n) {
                photoSlides(slideIndex += n);
            }

            function currentSlide(n) {
                photoSlides(slideIndex = n);
            }

            function photoSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides0");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
        </script>

    </body>
</html>
<?php /**PATH C:\Users\Aymmon\Downloads\Compressed\jnjphotography-main\resources\views\preview.blade.php ENDPATH**/ ?>
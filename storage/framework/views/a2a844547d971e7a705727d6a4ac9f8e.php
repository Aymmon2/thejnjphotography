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
                color: white;
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
                                            <li><a href="<?php echo e(url('preview')); ?>">Home</a></li>
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
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

        <!-- Start Developer -->
        <section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>THE DEVELOPERS</h2>
                    <p>We're a group of third-year computer engineering students from Bulacan State University.
                        We put all our skills together for this latest project. We work hard together, aiming to do
                        things nobody thought possible because we know that challenges are just chances for us to 
                        learn and grow, and we're using our combined knowledge to overcome them and make this project possible. <br> </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/dev/dev1.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center"> <!-- Added 'text-center' class -->
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2>Audrey S. Espiritu</h2> <br><!-- Added h2 text -->
                            <p>Address: Caloocan City <br>
                                Contact No: 09107741788 <br>
                                Gmail: audreysilagpoespiritu@gmail.com <br> <br>
                                Education: Bulacan State University <br>
                                Program: BS Computer Engineering <br> <br>
                                Interest: Hiking through rugged terrain and lush forests has
                                become my passion and favorite pastime, allowing me to 
                                immerse myself in nature's beauty while challenging my physical limits
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
             <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2></h2> <br><!-- Added h2 text -->
                            <p>	<ul class="time-sidual">
                                    <br>
                                    <br>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/sprt.dr/"> Audrey S. Espiritu</a></li>
                                    <li><i class="icofont-instagram"></i> <a href="https://www.instagram.com/sprtdr/">   Audrey S. Espiritu</a></li>
                                </ul>
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
        </div>

            <br>
            <br>
            <br>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/dev/dev2.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center"> <!-- Added 'text-center' class -->
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2>Ianne Carlo B. Bañaga</h2> <br><!-- Added h2 text -->
                            <p>Address: Paombong, Bulacan <br>
                                Contact No: 09754316261 <br>
                                Gmail: iannecarlo0@gmail.com <br> <br>
                                Education: Bulacan State University <br>
                                Program: BS Computer Engineering <br> <br>
                                Interest: Playing computer games is my hobby because it offers entertainment,
                                relaxation, and mental challenges. I love immersing myself in virtual worlds,
                                solving problems, and connecting with a global community of gamers. It helps me
                                unwind and sharpen my cognitive skills, making it a fulfilling and enjoyable part of my life.
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
             <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2></h2> <br><!-- Added h2 text -->
                            <p>	<ul class="time-sidual">
                                    <br>
                                    <br>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/ianne.banaga"> Ianne Carlo B. Bañaga</a></li>
                                    <li><i class="icofont-instagram"></i> <a href="https://www.instagram.com/ianne.carlo/">   Ianne Carlo B. Bañaga</a></li>
                                </ul>
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/dev/dev3.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center"> <!-- Added 'text-center' class -->
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2>Roxanne Justine DR. De Guzman</h2> <br><!-- Added h2 text -->
                            <p>Address: Hagonoy, Bulacan <br>
                                Contact No: 09663801929 <br>
                                Gmail: deguzman.roxannejustine.d@gmail.com <br> <br>
                                Education: Bulacan State University <br>
                                Program: BS Computer Engineering <br> <br>
                                Interest: I love taking my motorcycle out for leisurely rides, enjoying
                                the beautiful surroundings, whether it's the countryside, coastal roads,
                                or cityscapes. Alongside this, I have a passion for collecting diecast cars,
                                appreciating their intricate details and craftsmanship. Together, these interests
                                blend adventure with aesthetic appreciation and a touch of nostalgia.
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
             <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2></h2> <br><!-- Added h2 text -->
                            <p>	<ul class="time-sidual">
                                    <br>
                                    <br>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/deGuzman24RoxanneJustine"> Roxanne Justine DR. De Guzman</a></li>
                                    <li><i class="icofont-instagram"></i> <a href="https://www.instagram.com/deguzman_roxanne/">   Roxanne Justine DR. De Guzman</a></li>
                                </ul>
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/dev/dev4.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content text-center"> <!-- Added 'text-center' class -->
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2>Zyra Nichole P. Evangelista</h2> <br><!-- Added h2 text -->
                            <p>Address: Paombong, Bulacan <br>
                                Contact No: 09692603446 <br>
                                Gmail: evangelista.zyranichole.p@gmail.com <br> <br>
                                Education: Bulacan State University <br>
                                Program: BS Computer Engineering <br> <br>
                                Interest: I have a deep passion for the arts, particularly in painting,
                                digital drawing, crocheting, and writing. Painting lets me express emotions
                                on canvas, while digital drawing offers precision and creativity. Crocheting
                                allows me to craft textured creations. As a student journalist during elementary
                                and high school, I developed a love for writing, which continues to inspire me to weave compelling narratives.
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
             <div class="col-lg-4 col-md-6 col-12">
                <!-- Text beside image -->
                <div class="single-news">
                    <div class="news-body">
                        <div class="news-content">
                            <br><h2></h2> <br><!-- Added h2 text -->
                            <p>	<ul class="time-sidual">
                                    <br>
                                    <br>
                                    <li><i class="icofont-facebook"></i> <a href="https://www.facebook.com/znvnglst"> Zyra Nichole P. Evangelista</a></li>
                                    <li><i class="icofont-instagram"></i> <a href="https://www.instagram.com/znvnglst/">   Zyra Nichole P. Evangelista</a></li>
                                </ul>
                            </p> <br> <br> <!-- Added paragraph text -->
                        </div>
                    </div>
                </div>
                <!-- End Text beside image -->
            </div>
        </div>

    </div>
</section>
<!-- End portraits Blog Area -->




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



<?php /**PATH C:\Users\Aymmon\Downloads\Compressed\jnjphotography-main\resources\views/developers.blade.php ENDPATH**/ ?>
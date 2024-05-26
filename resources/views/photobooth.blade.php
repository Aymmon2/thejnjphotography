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
    <style>
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            overflow: hidden;
            }

            .mySlides0 {
                display: none;
                width: 100%;
                height: 400px; /* Set the fixed height for the slideshow */
            }
            .mySlides {
                display: none;
                width: 100%;
                height: 400px; /* Set the fixed height for the slideshow */
            }
            .mySlides2 {
                display: none;
                width: 100%;
                height: 400px; /* Set the fixed height for the slideshow */
            }

            .slideshow-container img {
                width: 100%; /* Ensure image fills its container */
                height: 100%; /* Ensure image fills its container */
                object-fit: cover; /* Cover the entire container, maintaining aspect ratio */
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
                                            <li><a href="{{ url('preview') }}">Home</a></li>
											<li class="active"><a href="#">Events</a></li>
											<li><a href="{{ route('rentals') }}">Portraits</a></li>
											<li><a href="{{ route('cakes') }}">Studio</a></li>
                                            <li><a href="{{ route('developers') }}">Developers</a></li>
                                            <li><a href="{{ url('/') }}">Logout</a></li>
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

            <br>

        <!-- Projects Section -->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="section-title">
							<h2>EVENTS</h2>
							<i class="fa fa-camera" aria-hidden="true" style="color: white; font-size: 35px;"></i>
							<p>Eternalize your cherished moments with our all-encompassing event photography services,
							ensuring that each special occasion remains indelibly etched in memory.</p>
						</div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="slideshow-container">
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event6.jpg" alt="Slide 1" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event5.jpg" alt="Slide 2" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event4.jpg" alt="Slide 3" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event3.jpg" alt="Slide 4" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event2.jpg" alt="Slide 5" />
                            </div>
                            <div class="mySlides0">
                                <img class="img-fluid mb-3 mb-lg-0" src="img/evnt/event1.jpg" alt="Slide 6" />
                            </div>
                        </div>
                        <br>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div class="col-xl-4 col-lg-5 system">
                        <div class="featured-text text-center text-lg-left">
                            <h4>18th Birthday Celebration</h4>
                            <p> 
                            Celebrate the significance of your 18th birthday 18th birthday with a personalized photography
                            session tailored just for you. Book now to preserve the memories of this special occasion forever.</p>
                        </div>
                    </div>
                </div>

                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6 slideshow-container">
                        <div class="mySlides">
                            <img class="img-fluid" src="img/evnt/event9.jpg" alt="Slide 1">
                        </div>
                        <div class="mySlides">
                            <img class="img-fluid" src="img/evnt/event10.jpg" alt="Slide 2">
                        </div>
                        <div class="mySlides">
                            <img class="img-fluid" src="img/evnt/event11.jpg" alt="Slide 3">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class=" text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 >70th Birthday Celebration</h4>
                                    <p> Celebrate a lifetime of wisdom and experience with a personalized photoshoot
                                    session tailored to honor your seniority birthday in timeless elegance. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6 slideshow-container">
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/evnt/event14.jpg" alt="Slide 1">
                        </div>
                        <div class="mySlides2">
                            <img class="img-fluid" src="img/evnt/event15.jpg" alt="Slide 2">
                        </div>

                        <div class="mySlides2">
                            <img class="img-fluid" src="img/evnt/event16.jpg" alt="Slide 3">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4>7th Birthday Celebration</h4>
                                    <p> Let your child's seventh birthday shine with a delightful photoshoot session,
                                    perfectly capturing the magic and excitement of this special milestone. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <br>
            <br>
            <br>

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
						<form id="booking-form" class="form" action="{{ route('submit-form') }}" method="POST">
                            @csrf
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
                                    @if(session('success_message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success_message') }}
                                    </div>
                                @endif
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
											<li><a href="{{ url('/') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="{{ route('photobooth') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Events</a></li>
											<li><a href="{{ route('rentals') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Portraits</a></li>
											<li><a href="{{ route('cakes') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Studio</a></li>
                                            <li><a href="{{ route('developers') }}" ><i class="fa fa-caret-right" aria-hidden="true"></i>Developers</a></li>
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
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
</script>
<script>
    var slideIndex = 0;
    showSlides2();

    function showSlides2() {
        var i;
        var slides = document.getElementsByClassName("mySlides2");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides2, 3000);
    }
</script>
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

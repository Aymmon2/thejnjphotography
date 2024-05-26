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
        {{-- css for responsive --}}
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
											<li><a href="/">Preview</a></li> 
                                            <li class="active"><a href="register">Register</a></li>
                                            <li><br><br></a></li>
                                            <li><br>Register to unlock exclusive access and benefits<br></a></li>
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

        <br>
        <br>

<style>
        .center {
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            width: 20%;
            padding: 10px;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            border: 1px solid;
            border-color: #fff #fff #fff;
            border-radius: 3px;
            background: #ffff;
            color: rgba(0, 0, 0, 0.8);
            line-height: 1;
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for color changes */
        }
        button:hover,
        input[type="button"]:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover {
            background-color: #525252; /* Change background color on hover */
            color: #fff; /* Change text color on hover */
        }
</style>
</head>
<body>
    <div class="center">
        <h2>Registration Form</h2> <br>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label for="fullname">Full Name:</label><br>
            <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required><br><br>
        
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>
        
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required><br><br>
        
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
        
            <label for="password_confirmation">Confirm Password:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>
        
            <button type="submit">Register</button>
        </form>
        
        <p>Have an account? <a href="{{ route('signin') }}">Login!</a></p> <br> <br>
    </div>    
</body>


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

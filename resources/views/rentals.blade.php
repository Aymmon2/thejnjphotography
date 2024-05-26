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
                height: 700px; /* Set the fixed height for the slideshow */
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

            .text-black-50 {
                font-size: 16px;
            }
            .item {
                cursor: pointer;
                margin-bottom: 10px;
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
                                            <li><a href="{{ url('preview') }}">Home</a></li>
											<li><a href="{{ route('photobooth') }}">Events</a></li>
											<li class="active"><a href="#">Portraits</a></li>
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

                <div class="col-xl-8 col-lg-7">
                    <div class="slideshow-container">
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits12.jpg" alt="Slide 1" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits13.jpg" alt="Slide 2" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits3.jpg" alt="Slide 3" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits4.jpg" alt="Slide 4" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits5.jpg" alt="Slide 5" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits6.jpg" alt="Slide 6" />
                        </div>
                        {{-- table --}}
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits7.jpg" alt="Slide 7" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits8.jpg" alt="Slide 8" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits9.jpg" alt="Slide 9" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits10.jpg" alt="Slide 10" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits11.jpg" alt="Slide 11" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits1.jpg" alt="Slide 12" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits2.jpg" alt="Slide 13" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits14.jpg" alt="Slide 14" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits15.jpg" alt="Slide 15" />
                        </div>
                        <div class="mySlides0">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/portrait/portraits16.jpg" alt="Slide 16" />
                        </div>
                    </div>
                    <br>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <div class="col-xl-4 col-lg-5 system">
                    <div class="featured-text text-center text-lg-left">
                        <h2 style="font-size: 40px; font-weight: bold;">Portraits</h2>
                        <p> Capture the essence of your most cherished moments with our tailored portrait sessions,
                            whether it's a captivating self-portrait or a heartwarming family portrait. Our skilled
                            photographers specialize in creating authentic and emotive images that resonate with your
                            unique story. From playful children's portraits to radiant maternity shots, let us preserve
                            the beauty of your life's milestones with timeless elegance. </p>
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
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="img/portrait/portraits16.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content text-center"> <!-- Added 'text-center' class -->
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
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>

				</div>
			</div>
		</section>
		<!-- End portraits Blog Area -->

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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Item Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Item Image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
        scrollToSection('book-appointment-btn', '.appointment');
        scrollToSection('book-appointment1-btn', '.appointment');
        scrollToSection('book-appointment2-btn', '.appointment');
        scrollToSection('book-appointment3-btn', '.appointment');
    });
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Get all elements with the 'item' class
            const items = document.querySelectorAll('.item');

            // Loop through each item and add click event listener
            items.forEach(item => {
                item.addEventListener('click', () => {
                    const price = item.dataset.price;
                    const itemName = item.textContent.trim();
                    const imageURL = item.dataset.image;

                    // Create and display the image
                    const img = document.createElement('img');
                    img.src = imageURL;
                    img.alt = itemName;
                    document.getElementById('output').innerHTML = '';
                    document.getElementById('output').appendChild(img);
                });
            });
        });
</script>
<script>
    // Get all elements with the 'item' class
    const items = document.querySelectorAll('.item');

    // Loop through each item and add click event listener
    items.forEach(item => {
        item.addEventListener('click', () => {
            const price = item.dataset.price;
            const itemName = item.textContent.trim();
            const imageURL = item.dataset.image;

            // Set image source and title in modal
            document.getElementById('modalImage').src = imageURL;
            document.getElementById('myModalLabel').textContent = itemName + ' - $' + price;
        });
    });
</script>
</body>
</html>

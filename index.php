<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Moinee Foundation</title>

	<meta name="description"
		content="Moinee Foundation (www.moinee.org) is an educational trust with the objective of “Right to Quality Education”. It has build specialization in Industry Alignment Program, Employability Assessments and Quiz Based Learning System through Quiz Academy.">
	<meta name="keywords"
		content="Education, Moinee, Foundation, Project Utkarsh, Education, Quality in Education, Industry Alignment Program, Quiz based learning system" />
	<meta name="author" content="Moinee Foundation">
    <meta name="facebook-domain-verification" content="e6nbs9ytqjfv06aa1b1csvngy7me24" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="favicon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />

	<!-- Web Fonts  -->
	<link id="googleFonts"
		href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
		rel="stylesheet" type="text/css" />
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">
	<link rel="stylesheet" href="css/social-share.css">



	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">


	<style>
        .video-btn:hover,
				.video-btn:active{
            Background-color: rgba(255, 255, 255, 0.2);
						/* border: 5px solid #fff; */
						cursor: pointer;
						box-shadow: inset 0px 0px 0px 5px #47b3dd;
						transition: all 0.5s;
        }

				.modal {
             border: 0;
               }

				

				.modal .modal-header {
						border: 0;
						padding: 20px 20px 0;
				}

				.modal .modal-header > h4 {
						font-weight: 300;
						font-size: 14px;
						color: #848484;
						text-transform: uppercase;
						margin: 0;
				}

				.modal .modal-body {
						padding: 20px;
				}

				.modal input[type=text],
				.modal input[type=password] {
						padding: 5px 10px;
						min-height: 30px;
						width: 130px;
						margin-right: 10px;
				}

				.modal .fa-remove {
						color: #848484;
						position: absolute;
						right: -5px;
						top: -5px;
						width: 16px;
						height: 16px;
						line-height: 16px;
						text-align: center;
						display: block;
						background: #ebebeb;
						-webkit-border-radius: 100%;
						-moz-border-radius: 100%;
						border-radius: 100%;
						cursor: pointer;
				}

				.modal button {
						margin-left: 10px;
						border: 0;
				}




				
    </style>

    <script type="text/javascript" src="jquery.lazy.min.js"></script>
	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
	<!-- leaflet -->
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>

	<!-- lottie-player -->

	<script src="js/loader.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>



</head>

<body class="loading-overlay-showing" data-loading-overlay
	data-plugin-options="{'hideDelay': 500, 'effect': 'floatBars'}">
	<div class="loading-overlay" id="loader">
		<div class="bounce-loader">
			<lottie-player src="lottiefiles/loading.json" background="transparent" speed="1" loop autoplay>
			</lottie-player>
		</div>
	</div>

	<div class="sticky-container">
		<ul class="sticky Icons">
			<li class="grow social-icons-linkedin">
				<a href="https://in.linkedin.com/company/moineefoundation/" target="_blank"><i
						class="fab fa-linkedin fabicon fabicon-linkedin"></i></a>
			</li>
			<li class="grow social-icons-instagram">
				<a href="https://www.instagram.com/moinee.foundation/" target="_blank"><i
						class="fab fa-instagram fabicon fabicon-instagram"></i></a>
			</li>
			<li class="grow social-icons-facebook">
				<a href="https://www.facebook.com/MoineeFoundation/" target="_blank"><i
						class="fab fa-facebook-f fabicon fabicon-facebook"></i></a>
			</li>
			<li class="grow social-icons-twitter ">
				<a href="https://twitter.com/moineeorg" target="_blank"><i class="fab fa-twitter fabicon fabicon-twitter"></i></a>
			</li>

		</ul>

	</div>




	<div class="body">
		<!-- Header Section Start -->

	<?php
	 include ('header.php');
	 ?>
	<!-- Header Section End -->
		<div role="main" class="main">

			<section class="section section-with-shape-divider border-0 py-0 m-0">
				<div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						x="0px" y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
						<path
							d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z"
							fill="#ffffff" />
					</svg>
				</div>
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-primary nav-md nav-font-size-md show-nav-hover mb-0"
					data-plugin-options="{'autoplayTimeout': 800000}" style="height: 100vh;">
					<div class="owl-stage-outer">
						<div class="owl-stage">









							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative overlay overlay-show overlay-op-4 pt-5" id="image">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-7 text-center">
											<div
												class="d-flex flex-column align-items-center justify-content-center h-100">
												<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-normal ls-0 px-4 mb-2 appear-animation"
													data-appear-animation="fadeInDownShorterPlus"
													data-plugin-options="{'minWindowWidth': 0}">
													<span
														class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
														<img src="img/slides/slide-title-border-light.png"
															class="w-auto appear-animation lazy"
															data-appear-animation="fadeInRightShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													WE ARE
													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
														<img  src="img/slides/slide-title-border-light.png"
															class="w-auto appear-animation lazy"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h1 class="text-color-light font-weight-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation"
													data-appear-animation="blurIn" data-appear-animation-delay="500"
													data-plugin-options="{'minWindowWidth': 0}">MOINEE FOUNDATION</h1>
												<p class="text-4-5 text-color-light font-weight-light text-center mb-5"
													data-plugin-animated-letters
													data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
													Transforming Mass Education through Techno-Social Innovations</p>

												<p class="button video-btn btn-modern font-weight-medium text-5  appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1800"
													data-plugin-options="{'minWindowWidth': 0}"
													style="color: #fff; border-radius: 25px;" onclick="showVideo();" href="#"><i class="fab fa-youtube"></i> &nbsp; Watch Video</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Carousel Slide 2 -->
							<div class="owl-item position-relative overlay overlay-show overlay-op-4 pt-5" id="image1">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100"
										style="margin-top: 80px;">
										<div class="col-lg-7 text-center">
											<div
												class="d-flex flex-column align-items-center justify-content-center h-100">
												<p class="button btn-modern font-weight-medium text-5  appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1800"
													data-plugin-options="{'minWindowWidth': 0}"
													style="color: #fff; border-radius: 25px;">Project Utkarsh</p>
												<p class="text-4-5 text-color-light font-weight-light text-center mb-5"
													data-plugin-animated-letters
													data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
													Improving QUALITY at grass-root level schools
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Carousel Slide 3 -->
							<div class="owl-item position-relative overlay overlay-show overlay-op-4 pt-5" id="image2">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100"
										style="margin-top: 80px;">
										<div class="col-lg-7 text-center">
											<div
												class="d-flex flex-column align-items-center justify-content-center h-100">
												<p class="button btn-modern font-weight-medium text-5  appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1800"
													data-plugin-options="{'minWindowWidth': 0}"
													style="color: #fff; border-radius: 25px;">DIGITAL CLASSROOMS</p>
												<p class="text-4-5 text-color-light font-weight-light text-center mb-5"
													data-plugin-animated-letters
													data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
													Empowering & Enabling Students For Future Alignment
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Carousel Slide 4 -->

							<div class="owl-item position-relative overlay overlay-show overlay-op-4 pt-5" id="image3">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100"
										style="margin-top: 80px;">
										<div class="col-lg-7 text-center">
											<div
												class="d-flex flex-column align-items-center justify-content-center h-100">

												<p class="button btn-modern font-weight-medium text-5  appear-animation"
													data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="1800"
													data-plugin-options="{'minWindowWidth': 0}"
													style="color: #fff; border-radius: 25px;">Believe in Magic!</p>
												<p class="text-4-5 text-color-light font-weight-light text-center mb-5"
													data-plugin-animated-letters
													data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
													Give a child wings and see how high it can fly
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>



						</div>
					</div>
					<div class="owl-nav" >
						<button type="button" role="presentation" class="owl-prev" style="font-size: 24px;"></button>
						<button type="button" role="presentation" class="owl-next" style="font-size: 24px;"></button>
						<button type="button" role="presentation" class="owl-next" style="font-size: 24px;"></button>
						<button type="button" role="presentation" class="owl-next" style="font-size: 24px;"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>
			</section>

			<!-- About us section -->

			<section class=" section-default border-0 m-3 mx-7 appear-animation " data-appear-animation="fadeIn"
				data-appear-animation-delay="750">
				<div class="container">
					<div class="row">
						<div class="col" id="border">
							<h2 class="colour font-weight-light">About
								Us</h2>
						</div>
					</div>
					<div class="row align-items-center shadow p-3 mb-5 bg-color-grey">
						<div class="col-md-3 appear-animation" data-appear-animation="fadeInLeftShorter"
							data-appear-animation-delay="1000">
							<div class="owl-carousel owl-theme nav-inside mb-0"
								data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/generic/aboutLogo.png">
								</div>

							</div>
						</div>
						<div class="col-md-9">
							<p class="appear-animation" data-appear-animation="fadeInUpShorter"
								data-appear-animation-delay="1400">Moinee Foundation is a non-government organization
								established in 2012, primarily working in the education sector through techno-social
								innovations. The foundation is closely working along with the Government Bodies,
								Educational Institutes (Schools/Colleges/Universities) and Local Communities.
							<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
								data-appear-animation-delay="1600">
								Since June 2020, the Foundation has expanded its functional scope to the health sector
								where it is working with the government towards innovative solutions for the current
								pandemic and technological scaling to improve health structure in rural, as well as deep
								rural areas.
							</p>
							<a href="about-us.php">Know more</a>
						</div>
					</div>
				</div>
			</section>

			<!-- Reach section -->
			<section class=" section-default border-0 m-3 my-5 appear-animation" data-appear-animation="fadeIn"
			data-appear-animation-delay="750">
			<div class="container ">
				<div class="row">
					<div class="col " id="border">
						<h2 class="colour font-weight-light">Reach and Impact</h2>
					</div>
				</div>
				<div class="row align-items-center mb-3 counters counters-sm bg-color-grey-scale-1 shadow p-3">
					<div class="col-lg-6">
						<div class="row align-items-center mb-3 counters counters-sm">
							<div class="col-sm-3 col-lg-4 mb-5 mb-lg-0">
								<div class="counter">
									<div class="img-fluid">
										<lottie-player src="lottiefiles/location-searching.json"
											background="transparent" speed="1" loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="11">0</strong>
									<label class="text-4 mt-1 text-color-success">States</label>
								</div>
							</div>
							<div class="col-sm-3 col-lg-4 mb-5 mb-lg-0">
								<div class="counter">

									<div class="img-fluid">
										<lottie-player src="lottiefiles/book-animation.json"
											background="transparent" speed="1" loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="150">0</strong>
									<label class="text-4 mt-1 text-color-success">e-Libraries</label>
								</div>
							</div>
							<div class="col-sm-3 col-lg-4 mb-5 mb-sm-0">
								<div class="counter">
									<div class="img-fluid">
										<lottie-player src="lottiefiles/school.json" background="transparent"
											speed="1" loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="1907">0</strong>
									<label class="text-4 mt-1 text-color-success">Schools</label>
								</div>
							</div>
						</div>
						<div class="row align-items-center mb-3 counters counters-sm">
							<div class="col-sm-3 col-lg-4 mb-5 mb-sm-0">
								<div class="counter">
									<div class="img-fluid">
										<lottie-player src="lottiefiles/medal.json" background="transparent"
											speed="1" loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="13300">0</strong>
									<label class="text-4 mt-1 text-color-success">Teachers trained</label>
								</div>
							</div>
							<div class="col-sm-3 col-lg-4 mb-5 mb-lg-0">
								<div class="counter">
									<div class="img-fluid">
										<lottie-player src="lottiefiles/clc.json" background="transparent" speed="1"
											loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="11">0</strong>
									<label class="text-4 mt-1 text-color-success">Community Learning Centres</label>
								</div>
							</div>
							<div class="col-sm-3 col-lg-4 mb-5 mb-sm-0">
								<div class="counter">
									<div class="img-fluid">
										<lottie-player src="lottiefiles/student.json" background="transparent"
											speed="1" loop autoplay>
										</lottie-player>
									</div>
									<strong class="text-color-success font-weight-extra-bold"
										data-to="750000">0</strong>
									<label class="text-4 mt-2 text-color-success">Student Beneficiaries</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 isotope-item ">
						<div class="portfolio-item">

							<span class=" thumb-info-lighten border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img class="lazy" src="img/Map of India.jpg" class="img-fluid border-radius-0" alt="">

									<lead  class="float-right">*Data updated till 31th March 2021</lead>
								</span>
							</span>
							</a>
						</div>
					</div>

				</div>

			</div>
		</section>



			<!-- key initaitives section -->

			<section class="section-default border-0 m-3 mb-7  appear-animation " data-appear-animation="fadeIn"
				data-appear-animation-delay="750" id="Initiatives">
				<div class="container mb-3">
					<div class="row">
						<div class="col" id="border" id="border">
							<h2 class="colour font-weight-light">Key Initiatives</h2>
						</div>
					</div>
					<div class="row align-items-center pt-3 bg-color-grey-scale-1 appear-animation shadow"
						data-appear-animation="fadeInLeftShorter">
						<div class=" col col-md-4  appear-animation" data-appear-animation="fadeInLeftShorter"
							data-appear-animation-delay="1000">
							<div class="owl-carousel owl-theme nav-inside mb-0"
								data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/projectUtkarsh.png">
								</div>
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-1.jpg">
								</div>
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-7.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-8 pl-md-5" style="text-align: justify;">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">PROJECT
									UTKARSH</strong>
							</h2>
							<p class="text-4">A mission to bring qualitative changes in government school education
								through technology, innovation, intervention and infrastructure improvement.
							</p>
							<a href="project_utkarsh.php">Know More....</a>
						</div>
					</div>
					<div class="row align-items-center pt-3 bg-color-grey appear-animation shadow"
						data-appear-animation="fadeInRightShorter">
						<div class="col-md-8 pl-md-5" style="text-align: justify;">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">COMMUNITY
									ENGAGEMENT PROGRAM</strong>
							</h2>
							<p class="text-4">An initiative for digital empowerment of communities
								through last mile delivery of e- Governance solutions and digital content with no
								dependency on
								internet (e-Gyankendra, e-Mitan, e-Vidyakendra, Gyanganga).
							</p>
							<!-- <a href="#">Know More....</a> -->
						</div>
						<div class=" col col-md-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter"
							data-appear-animation-delay="1000">
							<div class="owl-carousel owl-theme nav-inside mb-0"
								data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
								<!-- <div>
									<img class="lazy" alt="" class="img-fluid" src="img/Li.png">
								</div> -->
								
								<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" width="350" height="197"
								src="https://www.youtube.com/embed/zv2MAwTKEdU?autoplay=1&mute=1">
								
								</iframe>
								</div>

								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-2.jpg">
								</div>
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-5.jpg">
								</div>

							</div>
						</div>
					</div>
					<div class="row align-items-center pt-3 bg-color-grey-scale-1 appear-animation shadow"
						data-appear-animation="fadeInLeftShorter">
						<div class=" col col-md-4  appear-animation" data-appear-animation="fadeInLeftShorter"
							data-appear-animation-delay="1000">
							<div class="owl-carousel owl-theme nav-inside mb-0"
								data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/In.png">
								</div>
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-4.jpg">
								</div>
								<div>
									<img class="lazy" alt="" class="img-fluid" src="img/I-3.jpg">
								</div>

							</div>
						</div>
						<div class="col-md-8 pl-md-5" style="text-align: justify;">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">INDUSTRY
									ALIGNMENT PROGRAM</strong>
							</h2>
							<p class="text-4">An initiative to bridge the industry-academia gap by imparting relevant
								technical and soft skills which not only help in enhancing employability of the students
								but also addresses the challenges faced by industry in finding skilled and well-groomed
								employees.
							</p>
							<!-- <a href="#">Know More....</a> -->
						</div>
					</div>
					<div class="row align-items-center pt-3 bg-color-grey appear-animation shadow"
						data-appear-animation="fadeInRightShorter">
						<div class="col-md-9 pl-md-5" style="text-align: justify;">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Health
									Programs</strong>
							</h2>
							<p class="text-4">Foundation has expanded its domain scope to the health sector, where it is
								working with
								govt towards innovative solutions for the current pandemic and technological scaling for
								improving health
								infrastructure in rural areas.
							</p>
							<!-- <a href="#">Know More....</a> -->
						</div>
						<div class=" col col-md-3 pb-3 appear-animation" data-appear-animation="fadeInRightShorter"
							data-appear-animation-delay="1000">
							<div class="img-fluid">
								<lottie-player src="lottiefiles/medical.json" background="transparent"
									style="width: 200px; height: 200px;" speed="1" loop autoplay>
								</lottie-player>
							</div>
						</div>
					</div>
				</div>
			</section>




			<!--<div class="container py-2">
				<div class="row flex justify-content-center">
					<div class=" col-lg-6 mb-4 mb-lg-0">
						<div class="col mt-4" id="border">
							<h2 class="colour font-weight-light">Recents</h2>
						</div>
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-borders shadow">
							<iframe
								src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmoineefoundation&tabs=timeline&width=500&height=380&small_header=true&adapt_container_width=false&hide_cover=true&show_facepile=true&appId"
								width="500" height="380" style="border:none;overflow:hidden" scrolling="no"
								frameborder="0" allowfullscreen="true"
								allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="col mt-4" id="border">
							<h2 class="colour font-weight-light">Video Links</h2>
						</div>
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-borders shadow">
							<iframe frameborder="0" allowfullscreen=""
								src="https://www.youtube.com/embed/sFcMKgytbYM"></iframe>
						</div>
					</div>
				</div>
			</div>-->

			<div class="divider divider-style-3 divider-primary taller">
				<i class="fas fa-chevron-down"></i>
			</div>

			<section class=" section-default border-0  mx-7 appear-animation " data-appear-animation="fadeIn"
				data-appear-animation-delay="750">
				<div class="container ">
					<div class="row">
						<div class="col" id="border">
							<h2 class="colour font-weight-light">Our Testimonials</h2>
						</div>
					</div>
					<div class="row align-items-center shadow p-3 mb-5 bg-color-grey-scale-1">
						<div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0"
							data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true,'autoplay': true, 'autoplayTimeout': 4000, 'dots': false}">
							<div>
								<div class="col">
									<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
										<div class="testimonial-author">
											<img class="lazy" src="img/clients/client-1.jpg" class="img-fluid" alt="">
										</div>
										<blockquote>
											<p> आज के कम्प्युटर युग मे बच्चों को कम्प्युटर से पढ़ाई करवाने से उनको
												पढ़ाई
												मे काफी सहायता मिलेगी एवं students और अधिक गहराई से Subjects को समझ
												पायेंगे</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="text-2 opacity-10">श्रीमती अरुणा वर्मा</strong></p>
											<p><strong class="text-2 opacity-10">शिक्षिका - जी.जी.आई.सी.-पंतनगर
													(उत्तराखंड)</strong></p>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="col">
									<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
										<div class="testimonial-author">
											<img class="lazy" src="img/clients/CLI.png" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p>हमें Quizacademy पर पढ़ाई करना बहुत रोचक लगा और हम चाहते हैं कि आगे भी
												हमारे सारे विषय इस तरह ही पढ़ाये जाए। इसके लिये आपको धन्यवाद ।
											</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="text-2 opacity-10">आकांक्षा सिंह</strong></p>
											<p><strong class="text-2 opacity-10">जी.जी.आई.सी.-पंतनगर
													(उत्तराखंड)</strong></p>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="col">
									<div class=" testimonial testimonial-style-2 testimonial-with-quotes mb-0">
										<div class="testimonial-author">
											<img class="lazy" src="img/clients/client-2.jpg" class="img-fluid rounded-circle" alt="">
										</div>
										<blockquote>
											<p>सर, हमारे स्कूल में क़्विज अकेडमी 20 टेबलेट, 2-लेपटोप, 12-कम्प्यूटर मे
												चल
												रहा हैं। हम रोज अभ्यास करते है, हमारे सर हमे प्रोजेक्टर पर पढ़ाते
												हैं। हम
												रोज 2-घंटे प्रोजेक्टर पर पढ़ते हैं । हमें 10 वीं मे भी इस पे ही
												पढ़ाना।
											</p>
										</blockquote>
										<div class="testimonial-author">
											<p><strong class="text-2 opacity-10">ऱिना सेन</strong></p>
											<p><strong class="text-2 opacity-10">गुडली स्कूल</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<div class="divider divider-style-3 divider-primary taller">
				<i class="fas fa-chevron-down"></i>
			</div>

			<!-- other Websites section -->

			<!-- <div class="row">
					<div class="col" id = "border">
						<h2 class="colour">Other Websites</h2>
					</div>
				</div>
				<div class="row m-3">
					<div class="col-sm-6 col-lg-3 ">
						<div class="portfolio-item">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-lighten border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<img class="lazy" src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Quiz Academy</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 ">
						<div class="portfolio-item">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-lighten border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<img class="lazy" src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Utkarsh</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 ">
						<div class="portfolio-item">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-lighten border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<img class="lazy" src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">School in a box</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3 ">
						<div class="portfolio-item">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-lighten border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<img class="lazy" src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Download links</span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div> -->

			<!-- Partners -->

			<div class="container py-2">
				<div class="row mx-2" id="partners">
					<div class="col">
						<div class="row" id="border">
							<div class="col-lg-6">
								<h2 class="word-rotator slide font-weight-light text-8 mt-2">
									<span>Our</span>
									<span class="word-rotator-words font-weight-light"
										style="background-color: #e36159; color: #fff;">
										<b class="is-visible">Partnerships</b>
										<b>Associations</b>
									</span>
									<span> and Support</span>
								</h2>
							</div>
							<div class="col-lg-6">
								<div class="row justify-content-end mt-3">
									<button type="button" id="btn" value="show" class="btn btn-link"
										onclick="toggleDiv()">Show
										All</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="slider">
					<div class="col">
						<div class="owl-carousel owl-theme show-nav-title" id="carousel"
							data-plugin-options="{'animateOut': 'fadeOut' 'nav': true}">
							<div>
								<img class="lazy" alt="vodafone" class="img-fluid rounded" src="img/logos/2.jpg">
							</div>

							<div>
								<img class="lazy" alt="tatamotors" class="img-fluid rounded" src="img/logos/1.jpg">
							</div>

							<div>
								<img class="lazy" alt="shreecement" class="img-fluid rounded" src="img/logos/17.jpg">
							</div>
							<div>
								<img class="lazy" alt="hdfc" class="img-fluid rounded" src="img/logos/3.jpg">
							</div>
							<div>
								<img class="lazy" alt="adityabirla" class="img-fluid rounded" src="img/logos/4.jpg">
							</div>
							<div>
								<img class="lazy" alt="vedanta" class="img-fluid rounded" src="img/logos/16.jpg">
							</div>
							<div>
								<img class="lazy" alt="hgInfra" class="img-fluid rounded" src="img/logos/21.jpg">
							</div>
							<div>
								<img class="lazy" alt="centralsquare" class="img-fluid rounded" src="img/logos/19.jpg">
							</div>
							<div>
								<img class="lazy" alt="agrasen" class="img-fluid rounded" src="img/logos/22.jpg">
							</div>
							<div>
								<img class="lazy" alt="adapty" class="img-fluid rounded" src="img/logos/13.jpg">
							</div>

							<div>
								<img class="lazy" alt="Asdc" class="img-fluid rounded" src="img/logos/20.jpg">
							</div>
							<div>
								<img class="lazy" alt="rotary" class="img-fluid rounded" src="img/logos/23.jpg">
							</div>
							<div>
								<img class="lazy" alt="education" class="img-fluid rounded" src="img/logos/7.jpg">
							</div>
							<div>
								<img class="lazy" alt="tiss" class="img-fluid rounded" src="img/logos/8.jpg">
							</div>
							<div>
								<img class="lazy" alt="" class="img-fluid rounded" src="img/logos/9.jpg">
							</div>
							<div>
								<img class="lazy" alt="uttarakahnd" class="img-fluid rounded" src="img/logos/10.jpg">
							</div>
							<div>
								<img class="lazy" alt="kota" class="img-fluid rounded" src="img/logos/11.jpg">
							</div>
							<div>
								<img class="lazy" alt="" class="img-fluid rounded" src="img/logos/12.jpg">
							</div>

							<div>
								<img class="lazy" alt="dantewada" class="img-fluid rounded" src="img/logos/14.jpg">
							</div>
							<div>
								<img class="lazy" alt="omserver" class="img-fluid rounded" src="img/logos/15.jpg">
							</div>
							<div>
								<img class="lazy" alt="moineesystems" class="img-fluid rounded" src="img/logos/18.jpg">
							</div>
							<div>
								<img class="lazy" alt="kalisindh" class="img-fluid rounded" src="img/logos/6.jpg">
							</div>
							<div>
								<img class="lazy" alt="chabbra" class="img-fluid rounded" src="img/logos/5.jpg">
							</div>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center" id="allclients" style="display: none;">
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="vodafone" class="img-fluid rounded" src="img/logos/2.jpg">
					</div>

					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="tatamotors" class="img-fluid rounded" src="img/logos/1.jpg">
					</div>

					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="shreecement" class="img-fluid rounded" src="img/logos/17.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="hdfc" class="img-fluid rounded" src="img/logos/3.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="adityabirla" class="img-fluid rounded" src="img/logos/4.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="vedanta" class="img-fluid rounded" src="img/logos/16.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="hgInfra" class="img-fluid rounded" src="img/logos/21.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="centralsquare" class="img-fluid rounded" src="img/logos/19.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="agrasen" class="img-fluid rounded" src="img/logos/22.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="adapty" class="img-fluid rounded" src="img/logos/13.jpg">
					</div>

					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="Asdc" class="img-fluid rounded" src="img/logos/20.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="rotary" class="img-fluid rounded" src="img/logos/23.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="education" class="img-fluid rounded" src="img/logos/7.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="tiss" class="img-fluid rounded" src="img/logos/8.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="" class="img-fluid rounded" src="img/logos/9.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="uttarakahnd" class="img-fluid rounded" src="img/logos/10.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="kota" class="img-fluid rounded" src="img/logos/11.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="" class="img-fluid rounded" src="img/logos/12.jpg">
					</div>

					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="dantewada" class="img-fluid rounded" src="img/logos/14.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="omserver" class="img-fluid rounded" src="img/logos/15.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="moineesystems" class="img-fluid rounded" src="img/logos/18.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="kalisindh" class="img-fluid rounded" src="img/logos/6.jpg">
					</div>
					<div class="col-sm-2 col-lg-2">
						<img class="lazy" alt="chabbra" class="img-fluid rounded" src="img/logos/5.jpg">
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer Section Start -->
	<?php
	 include ('footer.php');
	 ?>
	 
	<!-- Footer Section End -->
	</div>

	<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="top:6rem" >
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Vodafone Idea Foundation - Ek Pahal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					
        </div>
        <div class="modal-body" id="yt-player">
      <!-- <iframe src="https://www.youtube.com/embed/uVGQp_QMX8s" allowfullscreen="" frameborder="0" height="325" width="100%"></iframe>	     -->
				<iframe  src="https://www.youtube.com/embed/zv2MAwTKEdU" width="100%" height="360" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  

<!-- <script type="text/javascript">
    $('#myModal').on('hidden.bs.modal', function () {
        callPlayer('yt-player', 'stopVideo');
    });
</script> -->


	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
<!--	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="vendor/popper/umd/popper.min.js"></script>-->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>-->
	<script src="vendor/lazysizes/lazysizes.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<!--<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/jquery.vide.min.js"></script>
	<script src="vendor/vivus/vivus.min.js"></script>-->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery-serialize-object/2.5.0/jquery.serialize-object.min.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>




	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<script src="js/examples/examples.carousels.js"></script>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->
    <script>
         $(function() {
        $('.lazy').Lazy();
    });
    </script>

	<!-- Modal Script -->
	<script>
				function showVideo()
				{
						$('#myModal').modal('show');
				}
				$("#myModal").on('hidden.bs.modal', function (e) {
			$("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
	});
		</script>



	<script>

		var mymap = L.map('mapid').setView([26.965239147399604, 75.78124745949123], 15);
		L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			attribution: '&copy; <a href="https://moinee.org" target="_blank">Moinee Foundation 2021</a>'
		}).addTo(mymap);
		// L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		// 	attribution: '&copy; <a href="https://moinee.org" target="_blank">Moinee Foundation 2021</a>'
		// }).addTo(mymap);
		var marker = L.marker([26.965239147399604, 75.78124745949123]).addTo(mymap);
		marker.bindPopup("<b>Moinee Foundation</b><br>G-36 Citystar, Central Spine<br>Vidyadhar Nagar, Jaipur<br>PIN - 302039 India").openPopup();

	</script>
	<script>
		$("#contactForm").submit(function (e) {
			e.preventDefault();
		});
	</script>
	<script>
		(function () {
			var $form = $('form#contactForm'), url = 'https://script.google.com/a/moinee.org/macros/s/AKfycbw28qQQoEbfOP5f7ov7NOeB-EZpwzyQYVdHAUsNHw/exec';
			//  $('#submit-form').on('click', function(e) {
			$('#contactForm').submit(function (e) {
				e.preventDefault();
				var jqxhr = $.ajax({
					url: url,
					method: "GET",
					dataType: "json",
					data: $form.serializeObject(),
					success: function (data) {
						//console.log(data);
						$("#successMsg").attr('class', 'contact-form-success alert alert-success d-block mt-4');
						$('#contactForm')[0].reset();
					}
				});
			});
		})();
	</script>
	<script>


		// function show(param_div_id) {
		// 	document.getElementById('slider').innerHTML = document.getElementById(param_div_id).innerHTML;
		// }
		function toggleDiv() {
			var sliderDiv = $('#slider');
			var allclientsDiv = $('#allclients');
			sliderDiv.toggle();
			allclientsDiv.toggle();
		}
	</script>


</body>

</html>
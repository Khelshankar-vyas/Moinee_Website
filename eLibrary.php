<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>eLibrary</title>

    <meta name="description"
        content="Moinee Foundation (www.moinee.org) is an educational trust with the objective of “Right to Quality Education”. It has build specialization in Industry Alignment Program, Employability Assessments and Quiz Based Learning System through Quiz Academy.">
    <meta name="keywords"
        content="Education, Moinee, Foundation, Project Utkarsh, Education, Quality in Education, Industry Alignment Program, Quiz based learning system" />
    <meta name="author" content="Moinee Foundation">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="favicon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

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

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">


    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <!-- lottie-player -->

    <script src="js/loader.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

</head>
<style>
    @media (orientation: landscape) {
        .col-lg-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 12.666667%;
        }
    }

    @media (orientation: portrait) {
        .col-lg-2 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        #arrow1 {
            display: none;
        }

        #arrow2 {
            display: none;
        }

        #arrow3 {
            display: none;
        }

        #arrow4 {
            display: none;
        }
    }
</style>

<body class="loading-overlay-showing" data-loading-overlay
    data-plugin-options="{'hideDelay': 500, 'effect': 'floatBars'}">
    <div class="loading-overlay" id="loader">
        <div class="bounce-loader">
            <lottie-player src="lottiefiles/loading.json" background="transparent" speed="1" loop autoplay>
            </lottie-player>
        </div>
    </div>

    <div class="body">
        <!-- Header Section Start -->

	<?php
	 include ('header.php');
	 ?>
	<!-- Header Section End -->
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  mb-0">
                <div class="container-fluid">
                    <div class="row align-items-center">



                        <div class="col">
                            <div class="row">
                                <div class="col-md-12 align-self-center p-static order-2 text-center">
                                    <div class="overflow-hidden pb-2">
                                        <h1 class="text-dark font-weight-bold text-9 appear-animation"
                                            data-appear-animation="maskUp" data-appear-animation-delay="100">e-Library
                                            </h2>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <section class=" section-default border-0 m-3 mx-7 appear-animation " data-appear-animation="fadeIn"
                data-appear-animation-delay="750">
                <div class="container">
                    <div class="row">
                        <div class="col" id="border">
                            <h2 class="colour font-weight-light">About
                                Project</h2>
                        </div>
                    </div>
                    <div class="row align-items-center shadow p-3 mb-5 bg-color-grey">
                        <div class="col-md-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="1000">
                            <div class="owl-carousel owl-theme nav-inside mb-0"
                                data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                                <div>
                                    <img alt="" class="img-fluid" src="img/elib.png">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="1400">In the present era of
                                digitization, relevance where the importance of the internet cannot be underrated but
                                affordability, availability, security and consistency is also a key aspect. Our solution
                                of
                                Smart Knowledge
                                server based offline Community e-Library is an effort to empower communities with
                                Digital
                                Learning by
                                providing them free access to the best open source digital content and open paths for
                                Digital Value Added
                                Services (VAS).
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-4">
                <div class="row">
                    <div class="col" id="border">
                        <h2 class="colour font-weight-light">Key Activities</h2>
                    </div>
                </div>
                <div class="row align-items-center shadow p-3  bg-color-grey-scale-1 counters counters-sm">

                    <div class="col-sm-12 col-lg-2 mb-5 mb-lg-0">

                        <div class="counter">

                            <div class="img-fluid">
                                <lottie-player src="lottiefiles/analysis3.json" background="transparent" speed="1" loop
                                    autoplay>
                                </lottie-player>
                            </div>


                            <label class="text-4 mt-1 text-color-success">Location Study & Analysis</label>
                        </div>

                    </div>
                    <div class="col-sm-12 col-lg-1 mb-5 mb-lg-0" id="arrow1">
                        <div class="img-fluid">
                            <lottie-player src="lottiefiles/arrow.json" background="transparent" speed="1" loop autoplay
                                style="width: 50px; height: 50px;">
                            </lottie-player>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-5 mb-lg-0">
                        <div class="counter">
                            <div class="img-fluid">
                                <lottie-player src="lottiefiles/install.json" background="transparent" speed="1" loop
                                    autoplay>
                                </lottie-player>
                            </div>
                            <label class="text-4 mt-1 text-color-success">Installation Of Smart Knowledge Server</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 mb-5 mb-lg-0" id="arrow2">
                        <div class="img-fluid">
                            <lottie-player src="lottiefiles/arrow.json" background="transparent" speed="1" loop autoplay
                                style="width: 50px; height: 50px;">
                            </lottie-player>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-5 mb-lg-0">
                        <div class="counter">

                            <div class="img-fluid">
                                <lottie-player src="lottiefiles/customization.json" background="transparent" speed="1"
                                    loop autoplay>
                                </lottie-player>
                            </div>

                            <label class="text-4 mt-1 text-color-success">Customization & Configuration</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 mb-5 mb-lg-0" id="arrow3">
                        <div class="img-fluid">
                            <lottie-player src="lottiefiles/arrow.json" background="transparent" speed="1" loop autoplay
                                style="width: 50px; height: 50px;">
                            </lottie-player>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-5 mb-lg-0">
                        <div class="counter">

                            <div class="img-fluid">
                                <lottie-player src="lottiefiles/wifi.json" background="transparent" speed="1" loop
                                    autoplay>
                                </lottie-player>
                            </div>
                            <label class="text-4 mt-1 text-color-success">Wifi Setup & Training</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 mb-5 mb-lg-0" id="arrow4">
                        <div class="img-fluid">
                            <lottie-player src="lottiefiles/arrow.json" background="transparent" speed="1" loop autoplay
                                style="width: 50px; height: 50px;">
                            </lottie-player>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 mb-5 mb-lg-0">
                        <div class="counter">

                            <div class="img-fluid">
                                <lottie-player src="lottiefiles/training.json" background="transparent" speed="1" loop
                                    autoplay>
                                </lottie-player>
                            </div>
                            <label class="text-4 mt-1 text-color-success">Training & Continuous Monitoring</label>
                        </div>
                    </div>

                </div>
                <div class="divider divider-style-3 divider-primary taller">
                    <i class="fas fa-chevron-down"></i>
                </div>

                <div id="revolutionSliderCarouselContainer" class="rev_slider_wrapper fullwidthbanner-container mb-4"
                    data-alias="" style="background: #f3f3f2; height: 400px;">
                    <div id="revolutionSliderCarousel" class="rev_slider fullwidthabanner" data-version="5.4.8"
                        style="height: 200px;">
                        <ul>
                            <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                data-title="" data-description="">
                                <img src="img/projectUtkarsh/44.jpg" alt="" data-bgposition="center center"
                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <li data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                data-title="" data-description="">
                                <img src="img/projectUtkarsh/54.jpeg" alt="" data-bgposition="center center"
                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                data-title="" data-description="">
                                <img src="img/projectUtkarsh/55.jpeg" alt="" data-bgposition="center center"
                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                data-title="" data-description="">
                                <img src="img/projectUtkarsh/56.jpeg" alt="" data-bgposition="center center"
                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>
                            <li data-index="rs-3" data-transition="fade" data-slotamount="7" data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                data-title="" data-description="">
                                <img src="img/projectUtkarsh/57.jpeg" alt="" data-bgposition="center center"
                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            </li>



                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="row">
                            <div class="col pb-4">
                                <div class="col" id="border">
                                    <h2 class="colour font-weight-light">Our Coverage</h2>
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe frameborder="0" allowfullscreen="" src="moineeCoverage/index.html"></iframe>
                                </div>

                                <hr class="solid my-5">



                            </div>
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

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>


    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>



    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.portfolio.js"></script>
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

</body>

</html>
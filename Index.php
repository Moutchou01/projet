<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>JURSE 2025</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/jurcelogo.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/jurcelogo.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CTangerine:400,700&display=swap" rel="stylesheet" type="text/css">

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

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-wedding.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-wedding.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

	</head>
	<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
	<?php
                       $serveur = "localhost";
                      $utilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "laravel"; // Vérifie le nom de la base de données
    
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
	

    
    if ($connexion->connect_error) {
       die("La connexion a échoué : " . mysqli_error($connexion));
    }
    
    ?>
		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 94, 'stickySetTop': '-94px'}">
				<div class="header-body border-0">
					<div class="header-container container-fluid py-0 py-lg-4">
						<div class="header-row">
							<div class="header-column justify-content-start justify-content-lg-center">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html" class="text-decoration-none">
											<span class="custom-logo text-color-primary ps-2 ps-sm-0">Jurse 2025</span>
											
											
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-top-border">
						<div class="header-container container-fluid">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav p-0">
											<div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 justify-content-lg-center">
												<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-2 header-nav-main-sub-effect-1">
													<nav class="collapse">
														<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
															<li>
																<a class="nav-link active" href="#home" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Home
																</a>
															</li>
															<li>
																<a class="nav-link" href="#dates" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	PRESENTATION
																</a>
															</li>
															
															<li>
																<a class="nav-link" href="#the-wedding" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	PARTICIPATION
																</a>
															</li>
															
															<li>
																<a class="nav-link" href="#photos" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	 VIDEOS & PHOTOS
																</a>
															</li>
															
															<li>
																<a class="nav-link" href="#blog" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																    SPONSORS
																</a>
															</li>
															<li>
																<a class="nav-link" href="#guestbook" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	CONTACT
																</a>
															</li>
															<li>
																<a class="nav-link" href="#rsvp" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	DATES
																</a>
															</li>
															<li>
																<a class="nav-link" href="#gifts" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	VENUE
																</a>
															</li>
														</ul>
													</nav>
												</div>
												<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
													<i class="fas fa-bars"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			<div role="main" class="main">

				<div id="home" class="slider-container light rev_slider_wrapper" style="min-height: 773px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fadeIn">       

								<img src="img/demos/wedding/slider/avenue.jpg" 
									alt=""
									data-bgposition="center center" 
									data-kenburns="on"
									data-duration="30000"
									data-ease="Linear.easeNone"
									data-scalestart="140"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="3"
									class="rev-slidebg"
									data-no-retina>							

								<div class="tp-caption tp-caption-custom-1 tp-resizeme" 
									data-x="['left','left','left','left']"
									data-hoffset="['50','50','50','50']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['430','430','430','430']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										
								</div>

								<div class="tp-caption tp-caption-custom-2 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['200','200','200','105']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										
                                   Tunisia
								   
								   					
					
								</div>

								<div class="tp-caption text-uppercase text-color-light font-weight-bold positive-ls-3 tp-caption-custom-3 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['50','50','50','50']" 
									data-fontsize="['16','16','16','13']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										
                                  JOINT URBAN REMOTE SENSING EVENT
										<span class="tp-caption-custom-3-el-1">5-7 May 2025</span>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
									data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
									data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 8;">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7" 
									data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
									data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on"
									style="z-index: 9;">
										<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-4" 
									data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
									data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 10;">
										<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-6" 
									data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
									data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 11;">
										<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina> 
										</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div id="dates" class="content bg-light overflow-hidden p-relative">
					
					
					<div class="container position-relative z-index-1 py-5 mb-3">
						
						<div class="row justify-content-center justify-content-lg-around">
							<div class="col-sm-8 col-md-9 col-lg-4 text-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/karim.jpg" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Karim Ben Romdhane</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/nesrine.jpg" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Nesrine Chehata</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/Riadh-Abdelfattah.png" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Riadh Abdelfattah</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/leila.jpg" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Leila Nasraoui</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/Habib-M-Kammoun.png" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Habib Kammoun</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="img/demos/wedding/photos/rim.jpg" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-2 text-color-primary d-block">Rim Barrak</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3"></span>

								<p class="d-block text-3 pt-3"></p>

								
							</div>
						</div>

					</div>

				

					<section class="parallax section section-text-light section-parallax overlay overlay-color-primary overlay-show overlay-op-8 section-center m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/wedding/backgrounds/bg-3.jpg">
						<div class="container">
							<div class="row justify-content-center mt-5 mb-5 pt-1 pb-4">
								<div class="col-lg-8">
									<h2 class="custom-font-1 custom-font-size-1 line-height-1 ls-0 pt-5 pb-3 mb-0">jurse 2025</h2>
									<div class="countdown countdown-light custom-countdown-1 px-lg-5 pt-3" data-plugin-countdown data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2023/01/01 12:00:00', 'textDay': 'DAYS', 'textHour': 'HOURS', 'textMin': 'MINUTES', 'textSec': 'SECONDS'}"></div>
								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="the-wedding">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Program</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"> </p>
								</div>
							</div>

							
							<div class="row justify-content-center justify-content-lg-around p-relative z-index-1 pt-4 mt-2">
								<div class="col-sm-8 col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
									

									<div class="text-center">
										<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0 mt-5 mb-2">First Day</h2>
										<p class="text-uppercase font-weight-semibold text-3 positive-ls-2 mb-0">MONDAY, 05 MAY 2025</p>
										<p class="text-uppercase font-weight-medium text-2 positive-ls-3 opacity-9 mb-2">08:30  - 19:00 </p>
									</div>

									<hr>

									<div class="row align-items-center">
										<div class="col-9 text-start">
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">08:30-09:00**Registration</p>
											<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">10:30-11:00 ** Break<br>12:30-14:00 ** Lunch <br> 15:30-16:00 ** Break </p>
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">18:30-19:00**Registration</p>
										</div>
										
									</div>

									<hr>

									<p class="text-3 font-weight-light"></p>

								</div>
								
								<div class="row justify-content-center justify-content-lg-around p-relative z-index-1 pt-4 mt-2">
									<div class="col-sm-8 col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
										
	
										<div class="text-center">
											<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0 mt-5 mb-2">Second Day</h2>
											<p class="text-uppercase font-weight-semibold text-3 positive-ls-2 mb-0">TUESDAY, 06 MAY 2025</p>
											<p class="text-uppercase font-weight-medium text-2 positive-ls-3 opacity-9 mb-2">08:30 - 19:00</p>
										</div>
	
										<hr>
	
										<div class="row align-items-center">
											
												<div class="col-9 text-start">
													<p class="font-weight-bold text-color-primary text-4-5 mb-0">08:30-09:00**Registration</p>
													<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">10:30-11:00 ** Break<br>12:30-14:00 ** Lunch <br> 15:30-16:00 ** Break </p>
													<p class="font-weight-bold text-color-primary text-4-5 mb-0">17:15-19:00**Cultural Tour</p>
												</div>
												
											
											
										</div>
	
										<hr>
	
										<p class="text-3 font-weight-light"></p>
	
									</div>
								<div class="col-sm-8 col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
									

									<div class="text-center">
										<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0 mt-5 mb-2">Third Day</h2>
										<p class="text-uppercase font-weight-semibold text-3 positive-ls-2 mb-0">Wednesday, 07 MAY 2025</p>
										<p class="text-uppercase font-weight-medium text-2 positive-ls-3 opacity-9 mb-2">08:30 - 22:00</p>
									</div>

									<hr>

									<div class="row align-items-center">
										<div class="col-9 text-start">
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">08:30-09:00**Registration</p>
											<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">10:30-11:00 ** Break<br>12:30-14:00 ** Lunch <br> 15:30-16:00 ** Break </p>
											<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">18:00-19:00**Visit</p><br>
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">19:00-22:00**Gala Dinner</p>
										</div>
										
									</div>

									<hr>

									

								</div>
							</div>

						</div>

						<p class="custom-text-1">JURSE 2025</p>
					</section>

					<section class="parallax section section-text-light section-parallax overlay overlay-color-primary overlay-show overlay-op-8 section-center m-0 p-relative z-index-1" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/wedding/backgrounds/Circuit-Grand-sud-sahara-douz-9-1.jpg">
						<div class="container">
							<div class="row justify-content-center mt-5 mb-5 pt-1 pb-4">
								<div class="col-lg-8 text-color-light py-5">

									<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
										<blockquote>
											<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">JURSE is an excellent opportunity for meeting researchers, practitioners and students in urban remote sensing. This event introduces new methodologies and technological resources to investigate urban environments through orbital and airborne remote sensing.</p>
										</blockquote>
										<div class="testimonial-author">
											<strong class="text-color-light custom-font-1 custom-font-size-2 opacity-10">Jurse</strong>
											<p class="d-block positive-ls-3 text-uppercase text-2 pt-3 mb-0">2025</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>
		
					<div id="ourHistoryLightbox" class="mfp-hide">
						<div class="thumb-gallery">
						
	
					   </div>
							<div class="owl-carousel owl-theme manual thumb-gallery-thumbs show-thumbs mt" id="thumbGalleryThumbs">
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="img/demos/wedding/photos/photo-8-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="img/demos/wedding/photos/photo-9-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="img/demos/wedding/photos/photo-10-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="img/demos/wedding/photos/photo-11-thumb.jpg" class="img-fluid">
									</span>
								</div>
							</div>
						
					</div>
					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="photos">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"> Photos & Vidéos</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400"> </p>
								</div>
							</div>
					   <div>
					    <button class="fleche-defilement" id="fleche-defilement-prev">
                             &#8249;
                        </button>
                        <button class="fleche-defilement" id="fleche-defilement-next">
                           &#8250;
                        </button>
                     <div id="slideshow-container" class="slideshow-container"  style="margin-padding:0px;margin-bottom: 60px;">
                      <?php
                       $requete = "SELECT path FROM galerie_1";
                        $resultat = $connexion->query($requete);

                        foreach ($resultat as $row) {
                         echo '<img src="' . $row['path'] . '" width="350px" height="350px" class="slideshow-container">';
                          }

                         if ($resultat->num_rows === 0) {
                           echo "Aucun résultat trouvé.";
                         }
                         ?>
                     </div>
						</div>
					</section>		 

					<section class="section bg-primary border-0 pb-0 mb-0 text-color-light p-relative overflow-hidden" id="guestbook">
						<div class="container py-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-light ls-0">Contact</h2>
									<p class="text-3-5 font-weight-light text-color-light opacity-7"> </p>
								</div>
							</div>
							<div class="row justify-content-center py-3">
								<div class="col-lg-6 mb-5 mb-lg-0">

									<form class="contact-form form-style-4 form-style-4-text-light form-style-4-border-light" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="row">
											<div class="form-group col-lg-6">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
											</div>
											<div class="form-group col-lg-6">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control text-3 h-auto py-2" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="row">
											<div class="form-group col pt-3">
												<input type="submit" value="Submit Form" class="btn btn-light text-color-primary border-0 font-weight-semibold text-uppercase px-5 py-3" data-loading-text="Loading...">
											</div>
										</div>
									</form>

								</div>
								<div class="col-lg-6">

									<div class="owl-carousel owl-theme nav-bottom" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
												<blockquote>
													<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0"></p>
												</blockquote>
												<div class="testimonial-author pb-3">
													<strong class="text-color-light custom-font-1 custom-font-size-3 opacity-10">Contact Person</strong>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
												<blockquote>
													<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">Ramada Plaza by Wyndham Tunis, Les Cotes De Cathage, Gammarth</p>
												</blockquote>
												<div class="testimonial-author pb-3">
													<strong class="text-color-light custom-font-1 custom-font-size-3 opacity-10">Location</strong>
												</div>
											</div>
										</div>
										<div>
										
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="blog">
						<div class="container pt-2 pb-5">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Sponsors</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">The following organizations are supporting us: </p>
								</div>
							</div>
							<div class="row justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
								<div class="col-sm-8 col-md-6 col-lg-4 mb-4 mb-lg-0">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													
												</div>
												<img src="img/demos/wedding/blog/ieee.png" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2"></span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">IEEE</h3>
												<p class="mb-2"> IEEE and its members inspire a global community through highly cited publications, conferences, technology standards, and professional and educational activities, envisioning a sustainable future.</p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													
												</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-sm-8 col-md-6 col-lg-4 mb-4 mb-lg-0">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													
												</div>
												<img src="img/demos/wedding/blog/supcom.png" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2"></span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">SUP'COM</h3>
												<p class="mb-2">As a school of national elites, Sup’Com evenly benefits from the tutelage of both, the Ministry of Higher Education and Scientific Researchand the Ministry of Information and Communication Technology. </p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													
												</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-sm-8 col-md-6 col-lg-4">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													
												</div>
												<img src="img/demos/wedding/blog/ageos.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2"></span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">AGEOS</h3>
												<p class="mb-2"> African Association for Geospatial Development, published at JORT on 03 November 2016.
													AGEOS brings together active actors in the field of Geospatial: Academics, students and professionals from the private and public sectors. </p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													
												</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						
					</section>

					<section class="section bg-color-secondary border-0 pb-0 mb-0 p-relative overflow-hidden" id="rsvp">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-light p-relative ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Dates</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">T</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Special Sessions Proposal Deadline
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Open submission Website
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Papers Submission Deadline
										</div>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Acceptance Notification
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Open Registration Website
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Early Registration Deadline
										</div>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Camera-ready Deadline
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
									<a href="" class="text-decoration-none">
										<div class=" service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Satellite Events
										</div>
									</a>
								</div>
								<div class="col-xl-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
									<a href="" class="text-decoration-none">
										<div class="service-card mb-4 bg-color-primary bg-color-hover-dark w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
											Main Conference ** 05-07 May 2025
										</div>
									</a>
								</div>
							</div>
						</section>


					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="gifts">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0">Proposed hotels for your accommodation during the JURSE 2025 conference</h2>
									<p class="text-3-5 font-weight-light">Ramada Plaza Hotel Tunis has a number of rooms to choose from. Hotel rooms are available in different room categories and delegate prices at special rates.
									</p>
								</div>
							</div>
							<div class="row align-items-center text-center pt-5 pb-3">
								
								<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
									<img src="img/demos/wedding/photos/1.jpg" alt class="img-fluid" style="max-width: 160px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
									<img src="img/demos/wedding/photos/2.jpg" alt class="img-fluid" style="max-width: 160px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
									<img src="img/demos/wedding/photos/3.jpg" alt class="img-fluid" style="max-width: 160px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
									<img src="img/demos/wedding/photos/4.jpg" alt class="img-fluid" style="max-width: 160px;" />
								</div>
								<div class="col-sm-4 col-lg-2">
									<img src="img/demos/wedding/photos/5.jpg" alt class="img-fluid" style="max-width: 200px;" />
								</div>
							</div>
						</div>
					</section>

				</div>

				<div class="slider-container light rev_slider_wrapper" style="min-height: 570px;" data-remove-min-height>
					<div id="revolutionSlider2" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fadeIn">       

								<img src="img/demos/wedding/slider/tunisia.jpg" 
									alt=""
									data-bgposition="center center" 
									data-kenburns="on"
									data-duration="30000"
									data-ease="Linear.easeNone"
									data-scalestart="140"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="3"
									class="rev-slidebg"
									data-no-retina>							

								<div class="tp-caption tp-caption-custom-1 tp-resizeme" 
									data-x="['left','left','left','left']"
									data-hoffset="['50','50','50','50']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['430','430','430','430']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										
								</div>

								<div class="tp-caption tp-caption-custom-2 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['200','200','200','105']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										Tunisia
								</div>

								<div class="tp-caption text-uppercase text-color-light font-weight-bold positive-ls-3 tp-caption-custom-3 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['50','50','50','50']" 
									data-fontsize="['16','16','16','13']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
									JOINT URBAN REMOTE SENSING EVENT
										<span class="tp-caption-custom-3-el-1">5-7 May 2025</span>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
									data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
									data-y="['top','top','top','top']" data-voffset="['332','332','332','332']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 8;">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7" 
									data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
									data-y="['top','top','top','top']" data-voffset="['187','187','187','187']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on"
									style="z-index: 9;">
										<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-4" 
									data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
									data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 10;">
										<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-6" 
									data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
									data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 11;">
										<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%">
											<img src="img/demos/wedding/elements/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina> 
										</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Revolution Slider Scripts -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-wedding.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>

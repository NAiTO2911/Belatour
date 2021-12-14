<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<!-- Stylesheets
	============================================= -->
	<link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i|Open+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cairo:400,400i,700,700i&subset=arabic" rel="stylesheet">
	<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>BelaTour</title>

</head>

<body>

	<div id="scroll-progress"><span class="scroll-percent"></span></div>

	<!-- Website Loading
	============================================= -->	
	<div id="website-loading">
		<div class="loader">
			<div class="la-ball-scale la-2x">
			    <div></div>
			</div>
		</div><!-- .loader end -->
	</div><!-- .website-loading end -->

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<a class="logo" href="#">
								<img src="<?php echo base_url() ?>/assets/images/files/logo.png" alt="">
								<h5><span class="colored">Travel</span> Tour</h5>
								<span>Landing Template</span>
							</a><!-- .logo end -->

							<ul id="main-menu" class="main-menu">
								<li><a data-scroll-nav="0" href="#home">Home</a></li>
								<li><a data-scroll-nav="1" href="#our-services">Our Services</a></li>
								<li><a data-scroll-nav="2" href="#our-adventures">Our Adventures</a></li>
								<li><a data-scroll-nav="3" href="#best-events">Our Events</a></li>
								<li><a data-scroll-nav="4" href="#tour-guide">Tour Guides</a></li>
								<li><a data-scroll-nav="5" href="#happy-clients">Testmonials</a></li>
								<li><a data-scroll-nav="6" href="#get-connected">Contact Us</a></li>
							</ul>
							<a class="header-btn btn small colorful hover-dark" href="/login">Login</a>
							<div class="mobile-menu-btn hamburger hamburger--slider">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</div><!-- .mobile-menu-btn -->
							<div id="mobile-menu"></div><!-- #mobile-menu end -->
						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- #header-wrap end -->

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="banner">

			<div id="home" class="banner-parallax" data-scroll-index="0">

				<div class="banner-slider">
					<ul class="owl-carousel slider-img-bg">
						<?php $no=1; foreach ($banner as $item) : ?>
						<li>
							<div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.50"></div><!-- .overlay-colored end -->
							<div class="overlay-pattern" data-bg-color="#000" data-bg-color-opacity="0"></div><!-- .overlay-pattern end -->
							<div class="slide">
								<img src="<?php echo base_url() ?>/assets/images/banner/<?= $item['img_banner'] ?>" alt="<?= $item['title'] ?>">
								<div class="slide-content">
									<div class="container">
										<div class="row">
											<div class="col-md-8 col-md-offset-2">

												<div class="banner-center-box text-center">
													<h1>
														<?php $title = explode("|",$item['title']); ?>
														<?= $title[0] ?><br><span class="colored"><?= $title[1] ?></span>
													</h1>
													<div class="description"><?= $item['description'] ?></div>
													<a class="btn colorful large hover-dark" href="#our-services">Eplore More</a>
												</div><!-- .banner-center-box end -->

											</div><!-- .col-md-12 end -->
										</div><!-- .row end -->
									</div><!-- .container end -->
								</div><!-- .slide-content end -->
							</div><!-- .slide end -->
						</li>
						<?php endforeach; ?>
					</ul>
				</div><!-- .banner-slider end -->

			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->
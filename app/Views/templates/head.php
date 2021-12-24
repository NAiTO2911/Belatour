<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- Stylesheets
	============================================= -->
	<link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/my.css" rel="stylesheet">
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

							<a class="logo" href="<?php echo base_url() ?>">
								<img src="<?php echo base_url() ?>/assets/images/files/logo.png" alt="">
								<h5><span class="colored">Travel</span> Tour</h5>
								<span>Landing Template</span>
							</a><!-- .logo end -->

							<ul id="main-menu" class="main-menu">
								<li><a href="<?php echo base_url() ?>/dashboard#home">Home</a></li>
								<li><a href="<?php echo base_url() ?>/dashboard#our-services" <?php if ($menu == "Paket") echo 'class="current"'?>>Our Services</a></li>
								<li><a href="<?php echo base_url() ?>/dashboard#our-tours">Our Tours</a></li>
								<li><a href="<?php echo base_url() ?>/dashboard#about-us">About Us</a></li>
							</ul>

<?php
$this->session = \Config\Services::session();
if (!$this->session->has('loggedIn')) { ?>
	<a class="header-btn btn small colorful hover-dark" href="#" id="myBtn">Login</a>
	<?php if ($menu != "Signup") echo '<a class="header-btn btn small whiteful hover-dark" href="/signup">Signup</a>'?>
<?php } else {?>
	<a class="header-btn" href="#"><?= $this->session->get('username'); ?></a>
<?php }
?>

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

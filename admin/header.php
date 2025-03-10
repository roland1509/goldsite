<?php 
// session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/fastrans/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 23:47:36 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="description" content="Kirsten Mining - Gold Mining & Refining">
	<meta name="keywords" content="Gold Mining, Refining, Gold Dust, order Tracking">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="assets/img/logo/ficon.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/rs6.css">
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
<!-- Start of header section
	============================================= -->
	<header id="ft-header" class="ft-header-section header-style-one">
		<div class="ft-header-content-wrapper position-relative">
			<div class="container">
				<div class="ft-header-content position-relative">
					<div class="ft-brand-logo">
						<a href="#"><img src="assets/img/logo/royalsafety.png" width="150" height="150" alt=""></a>
					</div>
					<div class="ft-header-menu-top-cta position-relative">
						<div class="ft-header-top ul-li">
							<ul>
								<li><i class="fal fa-envelope"></i>info@ksmgold.com</li>
								<!-- <li><i class="fal fa-map-marker-alt"></i>121 WallStreet Street, NY York, USA</li> -->
							</ul>
						</div>
						<div class="ft-header-main-menu d-flex justify-content-end align-items-center">
							<nav class="ft-main-navigation clearfix ul-li">
								<ul id="ft-main-nav" class="nav navbar-nav clearfix">
									<li>
											<a href="../index.html">Site Home</a>
											
									</li>
									<li>
										
									</li>
									<li>
										
									</li>

									
							

							<?php 
								if (isset($_SESSION['ADMIN_LOGIN'])) {
							 ?>
							 		<li>
										<a href="dashboard.php">Admin Home</a>	
									</li>

									<li>
											<a href="changepassword.php">Change Password</a>
									</li>
							<?php 
								}
							 ?>
									
									
					
								</ul>
							</nav>
							<?php 
								if (isset($_SESSION['ADMIN_LOGIN'])) {
							 ?>
							<div class="ft-header-cta-btn">
								<a class="d-flex justify-content-center align-items-center" href="logout.php">Logout</a>
							</div>
							<?php 
								}
							 ?>
						</div>
					</div>
					<div class="mobile_menu position-relative">
						<div class="mobile_menu_button open_mobile_menu">
							<i class="fal fa-bars"></i>
						</div>
						<div class="mobile_menu_wrap">
							<div class="mobile_menu_overlay open_mobile_menu"></div>
							<div class="mobile_menu_content">
								<div class="mobile_menu_close open_mobile_menu">
									<i class="fal fa-times"></i>
								</div>
								<div class="m-brand-logo">
									<a href=""><img src="assets/img/logo/logo-white.png" alt=""></a>
								</div>
								<nav class="mobile-main-navigation  clearfix ul-li">
									<ul id="ft-main-nav" class="nav navbar-nav clearfix">
										<li>
											<a href="../index.html">Site Home</a>
											
										</li>
										<?php 
								if (isset($_SESSION['ADMIN_LOGIN'])) {
							 ?>
							 		<li>
										<a href="dashboard.php">Admin Home</a>	
									</li>

									<li>
											<a href="changepassword.php">Change Password</a>
									</li>
							<?php 
								}
							 ?>
							
							<?php 
								if (isset($_SESSION['ADMIN_LOGIN'])) {
							 ?>
							<li><a href="logout.php">Logout</a></li>
							<?php 
								}
							 ?>	

									</ul>
								</nav>
							</div>
						</div>
						<!-- /Mobile-Menu -->
					</div>
				</div>
			</div>
			<div class="ft-header-cta-info d-flex">
				<div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
					<i class="flaticon-call"></i>
				</div>
				<div class="ft-header-cta-text headline pera-content">
					<p>Get In Touch</p>
					<h3>+000 0000 0000</h3>
				</div>
			</div>
		</div>
	</header>
<!-- End of header section
	============================================= -->
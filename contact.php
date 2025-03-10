<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">

<title>Kirsten Mining</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="preloader">
<div class="loader-ripple">
<div></div>
<div></div>
</div>
</div>


<header class="header">

<div class="header-top">
<div class="container">
<div class="header-top-wrapper">
<div class="header-top-left">
<div class="header-top-contact">
<ul>
<li><a href="#"><i class="far fa-location-dot"></i> Accra, Ghana</a></li>
<li><a href="#"><i class="far fa-envelopes"></i> <span >info@ksmgold.com</span></a></li>
<li><a href="tel:+96539824558"><i class="far fa-phone-volume"></i> +000 0000 0000</a>
</li>
</ul>
</div>
</div>
<div class="header-top-right">
<div class="header-top-social">
<span>Follow Us: </span>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-x-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-navigation">
<nav class="navbar navbar-expand-lg">
<div class="container position-relative">
<a class="navbar-brand" href="index.php">
<img src="assets/img/logo/logo.png" alt="logo">
</a>
<div class="mobile-menu-right">
<div class="search-btn">
<button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
</div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
</button>
</div>
<div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
        </li>
<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
<li class="nav-item"><a class="nav-link" href="service.html">Service</a></li>
<li class="nav-item"><a class="nav-link" href="trace/trace.html">Tracking</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
</ul>
<div class="nav-right">
<div class="search-btn">
<!--<button type="button" class="nav-right-link"><i class="far fa-search"></i></button>-->
</div>
<div class="nav-right-btn mt-2">
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
</div>
</div>

<div class="search-area">
<form action="#">
<div class="form-group">
<input type="text" class="form-control" placeholder="Type Keyword...">
<button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
</div>
</form>
</div>

</div>
</nav>
</div>
</header>

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Contact Us</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Contact Us</li>
</ul>
</div>
</div>


<div class="contact-area py-120">
<div class="container">
<div class="contact-content">
<div class="row">
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-map-location-dot"></i>
</div>
<div class="contact-info-content">
<h5>Office Address</h5>
<p>Accra, Ghana</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-phone-volume"></i>
</div>
<div class="contact-info-content">
<h5>Call Us</h5>
<p>+000 0000 0000</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-envelopes"></i>
</div>
<div class="contact-info-content">
<h5>Email Us</h5>
<span >info@ksmgold.com</span></a></li>
</div>
</div>
</div>
<div class="col-md-3">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-alarm-clock"></i>
</div>
<div class="contact-info-content">
<h5>Open Time</h5>
<p>Mon - Sat (10.00AM - 05.30PM)</p>
</div>
</div>
</div>
</div>
</div>
<div class="contact-wrapper">
<div class="row">
<div class="col-lg-5">
<div class="contact-img">
<img src="assets/img/contact/01.jpg" alt="">
</div>
</div>
<div class="col-lg-7 align-self-center">
<div class="contact-form">
<div class="contact-form-header">
<h2>Get In Touch</h2>
<p>We respond to your messages as a matter of priority. Your questions are treated as a matter of urgency. </p>
</div>
<form method="post" action="sendmail.php">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Name" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email" required="">
</div>
</div>
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Your Subject" required="">
</div>
<div class="form-group">
<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
</div>
<button type="submit" name="submitcontact" class="theme-btn">Send Message <i class="far fa-paper-plane"></i></button>
<div class="col-md-12 mt-3">
<div class="form-messege text-success"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.5143893875097!2d47.996503174126076!3d29.325917152258903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0x60209030a6e71b6a!2s8XGX%2B9J8%2C%20Al%20Kuwayt%2C%20Kuwait!5e0!3m2!1sen!2sng!4v1726312923716!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</main>

<footer class="footer-area">
<div class="footer-widget">
<div class="container">
<div class="row footer-widget-wrapper pt-100 pb-70">
<div class="col-md-6 col-lg-4">
<div class="footer-widget-box about-us">
<a href="#" class="footer-logo">
<img src="assets/img/logo/logo-light.png" alt="">
</a>
<p class="mb-3">
    At Coastal Gold Mine Company, our mission is to responsibly and sustainably harness 
    the rich mineral resources of Kuwait. We aim to deliver high-quality gold products 
    while ensuring the well-being of our employees, the community, and the environment.
</p>
<ul class="footer-contact">
<li><a href="tel:+96539824558"><i class="far fa-phone"></i>+000 0000 0000</a></li>
<li><i class="far fa-map-marker-alt"></i>Accra, Ghana</li>
<li><i class="far fa-envelope"></i>info@ksmgold.com</li></ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Quick Links</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Testimonials</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Update News</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Our Services</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> Mine Engineering</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Coal Excavation</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Geological Consulting</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Mobile Crane Services</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Stone Crushers</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Responsible Mining</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Newsletter</h4>
<div class="footer-newsletter">
<p>Subscribe Our Newsletter To Get Latest Update And News</p>
<div class="subscribe-form">
<form action="#">
<input type="email" class="form-control" placeholder="Your Email">
<button class="theme-btn" type="submit">
Subscribe Now <i class="far fa-paper-plane"></i>
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 align-self-center">
<p class="copyright-text">
&copy; Copyright <span id="date"></span> <a href="www.globalcoastmines.com"> Kirsten Mining </a> All Rights Reserved.
</p>
</div>
<div class="col-md-6 align-self-center">
<ul class="footer-social">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script> 
var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
if(messageText != ''){


        Swal.fire({
        title: "Thank you!",
        text: "For contacting Kirsten Mining, We will get back to you ASAP",
        icon: "Success"
    });
    <?php unset( $_SESSION['status']) ;?>
}

</script>
</body>
</html>
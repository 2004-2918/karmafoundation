<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>Helpo HTML Template</title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css"/>
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- mobile menu start-->
			<div class="mobile-nav">
				<div class="mobile-nav__inner">
					<div class="mobile-nav__item">
						<nav class="menu-holder">
							<ul class="mobile-menu">
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
								<li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu end-->
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
					<div class="aside-dropdown__item d-lg-none d-block">
						<ul class="aside-menu">
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="../index.html"><span>01 Home Color Style</span></a></li>
									<li><a href="../front_2.html"> <span>02 Home Color Style</span></a></li>
									<li><a href="../front_3.html"><span>03 Home Color Style</span></a></li>
									<li><a href="index.html"><span>04 Home Monochrome</span></a></li>
									<li><a href="front_2.html"><span>05 Home Monochrome</span></a></li>
									<li><a href="front_3.html"><span>06 Home Monochrome</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="about.html"><span>About</span></a></li>
									<li><a href="typography.html"> <span>Typography</span></a></li>
									<li><a href="donors.html"><span>Donors & Partners</span></a></li>
									<li><a href="volunteer.html"><span>Become a Volunteer</span></a></li>
									<li><a href="events.html"><span>Events</span></a></li>
									<li><a href="event-details.html"><span>Event Details</span></a></li>
									<li><a href="stories.html"><span>Stories</span></a></li>
									<li><a href="storie-details.html"><span>Storie Details</span></a></li>
									<li><a href="blog.html"><span>Blog</span></a></li>
									<li><a href="blog-post.html"><span>Blog Post</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="pricing.html"><span>Pricing Plans</span></a></li>
									<li><a href="faq.html"><span>FAQ</span></a></li>
									<li class="item--active"><a href="404.html"><span>404 Page</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a>
								<!-- sub menu start-->
								<ul class="aside-menu__sub-list">
									<li><a href="causes.html"><span>Causes 1</span></a></li>
									<li><a href="causes_2.html"> <span>Causes 2</span></a></li>
									<li><a href="causes_3.html"><span>Causes 3</span></a></li>
									<li><a href="cause-details.html"><span>Cause Details</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
								<!-- sub menu start-->
								<ul class="aside-menu__sub-list">
									<li><a href="shop.html"><span>Catalog Page</span></a></li>
									<li><a href="shop-product.html"><span>Shop Product</span></a></li>
									<li><a href="shop-cart.html"><span>Shop Cart</span></a></li>
									<li><a href="shop-checkout.html"><span>Shop Checkout</span></a></li>
									<li><a href="shop-account.html"><span>Shop Account</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
							<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a>
								<!-- sub menu start    -->
								<ul class="aside-menu__sub-list">
									<li><a href="alerts.html"><span>Alerts</span></a></li>
									<li><a href="team.html"><span>Team</span></a></li>
									<li><a href="testimonials.html"><span>Testimonials</span></a></li>
									<li><a href="accordion.html"><span>Accordion</span></a></li>
									<li><a href="tabs.html"><span>Tabs</span></a></li>
									<li><a href="pricing-plan.html"><span>Pricing Plan</span></a></li>
									<li><a href="counters.html"><span>Counters</span></a></li>
									<li><a href="icons.html"><span>Icons</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
						</ul>
					</div>
					<div class="aside-dropdown__item">
						<!-- aside menu start-->
						<ul class="aside-menu">
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
							<li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
						</ul>
						<!-- aside menu end-->
						<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
						<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
						<ul class="aside-socials">
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="aside-dropdown__item"><a class="button button--squared" href="#"> <span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<?php require_once("includes/header.html");?>
			<!-- header end-->
			<main class="main"><img class="img--bg" src="img/404.jpg" alt="img"/>
				<section class="section error">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xl-6">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="error__title">404</h1>
										<h3 class="error__subtitle">Page not found</h3>
										<p class="error__text">Gray eel-catfish longnose whiptail catfish smalleye squaretail longnose whiptail catfish smalleye squaretail Lorem, ipsum dolor.</p><a class="button button--primary" href="index.html">Home Page</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
	</body>
</html>
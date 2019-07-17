<!DOCTYPE html>
<html>
<head>
	<title>Pet & Pet's Health Service</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Lovely-pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->
	<style type="text/css">
		.backgroundheader{
			background-color:#AFEEEE;
		}
	</style>


	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link rel='stylesheet' type='text/css' href='{{asset('css/jquery.easy-gallery.css')}}' />
	<!-- For-gallery-CSS -->
	<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<link href="{{asset('//fonts.googleapis.com/css?family=Montserrat:300,400,500')}}" rel="stylesheet">
</head>
<body>
<div class="header-w3layouts | backgroundheader">
			<!-- Navigation -->

			<div class="header-bar">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<h1><a class="navbar-brand" href="index.html">L<span class="fa fa-paw" aria-hidden="true"></span>vely-Pets</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#services" class="scroll">Services</a></li>
								<li><a href="#gallery" class="scroll">Gallery</a></li>
								<li><a href="#price" class="scroll">Price</a></li>
								<li><a href="#testimonials" class="scroll">Clients</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
								<li><a href="#account" class="scroll">Your Account</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>

			<div class="clearfix"> </div>

		</div>
	<!-- //modal -->
	<!--About-->
	@yield('container')
	<div class="buttom-w3">
		<div class="container">
			<div class="col-md-4 bottom-head text-center">
				<h4><a href="index.html">LOVELY-PETS</a></h4>
				<div class="pet-cat">
					<p>Care Pets</p>
				</div>
			</div>
			<div class="col-md-4 copyright text-center">
				<div class="">
					<h4> About Us</h4>
				</div>
				<div class="sub-para">
					<p>Lorem ipsum dolor sit amet,dolor sit amet,iste natus error sit voluptatem</p>
				</div>
			</div>
			<div class="col-md-4 letter-sub text-center">

				<div class="post">
					<form action="#" method="post">

						<div class="letter">
							<input class="email" type="email" placeholder="Your email..." required="">
						</div>
						<div class="newsletter">
							<input type="submit" value="Subscribe">
						</div>
					</form>
				</div>
				<div class="sub-para">
					<p>Lorem ipsum dolor sit amet,dolor sit amet,iste natus error sit voluptatem</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
	<footer>
		<p>&copy; 2018 Lovely-Pets. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
	</footer>

	<!--js working-->
	<script type='text/javascript' src='{{asset('js/jquery-2.2.3.min.js')}}'></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>
	<!-- //js  working-->

	<script src="{{asset('js/responsiveslides.min.js')}}"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 900,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--// banner-->
	<!--pop-up-box video-->
	<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box video -->

	<!-- script for portfolio -->
	<script type='text/javascript' src='{{asset('js/jquery.easy-gallery.js')}}'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //script for portfolio -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- for-bottom-to-top smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
	
<!-- index14:04 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>«ОДИЛ ХАМЗА» ХСБ Web sayti</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
		<link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/animate.css" type="text/css" rel="stylesheet">
		<link href="assets/css/jquery-ui.min.css" type="text/css" rel="stylesheet">
		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

		<link href="assets/css/style.css" type="text/css" rel="stylesheet">
		<link href="assets/css/index.css" type="text/css" rel="stylesheet">
		<link href="assets/css/header.css" type="text/css" rel="stylesheet">
		<link href="assets/css/footer.css" type="text/css" rel="stylesheet">
		<link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />

	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->

		<!-- header Start -->
		<header id="header" class="header">

			<div class="nav-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								{{-- <a href="/"><h3 style="color: #fff">OMAD HAMZA</h3></a> --}}
								<a href="/"><img src="/assets/images/logo2.png" alt=""></a>
							</div>
							<!-- Phone Menu button -->
							<button id="menu" class="menu hidden-md-up"></button>
						</div>
						<div class="col-md-9 nav-bg d-flex align-items-center">
							<nav class="navigation">
								<ul>
									<li>
										<a href="/">BOSH SAXIFA</a><i class="ion-ios-plus-empty hidden-md-up"></i>
									</li>

									<li>
										<a href="/about">BIZ XAQIMIZDA</a><i class="ion-ios-plus-empty hidden-md-up"></i>
									</li>
									<li>
										<a href="/service">XIZMATLAR</a><i class="ion-ios-plus-empty hidden-md-up"></i>
									</li>
									<li>
										<a href="/project">ISHLAR</a><i class="ion-ios-plus-empty hidden-md-up"></i>
									</li>
									<li>
										<a href="/contact">BOG'LANISH</a><i class="ion-ios-plus-empty hidden-md-up"></i>
									</li>

								</ul>

							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--Header End-->

        @yield('content')



        		<!-- FOOTER -->
		<footer class="footer pt-80 pt-xs-60">
			<div class="container">
				<!--Footer Info -->
				<div class="row footer-info mb-60">
					<div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
						<h4 class="mb-30">BIZ XAQIMIZDA</h4>
						<address>
							<i class="ion-ios-location fa-icons"></i> Andijon viloyati Andijon shaxar Sanoat Ko'chasi 284-uy
						</address>
						<ul class="link-small">
							<li>
								<a><i class="ion-ios-email fa-icons"></i>odilhamza@gmail.com</a>
							</li>
							<li>
								<a><i class="ion-ios-telephone fa-icons"></i>+998-99-917-70-28</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
						<h4 class="mb-30">BO'LIMLAR</h4>
						<ul class="link blog-link">
							<li>
								<a href="/"><i class="fa fa-angle-double-right"></i> BOSH SAXIFA</a>
							</li>
							<li>
								<a href="/about"><i class="fa fa-angle-double-right"></i> BI XAQIMIZDA</a>
							</li>
							<li>
								<a href="/service"><i class="fa fa-angle-double-right"></i> XIZMATLAR</a>
							</li>
							<li>
								<a href="/project"><i class="fa fa-angle-double-right"></i> ISHLAR</a>
							</li>
							<li>
								<a href="/contact"><i class="fa fa-angle-double-right"></i> BOGLANISH</a>
							</li>
							
						</ul>
					</div>
					<div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-15">
						<div class="newsletter">
							<h4 class="mb-30">YANGILIKLARDAN HABARDOR BO'LISH</h4>
							<p>
								Yangiliklardan habardor bo'lish uchun elektron poctangizni kiriting va habardor bo'ling
							</p>
							<form>
								<input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Elektron po'chtangizni kiriting">
								<button class="newsletter-btn btn btn-xs btn-color" type="YUBORISH" value="">
									<i class="fa fa-angle-right mr-0"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- End Footer Info -->
			</div>
			<!-- Copyright Bar -->
			<div class="copyright">
				<div class="container">
					<p class="">
						<a href="/" target="_blank">17.12.2021</a>
					</p>
				</div>
			</div>
			<!-- End Copyright Bar -->
		</footer>
		<!-- END FOOTER -->

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script> 
		<!-- revolution Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script>
		<!-- Mail Function Js -->
		<script src="assets/js/validation.js" type="text/javascript"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>

	</body>

<!-- index14:04 GMT -->
</html>

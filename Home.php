<?php
 $servername="######";
 $dBUsername="######";
 $dBPassword="######";
 $dBName="######";
 $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$plus='+';
$countrands = mysqli_query($conn, "SELECT * FROM MandlaEtfuSupport WHERE province='Rand/s-[R]' AND city='Donated'");
$totalrands = 0;
while($row = mysqli_fetch_assoc($countrands)) {
    $totalrands += $row['amount'];
}

$countdollas = mysqli_query($conn, "SELECT * FROM MandlaEtfuSupport WHERE province='US Dollar/s-[$]' AND city='Donated'");
$totaldollas = 0;
while($row = mysqli_fetch_assoc($countdollas)) {
    $totaldollas += $row['amount'];
}

$finaltotalrands = $totalrands;
$finaltotaldollas = $totaldollas;
?>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="owner" content="Mandla Etfu NPC" />
        <meta name="description" content="Cannabis gifting nonprofit organization.">
        <meta name="keywords" content="Mandla, Mandla Etfu NPC, nonprofit organization, NPC,fundraiser,cannabis, kannabae, request cannabis, donated cannabis, kannabae.org.za, indoor grown cannabis, outdoor grown cannabis">
        <meta name="author" content="Mandla Etfu NPC">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="swiper.css" type="text/css" />

	<link rel="stylesheet" href="dark.css" type="text/css" />
	<link rel="stylesheet" href="font-icons.css" type="text/css" />
	<link rel="stylesheet" href="animate.css" type="text/css" />
	<link rel="stylesheet" href="magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="custom.css" type="text/css" />
	<link rel="stylesheet" href="calendar.css" type="text/css" />

	<!-- NonProfit Demo Specific Stylesheet -->
	<link rel="stylesheet" href="colors.php?color=C6C09C" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="fonts.css" type="text/css" />
	<link rel="stylesheet" href="nonprofit.css" type="text/css" />
	<!-- / -->

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Document Title
	============================================= -->
	<title>Mandla Etfu NPC || Home</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9NDG618M1J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9NDG618M1J');
</script>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="clearfix">
        
		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm border-bottom-0" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-5">
							
						</div><!-- #logo end -->

						<div class="header-misc">
							<a href="Fundraiser.php" class="button button-rounded button-light"><div>Donate</div></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows me-lg-auto">

							<ul class="menu-container align-self-start">
								<li class="menu-item"><span class="menu-bg col-auto align-self-start d-flex"></span></li>
								<li class="menu-item current"><a class="menu-link" href="Home.php"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" ><div>Fundraiser initiative</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="Fundraiser.php"><div>Mandla Etfu NPC support fundraiser</div></a></li>
										<li class="menu-item"><a class="menu-link" href="Record.php"><div>Donation record</div></a></li>        
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="https://kannabae.org.za"><div>Request cannabis</div></a></li>
								<li class="menu-item"><a class="menu-link" href="Contact.php"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element dark swiper_wrapper slider-parallax min-vh-75">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<div>
										<h2 class="nott" data-animate="fadeInUp">Gift of cannabis</h2>
										<a href="Fundraiser.php" data-animate="fadeInUp" data-delay="400" class="button button-rounded button-large button-light shadow nott ls0 ms-0 mt-4">Donate</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('https://res.cloudinary.com/badboylu/image/upload/v1690468704/Grow_Indoor_qyrqcb.webp') no-repeat center center; background-size: cover;"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<div>
										<h2 class="nott" data-animate="fadeInUp">Access free cannabis</h2>
										<a href="Fundraiser.php" data-animate="fadeInUp" data-delay="400" class="button button-rounded button-large button-light shadow nott ls0 ms-0 mt-4">Donate</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('https://res.cloudinary.com/badboylu/image/upload/v1690468707/Indoor_grow_light_tg3tyq.jpg') no-repeat center center; background-size: cover;"></div>
						</div>
					</div>
					<div class="swiper-navs">
						<div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
						<div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
					</div>
					<div class="swiper-scrollbar">
						<div class="swiper-scrollbar-drag">
						<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div></div>
					</div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0" style="overflow: visible">

				<svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none" style="position: absolute; top: -58px; left:0; z-index: 1"><path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z"/></svg>

				<div class="container">

					<div class="slider-feature w-100">
						<div class="row justify-content-center">
							<div class="col-md-3 px-1">
								<a href="https://kannabae.org.za" class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
									<div class="card-body">
										<i class="icon-line-align-center"></i>Request cannabis
									</div>
								</a>
							</div>
							<div class="col-md-3 px-1">
								<a href="Fundraiser.php" class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
									<div class="card-body">
										<i class="icon-line-umbrella"></i>Fundraiser initiative 
									</div>
								</a>
							</div>
							<div class="col-md-3 px-1">
								<a href="Contact.php" class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
									<div class="card-body">
										<i class="icon-line-mail"></i>Contact us
									</div>
								</a>
							</div>
						</div>
					</div>

				</div>

				<div class="section mt-3" >
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-7 center">
								<div class="heading-block border-bottom-0 mb-4">
									<h2 class="mb-4 nott">What we do</h2>
								</div>
								<div class="svg-line bottommargin-sm">
									<img src="divider-1.svg" alt="svg divider" height="20">
								</div>
								<p>The Mandla Etfu NPC is a registered nonprofit organization based in South Africa that gives adult individuals free cannabis to use in private for personal consumption. The organization partners with private cannabis cultivators that seek to make a positive impact to others through donating their cultivated cannabis to the organization. We receive the donated cannabis from donors and then offer the plant to all cannabis users who seek to enjoy it's many benefits. To further enhance the organization's positive contribution to society, we have partnered with the private sector in order to create much needed jobs. The company that we have partnered with has created an online platform where users are able to request cannabis from the organization and have it delivered to their location within hours. The <a href="https://kannabae.org.za">kannabae</a> platform will enable cannabis enthusiasts to access our donated cannabis efficiently and create jobs in the process.</p>
							</div>
						</div>
						<br>
						<div class="row justify-content-center">
								<div class="col-md-7 center">
								<div class="heading-block border-bottom-0 mb-4">
									<h2 class="mb-4 nott">Kannabae platform demo video</h2>
								</div>
								<div class="svg-line bottommargin-sm">
									<img src="divider-1.svg" alt="svg divider" height="20">
								</div>
								</div>
								<div style="margin: auto; display: block;">
									<video style="height: auto; width: 100%;" controls>
  									<source src="https://res.cloudinary.com/ddjrcafre/video/upload/v1690984747/Kannabae_video_edit_Completed_vbsd76.mp4" type="video/mp4">
 									Your browser does not support the video tag.
									</video>
								</div>
							
						</div>

						<div class="row mt-5 col-mb-50 mb-0">
							<div class="col-md-3">
								<div class="feature-box flex-column mx-0">
									<div class="fbox-media position-relative">
										<img src="volunteer.svg" alt="Featured Icon" width="60" class="mb-3">
									</div>
									<div class="fbox-content px-0">
										<h3 class="nott ls0"><a class="text-dark">Fundraiser</a></h3>
										<p>Please help keep our organization operating by donating. We appreciate all the assistance we get.</p>
										<a href="Fundraiser.php" class="button button-rounded button-border nott ls0 fw-normal ms-0 mt-4">Donate</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container">
					<div class="w-100 position-relative">
						<div class="donor-img d-flex align-items-center rounded parallax mx-auto shadow-sm w-100" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -50px;" style="height: 500px; background: url('event.jpg') no-repeat center center / cover"></div>
						<div class="card bg-white border-0 center py-sm-4 px-sm-5 p-2 shadow-sm" style="position: absolute; top: 50%; right: 80px; transform: translateY(-50%);">
							<div class="card-body">
								<div class="color h1 mb-3"><i class="icon-heart"></i></div>
								<small class="text-uppercase fw-normal ls2 text-muted mb-3 d-block">Total donations</small>
								<h3 class="display-3 fw-bold mb-3 font-secondary" data-comma="true">R<?php echo number_format($finaltotalrands); ?></h3>
                                                                <h3 class="display-3 fw-bold mb-3 font-secondary" data-comma="true">$<?php echo number_format($finaltotaldollas); ?></h3>
								<p class="text-uppercase fw-medium text-muted">Raised</p>
								<a href="Record.php" class="button-svg">View Records</a>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent mt-0 mb-4">
					<div class="container clearfix">
						<div class="row justify-content-center" style="margin-top: 100px">
							<div class="col-md-7 center">
								<div class="heading-block border-bottom-0 mb-4">
									<h2 class="mb-4 nott">Fundraising</h2>
								</div>
								<div class="svg-line bottommargin-sm clearfix">
									<img src="divider-1.svg" alt="svg divider" height="20">
								</div>
								<p>Our fundraising strategy is to make donating to the organization quick, easy and simple using online payment methods as well as to provide unique incentives to donors. We post every name and message from every donor in our donation records to forever be captured and be displayed to the world to show the act of care and philanthropy.</p>
							</div>
						</div>
					</div>

					<div class="owl-carousel owl-carousel-full image-carousel carousel-widget topmargin-sm charity-card" data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true" data-autoplay="500000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="4">

						<div class="oc-item text-start">
							<img src="https://res.cloudinary.com/badboylu/image/upload/v1690468705/Indoor_purple_tricombs_vf06ic.webp" alt="Image 1" class="rounded">
							<div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
								<small class="text-uppercase fw-normal ls1 color mb-2 d-block">Mandla Etfu NPC</small>
								<h3 class="mb-3"><a href="Fundraiser.php">Support fundraiser</a></h3>
								<ul class="skills mb-3">
									<li data-percent="">
										<div class="progress">
											<div class="progress-percent">
												<div class="counter counter-inherit">
													R<span data-from="0" data-to="<?php echo $totalrands; ?>" data-refresh-interval="10" data-speed="1100" data-comma="true"></span> Donated || $<span data-from="0" data-comma="true" data-to="<?php echo $totaldollas; ?>" data-refresh-interval="10" data-speed="1100"></span> Donated
												</div>
											</div>
										</div>
									</li>
								</ul>
								<p class="mb-4 text-black-50">Help us keep operating<br>[<a href="Record.php">View Donation record</a>]</p>
								<a href="Fundraiser.php" class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate</a>
							</div>
						</div>

						<div class="oc-item text-start">
							<img src="https://res.cloudinary.com/badboylu/image/upload/v1690468707/Indoor_grow_light_tg3tyq.jpg" alt="Image 1" class="rounded">
							<div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
								<small class="text-uppercase fw-normal ls1 color mb-2 d-block"><a href="https://kannabae.org.za">kannabae platform</a></small>
								<h3 class="mb-3">Request cannabis from us to be delivered to your location on the kannabae platform</h3>
								
								<p class="mb-4 text-black-50">To be used by adults in private only</p>
								<a href="https://kannabae.org.za" class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Request</a>
							</div>
						</div>

					</div>
				</div>

				<div class="clear"></div>

				<div class="container-fluid my-5 clearfix">
					<div class="d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5" style="background: url('world-map.png') no-repeat center center/ contain">
						<div class="mx-auto center" style="max-width: 1000px">
                                                        <h3>The nonprofit giving you access to cannabis</h3>
							<h3>quickly and conveniently</h3>
						</div>

						<div class="row align-items-stretch m-0 w-100 clearfix">

						</div>
					</div>
				</div>

				<div class="clear"></div>

			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" style="background-color: #002D40;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap dark clearfix" style="background: radial-gradient(rgba(0,45,64,.5), rgba(0,45,64,.1), rgba(0,45,64,.5)), url('footer.jpg') repeat center center / cover;  padding: 150px 0">
					<div class="mx-auto center" style="max-width: 700px;">
						<h2 class="display-2 fw-bold text-white mb-0 ls1 font-secondary mb-4"><i class="icon-heart d-block mb-3"></i>Thank you</h2>
						<a href="Fundraiser.php" class="button button-rounded button-xlarge button-white bg-white button-light text-dark shadow nott ls0 ms-0 mt-5">Donate</a>
					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-color">

				<div class="container clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							© 2023 All Rights Reserved by Mandla Etfu NPC reg no. <strong>269-769 NPO</strong> [<a href="https://www.npo.gov.za" style="color:darkgreen">Verify us</a>]<br>
							<div class="copyright-links"><a href="Terms.php">Terms of Use</a> / <a href="Contact.php">Contact us</a></div>
							<div class="copyright-links">Developed by <a href="LLM.php"><span>LLM<span></a></div>
						
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="269-769NPO.pdf">Memorandum of incorporation</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

		<!-- Floating Contact
		============================================= -->
</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="jquery.js"></script>
	<script src="plugins.min.js"></script>
	<script src="jquery.calendario.js"></script>
	<script src="events.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="functions.js"></script>
<script>
		jQuery(document).ready( function($){
			var elementParent = $('.floating-contact-wrap');
			$('.floating-contact-btn, .btn-contact').off( 'click' ).on( 'click', function(e) {
				elementParent.toggleClass('active', );
				e.preventDefault(e);
			});
		});

		var cal = $( '#calendar' ).calendario( {
			onDayClick : function( $el, $contentEl, dateProperties ) {

				for( var key in dateProperties ) {
					console.log( key + ' = ' + dateProperties[ key ] );
				}

			},
			caldata : canvasEvents
		}),
		$month = $( '#calendar-month' ).html( cal.getMonthName() ),
		$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		};

</script>
</body>
</html>

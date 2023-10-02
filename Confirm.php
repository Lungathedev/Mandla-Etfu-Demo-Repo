<?php
 $servername="######";
 $dBUsername="######";
 $dBPassword="######";
 $dBName="######";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$timeChange = date('H:i',strtotime('+2 hour',strtotime($time)));
date_default_timezone_set('Africa/Johannesburg');
$name = $_POST['Name'];
$message = $_POST['Message'];
$country = $_POST['Country'];
$amount = $_POST['Amount'];
$token= bin2hex(random_bytes(5));
$date = date("Y-m-d");
$time = date("H:i");


$sql="INSERT INTO MandlaEtfuSupport (name,surname,date,time,province,city,amount) VALUES(?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=sqlerror111");
       exit();
    }
     mysqli_stmt_bind_param($stmt,"ssssssi",$name,$message,$date,$time,$country,$token,$amount);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
        <meta name="description" content="Cannabis gifting nonprofit">
        <meta name="keywords" content="Mandla, Mandla Etfu NPC, Etfu, nonprofit, NPC, employment, creation, power, initiative, success, fundraiser, Liyandza, Lunga, Magagula, registered nonprofit organisation">
        <meta name="author" content="K2021661320 (Pty) Ltd">


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
	<link rel="stylesheet" href="ccolors.php?color=C6C09C" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="fonts.css" type="text/css" />
	<link rel="stylesheet" href="nonprofit.css" type="text/css" />
	<!-- / -->

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Document Title
	============================================= -->
	<title>Mandla Etfu NPC || Confirmation </title>
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
								<li class="menu-item"><a class="menu-link" ><div>Fundraiser initiatives</div></a>
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
		<section id="slider" class="slider-element swiper_wrapper min-vh-75 justify-content-start dark" style="background: White">

			<div class="container"><br><br><br><br>
				<div class="row h-100 align-items-center justify-content-between">
					<div class="col-lg-4 col-md-6 py-5 py-md-0">
						<div class="heading-block border-bottom-0 mb-4">
							<h5 class="mb-1 text-uppercase ls2 color op-06">Mandla Etfu NPC fundraiser</h5>
							<h2 class="mb-4 nott"><span style="color:black">Confirm donation</span></h2>
						</div>
						<div class="svg-line bottommargin-sm">
							<img src="divider-1.svg" alt="svg divider" height="20">
						</div>
						<p class="mb-5"><span style="color:black"><strong>Donation:</strong></span><br><span style="color:black"><?php echo $amount; ?><span style="display:none" id="Rands"">Rand/s</span><span style="display:none" id="Dollas"">US-Dollar/s</span></span><br><span style="color:black"><strong>Name:</strong></span><br><span style="color:black"><?php echo $name; ?></span><br><span style="color:black"><strong>Message:</strong></span><br><span style="color:black"><?php echo $message; ?></span>
<br>

<form action="https://mandlaetfu.org.za/CK.php" method="post" id="donation" name="donate">
<input type="hidden" name="Name" value="<?php echo $name; ?>">
<input type="hidden" name="Message" value="<?php echo $message; ?>">
<input type="hidden" name="Amount" value="<?php echo $amount; ?>">
<input type="hidden" name="Country" value="<?php echo $country; ?>">
<input type="hidden" name="Date" value="<?php echo $date; ?>">
<input type="hidden" name="Time" value="<?php echo $time; ?>">
<input type="hidden" name="Token" value="<?php echo $token; ?>">
<input type="submit" name="Donation" value="Donate" style="display:none" id="PayFast" class="button button-rounded button-border nott ls0 fw-normal border-color m-0">
</form>
<div style="display:none" id="PayPal">
<div id="paypal-button-container"></div>
</div>
<div style="display:none" id="PayFastlogo">
<a href="#"><img src="PayFastLogo.png" alt="Blog Single"></a>
</div>
</p>
                        
                                                

					</div>
					
				</div>
			</div>

		</section>


		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0 overflow-visible">

				<div class="container">

					<div class="slider-feature">
						<div class="row gutter-10 justify-content-center">
							
							
							
						</div>
					</div>

				</div>

				<div class="clear"></div>


				<div class="section m-0 bg-transparent pt-0">
					<div class="container clearfix">
						<div class="row">
							

							
						</div>
					</div>
				</div>

				
				

			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		

		<!-- Floating Contact
		============================================= -->
		

	</div>
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->

	<script src="jquery.js"></script>
	<script src="plugins.min.js"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=######"></script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $amount; ?>'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed!');
        window.location.replace("https://mandlaetfu.org.za/FP2.php");
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

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
	</script>
<script>
function deleteLS(){
let cc = localStorage.getItem('AC');
if(cc){
localStorage.removeItem('AC');
 }
}
deleteLS();
</script>						
<script>
setTimeout (function hidePayFast(){
         let country = "<?php echo $country; ?>";
         if(country=="Rand/s-[R]"){
         document.getElementById("PayFast").style.display = "block";
         document.getElementById("Rands").style.display = "block";
         document.getElementById("PayFastlogo").style.display = "block";
         }
         if(!country=="Rand/s-[R]"){
         document.getElementById("PayFast").style.display = "none";
         document.getElementById("Rands").style.display = "none";
         document.getElementById("PayFastlogo").style.display = "none";
         }
 }, 1/100);
setTimeout (function hidePayPal(){
         let country = "<?php echo $country; ?>";
         if(country=="US Dollar/s-[$]"){
         document.getElementById("PayPal").style.display = "block";
         document.getElementById("Dollas").style.display = "block";
         }
         if(!country=="US Dollar/s-[$]"){
         document.getElementById("PayPal").style.display = "none";
         document.getElementById("Dollas").style.display = "none";
         }
 }, 1/100);
hidePayFast();
hidePayPal();
</script>
							
<script>
setTimeout (function place(){
let auth = "<?php echo $token; ?>";
let cc = localStorage.getItem('AC');
if(!cc){
localStorage.setItem('AC', auth);
 }
}, 1000);
place();
</script>
							
</body>
</html>

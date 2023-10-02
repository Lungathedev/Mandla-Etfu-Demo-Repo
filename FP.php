<?php
 $servername="######";
 $dBUsername="######";
 $dBPassword="######";
 $dBName="######";
 $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$token = $_POST['auth'];
$stat = 'Donated';
$sql="UPDATE MandlaEtfuSupport SET city='".$stat."' WHERE city='".$token."' ";
mysqli_query($conn,$sql);
header("Location:Donated.php");
exit();
?>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
        <meta name="description" content="Cannabis gifting nonprofit">
        <meta name="keywords" content="Mandla, mandla, Mandla Etfu NPC, Etfu, etfu, nonprofit, NPC, employment, creation, power, initiative, success, fundraiser, job, jobs, kahrent technology africa, Liyandza, Lunga, Magagula, best, poverty, unemployment, registered nonprofit organisation">
        <meta name="author" content="Kahrent Technology Africa (Pty) Ltd">


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

<form action="https://mandlaetfu.co.za/FP1.php" method="post" id="check" name="donate">
<input type="hidden" name="Token" value="" id="token">
<input type="submit" name="Donation" value="Pay" style="display:none">
</form>
</div>
<script>
setInterval (function formdata(){
token = localStorage.getItem('AC');
document.getElementById("token").value = token;
}, 1000);

setInterval (function authcheck(){
document.getElementById("check").submit();
}, 1000);

formdata();
authcheck();
</script>
</body>
</html>

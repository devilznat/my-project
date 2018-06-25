<?php
  session_start();
 
  require('../../db/connect.php');
  $headlink = "our-services";

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>About Us | The i Mastermind </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<!-- <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'> -->
	<!-- Web Fonts solomon-->
	<link rel="stylesheet" href="../../assets/css/font/solomon2/solomon-font.css">


	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="../../assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="../../assets/css/footers/footer-v6.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../assets/plugins/animate.css">
	<link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../../assets/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel='stylesheet' href="../../assets/plugins/master-slider/masterslider/skins/black-2/style.css">
	
	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">
	
	<link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css'>

	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>


<body class="header-fixed header-fixed-space">
	<div class="wrapper">

		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->

		<?
		
		$sqlheadservice = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'head-service' " );
		$loadheadservice = mysql_fetch_array($sqlheadservice);

		?>

		<div class="breadcrumbs-v4 img-v4-ourservice text-center">
			<div class="container">
				<div class="title-v1 no-margin-bottom">
				<h2>  <strong><font color="#446cb3"> <? echo $loadheadservice[key]; ?></font></strong></h2>
					
					<? echo $loadheadservice[value]; ?>
					
				</div>
			</div>
		</div>
		
		<?
		
		$sqlservicedetail1 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'service-detail1' " );
		$loadservicedetail1 = mysql_fetch_array($sqlservicedetail1);

		$sqlservicedetail2 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'service-detail2' " );
		$loadservicedetail2 = mysql_fetch_array($sqlservicedetail2);

		$sqlservicedetail3 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'service-detail3' " );
		$loadservicedetail3 = mysql_fetch_array($sqlservicedetail3);

		?>

		<!--=== Service Blcoks ===-->
		<div class="container content-sm">
			<!-- <div class="text-center margin-bottom-50">
				<h2 class="title-v2 title-center">OUR SERVICES</h2>
				<p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
			</div> -->

			<!-- Service Blcoks -->

			<div class="row service-box-v1 margin-bottom-40">
			<div data-wow-delay=".25s" class="wow bounce">
				<div class="col-md-4 col-sm-6 md-margin-bottom-40">
					<div class="service-block service-block-default no-margin-bottom">
						<i class="icon-lg rounded-x icon <? echo $loadservicedetail1[value]; ?>"></i>
						<h2 class="heading-sm"><font color="#446DB1"><? echo $loadservicedetail1[key]; ?></font></h2>
						<p><? echo $loadservicedetail1[value_custom]; ?></p>
						
					</div>
				</div>
			</div>
			<div data-wow-delay=".50s" class="wow bounce">
				<div class="col-md-4 col-sm-6 md-margin-bottom-40">
					<div class="service-block service-block-default no-margin-bottom">
						<i class="icon-lg rounded-x icon-line <? echo $loadservicedetail2[value]; ?>"></i>
						<h2 class="heading-sm"><font color="#446DB1"><? echo $loadservicedetail2[key]; ?></font></h2>
						<p><? echo $loadservicedetail2[value_custom]; ?></p>
						
					</div>
				</div>
			</div>
			<div data-wow-delay=".75s" class="wow bounce">
				<div class="col-md-4 col-sm-12">
					<div class="service-block service-block-default no-margin-bottom">
						<i class="icon-lg rounded-x icon-line <? echo $loadservicedetail3[value]; ?>"></i>
						<h2 class="heading-sm"><font color="#446DB1"><? echo $loadservicedetail3[key]; ?></font></h2>
						<p><? echo $loadservicedetail3[value_custom]; ?></p>
						
					</div>
				</div>
			</div>
			</div>
			<!-- End Service Blcoks -->
		</div>
		<!--=== End Service Blcoks ===-->


		<?
		
		$sqlparallax1 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'parallax-1' " );
		$loadparallax1 = mysql_fetch_array($sqlparallax1);

		$sqlparallax2 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'parallax-2' " );
		$loadparallax2 = mysql_fetch_array($sqlparallax2);

		$sqlparallax3 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'parallax-3' " );
		$loadparallax3 = mysql_fetch_array($sqlparallax3);

		$sqlparallax4 = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'parallax-4' " );
		$loadparallax4 = mysql_fetch_array($sqlparallax4);

		?>


			<!--=== Parallax Counter v4 ===-->
		<div class="parallax-counter-v4 parallaxBg">
			<div class="container content-sm">
				<div class="row">
					<div class="col-md-3 col-xs-6 md-margin-bottom-50">
						
						<i class="<? echo $loadparallax1[value]; ?>"></i>
						<span class="counter">265</span>
						<h4><? echo $loadparallax1[key]; ?></h4>
					</div>
					<div class="col-md-3 col-xs-6 md-margin-bottom-50">
						<i class="<? echo $loadparallax2[value]; ?>"></i>
						<span class="counter">300,000</span>
						<h4><? echo $loadparallax2[key]; ?></h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<i class="<? echo $loadparallax3[value]; ?>"></i>
						<span class="counter">3495</span>
						<h4><? echo $loadparallax3[key]; ?></h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<i class="<? echo $loadparallax4[value]; ?>"></i>
						<span class="counter">576</span>
						<h4><? echo $loadparallax4[key]; ?></h4>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</div>
		<!--=== End Parallax Counter v4 ===-->

		<?
		$sqlquoteservice = mysql_query("SELECT * FROM our_service WHERE language_code =  'en' AND location = 'quote-service' " );
		$loadquoteservice = mysql_fetch_array($sqlquoteservice);

		?>
		<!-- Quote v2 -->
						<div class="container content">
							<div class="quote-v2">
							<img src="../../uploadfile/logo/ISO-01.png" width="30%">
								<!-- <p></p>
								<h2>We source the best talents for you.</h2>
								<h4>- Pongsatorn Sawangchit</h4> -->
							</div>
						</div>
		<!-- End Quote v2 -->
	
	
	
			
			
			

		<!-- requrie footer -->
		<? require ('footer-homepage.php'); ?>
		<!-- End reurie footer  -->
		
		</div><!--/wrapper-->



		<!-- JS Global Compulsory -->
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery.parallax.js"></script>
		<script src="../../assets/plugins/master-slider/masterslider/masterslider.min.js"></script>
		<script src="../../assets/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/counter/waypoints.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/counter/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="../../assets/plugins/wow-animations/js/wow.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/spin.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/ladda.min.js"></script>
		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-showcase4.js"></script>

		<script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>

    <script src="../wow-js/js/index.js"></script>
		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				MSfullWidth.initMSfullWidth();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();




			});

			//ANMAINT
			jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
			new WOW().init();
			});


		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/576e66a6b814591e0c917d60/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 1px; right: 5px; opacity: 1; cursor: pointer;"></div>
</body>
</html>

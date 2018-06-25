<?php
  session_start();
 
  require('../../db/connect.php');
  $headlink = "about-us";
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
	


	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<style type="text/css">

	.btn-u {

    border: 0;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    font-weight: 400;
    padding: 6px 13px;
    position: relative;
    background: #446cb3;
    white-space: nowrap;
    display: inline-block;
    text-decoration: none;
	}

	.title-v1 p {
    font-size: 20px;
    font-weight: 200;
}

	</style>


<body class="header-fixed header-fixed-space">
	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->

<?
	$sqltitlecorp1 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'title-head' " );
	$loadtitlecorp1 = mysql_fetch_array($sqltitlecorp1);


?>


		<div class="breadcrumbs-v4 img-v4-corporate text-center">
			<div class="container">
				<div class="title-v1 no-margin-bottom">
				<!-- <h2> About <strong><font color="#446cb3"> The i Mastermind </font></strong></h2> -->
				<? echo $loadtitlecorp1[key]; ?>
					
					<h4 class="no-margin-bottom"><font color="#000"><strong><? echo $loadtitlecorp1[value]; ?> </strong><br><? echo $loadtitlecorp1[value_custom]; ?> </font></h4>

					
				</div>
			</div>
		</div>
		
		<!-- about Theimastermind -->

		<div class="bg-color-light">
			<div class="container content-sm" >

				<!-- <div class="title-v1 no-margin-bottom">
				<h2> About<strong><font color="#446cb3">  The i Mastermind </font></strong></h2>
					
					<p class="no-margin-bottom"><strong>The i Mastermind Group Recruitment (Thailand) Co.,Ltd. </strong><br>standard certified in ISO 9001:2008 </p>

					</br></br>
				</div> -->

				<!-- <div class="headline-center margin-bottom-60">
					<h2>About The i Mastermind </h2>
					<p>Corporate Overviewv<br><strong>The i Mastermind Group Recruitment (Thailand) Co.,Ltd. </strong><br>standard certified in ISO 9001:2008 </p>
					</div> -->
					<?
					$sqldetailcorp1 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'detail-corp' " );
					$loaddetailcorp1 = mysql_fetch_array($sqldetailcorp1);

					$sqlbuttondetail = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'button-detail' " );
					$loadbuttondetail = mysql_fetch_array($sqlbuttondetail);

					$sqllinkyoutube = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'link-youtube' " );
					$loadlinkyoutube = mysql_fetch_array($sqllinkyoutube);
					?>

					<div class="row">
						<div class="col-sm-6 md-margin-bottom-50 title-v1">
							<p class="no-margin-bottom" style="text-align: justify;">  &nbsp;  &nbsp;  &nbsp;<? echo $loaddetailcorp1[value]; ?></p>
							<p class="no-margin-bottom" style="text-align: justify;">  &nbsp;  &nbsp;  &nbsp;<? echo $loaddetailcorp1[value_custom]; ?></p><br>
							
							<a href="<? echo $loadbuttondetail[value]; ?>" class="btn-u pull-left hidden-xs hidden-sm"><? echo $loadbuttondetail[key]; ?></a>
							<a href="<? echo $loadbuttondetail[value]; ?>" class="btn-u pull-left btn-block hidden-md hidden-lg "><? echo $loadbuttondetail[key]; ?></a>
						</div>
						<div class="col-sm-6">
							<div class="responsive-video">
							<iframe src="<? echo $loadlinkyoutube[key]; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>

							
						</div>
					</div><!--/end row-->
				</div>
		</div>

		<!-- end about theimastermind -->

		<!--=== Title v1 ===-->

					<?
					$sqldetail2 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'detail-2' " );
					$loaddetail2 = mysql_fetch_array($sqldetail2);
					
					?>




		<div class="container content-sm">
			<div class="title-v1 no-margin-bottom">
				<!-- <h2>Our <strong><font color="#446cb3">consultants specialize</font></strong></h2> -->
					<? echo $loaddetail2[key]; ?>
					<p class="no-margin-bottom"><strong><? echo $loaddetail2[value]; ?> </strong></p>
					<p class="no-margin-bottom"><? echo $loaddetail2[value_custom]; ?></p>
				</div>
			</div>
			<!--=== End Title v1 ===-->

					<?
					$sqlicon1 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-1' " );
					$loadicon1 = mysql_fetch_array($sqlicon1);

					$sqlicon2 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-2' " );
					$loadicon2 = mysql_fetch_array($sqlicon2);

					$sqlicon3 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-3' " );
					$loadicon3 = mysql_fetch_array($sqlicon3);

					$sqlicon4 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-4' " );
					$loadicon4 = mysql_fetch_array($sqlicon4);

					$sqlicon5 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-5' " );
					$loadicon5 = mysql_fetch_array($sqlicon5);

					$sqlicon6 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-6' " );
					$loadicon6 = mysql_fetch_array($sqlicon6);
					
					?>
			<!--=== Service Block v4 ===-->
			<div class="service-block-v4">
				<div class="container content-sm">
					<div class="row">
						<div class="col-md-4 col-xs-6 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon1[value_custom]; ?>"></i>
							<h3><? echo $loadicon1[key]; ?></h3>
							
						</div>
						<div class="col-md-4 col-xs-6 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon2[value_custom]; ?>"></i>
							<h3><? echo $loadicon2[key]; ?></h3>
							
						</div>
						<div class="col-md-4 col-xs-6 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon3[value_custom]; ?>"></i>
							<h3><? echo $loadicon3[key]; ?></h3>
							
						</div>
						<div class="col-md-12 service-desc md-margin-bottom-50 hidden-xs hidden-sm "><br></div>
						<div class="col-md-4 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon4[value_custom]; ?>"></i>
							<h3><? echo $loadicon4[key]; ?></h3>
							
						</div>
						<div class="col-md-4 col-xs-6 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon5[value_custom]; ?>"></i>
							<h3><? echo $loadicon5[key]; ?></h3>
							
						</div>
						<div class="col-md-4 col-xs-6 service-desc md-margin-bottom-50">
							<i class="fa <? echo $loadicon6[value_custom]; ?>"></i>
							<h3><? echo $loadicon6[key]; ?></h3>
							
						</div>
					</div><!--/end row-->
				</div><!--/end container-->
			</div>
			<!--=== End Service Block v4 ===-->
	

		 <!--=== Team v1 ===-->
		<!-- <div class="container content-md team-v1 " >

			<div class="title-v1 no-margin-bottom">
				<h2> Our<strong><font color="#446cb3"> Amazing Team</font></strong></h2>
					
					<p class="no-margin-bottom">Our aim is to “make a difference” to our client, our candidate and the market,<br>providing the highest standard of recruitment at an affordable rate.</p>

					</br></br>
				</div>

			<ul class="list-unstyled row " >
				<li class="col-sm-4 col-xs-12 md-margin-bottom-30">
					<div class="team-img">
						<img class="img-responsive" src="../../assets/img/team/1443110656.jpg" alt="" >
						<ul>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<h3>Jutamas Kingkate</h3>
					<h4> Founder / Senior Recruitment Manager</h4>
					<p></p>
				</li>
				<li class="col-sm-4 col-xs-12 md-margin-bottom-30">
					<div class="team-img">
						<img class="img-responsive" src="../../assets/img/team/1443110623.jpg" 
						 alt="">
						<ul>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<h3>Jaturon Kingkate</h3>
					<h4> Business Development Manager</h4>
					<p></p>
				</li>
				<li class="col-sm-4 col-xs-12 md-margin-bottom-30">
					<div class="team-img">
						<img class="img-responsive" src="../../assets/img/team/1440062185.jpg" 
						alt="">
						<ul>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<h3>Manlika Klaisomboon</h3>
					<h4> Business Development Executive</h4>
					<p></p>
				</li>
			</ul>
			<div class="title-v1 no-margin-bottom hidden-xs hidden-sm ">
			<br>
					<p class="no-margin-bottom"><font color="#446cb3">And if you think you’re the next amazing member of Team ,
					<br>you really should get in touch - we’re waiting for you!</font></p>
					</br>
				</div>

			<div class="title-v1 no-margin-bottom hidden-md hidden-lg">
			<br>
					<p class="no-margin-bottom"><font color="#446cb3">And if you think you’re the next <br> amazing member of Team ,
					<br>you really should get in touch <br> - we’re waiting for you!</font></p>
					</br>
				</div>


		</div> -->
		<!--=== End Team v1 ===-->
	

	
	
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

<?php
  session_start();
 
  require('../../db/connect.php');
  $headlink = "testimonials";
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Testimoninals| The i Mastermind </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

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
	
	<link rel="stylesheet" href="../../assets/css/pages/shortcode_timeline2.css">

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
</head>

<body class="header-fixed header-fixed-space">
	<?php

function returnDetailAll()
{

	$strSQL = "SELECT * FROM testimonials_detail ORDER BY tdid";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	mysql_close($objConnect);
	return $resultArray;
}

$resultAll = returnDetailAll();

//echo '<pre>';
//var_dump($resultCus);
//echo '</pre><hr />';


                
                        
                            

?>
	<div class="wrapper">

		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->

		<?
		
		$sqlheadtestimonials = mysql_query("SELECT * FROM testimonials WHERE language_code =  'th' AND location = 'head-testimonials' " );
		$loadheadtestimonials = mysql_fetch_array($sqlheadtestimonials);

		?>

		<div class="breadcrumbs-v4 img-v4-testimonials text-center">
			<div class="container">
				<div class="title-v1 no-margin-bottom">
				<? echo $loadheadtestimonials[key]; ?>
				<? echo $loadheadtestimonials[value]; ?>	
				</div>
			</div>
		</div>
		
		

	

		<div class="container content-sm hidden ">
			<!-- <div class="headline-center margin-bottom-60">
				<h2>What Our <strong><font color="446cb3">Clients Say?</font> </strong></h2>
				<p>We know we make big promises, but that's because we're good at keeping them.<br> You needn't take our word for it; we're always chuffed when people <br> we've helped are happy to tell us. Thank you to those for letting us know. </p>
				</div> -->

				<!-- Testimonials Wrap -->
				<div class="testimonials-v6 testimonials-wrap">
					<div class="row margin-bottom-50">
						<div class="col-md-12 margin-bottom-50">
							<div class="testimonials-info rounded-bottom bg-color-light">
								<img class="img-responsive rounded-x hidden-sm hidden-xs " src="../../assets/img/icons/Clients.png" alt="">
								<div class="testimonials-desc">
									<p>I had experience with iMastermind to find my new job in last 2 years. I felt that their service was every professional work with me. This recruiter can find job on new role to match with my qualification and requirement. I prefer and appreciate to deal with them. I have strongly recommended iMastermind Group Recruitment (Thailand) that you need to find the new opportunity with new job.</p>
									<strong>Candidate succeeded </strong>
									<span>CFO Position</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 md-margin-bottom-50">
							<div class="testimonials-info rounded-bottom bg-color-light">
								<img class="rounded-x hidden-sm hidden-xs" src="../../assets/img/icons/Clients.png" alt="">
								<div class="testimonials-desc">
									<p>iMastermind gives the service with service minded with the impressive care in client’s detail. They stay focus, attentive and trustworthy. If you are looking for the recruitment service with the extraordinary service & candidate profiles, iMastermind is one of good choices among other agencies.</p>
									<strong>Client</strong>
									<span>Telecommunication Industry</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="testimonials-info rounded-bottom bg-color-light">
								<img class="rounded-x hidden-sm hidden-xs" src="../../assets/img/icons/Clients.png" alt="">
								<div class="testimonials-desc">
									<p>iMastermind’s service is impressive. They are attentive to client’s needs, fast and determined to help us achieve our goals. If you need a professional partner, iMastermind would be a great choice.</p>
									<strong>Client</strong>
									<span>International NGO Sector</span>
								</div>
							</div>
						</div>
					</div><!--/end row-->

					<div class="row margin-bottom-20">
						
							<div class="col-md-6 md-margin-bottom-50">
							<div class="testimonials-info rounded-bottom bg-color-light">
								<img class="rounded-x hidden-sm hidden-xs" src="../../assets/img/icons/Clients.png" alt="">
								<div class="testimonials-desc">
									<p>I have experienced the service of iMastermind Group Recruitment (Thailand), their work is impressive, proactive and steady.</p>
									<strong>Client</strong>
									<span>Japanese Trading</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="testimonials-info rounded-bottom bg-color-light">
								<img class="rounded-x hidden-sm hidden-xs" src="../../assets/img/icons/Clients.png" alt="">
								<div class="testimonials-desc">
									<p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
									<strong>Japanese Trading Client </strong>
									<span>HR Manager</span>
								</div>
							</div>
						</div>
					</div><!--/end row-->
				</div>
				<!-- End Testimonials Wrap -->
			</div><!--/end container-->
                          

			<!-- <div class=" bg-color-light"> -->
			<div class="container content-sm hidden ">


				<!-- Testimonials Wrap -->
				<div class="testimonials-v6 testimonials-wrap">

					<div class="row margin-bottom-50">
						<div class="col-md-6 md-margin-bottom-50">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<img class="img-responsive center" src="../../assets/img/icons/testimonials/icon-02.png" >
							</div>
							<div class="col-md-4"></div>
						</div>
						<div class="col-md-6 ">
							<div class="testimonials-info rounded-bottom bg-color-light ">
								<div class="testimonials-desc">
									<p>iMastermind’s service is impressive. They are attentive to client’s needs, fast and determined to help us achieve our goals. If you need a professional partner, iMastermind would be a great choice.</p>
									<strong>Client</strong>
									<span>International NGO Sector</span>
								</div>
							</div>
						</div>
					</div><!--/end row-->

				
				</div>
				<!-- End Testimonials Wrap -->
			</div><!--/end container-->
			<!-- </div> -->

						
		<?php
		foreach ($resultAll as $result)
		{
			$bgcolor;
			if (($result["tdid"]%2)==0) {
				$bgcolor="bg-color-light";
				# code...
			} else {
				# code...
			}
			
		?>
			<div class="<?php echo $bgcolor;?>">
			<div class="container content-sm">
					<div class="row">
						<div class="col-md-4 md-margin-top-50">
						<!-- ใส่ Wow.js -->
							<div data-wow-duration="2s" data-wow-iteration="100" class="wow pulse">
							<img class="img-responsive pull-right" src="../../assets/img/icons/testimonials/<?php echo $result["value_custom2"];?>" width="50%" height="auto" alt="">
							</div>
						<!-- ใส่ Wow.js -->
						</div>
						<div class="col-md-7">
							<div class="headline-left margin-bottom-30">
								<h2 class="headline-brd"><?php echo $result["key"];?> <br> <span><?php echo $result["value"];?></span></h2>
								<p><?php echo $result["value_custom"];?></p>
							</div>
						</div><!--/end row-->
					</div>
			</div>
			</div>
			<?
			$bgcolor="";
			}
			?>
			
	
	
			
			
			

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

<?php
  session_start();
 
  require('../../db/connect.php');
  $headlink = "recruitment-procedure";
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>About Us - Recruitment Procedure | The i Mastermind </title>

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
	


	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">
	<link rel="stylesheet" href="../../assets/css/pages/shortcode_timeline2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	
  
	<style type="text/css">
	.g-bg-dark-blue1 {
    	background: #eee;
	}
	.g-bg-dark-blue1, .g-bg-dark-blue2 {
    color: #ccc;
	}
	.g-text-height-md {
    line-height: 24px;
	}
	.g-mb-60 {
    margin-bottom: 60px;
	}
	.g-heading-v7 h2, .g-heading-v7 .h2 {
    text-transform: uppercase;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 600;
    position: relative;
    padding-bottom: 40px;
    margin-bottom: 40px;
	}
	h2, .h2 {
    letter-spacing: 2px;
	}
	.g-heading-v7 .h2 .block-name {
    font-size: 12px;
    font-style: normal;
    display: block;
    color: #3949a0;
    margin-bottom: 20px;
    letter-spacing: 2px;
	}
	.g-text-height-lg {
    line-height: 54px;
	}
	.g-mb-20 {
    margin-bottom: 20px;
	}
	.steps-v1--lspace, .steps-v1--rspace {
    padding-left: 50px;
	}
	.g-no-mb {
    margin-bottom: 0;
	}
	.g-bg-dark-blue2 {
    background: #fff;
	}

	.g-bg-dark-blue1, .g-bg-dark-blue2 {
	    color: #ccc;
	}
	.steps-v1 {
	    position: relative;
	    padding: 25px 25px 25px 80px;
	    height: 200px;
	}
	h3.heading-sm {
    font-size: 16px;
    line-height: 20px;
	}
	.g-rounded-50x {
    border-radius: 50%;
	}
	.steps-v1__block {
	    top: 50%;
	    left: -50px;
	    width: 100px;
	    height: 100px;
	    margin-top: -50px;
	    position: absolute;
	    background: #446cb3;
	    border: solid 5px #446cb3;
	}
	.steps-v1__icon {
    top: 25px;
    left: 25px;
    color: #fff;
    font-size: 40px;
    position: absolute;
	}
	.steps-v1__img {
    width: 80px;
    height: 80px;
    margin-top: 5px;
    margin-left: 5px;
    opacity: 0;
    transition: all .3s;
	}

	

 	.collapse input {
    visibility: hidden;
	}

	.collapse.in input {
    visibility: visible;
	}
   

	</style>

</head>

<body class="header-fixed header-fixed-space">
	<div class="wrapper">

		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->



        <?
		
		$sqlheadrecruit = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'head-recruitment' " );
		$loadheadrecruit = mysql_fetch_array($sqlheadrecruit);

		?>
  
		

			<!--=== Title v1 ===-->
			<div class="container content-sm ">
			<div class="title-v1 no-margin-bottom">
				<? echo $loadheadrecruit[key]; ?>
					<p class="no-margin-bottom"><strong><? echo $loadheadrecruit[value]; ?> </strong></p>
				</div>
			</div>
			<!--=== End Title v1 ===-->


			<?
		
			$sqlstep1 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-1' " );
			$loadstep1 = mysql_fetch_array($sqlstep1);

			$sqlstep2 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-2' " );
			$loadstep2 = mysql_fetch_array($sqlstep2);

			$sqlstep3 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-3' " );
			$loadstep3 = mysql_fetch_array($sqlstep3);

			$sqlstep4 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-4' " );
			$loadstep4 = mysql_fetch_array($sqlstep4);

			$sqlstep5 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-5' " );
			$loadstep5 = mysql_fetch_array($sqlstep5);

			$sqlstep6 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-6' " );
			$loadstep6 = mysql_fetch_array($sqlstep6);

			?>

			<!--=== Service Block v4 ===-->
			<div class="service-block-v4 bg-color-light">
				<div class="container content-sm">
					<!-- Begin Content -->
				<div class="col-md-12">
					<ul class="timeline-v2">
						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 1</font> </strong></span></div>

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="cbp_tmicon rounded-x hidden-xs" >
									<img src="../../assets/hometheme/assets/img/icons/step/icon1.png">

								</i>
							</a>
							

							
							<div class="wow fadeIn cbp_tmlabel equal-height-column ">

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<h2><? echo $loadstep1[key]; ?></h2>
							</a>
								
								<div id="collapseOne" class="accordion-body collapse out">

									<p><? echo $loadstep1[value]; ?></p>
								
								</div>
								
								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>

						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 2</font> </strong></span></div>
							
							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">	
								<i class="cbp_tmicon rounded-x hidden-xs">
									<img src="../../assets/hometheme/assets/img/icons/step/icon2.png">
								</i>
							</a>

							<div class="wow fadeIn  cbp_tmlabel equal-height-column">

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<h2><? echo $loadstep2[key]; ?></h2>
							</a>
							
								<div id="collapseTwo" class="accordion-body collapse out">

									<p><? echo $loadstep2[value]; ?></p>
								
								</div>

								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>


						<!-- <li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 3</font> </strong></span></div>
							<i class="cbp_tmicon rounded-x hidden-xs"></i>
							<div class="wow fadeIn  cbp_tmlabel equal-height-column">
								<h2>Post Recruitment Plan</h2>
								<p>Once strategic planning is completed, double checking is needed. Reassure accuracy in planning and ready to get the plan reported.</p>
								
							</div>
						</li> -->


						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 3</font> </strong></span></div>
							
							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">

								<i class="cbp_tmicon rounded-x hidden-xs">
									<img src="../../assets/hometheme/assets/img/icons/step/icon3.png">
								</i>

							</a>

							<div class="wow fadeIn  cbp_tmlabel equal-height-column">

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<h2><? echo $loadstep3[key]; ?></h2>
							</a>


							<div id="collapseThree" class="accordion-body collapse out">

								<p><? echo $loadstep3[value]; ?></p>
							</div>
								
								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>
						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 4</font> </strong></span></div>

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">

								<i class="cbp_tmicon rounded-x hidden-xs">
									<img src="../../assets/hometheme/assets/img/icons/step/icon4.png">
								</i>
							</a>

							<div class="wow fadeIn  cbp_tmlabel equal-height-column">

								<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
									<h2><? echo $loadstep4[key]; ?></h2>
								</a>
								
								<div id="collapseFour" class="accordion-body collapse out">
									
									<p><? echo $loadstep4[value]; ?></p>
								
								</div>

								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>
						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 5</font> </strong></span></div>

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
								
								<i class="cbp_tmicon rounded-x hidden-xs" >
								
									<img src="../../assets/hometheme/assets/img/icons/step/icon5.png">

								</i>
							</a>

							<div class="wow fadeIn  cbp_tmlabel equal-height-column">
								
								<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
									<h2><? echo $loadstep5[key]; ?></h2>
								</a>
								
								<div id="collapseFive" class="accordion-body collapse out">
									<p><? echo $loadstep5[value]; ?></p>
								</div>
								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>
						<li class="equal-height-columns">
							<div class="wow fadeIn cbp_tmtime equal-height-column">
							<span></span> <span>Step <strong><font color="585f69"> 6</font> </strong></span></div>

							<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
								<i class="cbp_tmicon rounded-x hidden-xs">
								
									<img src="../../assets/hometheme/assets/img/icons/step/icon6.png">

								</i>
							</a>

							<div class="wow fadeIn  cbp_tmlabel equal-height-column">

								<a class="accordion-toggle accordion-arrow" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
									<h2><? echo $loadstep6[key]; ?></h2>
								</a>
								
								<div id="collapseSix" class="accordion-body collapse out">
									<p><? echo $loadstep6[value]; ?></p>
								</div>
								<!-- <div class="row">
									<div class="col-md-4">
										<img class="img-responsive" src="http://www.synergygbl.com/app/images/staffing/executive_search2.jpg" alt="">
										<div class="md-margin-bottom-20"></div>
									</div>
									<div class="col-md-8">
										<p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p>
										
									</div>
								</div> -->
							</div>
						</li>
					</ul>
				</div>
				<!-- End Content -->
				</div><!--/end container-->
			</div>
			<!--=== End Service Block v4 ===-->
	
			<!-- Processes -->
			<section id="processes" class="g-bg-dark-blue1" hidden>
				<div class="container content-md g-text-height-md">

					
					<div class="title-v1 no-margin-bottom">
						<h2>RECRUITMENT <strong><font color="#446cb3"> PROCEDURE</font></strong></h2>
						<p class="no-margin-bottom"><strong>We source the best talents for you! </strong></p>
					</div>
					<div class="margin-bottom-50"></div>
					

					<div class="row g-mb-20">
						<div class="col-md-6 g-mb-20 steps-v1--lspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 1.</span>Locating Job Vacancies And Evaluating Needs
									</h3>
								</li>
								<li><p>Needs must be evaluated first hand. Specification in clients’ needs lead to success in locating suitable candidates.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon fa fa-search"></i>
									<img class="steps-v1__img g-rounded-50x" src="assets/img-temp/testimonials/img1.jpg" alt="">
								</li>
							</ul>
						</div>

						<div class="col-md-6 steps-v1--rspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 2.</span>Planning
									</h3>
								</li>
								<li><p>Highly constructed recruitment plan involves interview questions, interview evaluation, references, strategies and maps that lead to the road of standout candidates. Get applications prepared and be ready to aim!</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon fa fa-pencil"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img2.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>

					<div class="row g-mb-50">
						<div class="col-md-6 g-mb-20 steps-v1--lspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 3.</span>Post Recruitment Plan
									</h3>
								</li>
								<li><p>Once strategic planning is completed, double checking is needed. Reassure accuracy in planning and ready to get the plan reported.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon icon-rocket"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img3.jpg" alt="">
								</li>
							</ul>
						</div>

						<div class="col-md-6 steps-v1--rspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 4.</span>Applications Review
									</h3>
								</li>
								<li><p>Candidates’ applications applied to the system and will be considered.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon icon-layers"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img4.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>

					<div class="row g-mb-50">
						<div class="col-md-6 g-mb-20 steps-v1--lspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 5.</span>Conducting Interview
									</h3>
								</li>
								<li><p>Candidate interview will be conducted after applications approval from Staff Affirmative Action.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon icon-rocket"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img3.jpg" alt="">
								</li>
							</ul>
						</div>

						<div class="col-md-6 steps-v1--rspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 6.</span>Choosing The Candidate By Clients Process
									</h3>
								</li>
								<li><p>Discussion amongst committee will be made. Committee members decide hiring candidates that meet the criteria.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon icon-layers"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img4.jpg" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="row g-mb-50">
						<div class="col-md-3 g-mb-20 steps-v1--lspace">
						</div>
						<div class="col-md-6 g-mb-20 steps-v1--lspace">
							<ul class="list-unstyled steps-v1 g-bg-dark-blue2 g-no-mb">
								<li>
									<h3 class="heading-sm h3">
										<span>STEP 7.</span>Recruitment Summary
									</h3>
								</li>
								<li><p>Summarize results once recruitment is completed. Terms and conditions will be informed between employer and employee.</p></li>
								<li class="steps-v1__block g-rounded-50x">
									<i class="steps-v1__icon icon-rocket"></i>
									<img class="steps-v1__img img-responsive g-rounded-50x" src="assets/img-temp/testimonials/img3.jpg" alt="">
								</li>
							</ul>
						</div>
						<div class="col-md-3 g-mb-20 steps-v1--lspace">
						</div>
					
					</div>

					<!-- <div class="row text-center page-scroll">
						<div class="col-sm-8 col-sm-offset-2">
							<p>Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum. Donec molestie, lorem nec sollicitudin elementum <br>
							tristique senectus et netus et malesuada fames ac turpis egestas.</p><br>
							<a href="#projects" class="btn-u btn-u--dark-blue">LEARN MORE</a>
						</div>
					</div> -->
				</div>
			</section>
			<!-- End Processes -->
		
	

	
	
	
			
			
			

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

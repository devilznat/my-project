<?php
  session_start();
  require('../../db/connect.php');
  $headlink = "contact-us";
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
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

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
		

		
		<!-- Google Map -->
		<div id="map" class="map">
		
		</div><!---/map-->
		<!-- End Google Map -->
		
		

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<div class="headline"><h2>Contact Us</h2></div>
					   
					<form  id="form" name="form" class="sky-form">
					<input type="text" name="type" value="contact-us" hidden="">
					<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text1" id="text1" placeholder="First name">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text2" id="text2" placeholder="Last name">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-envelope"></i>
										<input type="email" name="text3" id="text3" placeholder="E-mail">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-phone"></i>
										<input type="tel" name="text4" id="text4" placeholder="Phone">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-building"></i>
										<input type="Company name" name="text5" id="text5" placeholder="Company Name">
									</label>
								</section>
								<section class="col col-6">
									<label class="select">
										<select name="text6" id="text6">
											<option value="0" selected disabled>Subject</option>
											<option value="Job Vacancies">Job Vacancies</option>
											<option value="Recruitment & Headhunter Service">Recruitment & Headhunter Service</option>
											<option value="Outsourcing & Consulting Service">Outsourcing & Consulting Service</option>
											<option value="Referral Program">Referral Program</option>
											<option value="Others">Others</option>
											
										</select>
										<i></i>
									</label>
								</section>

							</div>
							<div class="row">
							<section class="col-md-12">
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>
									<textarea rows="5" name="text7" id="text7" placeholder="Tell us about your project"></textarea>
								</label>
								</section>
							</div>
						</fieldset>
						<footer>
							<a class="btn-u" onclick="save();">Send request</a>
							<div class="progress"></div>
						</footer>
				</form>

				</div><!--/col-md-9-->

				<?
				$sqlcontactDetail1 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'th' AND location = 'contact-detail1' " );
				$loadcontactDetail1 = mysql_fetch_array($sqlcontactDetail1);

				$sqlcontactDetail2 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'th' AND location = 'contact-detail2' " );
				$loadcontactDetail2 = mysql_fetch_array($sqlcontactDetail2);
				?>


				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2><? echo $loadcontactDetail1[key]; ?></h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i><? echo $loadcontactDetail1[value]; ?></a></li>
						<li><a href="#"><i class="fa fa-envelope"></i><? echo $loadcontactDetail1[value_custom]; ?></a></li>
						<li><a href="#"><i class="fa fa-phone"></i><? echo $loadcontactDetail1[value_custom2]; ?></a></li>
						<li><a href="#"><i class="fa fa-globe"></i><? echo $loadcontactDetail1[value_custom3]; ?></a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2><? echo $loadcontactDetail2[key]; ?></h2></div>
					<ul class="list-unstyled margin-bottom-30">
					<li>
						<strong>Monday-Friday:</strong> <? echo $loadcontactDetail2[value]; ?></li>
						<li><strong>Saturday:</strong> <? echo $loadcontactDetail2[value_custom]; ?></li>
						<li><strong>Sunday:</strong> <? echo $loadcontactDetail2[value_custom2]; ?></li>
					</ul>

					
				</div><!--/col-md-3-->
			</div><!--/row-->

			
		</div><!--/container-->
		<!--=== End Content Part ===-->

		
	
	
			
			
			

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
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="../../assets/plugins/gmap/gmap.js"></script>

		
		<script type="text/javascript" src="assets/js/forms/order.js"></script>
	<script type="text/javascript" src="assets/js/forms/review.js"></script>
	<script type="text/javascript" src="assets/js/forms/checkout.js"></script>
		
		<script type="text/javascript">
		
		function save(){
        	
		var form = new FormData($('#form')[0]);
		form.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success:  function(data){
		        //alert("---"+data);
		        alert("Data has been SEND successfully.");
		      		 	var sendfirstname = $('#text1').val();
				        var sendlastname = $('#text2').val();
				        var sendemail = $('#text3').val();
				        var sendphone = $('#text4').val();
				        var sendcomname = $('#text5').val();
				        var sendsubject = $('#text6').val();
				        var sendcom = $('#text7').val();

				        var data = "?firstname="+sendfirstname+"&lastname="+sendlastname+"&email="+sendemail+"&phone="+sendphone+"&comname="+sendcomname+"&subject="+sendsubject+"&message="+sendcom;


		        window.location.assign("http://theimastermind.netdesignhost.com/page/email-templates/sendmail-contactus.php"+data);
		    }
		});

		 }



		</script>
		
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
		<!-- map -->
		<?
		$sqlcontactMap = mysql_query("SELECT * FROM contact_us WHERE language_code =  'en' AND location = 'map-contact' " );
		$loadcontactMap = mysql_fetch_array($sqlcontactMap);
		?>	
		<script type="text/javascript">
			map = new GMaps({
  			div: '#map',
  			lat: 13.7405639,
  			lng: 100.5891698,
			});

			  map.addMarker({
		        lat: 13.7389473,
		        lng: 100.5882395,
		        icon:"../../assets/img/icons/<? echo $loadcontactMap[value_custom2]; ?>",
		        title: 'Marker with InfoWindow',
		        infoWindow: {
		          content: '<H4><strong><? echo $loadcontactMap[key]; ?><strong></h4><h5><? echo $loadcontactMap[value]; ?></h5><a href="<? echo $loadcontactMap[value_custom]; ?>"> Get Direction  </a>'
		        }
		      });   
		    


		</script>
		<!-- end map -->
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

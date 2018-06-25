<?
session_start();
  require('../../db/connect.php');
  $headlink = "find-talents";
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Find talents | The i Mastermind </title>

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

	<style type="text/css">
	label {
    	color: #555;
	}
	.btn-u {
	    font-size: 18px;
	}
	</style>


<body class="header-fixed header-fixed-space">
	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->
		

		<div class="breadcrumbs-v4 img-v4-findtalents text-center">
			<div class="container">
				<div class="title-v1 no-margin-bottom">
				<h2>  <strong><font color="#446cb3"> Find Talents And </font></strong>
				<br>Achieve Your Business Goals</h2>		
				</div>
			</div>
		</div>
		

		
		
		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-12 mb-margin-bottom-30">
					<div class="headline"><h2>Request For Talent</h2></div>
					   
					<form  id="form" name="form" class="sky-form">
					<input type="text" name="type" value="find-talents" hidden="">
					<!-- <fieldset> -->
							<div class="row">
								<section class="col-md-12">
									<label>Contact Person's Name</label>
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text1" id="text1" placeholder="Name">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label>E-mail</label>
									<label class="input">
										<i class="icon-prepend fa fa-envelope"></i>
										<input type="email" name="text2" id="text2" placeholder="E-mail">
									</label>
								</section>
								<section class="col col-6">
									<label>Phone</label>
									<label class="input">
										<i class="icon-prepend fa fa-phone"></i>
										<input type="tel" name="text3" id="text3" placeholder="Phone">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label>Country</label>
									<label class="input">
										<i class="icon-prepend fa fa-building"></i>
										<input type="Country" name="text4" id="text4" placeholder="Country">
									</label>
								</section>
								<section class="col col-6">
									<label>Position Looking For</label>
									<label class="input">
										<i class="icon-prepend fa fa-building"></i>
										<input type="Text" name="text5" id="text5" placeholder="Position Looking For">
									</label>
								</section>

							</div>
							<div class="row">
							<section class="col-md-12">
								<label>Message</label>
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>
									<textarea rows="5" name="text6" id="text6" placeholder="Message"></textarea>
								</label>
								</section>
							</div>
						<!-- </fieldset> -->

						<div class="row">
							<section class="col-md-3 col-sm-12 col-xs-12">
								<a class="btn-u btn-block rounded-2x" onclick="save();">Send request</a>
							</section>
						</div>

						<!-- <footer>
							<button type="submit" class="btn-u btn-block col-2">Send request</button>
							<div class="progress"></div>
						</footer> -->
				</form>

				</div><!--/col-md-9-->

		
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
		        // location.reload(true);
		        		var sendname = $('#text1').val();
				        var sendemail = $('#text2').val();
				        var sendphone = $('#text3').val();
				        var sendcountry = $('#text4').val();
				        var sendposition = $('#text5').val();
				        var sendmessage = $('#text6').val();
				        var data = "?name="+sendname+"&email="+sendemail+"&phone="+sendphone+"&country="+sendcountry+"&position="+sendposition+"&message="+sendmessage;

				window.location.assign("http://theimastermind.netdesignhost.com/page/email-templates/sendmail-findtalents.php"+data);
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

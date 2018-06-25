<?php
  session_start();
 
  require('../../db/connect.php');

  if(!isset($_SESSION['user_id']))
	{
		header("location:backend.php");
		exit();
	}


//*** Update Last Stay in Login System
	$sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	$query = mysqli_query($con,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Admin Home Page  | The i Mastermind </title>

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
	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">
	
	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<!-- css form  -->
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<style type="text/css">
		.sky-form section {
     margin-bottom: 0px;
	}
	.tab-v1 .nav-tabs {
	    border-bottom: solid 2px #ffffff;
	}
	</style>




<body class="header-fixed header-fixed-space">
	<div class="wrapper">
		<!--=== Header v6 ===-->
		<div class="header-v6 header-classic-white header-sticky">
			<!-- Navbar -->
			<div class="navbar mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="menu-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Navbar Brand -->
						<div class="navbar-brand">
						<a href="../en/index">
								<img class="img-responsive  " src="../../assets/img/logo/logo1.png" alt="Logo" width="auto" height="60">  
						</a>
							 
						</div>

						<!-- ENd Navbar Brand -->



						<!-- Header Inner Right -->
						<div class="header-inner-right">
							
						</div>
						<!-- End Header Inner Right -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="menu-container">
							<ul class="nav navbar-nav">

					<!-- NEWSLETTRS -->
					<li class="">
						<a href="#" target="_blank" >
						<i class="fa fa-user" aria-hidden="true"></i>

							Admin 
						</a>
					</li>
					<!-- End NEWSLETTRS -->
								
					<!-- NEWSLETTRS -->
					<li class="">
						<a href="logout" target="" >
							Logout
						</a>
					</li>
					<!-- End NEWSLETTRS -->
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->

		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Testimonials Home Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->
<?

	$sqltitletestimonials = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'titletestimonials' " );
	$loadtitletestimonials = mysql_fetch_array($sqltitletestimonials);

	$sqlclientsay = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'clientsay' " );
	$loadclientsay = mysql_fetch_array($sqlclientsay);

	$sqlcandidatesay = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'candidatesay' " );
	$loadcandidatesay = mysql_fetch_array($sqlcandidatesay);

	$sqltitletestimonialsth = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'titletestimonials' " );
	$loadtitletestimonialsth = mysql_fetch_array($sqltitletestimonialsth);

	$sqlclientsayth = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'clientsay' " );
	$loadclientsayth = mysql_fetch_array($sqlclientsayth);

	$sqlcandidatesayth = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'candidatesay' " );
	$loadcandidatesayth = mysql_fetch_array($sqlcandidatesayth);

	
?>

		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

						<!-- testimonials homepage -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Details Testimonials HomePage</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-test1" data-toggle="tab">Engish</a></li>
									<li><a href="#th-test1" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-test1">

									<!-- 	Details Testimonials Eng -->
									 	<form class="sky-form" name="formeng" id="formeng">
									 	<input type="text" name="type" id="type" value="testimonials-homepage-eng" hidden>

										<section class="col-md-12">
											<h4><label>Details Testimonials ENG </label></h4>
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
												<input type="text" name="texttitle1en" id="texttitle1en" value="<? echo $loadtitletestimonials[key]; ?>">
											</label>
										</section>
									
										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails1en" id="textdetails1en" ><? echo $loadtitletestimonials[value]; ?></textarea>
											</label>
										</section>

										<br>
										<section class="col-md-12"><hr>
											<h4><label>Details Client ENG </label></h4>
										</section>

										<section class="col-md-12">
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
												<input type="text" name="texttitle2-en" id="texttitle2-en" value="<? echo $loadclientsay[key]; ?>">
											</label>
										</section>

										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails2-en" id="textdetails2-en" >
												<? echo $loadclientsay[value]; ?>
												</textarea>
											</label>
										</section>

										<br>
										<section class="col-md-12"><hr><h4><label>Details Candidate ENG </label></h4></section>
										<section class="col-md-12">
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
												<input type="text" name="texttitle3-en" id="texttitle3-en" value="<? echo $loadcandidatesay[key]; ?>">
											</label>
										</section>
						
										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails3-en" id="textdetails3-en" ><? echo $loadcandidatesay[value]; ?></textarea>
											</label>
										</section>



										<br>

										<div class="col-md-3">
										<br>
										<a class="btn-u " onclick="saveeng();" >save</a>
										
										</form>	</div>
										</div>
										
										
									<!-- 	Details testimonials Eng -->
									<div class="tab-pane fade in" id="th-test1">

									<!-- 	Details Testimonials thai -->
									 	<form class="sky-form" name="formthai" id="formthai">
									 	<input type="text" name="type" id="type" value="testimonials-homepage-th" hidden>
									 	<section class="col-md-12"><h4><label>Details Testimonials TH  </label></h4></section>
										<section class="col-md-12">
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
											<input type="text" name="texttitle1th" id="texttitle1th" value="<? echo $loadtitletestimonialsth[key]; ?>">
											</label>
										</section>
									
										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails1th" id="textdetails1th" ><? echo $loadtitletestimonialsth[value]; ?></textarea>
											</label>
										</section>
										<br>
										<section class="col-md-12"><hr><h4><label>Details Client TH </label></h4></section>
										<section class="col-md-12">
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
												<input type="text" name="texttitle2-th" id="texttitle2-th" value="<? echo $loadclientsayth[key]; ?>">
											</label>
										</section>
										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails2-th" id="textdetails2-th" ><? echo $loadclientsayth[value]; ?></textarea>
											</label>
										</section>

										<br>
										<section class="col-md-12"><hr><h4><label>Details Candidate TH </label></h4></section>
										<section class="col-md-12">
											<label class="label"><h4>Title Testimonals</h4> </label>
											<label class="input">
												<input type="text" name="texttitle3-th" id="texttitle3-th" value="<? echo $loadcandidatesayth[key]; ?>">
											</label>
										</section>
						
										<section class="col-md-12">
											<label class="label"><h4>Details</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="textdetails3-th" id="textdetails3-th" ><? echo $loadcandidatesayth[value]; ?></textarea>
											</label>
										</section>

										<br>

										<div class="col-md-3">
										<br>
										<a class="btn-u " onclick="savethai();" >save</a></div>
										</form>
										</div>
											
									<!-- 	Details testimonials Thai -->
										

									</div>
									
								</div>
							</div>

							
						</div>
					</div>
					<!-- End testimonials homepage  -->





						



					
					

				</div>
				<!-- end contect -->

			</div>
		</div>
			
			

			<!--=== Footer v6 ===-->
			<div id="footer-v6" class="footer-v6">

				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-8 sm-margon-bottom-10">
								<ul class="list-inline terms-menu">
									<li class="silver"><font >© Copyright 2015 The i Mastermind Group Recruitment (Thailand) Co., Ltd.</font></li>
									<!-- <li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy and Policy</a></li>
									<li><a href="#">License</a></li>
									<li><a href="#">Support</a></li> -->
								</ul>
							</div>
							<div class="col-md-4">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--=== End Footer v6 ===-->
		</div><!--/wrapper-->



		<!-- JS Global Compulsory -->
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery.parallax.js"></script>
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

		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
	
	


		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				
			});

		</script>


		<script type="text/javascript"> 


		 function saveeng(){
        	
		var form = new FormData($('#formeng')[0]);
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
		        alert("Data Engish has been updated successfully.");
		        location.reload(true);
		    	}
			});
		 }

		function savethai(){
        	
		var form = new FormData($('#formthai')[0]);
		form.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success:  function(data){
		        // alert("---"+data);
		        alert("Data Thai has been updated successfully.");
		        location.reload(true);
		    	}
			});
		}

		</script>



		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

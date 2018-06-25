<?
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
				<h1 class="pull-left">Our Service Home Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<?
	$sqlourservice1 = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'ourservice-1' " );
	$loadourservice1 = mysql_fetch_array($sqlourservice1);

	$sqlourservice2 = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'ourservice-2' " );
	$loadourservice2 = mysql_fetch_array($sqlourservice2);
	
	$sqlourservice3 = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'ourservice-3' " );
	$loadourservice3 = mysql_fetch_array($sqlourservice3);

	$sqlourservice1th = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-1' " );
	$loadourservice1th = mysql_fetch_array($sqlourservice1th);

	$sqlourservice2th = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-2' " );
	$loadourservice2th = mysql_fetch_array($sqlourservice2th);
	
	$sqlourservice3th = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-3' " );
	$loadourservice3th = mysql_fetch_array($sqlourservice3th);
		?>


		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

						<!-- Our Service homepage -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Our Service HomePage</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-our" data-toggle="tab">Engish</a></li>
									<li><a href="#th-our" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-our">
									 	<div class="col-md-12">
									 		<h4><label>Elements 1 Eng</label></h4>
									 		<form class="sky-form" name="formeng" id="formeng">
									 			<input type="text" name="type" id="type" value="ourservice-homepage-eng" hidden>

												<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameeng-1" id="textnameeng-1" value="<? echo $loadourservice1[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input type="text" name="texticoneng-1" id="texticoneng-1" value="<? echo $loadourservice1[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailseng-1" id="textdetailseng-1"><? echo $loadourservice1[value]; ?></textarea>
													</label>
												</section>
											<hr>

									 		<h4><label>Elements 2 Eng</label></h4>
									 			<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameeng-2" id="textnameeng-2"  value="<? echo $loadourservice2[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input name="texticoneng-2" id="texticoneng-2" type="text" value="<? echo $loadourservice2[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailseng-2" id="textdetailseng-2"><? echo $loadourservice2[value]; ?></textarea>
													</label>
												</section>
											<hr>
									 		<h4><label>Elements 3 Eng</label></h4>
									 			<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameeng-3" id="textnameeng-3"  value="<? echo $loadourservice3[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input type="text" name="texticoneng-3" id="texticoneng-3"  value="<? echo $loadourservice3[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailseng-3" id="textdetailseng-3" ><? echo $loadourservice3[value]; ?></textarea>
													</label>
												</section>
											
												<br>
									 		<!-- <button type="button" name="sendeng" id="sendeng" class="btn-u ">Save</button> -->
									 		<a class="btn-u " onclick="saveeng();" >save</a>
											</form>

									 	</div>


										
									</div>
									<div class="tab-pane fade in" id="th-our">

											<div class="col-md-12">
									 		<h4><label>Elements 1 Thai</label></h4>
									 		<form class="sky-form" name="formthai" id="formthai">
									 			<input type="text" name="type" id="type" value="ourservice-homepage-th" hidden>

												<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameth-1" id="textnameth-1"  value="<? echo $loadourservice1th[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input type="text" name="texticonth-1" id="texticonth-1"  value="<? echo $loadourservice1th[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailsth-1" id="textdetailsth-1" ><? echo $loadourservice1th[value]; ?></textarea>
													</label>
												</section>
											<hr>

									 		<h4><label>Elements 2 Thai</label></h4>
									 			<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameth-2" id="textnameth-2"  value="<? echo $loadourservice2th[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input type="text" name="texticonth-2" id="texticonth-2"   value="<? echo $loadourservice2th[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailsth-2" id="textdetailsth-2"><? echo $loadourservice2th[value]; ?></textarea>
													</label>
												</section>
											<hr>
									 		<h4><label>Elements 3 Thai</label></h4>
									 			<section>
													<label class="label"><h4>Name </h4> </label>
													<label class="input">
														<i class="icon-prepend fa fa-font"></i>
														<input type="text" name="textnameth-3" id="textnameth-3"  value="<? echo $loadourservice3th[key]; ?> ">
													</label>
												</section>
												<div class="row">
												<section class="col col-6">
													<label class="label"><h4>Icons </h4> </label>
													<label class="input">
														
														<input type="text" name="texticonth-3" id="texticonth-3"   value="<? echo $loadourservice3th[value_custom]; ?> ">
													</label>
												</section>
												<section class="col col-6">
													<br><br><br>
													*Icon  : icon-_____

													
												</section>
												</div>
												<section>
													<label class="label"><h4>Details</h4> </label>
													<label class="textarea">
														<i class="icon-append fa fa-comment"></i>
														<textarea rows="4" name="textdetailsth-3" id="textdetailsth-3"><? echo $loadourservice3th[value]; ?></textarea>
													</label>
												</section>
											
												<br>
									 		<!-- <button type="button" name="sendth" id="sendth" class="btn-u ">Save</button> -->
									 		<a class="btn-u " onclick="savethai();" >save</a>
											</form>

									 	</div>
										

									</div>
									
								</div>
							</div>

							
						</div>
					</div>
					<!-- End Our Service homepage  -->

					
					

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
		        //alert("---"+data);
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

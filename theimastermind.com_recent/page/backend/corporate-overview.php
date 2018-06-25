<?
 session_start();
 
 require('../../db/connect.php');

if(!isset($_SESSION['user_id']))
	{
		header("location:backend.php");
		exit();
	}
	
	// //*** Update Last Stay in Login System
	// $sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	// $query = mysqli_query($con,$sql);

	// //*** Get User Login
	// $strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	// $objQuery = mysqli_query($con,$strSQL);
	// $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);


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
	.img-user{
		padding-left: 55px;
	}
	.btn-user{
		padding-top: 15px;
	}

	/*tab eng/th*/
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
						<a href="logout.php" target="" >
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
				<h1 class="pull-left">Corprate Overview</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<?
	$sqlcorpo1 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'title-head' " );
	$loadcorpo1 = mysql_fetch_array($sqlcorpo1);

	$sqlcorpo2 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'detail-corp' " );
	$loadcorpo2 = mysql_fetch_array($sqlcorpo2);

	$sqlcorpo3 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'button-detail' " );
	$loadcorpo3 = mysql_fetch_array($sqlcorpo3);

	$sqlcorpo4 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'link-youtube' " );
	$loadcorpo4 = mysql_fetch_array($sqlcorpo4);

	$sqlcorpo5 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'detail-2' " );
	$loadcorpo5 = mysql_fetch_array($sqlcorpo5);

	$sqlcorpo6 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-1' " );
	$loadcorpo6 = mysql_fetch_array($sqlcorpo6);

	$sqlcorpo7 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-2' " );
	$loadcorpo7 = mysql_fetch_array($sqlcorpo7);

	$sqlcorpo8 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-3' " );
	$loadcorpo8 = mysql_fetch_array($sqlcorpo8);

	$sqlcorpo9 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-4' " );
	$loadcorpo9 = mysql_fetch_array($sqlcorpo9);

	$sqlcorpo10 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-5' " );
	$loadcorpo10 = mysql_fetch_array($sqlcorpo10);

	$sqlcorpo11 = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'en' AND location = 'icon-6' " );
	$loadcorpo11 = mysql_fetch_array($sqlcorpo11);



	$sqlcorpo1th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'title-head' " );
	$loadcorpo1th = mysql_fetch_array($sqlcorpo1th);

	$sqlcorpo2th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'detail-corp' " );
	$loadcorpo2th = mysql_fetch_array($sqlcorpo2th);

	$sqlcorpo3th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'button-detail' " );
	$loadcorpo3th = mysql_fetch_array($sqlcorpo3th);

	$sqlcorpo4th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'link-youtube' " );
	$loadcorpo4th = mysql_fetch_array($sqlcorpo4th);

	$sqlcorpo5th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'detail-2' " );
	$loadcorpo5th = mysql_fetch_array($sqlcorpo5th);

	$sqlcorpo6th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-1' " );
	$loadcorpo6th = mysql_fetch_array($sqlcorpo6th);

	$sqlcorpo7th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-2' " );
	$loadcorpo7th = mysql_fetch_array($sqlcorpo7th);

	$sqlcorpo8th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-3' " );
	$loadcorpo8th = mysql_fetch_array($sqlcorpo8th);

	$sqlcorpo9th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-4' " );
	$loadcorpo9th = mysql_fetch_array($sqlcorpo9th);

	$sqlcorpo10th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-5' " );
	$loadcorpo10th = mysql_fetch_array($sqlcorpo10th);

	$sqlcorpo11th = mysql_query("SELECT * FROM corporate_overview WHERE language_code =  'th' AND location = 'icon-6' " );
	$loadcorpo11th = mysql_fetch_array($sqlcorpo11th);
	
	
		?>



		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

					<!-- Corprate Overview -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Info Corprate Overview </h3>
						</div>
						<div class="panel-body">

							<div class="tab-v1">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-corprateoverview1" data-toggle="tab">Engish</a></li>
									<li><a href="#th-corprateoverview1" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-corprateoverview1">
										<form class="sky-form" name="formeng" id="formeng">
										<input type="text" name="type" id="type" value="corpo-eng" hidden>
										<div class="col-md-12">
										<section>
											<label class="label">Title Corprate Overview </label>
											
											<label class="textarea textarea-expandable">
											<textarea name="text1" id="text1" rows="3"><? echo $loadcorpo1[key]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Corprate Overview </label>
											<label class="textarea textarea-expandable">
											<textarea name="text2" id="text2" rows="3"><? echo $loadcorpo2[value]; ?></textarea>
											</label>
										</section>
										<section>
											<label class="label"> Main Corprate Overview </label>
											<label class="textarea textarea-expandable">
											<textarea name="text3" id="text3" rows="5"><? echo $loadcorpo2[value_custom]; ?></textarea>
											</label>
										</section>	
										</div>
										<div class="col-md-6">
											<label class="label"> Name Button  </label>
											<label class="input">
												<input name="text4" id="text4" type="text" value="<? echo $loadcorpo3[key]; ?>">
											</label>
										</div>	
										<div class="col-md-6">
											<label class="label"> Link Button  </label>
											<label class="input">
												<input name="text5" id="text5" type="text" value="<? echo $loadcorpo3[value]; ?>">
											</label>
										</div>
										
										<div class="col-md-6"><br>
											<div class=" responsive-video">
											<iframe src="<? echo $loadcorpo4[key]; ?>" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
										</div>

										<div class="col-md-6"><br>
											<label class="label"> Link Youtube Video  </label>
											<label class="input">
											<input  name="text6" id="text6" type="text" value="<? echo $loadcorpo4[key]; ?>">
											</label>
										</div>
										<div class="col-md-12"><HR></div>
										<div class="col-md-12">
										<section>
											<label class="label">Title Corprate Overview 2 </label>
											<label class="textarea textarea-expandable">
											<textarea  name="text7" id="text7" rows="3"><? echo $loadcorpo5[key]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Main Corprate Overview 2 [Bold]</label>
											<label class="textarea textarea-expandable">
											<textarea name="text8" id="text8" rows="3"><? echo $loadcorpo5[value]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Main Corprate Overview 2 [Regular]</label>
											<label class="textarea textarea-expandable">
											<textarea name="text9" id="text9" rows="5"><? echo $loadcorpo5[value_custom]; ?></textarea>
											</label>
										</section>
										</div>
										<div class="col-md-12">
										<label class="label"> Icon & Text </label>
											<section class="col col-2">
											<label class="label"> Icon  1 </label>
											<label class="input">
												<input name="text10" id="text10" type="text"  value="<? echo $loadcorpo6[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 1 </label>
											<label class="input">
												<input name="text11" id="text11" type="text" value="<? echo $loadcorpo6[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  2 </label>
											<label class="input">
												<input  name="text12" id="text12" type="text" value="<? echo $loadcorpo7[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 2 </label>
											<label class="input">
												<input  name="text13" id="text13" type="text" value="<? echo $loadcorpo7[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  3 </label>
											<label class="input">
												<input name="text14" id="text14" type="text" value="<? echo $loadcorpo8[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 3 </label>
											<label class="input">
												<input name="text15" id="text15" type="text" value="<? echo $loadcorpo8[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  4 </label>
											<label class="input">
												<input name="text16" id="text16" type="text" value="<? echo $loadcorpo9[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 4 </label>
											<label class="input">
												<input name="text17" id="text17" type="text" value="<? echo $loadcorpo9[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  5 </label>
											<label class="input">
												<input name="text18" id="text18" type="text" value="<? echo $loadcorpo10[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 5 </label>
											<label class="input">
												<input name="text19" id="text19" type="text" value="<? echo $loadcorpo10[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  6 </label>
											<label class="input">
												<input name="text20" id="text20" type="text" value="<? echo $loadcorpo11[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 6 </label>
											<label class="input">
												<input name="text21" id="text21" type="text" value="<? echo $loadcorpo11[key]; ?>">
											</label>
											</section>
										</div>	

										<div class="col-md-3">
											</br>
											<a class="btn-u " onclick="saveeng();" >save</a>
										</div>					
											
									</form>
										
									</div>
									<div class="tab-pane fade in" id="th-corprateoverview1">
										<form class="sky-form" name="formthai" id="formthai">
										<input type="text" name="type" id="type" value="corpo-th" hidden>
										<div class="col-md-12">
										<section>
											<label class="label">Title Corprate Overview </label>
											
											<label class="textarea textarea-expandable">
											<textarea name="text1th" id="text1th" rows="3"><? echo $loadcorpo1th[key]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Corprate Overview </label>
											<label class="textarea textarea-expandable">
											<textarea name="text2th" id="text2th" rows="3"><? echo $loadcorpo2th[value]; ?></textarea>
											</label>
										</section>
										<section>
											<label class="label"> Main Corprate Overview </label>
											<label class="textarea textarea-expandable">
											<textarea name="text3th" id="text3th" rows="5"><? echo $loadcorpo2th[value_custom]; ?></textarea>
											</label>
										</section>	
										</div>
										<div class="col-md-6">
											<label class="label"> Name Button  </label>
											<label class="input">
												<input name="text4th" id="text4th" type="text" value="<? echo $loadcorpo3th[key]; ?>">
											</label>
										</div>	
										<div class="col-md-6">
											<label class="label"> Link Button  </label>
											<label class="input">
												<input name="text5th" id="text5th" type="text" value="<? echo $loadcorpo3th[value]; ?>">
											</label>
										</div>
										
										<div class="col-md-6"><br>
											<div class=" responsive-video">
											<iframe src="<? echo $loadcorpo4[key]; ?>" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
											</div>
										</div>

										<div class="col-md-6"><br>
											<label class="label"> Link Youtube Video  </label>
											<label class="input">
											<input  name="text6th" id="text6th" type="text" value="<? echo $loadcorpo4th[key]; ?>">
											</label>
										</div>
										<div class="col-md-12"><HR></div>
										<div class="col-md-12">
										<section>
											<label class="label">Title Corprate Overview 2 </label>
											<label class="textarea textarea-expandable">
											<textarea  name="text7th" id="text7th" rows="3"><? echo $loadcorpo5th[key]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Main Corprate Overview 2 [Bold]</label>
											<label class="textarea textarea-expandable">
											<textarea name="text8th" id="text8th" rows="3"><? echo $loadcorpo5th[value]; ?></textarea>
											</label>
										</section>	
										<section>
											<label class="label"> Main Corprate Overview 2 [Regular]</label>
											<label class="textarea textarea-expandable">
											<textarea name="text9th" id="text9th" rows="5"><? echo $loadcorpo5th[value_custom]; ?></textarea>
											</label>
										</section>
										</div>
										<div class="col-md-12">
										<label class="label"> Icon & Text </label>
											<section class="col col-2">
											<label class="label"> Icon  1 </label>
											<label class="input">
												<input name="text10th" id="text10th" type="text"  value="<? echo $loadcorpo6th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 1 </label>
											<label class="input">
												<input name="text11th" id="text11th" type="text" value="<? echo $loadcorpo6th[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  2 </label>
											<label class="input">
												<input  name="text12th" id="text12th" type="text" value="<? echo $loadcorpo7th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 2 </label>
											<label class="input">
												<input  name="text13th" id="text13th" type="text" value="<? echo $loadcorpo7th[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  3 </label>
											<label class="input">
												<input name="text14th" id="text14th" type="text" value="<? echo $loadcorpo8th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 3 </label>
											<label class="input">
												<input name="text15th" id="text15th" type="text" value="<? echo $loadcorpo8th[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  4 </label>
											<label class="input">
												<input name="text16th" id="text16th" type="text" value="<? echo $loadcorpo9th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 4 </label>
											<label class="input">
												<input name="text17th" id="text17th" type="text" value="<? echo $loadcorpo9th[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  5 </label>
											<label class="input">
												<input name="text18th" id="text18th" type="text" value="<? echo $loadcorpo10th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 5 </label>
											<label class="input">
												<input name="text19th" id="text19th" type="text" value="<? echo $loadcorpo10th[key]; ?>">
											</label>
											</section>

											<section class="col col-2">
											<label class="label"> Icon  6 </label>
											<label class="input">
												<input name="text20th" id="text20th" type="text" value="<? echo $loadcorpo11th[value_custom]; ?>">
											</label>
											</section>
											<section class="col col-4">
											<label class="label"> Text 6 </label>
											<label class="input">
												<input name="text21th" id="text21th" type="text" value="<? echo $loadcorpo11th[key]; ?>">
											</label>
											</section>
										</div>	
										<div class="col-md-3">
											<br>
											<a class="btn-u " onclick="savethai();" >save</a>
										</div>					
											
									</form>
										
									</div>
									
								</div>
							</div>
							

							


							
						</div>
					</div>
					<!-- End Corprate Overview -->

					

					
					

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

		 // $("button#sendeng").click(function(){  
		 
   //      type="corpo-eng"
   //      var urlsend="senddata.php"; 
   //      var dataSet={ 	type: type , 
   //      				text1: $("#text1").val() , 
   //      				text2: $("#text2").val(),
   //      				text3: $("#text3").val(), 
   //      				text4: $("#text4").val(), 
   //      				text5: $("#text5").val(), 
   //      				text6: $("#text6").val(), 
   //      				text7: $("#text7").val(),  
   //      				text8: $("#text8").val(), 
   //      				text9: $("#text9").val(), 
   //      				text10: $("#text10").val(), 
   //      				text11: $("#text11").val(),
   //      				text12: $("#text12").val(), 
   //      				text13: $("#text13").val(),
   //      				text14: $("#text14").val(), 
   //      				text15: $("#text15").val(), 
   //      				text16: $("#text16").val(), 
   //      				text17: $("#text17").val(), 
   //      				text18: $("#text18").val(),  
   //      				text19: $("#text19").val(), 
   //      				text20: $("#text20").val(), 
   //      				text21: $("#text21").val() 
   //      				};   
   //      $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" );  
   //          location.reload(true);
   //       });  
   //      });  

		 // $("button#sendth").click(function(){  

   //      type="corpo-th"
   //      var urlsend="senddata.php"; 
   //      var dataSet={ 	type: type , 
   //      				text1th: $("#text1th").val() , 
   //      				text2th: $("#text2th").val(),
   //      				text3th: $("#text3th").val(), 
   //      				text4th: $("#text4th").val(), 
   //      				text5th: $("#text5th").val(), 
   //      				text6th: $("#text6th").val(), 
   //      				text7th: $("#text7th").val(),  
   //      				text8th: $("#text8th").val(), 
   //      				text9th: $("#text9th").val(), 
   //      				text10th: $("#text10th").val(), 
   //      				text11th: $("#text11th").val(),
   //      				text12th: $("#text12th").val(), 
   //      				text13th: $("#text13th").val(),
   //      				text14th: $("#text14th").val(), 
   //      				text15th: $("#text15th").val(), 
   //      				text16th: $("#text16th").val(), 
   //      				text17th: $("#text17th").val(), 
   //      				text18th: $("#text18th").val(),  
   //      				text19th: $("#text19th").val(), 
   //      				text20th: $("#text20th").val(), 
   //      				text21th: $("#text21th").val() 
   //      				};   
   //      $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" );  
   //          location.reload(true);
   //       });  
   //      });  

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

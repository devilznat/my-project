<?php
  session_start();
 
  require('../../db/connect.php');

header('Cache-Control: no-cache');
header('Pragma: no-cache');

if(!isset($_SESSION['user_id']))
	{
		header("location:backend");
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
	<link rel="stylesheet" href="../../assets/css/custom_2.css">
	<style type="text/css">


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
				<h1 class="pull-left">Slide Home Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->


		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

	<?

	$sqlbannerjoblist1 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist1' " );
	$loadbannerjoblist1 = mysql_fetch_array($sqlbannerjoblist1 );

	$sqlbannerjoblist2 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist2' " );
	$loadbannerjoblist2 = mysql_fetch_array($sqlbannerjoblist2 );

	$sqlbannerjoblist3 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist3' " );
	$loadbannerjoblist3 = mysql_fetch_array($sqlbannerjoblist3 );

	$sqlbannerjoblist4 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-joblist1' " );
	$loadbannerjoblist4 = mysql_fetch_array($sqlbannerjoblist4 );

	$sqlbannerjoblist5 = mysql_query("SELECT * FROM banner WHERE bid =  '12' " );
	$loadbannerjoblist5 = mysql_fetch_array($sqlbannerjoblist5 );


	$sqlbannerjoblist6 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-joblist3' " );
	$loadbannerjoblist6 = mysql_fetch_array($sqlbannerjoblist6 );
?>

						<!-- Bannner -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Banner HomePage</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-banner" data-toggle="tab">Engish</a></li>
									<li><a href="#th-banner" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-banner">
									<!-- banner Eng -->
									<div class="col-md-12">
										<h4><label>Banner Joblist 1 English</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist1[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist1[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist1[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist1[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist1[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text1-1" id="text1-1" type="text" value="<? echo $loadbannerjoblist1[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text1-2" id="text1-2" type="text" value="<? echo $loadbannerjoblist1[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text1-3" id="text1-3" type="text" value="<? echo $loadbannerjoblist1[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text1-4" id="text1-4" type="text" value="<? echo $loadbannerjoblist1[linkbanner];?>">
												</label>
											</section>
											</form>
										</div>

									</div>

								


									<div class="col-md-12">
										<hr>
										<h4><label>Banner Joblist 2 English</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist2[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist2[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist2[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist2[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist2[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn2" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter2" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar2" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox2">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text2-1" id="text2-1" type="text" value="<? echo $loadbannerjoblist2[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text2-2" id="text2-2" type="text" value="<? echo $loadbannerjoblist2[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text2-3" id="text2-3" type="text" value="<? echo $loadbannerjoblist2[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text2-4" id="text2-4" type="text" value="<? echo $loadbannerjoblist2[linkbanner];?>">
												</label>
											</section>
											</form>
										</div>
									</div>

									<div class="col-md-12">
										<hr>
										<h4><label>Banner Joblist 3 English</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist3[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist3[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist3[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist3[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist3[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn3" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter3" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar3" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox3">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text3-1" id="text3-1" type="text" value="<? echo $loadbannerjoblist3[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text3-2" id="text3-2" type="text" value="<? echo $loadbannerjoblist3[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text3-3" id="text3-3" type="text" value="<? echo $loadbannerjoblist3[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text3-4" id="text3-4" type="text" value="<? echo $loadbannerjoblist3[linkbanner];?>">
												</label>
											</section>
											<button id="savebanner1" type="submit" class="btn-u ">Save</button>
											</form>

										</div>
									</div>


									<!-- Banner Eng -->
										
									</div>

									<div class="tab-pane fade in" id="th-banner">
									<!-- Banner thai -->
									<div class="col-md-12">
									
										<h4><label>Banner Joblist 1 Thai</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist4[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist4[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist4[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist4[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist4[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn4" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter4" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar4" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox4">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text4-1" id="text4-1" type="text" value="<? echo $loadbannerjoblist4[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text4-2" id="text4-2" type="text" value="<? echo $loadbannerjoblist4[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text4-3" id="text4-3" type="text" value="<? echo $loadbannerjoblist4[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text4-4" id="text4-4" type="text" value="<? echo $loadbannerjoblist4[linkbanner];?>">
												</label>
											</section>
											</form>
										</div>

									</div>

								


									<div class="col-md-12">
										<hr>
										<h4><label>Banner Joblist 2 Thai</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist5[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist5[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist5[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist5[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist5[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn5" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter5" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar5" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox5">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text5-1" id="text5-1" type="text" value="<? echo $loadbannerjoblist5[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text5-2" id="text5-2" type="text" value="<? echo $loadbannerjoblist5[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text5-3" id="text5-3" type="text" value="<? echo $loadbannerjoblist5[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text5-4" id="text5-4" type="text" value="<? echo $loadbannerjoblist5[linkbanner];?>">
												</label>
											</section>
											</form>
										</div>
									</div>

									<div class="col-md-12">
										<hr>
										<h4><label>Banner Joblist 3 Thai</label></h4>
										<div class="col-md-5">


										
										<div class="nopadding-right bclick" data-link="" style="margin-bottom: 30px;">
										<div class="" id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist6[imagename];?>);background-size:cover!important; margin-top: 11px;">
										<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist6[value_custom];?></h3>
										<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
											<? echo $loadbannerjoblist6[value_custom2];?>
										</p>
										<p class="text-center">

											<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist6[linkbanner];?>" style="padding-top: 0px;"><? echo $loadbannerjoblist6[value_custom3];?></a>
										</p>
										</div>
										</div>
										
										<!-- End Banner 1 -->
										
											
										</div>
										<div class="col-md-7">
												<br> <h4>*Image Examples Size 626x320px </h4>
												<div class="row" style="padding-top:10px;">
										            <div class="col-xs-2">
										              <button id="uploadBtn6" class="btn btn-large btn-primary">Choose File</button>
										            </div>
										            <div class="col-xs-10">
										          <div id="progressOuter6" class="progress progress-striped active" style="display:none;">
										            <div id="progressBar6" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
										            </div>
										          </div>
										            </div>
										          </div>
										          <div class="row" style="padding-top:10px;">
										            <div class="col-xs-10">
										              <div id="msgBox6">
										              </div>
										            </div>
										          </div>
										</div>

										<div class="col-md-12">
											<form action="#" class="sky-form">
											<section class="col col-6">
												<label class="label"><h4>Tilte 1</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text6-1" id="text6-1" type="text" value="<? echo $loadbannerjoblist6[value_custom];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Tilte 2 </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text6-2" id="text6-2" type="text" value="<? echo $loadbannerjoblist6[value_custom2];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Name Button </label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text6-3" id="text6-3" type="text" value="<? echo $loadbannerjoblist6[value_custom3];?>">
												</label>
											</section>
											<section class="col col-6">
												<label class="label"><h4>Link Button</label>
												<label class="input">
													<i class="icon-prepend fa fa-link"></i>
													<input name="text6-4" id="text6-4" type="text" value="<? echo $loadbannerjoblist6[linkbanner];?>">
												</label>
											</section>
											<button id="savebanner2" type="submit" class="btn-u ">Save</button>
											</form>

										</div>
									</div>

									<!-- Banner Thai -->

										
									</div>
									
								</div>
							</div>

							
						</div>
					</div>
					<!-- End Banner -->



					
					

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

<script src="../../assets/plugins/Uploader-master/SimpleAjaxUploader.js"></script>
<script>
		function escapeTags( str ) {
		  return String( str )
		           .replace( /&/g, '&amp;' )
		           .replace( /"/g, '&quot;' )
		           .replace( /'/g, '&#39;' )
		           .replace( /</g, '&lt;' )
		           .replace( />/g, '&gt;' );
		}

		window.onload = function() {

		// upload file banner newsletters1 eng
		  var btn = document.getElementById('uploadBtn'),
		      progressBar = document.getElementById('progressBar'),
		      progressOuter = document.getElementById('progressOuter'),
		      msgBox = document.getElementById('msgBox');

		  var uploader = new ss.SimpleUpload({
		        button: btn,
		        url: 'fileupload-banner-joblist.php',
		        name: 'banner-joblist1-en',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar );
		        },
		        onSubmit: function() {
		            msgBox.innerHTML = ''; // empty the message box
		            btn.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn.innerHTML = 'Choose Another File';
		            progressOuter.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter.style.display = 'none';
		            msgBox.innerHTML = 'Unable to upload file';
		          }
			});

		  // upload file banner newsletters2 eng 

		  var btn2 = document.getElementById('uploadBtn2'),
		      progressBar2 = document.getElementById('progressBar2'),
		      progressOuter2 = document.getElementById('progressOuter2'),
		      msgBox2 = document.getElementById('msgBox2');

		  var uploader2 = new ss.SimpleUpload({
		        button: btn2,
		        url: 'fileupload-banner-joblist2.php',
		        name: 'banner-joblist2-en',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter2.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar2 );
		        },
		        onSubmit: function() {
		            msgBox2.innerHTML = ''; // empty the message box
		            btn2.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn2.innerHTML = 'Choose Another File';
		            progressOuter2.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox2.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox2.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox2.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox2.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter2.style.display = 'none';
		            msgBox2.innerHTML = 'Unable to upload file';
		          }
			});

		    // upload file banner newsletters3 th

		  var btn3 = document.getElementById('uploadBtn3'),
		      progressBar3 = document.getElementById('progressBar3'),
		      progressOuter3 = document.getElementById('progressOuter3'),
		      msgBox3 = document.getElementById('msgBox3');

		  var uploader3 = new ss.SimpleUpload({
		        button: btn3,
		        url: 'fileupload-banner-joblist3.php',
		        name: 'banner-joblist3-en',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter3.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar3 );
		        },
		        onSubmit: function() {
		            msgBox3.innerHTML = ''; // empty the message box
		            btn3.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn3.innerHTML = 'Choose Another File';
		            progressOuter3.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox3.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox3.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox3.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox3.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter3.style.display = 'none';
		            msgBox3.innerHTML = 'Unable to upload file';
		          }
			});

		  	   // upload file banner newsletters4 th

		  var btn4 = document.getElementById('uploadBtn4'),
		      progressBar4 = document.getElementById('progressBar4'),
		      progressOuter4 = document.getElementById('progressOuter4'),
		      msgBox4 = document.getElementById('msgBox4');

		  var uploader4 = new ss.SimpleUpload({
		        button: btn4,
		        url: 'fileupload-banner-joblist4.php',
		        name: 'banner-joblist1-th',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter4.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar4 );
		        },
		        onSubmit: function() {
		            msgBox4.innerHTML = ''; // empty the message box
		            btn4.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn4.innerHTML = 'Choose Another File';
		            progressOuter4.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox4.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox4.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox4.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox4.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter4.style.display = 'none';
		            msgBox4.innerHTML = 'Unable to upload file';
		          }
			});

		     // upload file banner newsletters4 th

		  var btn5 = document.getElementById('uploadBtn5'),
		      progressBar5 = document.getElementById('progressBar5'),
		      progressOuter5 = document.getElementById('progressOuter5'),
		      msgBox5 = document.getElementById('msgBox5');

		  var uploader5 = new ss.SimpleUpload({
		        button: btn5,
		        url: 'fileupload-banner-joblist5.php',
		        name: 'banner-joblist2-th',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter5.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar5 );
		        },
		        onSubmit: function() {
		            msgBox5.innerHTML = ''; // empty the message box
		            btn5.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn5.innerHTML = 'Choose Another File';
		            progressOuter5.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox5.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox5.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox5.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox5.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter5.style.display = 'none';
		            msgBox5.innerHTML = 'Unable to upload file';
		          }
			});

		    // upload file banner newsletters4 th

		  var btn6 = document.getElementById('uploadBtn6'),
		      progressBar6 = document.getElementById('progressBar6'),
		      progressOuter6 = document.getElementById('progressOuter6'),
		      msgBox6 = document.getElementById('msgBox6');

		  var uploader6 = new ss.SimpleUpload({
		        button: btn6,
		        url: 'fileupload-banner-joblist6.php',
		        name: 'banner-joblist3-th',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter6.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar6 );
		        },
		        onSubmit: function() {
		            msgBox6.innerHTML = ''; // empty the message box
		            btn6.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn6.innerHTML = 'Choose Another File';
		            progressOuter6.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox6.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox6.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox6.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox6.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter6.style.display = 'none';
		            msgBox6.innerHTML = 'Unable to upload file';
		          }
			});





		};
		</script>

		<script type="text/javascript">
		
		$("button#savebanner1").click(function(){  

        type="banner-joblist-link1"
        var urlsend="senddata.php"; 
        var dataSet={ 	type: type , 
        				linkeng11: $("#text1-1").val() , 
        				linkeng12: $("#text1-2").val() , 
        				linkeng13: $("#text1-3").val() , 
        				linkeng14: $("#text1-4").val() , 
        				linkeng21: $("#text2-1").val() , 
        				linkeng22: $("#text2-2").val() , 
        				linkeng23: $("#text2-3").val() , 
        				linkeng24: $("#text2-4").val() ,
        				linkeng31: $("#text3-1").val() , 
        				linkeng32: $("#text3-2").val() , 
        				linkeng33: $("#text3-3").val() ,
        				linkeng34: $("#text3-4").val() ,
        				};   
        $.post(urlsend,dataSet,function(data){  
             alert( "completed" );  
             location.reload(true);
         });  
        }); 

        $("button#savebanner2").click(function(){  

        type="banner-joblist-link2"
        var urlsend="senddata.php"; 
        var dataSet={ 	type: type , 
        				linkth41: $("#text4-1").val() , 
        				linkth42: $("#text4-2").val() , 
        				linkth43: $("#text4-3").val() , 
        				linkth44: $("#text4-4").val() , 
        				linkth51: $("#text5-1").val() , 
        				linkth52: $("#text5-2").val() , 
        				linkth53: $("#text5-3").val() , 
        				linkth54: $("#text5-4").val() ,
        				linkth61: $("#text6-1").val() , 
        				linkth62: $("#text6-2").val() , 
        				linkth63: $("#text6-3").val() ,
        				linkth64: $("#text6-4").val() ,
        				};   
        $.post(urlsend,dataSet,function(data){  
            alert( "completed" );  
            location.reload(true);
         });  
        }); 


		</script>
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

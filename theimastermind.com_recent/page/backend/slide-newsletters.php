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
				<h1 class="pull-left">Slide Newsletters</h1>

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
$sqlpinslide = mysql_query("SELECT * FROM newsletter_slide WHERE id = '1' " );
$loadpinslide = mysql_fetch_array($sqlpinslide);

$pinarticleid = $loadpinslide[newsletter_id];
$sqlslide1= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'en' AND article_id = '$pinarticleid' " );
$loadslide1 = mysql_fetch_array($sqlslide1);

$sqlslide2= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'en' AND category_id = '1' ORDER BY nid DESC LIMIT 1 " );
$loadslide2 = mysql_fetch_array($sqlslide2);

$sqlslide3= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'en' AND category_id = '2' ORDER BY nid DESC LIMIT 1 " );
$loadslide3 = mysql_fetch_array($sqlslide3);

$sqlslide4= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'en' AND category_id = '3' ORDER BY nid DESC LIMIT 1 " );
$loadslide4 = mysql_fetch_array($sqlslide4);
?>
						<!-- testimonials homepage -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Slide Newsletters</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								
								<div class="tab-content">
									
								<table class="table">
								<thead>
									<tr>
										<th>Slide </th>
										<th>Title</th>
										<th class="hidden-sm">Category</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><? echo $loadslide1[topic];?></td>
										<td class="hidden-sm">Populars</td>
										<td><button class="btn btn-warning btn-xs" 
										onclick="window.location.href='slide-newsletters-edit'">
										<i class="fa fa-pencil"></i> Edit</button></td>
									</tr>
									<tr>
										<td>2</td>
										<td><? echo $loadslide2[topic];?></td>
										<td class="hidden-sm">Articles</td>
										<td>Auto</td>
									</tr>
									<tr>
										<td>3</td>
										<td><? echo $loadslide3[topic];?></td>
										<td class="hidden-sm">Tips</td>
										<td>Auto</td>
									</tr>
									<tr>
										<td>4</td>
										<td><? echo $loadslide4[topic];?></td>
										<td class="hidden-sm">Knowledge</td>
										<td>Auto</td>
									</tr>
									
								</tbody>
							</table>
									
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

		 $("button#sendtestimonialseng").click(function(){
        type="testimonials-homepage-eng"
        var urlsend="senddata.php"; 
        var dataSet={ 	type: type , 
        				title1en: $("#texttitle1-en").val() , 
        				details1en: $("#textdetails1-en").val(),
        				title2en: $("#texttitle2-en").val() , 
        				details2en: $("#textdetails2-en").val(),
        				title3en: $("#texttitle3-en").val() , 
        				details3en: $("#textdetails3-en").val(),
        				};   
        $.post(urlsend,dataSet,function(data){  
             alert( "okay sendeng" );  
         });  
        });  
		  

		  $("button#sendtestimonialsth").click(function(){
        type="testimonials-homepage-th"
        var urlsend="senddata.php"; 
        var dataSet={ 	type: type , 
        				title1th: $("#texttitle1-th").val() , 
        				details1th: $("#textdetails1-th").val(),
        				title2th: $("#texttitle2-th").val() , 
        				details2th: $("#textdetails2-th").val(),
        				title3th: $("#texttitle3-th").val() , 
        				details3th: $("#textdetails3-th").val(),
        				};   
        $.post(urlsend,dataSet,function(data){  
             alert( "okay sendeng" );  
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

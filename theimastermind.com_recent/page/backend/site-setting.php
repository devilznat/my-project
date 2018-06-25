<?php
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
				<h1 class="pull-left">Site Setting</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->


<?
	$sqlfooter = mysql_query("SELECT * FROM footer WHERE language_code =  'en' AND location = 'footer-title' " );
	$loadfooter = mysql_fetch_array($sqlfooter);

	$sqlfootersocial = mysql_query("SELECT * FROM footer WHERE language_code =  'en' AND location = 'footer-social' " );
	$loadfootersocial = mysql_fetch_array($sqlfootersocial);

?>

		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

					<!-- Logo -->	
					<!-- <div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Logo </h3>
						</div>
						<div class="panel-body">
							<div class="col-md-6">
								<br>
								<img class="img-responsive" src="../../assets/img/logo/logo1.png" width="auto" height="60" >
								<p> *Image Examples Size 202x42 </p>
							</div>
							<div class="col-md-6">
								<form action="#" class="sky-form">
								

										<section>
											<label class="label">Image File input</label>
											<label for="file" class="input input-file">
												<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
											</label>
										</section>
										<button type="submit" class="btn-u ">Submit</button>
									
								</form>
							</div>
						</div>
					</div> -->
					<!-- End Logo -->

					<!-- Social Network Links -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Social Network Links </h3>		
						</div>
						<div class="panel-body">
							<div class="col-md-12">
							<form name="form" id="form" class="sky-form">
							<input type="text" name="type" id="type" value="social-network" hidden>
								<section>
									<label class="label">Facebook</label>
									<label class="input">
										<i class="icon-prepend fa fa-facebook-square"></i>
										<input type="text" name="text1" id="text1" value="<? echo $loadfootersocial[value]; ?>">
									</label>
								</section>
								<section>
									<label class="label">twitter</label>
									<label class="input">
										<i class="icon-prepend fa fa-twitter-square"></i>
										<input type="text" name="text2" id="text2" value="<? echo $loadfootersocial[value_custom]; ?>">
									</label>
								</section>
								<section>
									<label class="label">Instgram</label>
									<label class="input">
										<i class="icon-prepend fa fa-instagram"></i>
										<input type="text" name="text3" id="text3" value="<? echo $loadfootersocial[value_custom2]; ?>">
									</label>
								</section>
								<section>
									<label class="label">Youtube</label>
									<label class="input">
										<i class="icon-prepend fa fa-youtube-square"></i>
										<input type="text" name="text4" id="text4" value="<? echo $loadfootersocial[value_custom3]; ?>">
									</label>
								</section>
								<section>
									<label class="label">LinkIn</label>
									<label class="input">
										<i class="icon-prepend fa fa-linkedin-square"></i>
										<input type="text" name="text5" id="text5" value="<? echo $loadfootersocial[value_custom4]; ?>">
									</label>
								</section>
								
								<section>
									<label class="label">Line</label>
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text6" id="text6" value="<? echo $loadfootersocial[value_custom5]; ?>">
									</label>
								</section>
								<a class="btn-u " name="send" id="send" onclick="save()" >Save</a>
							</form>
							</div>
							
						</div>
					</div>
					<!-- End Social Network Links -->
					

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
		        alert("Data has been updated successfully.");
		        location.reload(true);
		    	}
			});
		 }


		 // $("button#send").click(function(){  

   //      type="social-network"
   //      var urlsend="senddata.php"; 
   //      var dataSet={ 	type: type , 
   //      				text1: $("#text1").val() , 
   //      				text2: $("#text2").val(),
   //      				text3: $("#text3").val(), 
   //      				text4: $("#text4").val(), 
   //      				text5: $("#text5").val(), 
   //      				text6: $("#text6").val()
   //      				};   
   //      $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" );  
   //          location.reload(true);
   //       });  
   //      });  

		   

		</script>
		
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

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

	<style type="text/css">
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
				<h1 class="pull-left">Contact Us Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->


<?
				$sqlcontactDetail1 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'en' AND location = 'contact-detail1' " );
				$loadcontactDetail1 = mysql_fetch_array($sqlcontactDetail1);

				$sqlcontactDetail2 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'en' AND location = 'contact-detail2' " );
				$loadcontactDetail2 = mysql_fetch_array($sqlcontactDetail2);

				$sqlcontactDetail1th = mysql_query("SELECT * FROM contact_us WHERE language_code =  'th' AND location = 'contact-detail1' " );
				$loadcontactDetail1th = mysql_fetch_array($sqlcontactDetail1th);

				$sqlcontactDetail2th = mysql_query("SELECT * FROM contact_us WHERE language_code =  'th' AND location = 'contact-detail2' " );
				$loadcontactDetail2th = mysql_fetch_array($sqlcontactDetail2th);
?>


		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

					<!-- Logo -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Contacts Info </h3>
						</div>
						<div class="panel-body">

							<div class="tab-v1">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-contactsinfo" data-toggle="tab">Engish</a></li>
									<li><a href="#th-contactsinfo" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-contactsinfo">
										<form name="form1" id="form1" class="sky-form">
										<input type="text" name="type" id="type" value="contact-eng" hidden>

										<div class="col-md-12"><h3><b>Contacts</b></h3></div>
										<section class="col-md-12">
										<label class="label">Address</label>
										<label class="textarea textarea-expandable">
										<textarea rows="3" name="text1" id="text1" ><? echo $loadcontactDetail1[value]; ?></textarea>
										</label>
										</section>
										<section class="col col-6">
											<label class="label">E-mail</label>
											<label class="input ">
												<i class="icon-prepend fa fa-envelope"></i>
												<input type="email" name="text2" id="text2" value="<? echo $loadcontactDetail1[value_custom]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Phone</label>
											<label class="input ">
												<i class="icon-prepend fa fa-phone"></i>
												<input type="text" name="text3" id="text3" value="<? echo $loadcontactDetail1[value_custom2]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Website</label>
											<label class="input ">
												<i class="icon-prepend fa fa-globe"></i>
												<input  type="text" name="text4" id="text4" value="<? echo $loadcontactDetail1[value_custom3]; ?>"  >
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<div class="col-md-12"><h3><b>Business hours</b></h3></div>
										<section class="col col-6">
											<label class="label">Monday-Friday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text5" id="text5" value="<? echo $loadcontactDetail2[value]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Saturday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text6" id="text6" value="<? echo $loadcontactDetail2[value_custom]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Sunday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text7" id="text7" value="<? echo $loadcontactDetail2[value_custom2]; ?>" >
											</label>
										</section>



										<div class="col-md-12"><HR></div>
										<div class="col-md-3">
											<a onclick="saveeng();" class="btn-u btn-block " >Save</a>
										</div>	
									</form>
										
									</div>
									<div class="tab-pane fade in" id="th-contactsinfo">
										<form name="form2" id="form2" class="sky-form">
										<input type="text" name="type" id="type" value="contact-th" hidden>

										<div class="col-md-12"><h3><b>Contacts</b></h3></div>
										<section class="col-md-12">
										<label class="label">Address</label>
										<label class="textarea textarea-expandable">
										<textarea rows="3" name="text1th" id="text1th" ><? echo $loadcontactDetail1th[value]; ?></textarea>
										</label>
										</section>
										<section class="col col-6">
											<label class="label">E-mail</label>
											<label class="input ">
												<i class="icon-prepend fa fa-envelope"></i>
												<input type="email" name="text2th" id="text2th" value="<? echo $loadcontactDetail1th[value_custom]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Phone</label>
											<label class="input ">
												<i class="icon-prepend fa fa-phone"></i>
												<input type="tel" name="text3th" id="text3th" value="<? echo $loadcontactDetail1th[value_custom2]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Website</label>
											<label class="input ">
												<i class="icon-prepend fa fa-globe"></i>
												<input  type="text" name="text4th" id="text4th" value="<? echo $loadcontactDetail1th[value_custom3]; ?>"  >
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<div class="col-md-12"><h3><b>Business hours</b></h3></div>
										<section class="col col-6">
											<label class="label">Monday-Friday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text5th" id="text5th" value="<? echo $loadcontactDetail2th[value]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Saturday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text6th" id="text6th" value="<? echo $loadcontactDetail2th[value_custom]; ?>" >
											</label>
										</section>
										<section class="col col-6">
											<label class="label">Sunday</label>
											<label class="input ">
												<i class="icon-prepend fa fa-clock-o"></i>
												<input type="text" name="text7th" id="text7th" value="<? echo $loadcontactDetail2th[value_custom2]; ?>" >
											</label>
										</section>



										<div class="col-md-12"><HR></div>
										<div class="col-md-3">
											<a onclick="savethai();" class="btn-u btn-block ">Save</a>
										</div>	
									</form>
										
									</div>
									
								</div>
							</div>
							
							
							
							

						</div>
					</div>
					<!-- End Logo -->

					
					

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
        	
		var form1 = new FormData($('#form1')[0]);
		form1.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form1,
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

		 function savethai(){
        	
		var form2 = new FormData($('#form2')[0]);
		form2.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form2,
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




		 // $("button#sendeng").click(function(){  

   //      type="contact-eng"
   //      var urlsend="senddata.php"; 
   //      var dataSet={ 	type: type , 
   //      				text1: $("#text1").val() , 
   //      				text2: $("#text2").val(),
   //      				text3: $("#text3").val(), 
   //      				text4: $("#text4").val(), 
   //      				text5: $("#text5").val(), 
   //      				text6: $("#text6").val(), 
   //      				text7: $("#text7").val()
   //      				};   
   //      $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" );  
   //          location.reload(true);
   //       });  
   //      });  

		 // $("button#sendth").click(function(){  

   //      type="contact-th"
   //      var urlsend="senddata.php"; 
   //      var dataSet={ 	type: type , 
   //      				text1th: $("#text1th").val() , 
   //      				text2th: $("#text2th").val(),
   //      				text3th: $("#text3th").val(), 
   //      				text4th: $("#text4th").val(), 
   //      				text5th: $("#text5th").val(), 
   //      				text6th: $("#text6th").val(), 
   //      				text7th: $("#text7th").val()
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

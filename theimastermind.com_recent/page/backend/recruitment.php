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
				<h1 class="pull-left">Recruitment Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

<?
	$sqlrecruitment1 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'head-recruitment' " );
	$loadrecruitment1= mysql_fetch_array($sqlrecruitment1);

	$sqlrecruitment2 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-1' " );
	$loadrecruitment2= mysql_fetch_array($sqlrecruitment2);

	$sqlrecruitment3 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-2' " );
	$loadrecruitment3= mysql_fetch_array($sqlrecruitment3);

	$sqlrecruitment4 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-3' " );
	$loadrecruitment4= mysql_fetch_array($sqlrecruitment4);
	
	$sqlrecruitment5 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-4' " );
	$loadrecruitment5= mysql_fetch_array($sqlrecruitment5);

	$sqlrecruitment6 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-5' " );
	$loadrecruitment6= mysql_fetch_array($sqlrecruitment6);

	$sqlrecruitment7 = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'en' AND location = 'step-6' " );
	$loadrecruitment7= mysql_fetch_array($sqlrecruitment7);

	$sqlrecruitment1th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'head-recruitment' " );
	$loadrecruitment1th= mysql_fetch_array($sqlrecruitment1th);

	$sqlrecruitment2th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-1' " );
	$loadrecruitment2th= mysql_fetch_array($sqlrecruitment2th);

	$sqlrecruitment3th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-2' " );
	$loadrecruitment3th= mysql_fetch_array($sqlrecruitment3th);

	$sqlrecruitment4th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-3' " );
	$loadrecruitment4th= mysql_fetch_array($sqlrecruitment4th);
	
	$sqlrecruitment5th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-4' " );
	$loadrecruitment5th= mysql_fetch_array($sqlrecruitment5th);

	$sqlrecruitment6th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-5' " );
	$loadrecruitment6th= mysql_fetch_array($sqlrecruitment6th);

	$sqlrecruitment7th = mysql_query("SELECT * FROM recruitment_procedure WHERE language_code =  'th' AND location = 'step-6' " );
	$loadrecruitment7th= mysql_fetch_array($sqlrecruitment7th);


?>


		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

				

					<!-- RECRUITMENT 2  -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Details Step Recruitment </h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-recruitment2" data-toggle="tab">Engish</a></li>
									<li><a href="#th-recruitment2" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-recruitment2">

									<!-- recruitment 2eng -->
										<form class="sky-form" name="formeng" id="formeng" autocomplete="off">
										<input type="text" name="type" id="type" value="recruitment-eng" hidden>
										<section class="col-md-12">
											<label class="label"><h4>Title Recruitment</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea name="text1" id="text1" rows="2" ><? echo $loadrecruitment1[key]; ?></textarea>
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Recruitment</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea  name="text2" id="text2" rows="3"><? echo $loadrecruitment1[value]; ?> </textarea>
											</label>
										</section>

										<div class="col-md-12"><HR></div>

										<section class="col-md-12">
											<label class="label"><h4>Title Step 1 </h4> </label>
											<label class="input">
												<input name="text3" id="text3" type="text" value="<? echo $loadrecruitment2[key]; ?>" >
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 1</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text4" id="text4" ><? echo $loadrecruitment2[value]; ?> </textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 2 </h4> </label>
											<label class="input">
												<input name="text5" id="text5" type="text"  value="<? echo $loadrecruitment3[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 2</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text6" id="text6" ><? echo $loadrecruitment3[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 3 </h4> </label>
											<label class="input">
												<input name="text7" id="text7" type="text" value="<? echo $loadrecruitment4[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 3</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text8" id="text8" ><? echo $loadrecruitment4[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 4 </h4> </label>
											<label class="input">
												<input name="text9" id="text9" type="text" value="<? echo $loadrecruitment5[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 4</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text10" id="text10" > <? echo $loadrecruitment5[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 5 </h4> </label>
											<label class="input">
												<input name="text11" id="text11" type="text" value="<? echo $loadrecruitment6[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 5</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text12" id="text12">  <? echo $loadrecruitment6[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 6 </h4> </label>
											<label class="input">
												<input name="text13" id="text13" type="text" value="<? echo $loadrecruitment7[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 6</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text14" id="text14"> <? echo $loadrecruitment7[value]; ?></textarea>
											</label>
										</section>
										
										<div class="col-md-12"><HR></div>
										<div class="col-md-3">
											<a class="btn-u " onclick="saveeng();" >save</a>
										</div>					
									</form>
									<!-- recruitment eng -->
										
									</div>
									<div class="tab-pane fade in" id="th-recruitment2">
										

										<!-- recruitment 2 thai -->
										<form class="sky-form" name="formthai" id="formthai" autocomplete="off">
										<input type="text" name="type" id="type" value="recruitment-th" hidden>
										<section class="col-md-12">
											<label class="label"><h4>Title Recruitment</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea name="text1th" id="text1th" rows="2" ><? echo $loadrecruitment1th[key]; ?></textarea>
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Recruitment</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea  name="text2th" id="text2th" rows="3"><? echo $loadrecruitment1th[value]; ?> </textarea>
											</label>
										</section>

										<div class="col-md-12"><HR></div>

										<section class="col-md-12">
											<label class="label"><h4>Title Step 1 </h4> </label>
											<label class="input">
												<input name="text3th" id="text3th" type="textth" value="<? echo $loadrecruitment2th[key]; ?>" >
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 1</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text4th" id="text4th" ><? echo $loadrecruitment2th[value]; ?> </textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 2 </h4> </label>
											<label class="input">
												<input name="text5th" id="text5th" type="text"  value="<? echo $loadrecruitment3th[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 2</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text6th" id="text6th" ><? echo $loadrecruitment3th[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 3 </h4> </label>
											<label class="input">
												<input name="text7th" id="text7th" type="text" value="<? echo $loadrecruitment4th[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 3</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text8th" id="text8th" ><? echo $loadrecruitment4th[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 4 </h4> </label>
											<label class="input">
												<input name="text9th" id="text9th" type="text" value="<? echo $loadrecruitment5th[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 4</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text10th" id="text10th" > <? echo $loadrecruitment5th[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 5 </h4> </label>
											<label class="input">
												<input name="text11th" id="text11th" type="text" value="<? echo $loadrecruitment6th[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 5</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text12th" id="text12th">  <? echo $loadrecruitment6th[value]; ?></textarea>
											</label>
										</section>
										<div class="col-md-12"><HR></div>
										<section class="col-md-12">
											<label class="label"><h4>Title Step 6 </h4> </label>
											<label class="input">
												<input name="text13th" id="text13th" type="text" value="<? echo $loadrecruitment7th[key]; ?>">
											</label>
										</section>	
										
										<section class="col-md-12">
											<label class="label"><h4>Details Step 6</h4> </label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="4" name="text14th" id="text14th"> <? echo $loadrecruitment7th[value]; ?></textarea>
											</label>
										</section>
										
										<div class="col-md-12"><HR></div>
										<div class="col-md-3">
											<a class="btn-u " onclick="savethai();" >save</a>
										</div>					
									</form>
									<!-- recruitment Thai -->

									</div>
									
								</div>
							</div>

						
						</div>
					</div>
					<!-- End RECRUITMENT 2  -->

						



									

							


						

					


					
					

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

   //      type="recruitment-eng"
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
   //      				text14: $("#text14").val()
   //      				};   
   //      $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" );  
   //          location.reload(true);
   //       });  
   //      });  

		 // $("button#sendth").click(function(){  

   //      type="recruitment-th"
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
   //      				text11th: $("#text11th").val(), 
   //      				text12th: $("#text12th").val(),
   //      				text13th: $("#text13th").val(),
   //      				text14th: $("#text14th").val()
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

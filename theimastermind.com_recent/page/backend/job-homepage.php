<?

 require('../../db/connect.php');

 


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
				<h1 class="pull-left">Job Home Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

<?
	$sqljobsearch = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'jobsearch' " );
	$loadjobsearch  = mysql_fetch_array($sqljobsearch );

	$sqljobsearchth = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'jobsearch' " );
	$loadjobsearchth  = mysql_fetch_array($sqljobsearchth);

?>
		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contect -->
				<div class="col-md-9">

						<!-- Job Search homepage -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Job Search HomePage</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-job1" data-toggle="tab">Engish</a></li>
									<li><a href="#th-job1" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-job1">

									<!-- 	Details Job Search Eng -->
									 	<form  class="sky-form" name="formeng1" id="formeng1" autocomplete="off">
									 	<input type="text" name="type" id="type" value="jobsearch-homepage-eng" hidden>
									 	<section class="col-md-12">
											<label class="label"><h4>Title Job Search</h4> </label>
											<label class="input">
												<input type="text" name="texttitlejobsearcheng" id="texttitlejobsearcheng" value="<? echo $loadjobsearch[key]; ?>" >
											</label>
										</section>
										<section class="col-md-12">
											<label class="label"><h4>Details Job Search</h4> </label>
											<label class="input">
												<input type="text" name="textdetailsjobsearcheng" id="textdetailsjobsearcheng"  value="<? echo $loadjobsearch[value]; ?>">
											</label>
										</section>

										<br>

										<div class="col-md-12">
										<br>
										<!-- <button name="savejobsearcheng" id="savejobsearcheng" class="btn-u  ">Save</button> --></div>
										<a class="btn-u " onclick="savejobsearcheng();" >save</a>
										</form>	
									<!-- 	Details Job Search Eng -->

										
									</div>
									<div class="tab-pane fade in" id="th-job1">

									<!-- 	Details Job Search thai -->
									 	<form  class="sky-form" name="formthai1" id="formthai1" autocomplete="off">
									 	<input type="text" name="type" id="type" value="jobsearch-homepage-th" hidden>
										<section class="col-md-12">
											<label class="label"><h4>Title Job Search</h4> </label>
											<label class="input">
												<input type="text" name="texttitlejobsearchth" id="texttitlejobsearchth" value="<? echo $loadjobsearchth[key]; ?>" >
											</label>
										</section>
										<section class="col-md-12">
											<label class="label"><h4>Details Job Search</h4> </label>
											<label class="input">
												<input type="text" name="textdetailsjobsearchth" id="textdetailsjobsearchth" value="<? echo $loadjobsearchth[value]; ?>">
											</label>
										</section>

										<br>

										<div class="col-md-12">
										<br>
										<!-- <button name="savejobsearchth" id="savejobsearchth"  class="btn-u  ">Save</button> --></div>
										<a class="btn-u " onclick="savejobsearchth();" >save</a>
										</form>	
									<!-- 	Details Job Search thai -->
										

									</div>
									
								</div>
							</div>

							
						</div>
					</div>
					<!-- End Job Search homepage  -->


<?

	$sqlpinjob = mysql_query("SELECT * FROM homepage WHERE language_code =  'en' AND location = 'pinjob' " );
	$loadpinjob = mysql_fetch_array($sqlpinjob);


?>

						<!-- LATEST JOB OPPOTUNITIES homepage -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Latest Job Oppotunities HomePage</h3>
						</div>
						<div class="panel-body">
						<br>
							<?

										$idjob1 = $loadpinjob[value];
										
										$sqljob = mysql_query("SELECT * FROM jobs_value WHERE job_id = '$idjob1' " );
										$loadjob1 = mysql_fetch_array($sqljob);
				 
										$location = $loadjob1[province_id];
										$sqllocation = mysql_query("SELECT * FROM province WHERE province_id = '$location' " );
										$loadlocation = mysql_fetch_array($sqllocation);

										$timestamp = strtotime($loadjob1['created_date']);
										$date = date('Y-m-d', $timestamp);
							?>


							<div class="profile-bio <? echo $hiddenjob;?>">
							<div class="alert alert-success col-md-12" >
								<div class="col-md-12"><h2><strong>Pin Job </strong></h2></div>
								<div class="col-md-3">
											<img class="img-responsive md-margin-bottom-10" src="http://ed-easy.com/theimastermind/assets/img/job/joblogoBcw6b2yEqYhDUV35vJn4YQMN.jpg" alt="">	
								</div>
								<div class="col-md-9">

											<h3><strong> <? echo $loadjob1[title]; ?> </strong></h3> 
											<h4>	
												<strong>Job ID : </strong> <? echo $loadjob1[job_id]; ?><br>	
												<strong>Salary : </strong> <? 
														if( $loadjob1[negotiable] == '1') 
														{ 
															echo " Negotiable";
														}
														else{
															echo $loadjob1[salary_start]; echo " - "; echo $loadjob1[salary_end]; echo "  THB";
														}
													 ?><br>	
												<strong>Location : </strong> <? echo $loadlocation[province_name_eng]; ?><br>	
												<strong>Created Date : </strong> <? echo $date; ?><br>
											</h4>	
								</div>
								
							</div>
							</div>

								<form  class="sky-form" name="form2" id="form2" autocomplete="off">
							 	<input type="text" name="type" id="type" value="pinjob" hidden>
								<section class="col-md-12">
									<label class="label"><h4>Change Pin Job (ID JOB)</h4> </label>
									<label class="input">
										<input type="text" name="idjob" id="idjob" value="<?echo $loadpinjob[value];?>" >
									</label>
								</section>
								

								<br>

								<div class="col-md-12">
								<br>
								<!-- <button name="savejobsearchth" id="savejobsearchth"  class="btn-u  ">Save</button> --></div>
								<a class="btn-u " onclick="savepinjob();" >save</a>
								</form>	


							
						</div>

							
						</div>
					</div>
					<!-- LATEST JOB OPPOTUNITIES homepage  -->


					
					

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


		

		function savejobsearcheng(){
        	
		var form = new FormData($('#formeng1')[0]);
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

         function savejobsearchth(){
        

		var form = new FormData($('#formthai1')[0]);
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

        function savepinjob(){
        	
		var form = new FormData($('#form2')[0]);
		
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

		



		</script>
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

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


$getresume = $_GET[idresume];

$getfrom = $_GET[from];
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
	<link rel="stylesheet" href="../../assets/css/pages/profile.css">
	<link rel="stylesheet" href="../../assets/css/pages/shortcode_timeline2.css">

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
		.timeline-v2 > li .cbp_tmicon {
    		background: #446cb3;
		}
		.dd{
    		padding-left: 30px;
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
				<div class="col-md-9 " >
<?
	
$sqlresume = mysql_query("SELECT * FROM resumes WHERE resume_id = '$getresume' " );
$loadresume = mysql_fetch_array($sqlresume);


 $hiddenjob ="";
if ($loadresume[status_resume] == 0 || $loadresume[status_resume] == 3 ) {
	$hiddenjob = "hidden";
}
else{
	$hiddenjob ="";
}

?>		

				<!-- Logo -->	
					<div class="panel panel-default" >
						<div class="panel-heading">
							<h3 class="panel-title"> Resume Detail </h3>
						</div>
						<div class="panel-body " id="printableArea" >

						<!-- Profile Content -->
				<div class="col-md-12 ">
					<div class="profile-body">
						<div class="profile-bio">
							<div class="row">
								<div class="col-md-5">
									<img class="img-responsive md-margin-bottom-10" src="../../uploadfile/resume/<? echo $loadresume[image];?>" alt="" >
									
								</div>
								<div class="col-md-7">
									<h1><? echo $loadresume[first_name];?>  <? echo $loadresume[surname];?></h1>
									<h4><span><strong>Applied Position:</strong> <? echo $loadresume[applied_position];?></span><br>
									<span><strong>Current Position:</strong> <? echo $loadresume[current_position];?></span>
									<br>
										<span><strong>Nationality:</strong> <? echo $loadresume[nationality];?></span><br>
										<span><strong>Date of birth:</strong> <? echo $loadresume[date_of_birth];?></span><br>
										
										<span><strong>Sex:</strong> <? echo $loadresume[sex];?></span><br>
										<span><strong>Status:</strong> <? echo $loadresume[status];?></span><br>
										<span><strong>Communication:</strong> <? echo $loadresume[communication];?></span></h4>
										<h4><strong>E-mail :</strong> <? echo $loadresume[email];?><br>
										<strong>Mobile phone:</strong> <? echo $loadresume[mobile_phone];?><br></h4>
								</div>
							</div>
						</div><!--/end row-->

						<br>

						<?

									$idjob1 = "".$loadresume[job_id];
									
									$sqljob = mysql_query("SELECT * FROM jobs_value WHERE id = '$idjob1' " );
									$loadjob1 = mysql_fetch_array($sqljob);
			 
									$location = $loadjob1[province_id];
									$sqllocation = mysql_query("SELECT * FROM province WHERE province_id = '$location' " );
									$loadlocation = mysql_fetch_array($sqllocation);

									$timestamp = strtotime($loadjob1['created_date']);
									$date = date('Y-m-d', $timestamp);
						?>


						<div class="profile-bio <? echo $hiddenjob;?>">
						<div class="alert alert-success col-md-12" >
							<div class="col-md-12"><h2><strong>Job Refer </strong></h2></div>
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
						<hr>


						<div class="profile-bio">
							<div class="row">
							<div class="col-md-12"><h2><strong>Information </strong></h2></div>
								<div class="col-md-6">
										
										<h4>							
										<strong>Current Basic Salary : </strong> <? echo $loadresume[salary];?><br>
										<strong>Fix Bonus : </strong> <? echo $loadresume[fix_bonus];?><br>
										<strong>Variable Bonus : </strong> <? echo $loadresume[variable_bonus];?><br>
										
										</h4>
								</div>
								<div class="col-md-6">
								<h4>
										<strong>Other Allowance : </strong> <? echo $loadresume[other_allowance_salary];?><br>
										<strong>Expectation : </strong> <? echo $loadresume[expectation_salary];?><br>
										<strong>Notice Period : </strong> <? echo $loadresume[notice_period];?><br>
										</h4>
								</div>
							</div>
						</div><!--/end row-->

						<hr>


<? 

$strSQL = "SELECT * FROM professional_experience WHERE resume_id = '$getresume' ORDER BY item_id ASC ";
$result = mysql_query($strSQL);


?>

						<div class="profile-bio">
							<div class="row">
								<div class="col-md-12">
								<h2><strong> Experience </strong></h2>
		<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i++;

	if ($rs["start_month"] == 1 || $rs["end_month"] == 1 ) {

		$monthstart  = "January";
		$monthend  = "January";
	}
	else if ($rs["start_month"] == 2 || $rs["end_month"] == 2) {
		$monthstart  = "February";
		$monthend  = "February";
	}
	else if ($rs["start_month"] == 3 || $rs["end_month"] == 3) {
		$monthstart  = "March";
		$monthend  = "March";
	}
	else if ($rs["start_month"] == 4 || $rs["end_month"] == 4) {
		$monthstart  = "April";
		$monthend  = "April";
	}
	else if ($rs["start_month"] == 5 || $rs["end_month"] == 5) {
		$monthstart  = "May";
		$monthend  = "May";
	}
	else if ($rs["start_month"] == 6 || $rs["end_month"] == 6) {
		$monthstart  = "June";
		$monthend  = "June";
	}
	else if ($rs["start_month"] == 7 || $rs["end_month"] == 7) {
		$monthstart  = "July";
		$monthend  = "July";
	}
	else if ($rs["start_month"] == 8 || $rs["end_month"] == 8) {
		$monthstart  = "August";
		$monthend  = "August";
	}
	else if ($rs["start_month"] == 9 || $rs["end_month"] == 9) {
		$monthstart  = "September";
		$monthend  = "September";
	}
	else if ($rs["start_month"] == 10 || $rs["end_month"] == 10) {
		$monthstart  = "October";
		$monthend  = "October";
	}
	else if ($rs["start_month"] == 11 || $rs["end_month"] == 11) {
		$monthstart  = "November";
		$monthend  = "November";
	}
	else if ($rs["start_month"] == 12 || $rs["end_month"] == 12) {
		$monthstart  = "December";
		$monthend  = "December";
	}
	else if ($rs["start_month"] == 0 || $rs["end_month"] == 0) {
		$monthstart  = "";
		$monthend  = "";
	}

		?>	
		<? $title1 = $rs["key_achieve"];
			$title2 = $rs["key_respon"];
			$title3 = $rs["reason_for_leave"];
            $titleconvert1 = str_replace("%27","'" ,$title1);
            $titleconvert2 = str_replace("%27","'", $title2);
            $titleconvert3 = str_replace("%27","'", $title3);

            ?>	
            						<span><h4><strong><? echo $rs["company_name"]; ?> (
            							<?
            							
            							if ($rs["start_year"] == 0) {
            								
            							}
            							else{
            								echo $monthstart;
	            							echo " ";
	            							echo $rs["start_year"];
	            							echo " - ";
            							}

            							
            							if ($rs["status_present"] == 1) {
            								echo "<b><font color='#446cb3'>Present</font></b>";
            							}
            							else{
            								echo $monthend;
            								echo " ";
            								echo $rs["end_year"];
            							}
            							?>

            						 ) </h4></strong></span> 
									
									<h4 class="dd">Position : <? echo $rs["position"]; ?></h4>
									<h4 class="dd">Report to : <? echo $rs["report_to"]; ?></h4>
									<h4 class="dd">Key achievement : <? echo $titleconvert1; ?></h4>
									<h4 class="dd">Key responsibility : <? echo $titleconvert2; ?></h4>
									<h4 class="dd">Reason For Leaving : <? echo $titleconvert3; ?></h4>


	<? $monthstart  = "";
		$monthend  = ""; } ?>								
									
							</div>
							</div>
						</div><!--/end row-->

						<hr>
<? 



$strSQL2 = "SELECT * FROM academic_qualifications WHERE resume_id = '$getresume'  ";
$result2 = mysql_query($strSQL2);


?>
						
						<div class="profile-bio">
							<div class="row">
								<div class="col-md-12">
								<h2><strong> Academic Qualifications </strong></h2>

	<?php	

		while($edu = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i2++;

		?>

								<span><h4><strong><? echo $edu["school_university"]; ?> ( <? echo $edu[year]; ?> ) </h4></strong></span> 
									<h4 class="dd">Education level : <? echo $edu["edu_level"]; ?></h4>
									<h4 class="dd">Major : <? echo $edu["major"]; ?></h4>
									


	<? } ?>		
									
								</div>
							</div>
						</div><!--/end row-->

						<hr>

						<div class="col-md-12">
							<button class="btn-u btn-u" type="button" onclick="window.location.href='<? 
							if ($getfrom == "all") 
								{ echo "resume";
								} 
							else { echo "resume-refer"; } 
							?>'"><i class="fa fa-undo"></i> Back </button>
							<button class="btn-u btn-u" type="button" onclick="window.location.href='mailto:<? echo $loadresume[email]; ?>'" ><i class="fa fa-envelope-o"></i> E-mail</button>
							<button class="btn-u btn-u" type="button" onclick="printDiv('printableArea')" ><i class="fa fa-print"></i> Print</button>
							<a class="btn-u btn-u" type="button" href=../../uploadfile/resume/file/<? echo $loadresume[resume_file]; ?> download><i class="fa fa-download"></i> Download</a>
							<br>
						</div>
						<hr>
					

						
					</div>
				</div>
				<!-- End Profile Content -->
							

							
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

		<script src="../../assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="../../assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="../../assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>

	
 		
		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/datepicker.js"></script>



		<script type="text/javascript">
			
			function printDiv(divName) {
			     var printContents = document.getElementById(divName).innerHTML;
			     var originalContents = document.body.innerHTML;

			     document.body.innerHTML = printContents;

			     window.print();

			     document.body.innerHTML = originalContents;
			}

		</script>


	


		
		
		<script type="text/javascript">


			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				Datepicker.initDatepicker();


			
			});

		</script>
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

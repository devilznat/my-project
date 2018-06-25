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


$getidjob = $_GET[idjob];
$idjob = $_GET[idjob];
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


	<link href="../../assets/js/plugins/summernote/summernote.css" rel="stylesheet">
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
				<div class="col-md-9">
<?php

function returnDetailAll()
{

	$strSQL = "SELECT * FROM province ORDER BY province_id";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	mysql_close($objConnect);
	return $resultArray;
}

$resultAll = returnDetailAll();

//echo '<pre>';
//var_dump($resultCus);
//echo '</pre><hr />';


$sqlen = mysql_query("SELECT * FROM  jobs_value WHERE job_id = '$getidjob'  AND language_code = 'en'  " );
$loaden = mysql_fetch_array($sqlen);
 
$sqlth = mysql_query("SELECT * FROM  `jobs_value` WHERE job_id = '$getidjob' AND language_code = 'th' " );
$loadth = mysql_fetch_array($sqlth);

?>
					<!-- Logo -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Job </h3>
						</div>
						<div class="panel-body">

							<div class="col-md-12">
							 	<form name="form" id="form" class="sky-form">
							 	<input type="text" name="type" id="type" value="edit-job" hidden>
							 	<input type="text" name="jobid" id="jobid" value="<? echo $idjob; ?>" hidden>
										
										<div class="row">
											
											
											<section class="col-md-12">
											<label class="label">Location</label>
											
												<label class="select">	
									                <select name="text2">
									    <?php
											foreach ($resultAll as $result)
											{
										?>
									                   <option value="<?echo $result["province_id"];?>" <?php if($loaden[province_id]==$result["province_id"]) echo 'selected="selected"'; ?>   ><?echo $result["province_name_eng"];?></option> 
									    <?
											}
										?>
									                </select>
									                <i></i>
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-6">
											<label class="label">Salary Start</label>
												<label class="input">
													<input type="text" name="text3"  placeholder="Salary Start" value="<? echo $loaden[salary_start];?>">
												</label>
											</section>
											<section class="col col-6">
											<label class="label">Salary End</label>
												<label class="input">
													<input type="text" name="text4" placeholder="Salary End" value="<? echo $loaden[salary_end];?>">
												</label>
											</section>
											</div>

											
											<div class="row">
											<section class="col col-6">
											<label class="label">Negotiable</label>
												<label class="select">	
									                <select name="text5">
									                   <option value="0" <?php if($loaden[negotiable]== "0") echo 'selected="selected"'; ?> >No</option>
								                        <option value="1"<?php if($loaden[negotiable]== "1") echo 'selected="selected"'; ?>>Yes</option>
									                </select>
									                <i></i>
												</label>
											</section>
											</div>
											
											<div class="row">
											<section class="col col-6">
											<label class="label">Categories</label>
												<label class="select">	
									                <select name="text6">
									                   <option value="All">All Categories</option>
								                        <option value="Agriculture" <?php if($loaden[category]== "Agriculture") echo 'selected="selected"'; ?>>Agriculture/Livestock/Fishery/Mining</option>
								                        <option value="Computer" <?php if($loaden[category]== "Computer") echo 'selected="selected"'; ?>>Computer/IT/Programmer</option>
								                        <option value="Civil" <?php if($loaden[category]== "Civil") echo 'selected="selected"'; ?> >Construction/Survey/Architecture/Interior Design</option>
								                        <option value="Ads" <?php if($loaden[category]== "Ads") echo 'selected="selected"'; ?>>Creative Arts/Computer Graphics</option>
								                        <option value="Relation" <?php if($loaden[category]== "Relation") echo 'selected="selected"'; ?>>Customer Service/Support/PR</option>
								                        <option value="Debt_Collector" <?php if($loaden[category]== "Debt_Collector") echo 'selected="selected"'; ?>>Debt Collector/Credit Control</option>
								                        <option value="Doctor" <?php if($loaden[category]== "Doctor") echo 'selected="selected"'; ?>>Doctor/Nurse/Phamacist</option>
								                        <option value="Drawing" <?php if($loaden[category]== "Drawing") echo 'selected="selected"'; ?>>Drawing/AutoCAD/Engineering Design</option>
								                        <option value="Driver" <?php if($loaden[category]== "Driver") echo 'selected="selected"'; ?>>Driver/Messenger/Delivery/Security/Janitor</option>
								                        <option value="Teacher" <?php if($loaden[category]== "Teacher") echo 'selected="selected"'; ?>>Education/Teachers</option>
								                        <option value="Engineer" <?php if($loaden[category]== "Engineer") echo 'selected="selected"'; ?>>Engineering</option>
								                        <option value="Account" <?php if($loaden[category]== "Account") echo 'selected="selected"'; ?>>Finance/Accounting</option>
								                        <option value="Chef" <?php if($loaden[category]== "Chef") echo 'selected="selected"'; ?>>Food and Beverage/Chef/Cook/Bar Tender/Waiter</option>
								                        <option value="Garment" <?php if($loaden[category]== "Garment") echo 'selected="selected"'; ?>>Garment</option>
								                        <option value="Geographic" <?php if($loaden[category]== "Geographic") echo 'selected="selected"'; ?>>Geographic/Mapping/GIS</option>
								                        <option value="HealthCare" <?php if($loaden[category]== "HealthCare") echo 'selected="selected"'; ?>>Healthcare/Fitness/Spa</option>
								                        <option value="HouseKeeper" <?php if($loaden[category]== "HouseKeeper") echo 'selected="selected"'; ?>>House Keeper / Gardener</option>
								                        <option value="BOI" <?php if($loaden[category]== "BOI") echo 'selected="selected"'; ?>>Import-Export/Shipping/BOI</option>
								                        <option value="GUIDE" <?php if($loaden[category]== "GUIDE") echo 'selected="selected"'; ?>>Interpreter/Tourist Guide/Reservation</option>
								                        <option value="Jew" <?php if($loaden[category]== "Jew") echo 'selected="selected"'; ?>>Jewelry</option>
								                        <option value="Law" <?php if($loaden[category]== "Law") echo 'selected="selected"'; ?>>Legal</option>
								                        <option value="Manager" <?php if($loaden[category]== "Manager") echo 'selected="selected"'; ?>>Manager/Director</option>
								                        <option value="Qc" <?php if($loaden[category]== "Qc") echo 'selected="selected"'; ?>>Manufacturing/Production/QA&amp;QC</option>
								                        <option value="Marketing" <?php if($loaden[category]== "Marketing") echo 'selected="selected"'; ?>>Marketing</option>
								                        <option value="MassComm" <?php if($loaden[category]== "MassComm") echo 'selected="selected"'; ?>>Mass Communication</option>
								                        <option value="Acting" <?php if($loaden[category]== "Acting") echo 'selected="selected"'; ?>>Musician/Actor/Singer</option>
								                        <option value="Ga" <?php if($loaden[category]== "Ga") echo 'selected="selected"'; ?>>Purchasing/Administrative</option>
								                        <option value="ECONOMIC" <?php if($loaden[category]== "ECONOMIC") echo 'selected="selected"'; ?>>Research / Analysis ( Insurance/Economics/Banking )</option>
								                        <option value="Safety" <?php if($loaden[category]== "Safety") echo 'selected="selected"'; ?>>Safety/Environment</option>
								                        <option value="Sale" <?php if($loaden[category]== "Sale") echo 'selected="selected"'; ?>>Sales</option>
								                        <option value="Chemical" <?php if($loaden[category]== "Chemical") echo 'selected="selected"'; ?>>Sciences/Chemical/Biotech/Food Sciences</option>
								                        <option value="Secretary" <?php if($loaden[category]== "Secretary") echo 'selected="selected"'; ?>>Secretarial</option>
								                        <option value="Security" <?php if($loaden[category]== "Security") echo 'selected="selected"'; ?>>Security Division / Parking Lot</option>
								                        <option value="Technical" <?php if($loaden[category]== "Technical") echo 'selected="selected"'; ?>>Technicians</option>
								                        <option value="Human" <?php if($loaden[category]== "Human") echo 'selected="selected"'; ?>>Training/HR/Recruiting</option>
								                        <option value="Stock" <?php if($loaden[category]== "Stock") echo 'selected="selected"'; ?>>Warehouse/Logistics</option>
								                        <option value="Web" <?php if($loaden[category]== "Web") echo 'selected="selected"'; ?>>Web Design/Web Content</option>
								                        <option value="Writer" <?php if($loaden[category]== "Writer") echo 'selected="selected"'; ?>>Writer/Editor/Copywriter/Proffreader</option>
								                        <option value="Other" <?php if($loaden[category]== "Other") echo 'selected="selected"'; ?>>Others</option>
								                        <option value="Parttime" <?php if($loaden[category]== "Parttime") echo 'selected="selected"'; ?>>Part-time Jobs</option>
								              			<option value="Freelance" <?php if($loaden[category]== "Freelance") echo 'selected="selected"'; ?>>Freelance</option>
									                </select>
									                <i></i>
												</label>
											</section>
											<section class="col col-6">
											<label class="label">Industries</label>
												<label class="select">
													<select name="text7" >
									                   <option value="All">All Industries</option>
								                        <option value="Accounting" <?php if($loaden[industry]== "Accounting") echo 'selected="selected"'; ?>>Accounting and Law Service</option>
								                        <option value="Advertising" <?php if($loaden[industry]== "Advertising") echo 'selected="selected"'; ?>>Advertising</option>
								                        <option value="Agricultural" <?php if($loaden[industry]== "Agricultural") echo 'selected="selected"'; ?>>Agricultural</option>
								                        <option value="Automobile" <?php if($loaden[industry]== "Automobile") echo 'selected="selected"'; ?>>Automobile</option>
								                        <option value="Banking" <?php if($loaden[industry]== "Banking") echo 'selected="selected"'; ?>>Banking</option>
								                        <option value="Chemical" <?php if($loaden[industry]== "Chemical") echo 'selected="selected"'; ?>>Chemical/Plastic</option>
								                        <option value="Computer/IT" <?php if($loaden[industry]== "Computer/IT") echo 'selected="selected"'; ?>>Computer/IT</option>
								                        <option value="Construction" <?php if($loaden[industry]== "Construction") echo 'selected="selected"'; ?>>Construction</option>
								                        <option value="Consulting" <?php if($loaden[industry]== "Consulting") echo 'selected="selected"'; ?>>Consulting</option>
								                        <option value="Design" <?php if($loaden[industry]== "Design") echo 'selected="selected"'; ?>>Design/Interior Design</option>
								                        <option value="Education" <?php if($loaden[industry]== "Education") echo 'selected="selected"'; ?>>Education</option>
								                        <option value="Electrical" <?php if($loaden[industry]== "Electrical") echo 'selected="selected"'; ?>>Electrical</option>
								                        <option value="Electronic" <?php if($loaden[industry]== "Electronic") echo 'selected="selected"'; ?>>Electronic</option>
								                        <option value="Energy" <?php if($loaden[industry]== "Energy") echo 'selected="selected"'; ?>>Energy</option>
								                        <option value="Entertaining" <?php if($loaden[industry]== "Entertaining") echo 'selected="selected"'; ?>>Entertaining</option>
								                        <option value="Finance" <?php if($loaden[industry]== "Finance") echo 'selected="selected"'; ?>>Finance</option>
								                        <option value="Food" <?php if($loaden[industry]== "Food") echo 'selected="selected"'; ?>>Food, Drink &amp; Tobacco</option>
								                        <option value="Furniture" <?php if($loaden[industry]== "Furniture") echo 'selected="selected"'; ?>>Furniture/Appliance</option>
								                        <option value="Garment" <?php if($loaden[industry]== "Garment") echo 'selected="selected"'; ?>>Garment</option>
								                        <option value="Government" <?php if($loaden[industry]== "Government") echo 'selected="selected"'; ?>>Government/Non-profit</option>
								                        <option value="Hospital/Clinic" <?php if($loaden[industry]== "Hospital/Clinic") echo 'selected="selected"'; ?>>Hospital/Clinic</option>
								                        <option value="Hotel/Resort/Spa" <?php if($loaden[industry]== "Hotel/Resort/Spa") echo 'selected="selected"'; ?>>Hotel/Resort/Spa/Golf Club</option>
								                        <option value="Import/Export" <?php if($loaden[industry]== "Import/Export") echo 'selected="selected"'; ?>>Import/Export</option>
								                        <option value="Insurance" <?php if($loaden[industry]== "Insurance") echo 'selected="selected"'; ?>>Insurance</option>
								                        <option value="Jewelry" <?php if($loaden[industry]== "Jewelry") echo 'selected="selected"'; ?>>Jewelry</option>
								                        <option value="Loan" <?php if($loaden[industry]== "Loan") echo 'selected="selected"'; ?>>Loan/Credit Card</option>
								                        <option value="Mass Communication" <?php if($loaden[industry]== "Mass Communication") echo 'selected="selected"'; ?>>Mass Communication</option>
								                        <option value="Medicine/Cosmetic" <?php if($loaden[industry]== "Medicine/Cosmetic") echo 'selected="selected"'; ?>>Medicine/Cosmetic/Medical Equipment</option>
								                        <option value="Packaging" <?php if($loaden[industry]== "Packaging") echo 'selected="selected"'; ?>>Packaging</option>
								                        <option value="Paper" <?php if($loaden[industry]== "Paper") echo 'selected="selected"'; ?>>Paper</option>
								                        <option value="Publishing" <?php if($loaden[industry]== "Publishing") echo 'selected="selected"'; ?>>Publishing/Printing</option>
								                        <option value="Real Estate" <?php if($loaden[industry]== "Real Estate") echo 'selected="selected"'; ?>>Real Estate</option>
								                        <option value="Recruitment" <?php if($loaden[industry]== "Recruitment") echo 'selected="selected"'; ?>>Recruitment</option>
								                        <option value="Retail" <?php if($loaden[industry]== "Retail") echo 'selected="selected"'; ?>>Retail</option>
								                        <option value="Services" <?php if($loaden[industry]== "Services") echo 'selected="selected"'; ?>>Services</option>
								                        <option value="Steel/Metal" <?php if($loaden[industry]== "Steel/Metal") echo 'selected="selected"'; ?>>Steel/Metal</option>
								                        <option value="Telecommunication" <?php if($loaden[industry]== "Telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
								                        <option value="Trading/Commerce" <?php if($loaden[industry]== "Trading/Commerce") echo 'selected="selected"'; ?>>Trading/Commerce</option>
								                        <option value="Transportation" <?php if($loaden[industry]== "Transportation") echo 'selected="selected"'; ?>>Transportation</option>
								                        <option value="Travel" <?php if($loaden[industry]== "Travel") echo 'selected="selected"'; ?>>Travel</option>
								                        <option value="Others" <?php if($loaden[industry]== "Others") echo 'selected="selected"'; ?>>Others</option>
									                </select>
									                <i></i>
												</label>
											</section>
								<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng" data-toggle="tab">Engish</a></li>
									<li><a href="#th" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng">
											<section class="col-md-12">
											<label class="label">Position</label>
												<label class="input">
													<input type="text" name="text1"  placeholder="Position" value="<? echo $loaden[title];?>">
												</label>
											</section>

											<section class="col-md-12">
												<label class="label">Qualifications</label>
												<div id="qualifications" name="text8"> <? echo $loaden[detail];?> </div>
											</section>

											<section class="col-md-12">
												<label class="label">Responsibilities</label>
												<div id="responsibilities" name="text9"> <? echo $loaden[job_requirement];?> </div>
											</section>
									</div>

									<div class="tab-pane fade in " id="th">
											<section class="col-md-12">
											<label class="label">Position</label>
												<label class="input">
													<input type="text" name="text1th"  placeholder="Position"  value="<? echo $loadth[title];?>">
												</label>
											</section>

											<section class="col-md-12">
												<label class="label">Qualifications</label>
												<div id="qualifications2" name="text8th">  <? echo $loadth[detail];?></div>
											</section>

											<section class="col-md-12">
												<label class="label">Responsibilities</label>
												<div id="responsibilities2" name="text9th"> <? echo $loadth[job_requirement];?></div>
											</section>
									</div>
									</div>
									</div>	
											<section class="col-md-12">
											<label class="label">Image Jobs</label>
											</section>
											<section class="col col-3">
											<img src="../../assets/img/job/<? echo $loaden[value_custom];?>" class="img-responsive img-bordered enlarge">
											</section>
											<section class="col col-9">
											<label class="label">*Image Size 480x480</label>
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
											
											</section>

											<section class="col-md-12">
											<hr>
											</section>

											<section class="col col-3">
											<a class="btn btn-u btn-block " onclick="save();"> Save </a>
											</section>
										</div>
								</form>
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

		<script src="../../assets/js/plugins/summernote/summernote.min.js"></script>


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
		        url: 'fileupload-logojob?idjob=<?echo $getidjob;?>.php',
		        name: 'logojob',
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



		    

		  	
		};
		</script>

		<script>
	      $(document).ready(function() {
	         $('#qualifications').summernote({
	           height: 300,                 // set editor height

	          minHeight: null,             // set minimum height of editor
	          maxHeight: null,             // set maximum height of editor

	          placeholder: 'write here...'


	                       // set focus to editable area after initializing summernote

	         });
	         $('#responsibilities').summernote({
	           height: 300,                 // set editor height

	          minHeight: null,             // set minimum height of editor
	          maxHeight: null,             // set maximum height of editor
	          placeholder: 'write here...'

	                       // set focus to editable area after initializing summernote

	         });

	         $('#qualifications2').summernote({
	           height: 300,                 // set editor height

	          minHeight: null,             // set minimum height of editor
	          maxHeight: null,             // set maximum height of editor

	          placeholder: 'write here...'


	                       // set focus to editable area after initializing summernote

	         });
	         $('#responsibilities2').summernote({
	           height: 300,                 // set editor height

	          minHeight: null,             // set minimum height of editor
	          maxHeight: null,             // set maximum height of editor
	          placeholder: 'write here...'

	                       // set focus to editable area after initializing summernote

	         });

	    	});
	    </script>


		<script type="text/javascript"> 

		function save(){

		var q=$("#qualifications").code();
		var q2=$("#qualifications2").code();
		var r=$("#responsibilities").code();
		var r2=$("#responsibilities2").code();

		var form = new FormData($('#form')[0]);
		form.append('view_type','addtemplate');
		form.append('q',q);
		form.append('r',r);
		form.append('q2',q2);
		form.append('r2',r2);
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success:  function(data){
		       
		        alert("Data has been updated successfully");
		        window.location.assign("job-preview?idjob=<? echo $getidjob;?>");
		        // location.reload(true);
		    }
		});

        }
		</script>
	


		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();


			
			});

		</script>
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

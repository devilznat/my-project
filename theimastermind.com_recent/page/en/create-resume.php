<?php
session_start();
require('../../db/connect.php');

$headlink = "create-resume";

$jobid=0;
$jobid = $_GET[jobid];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>About Us | The i Mastermind </title>

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
	<link rel="stylesheet" href="../../assets/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel='stylesheet' href="../../assets/plugins/master-slider/masterslider/skins/black-2/style.css">
	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">

	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	


	<!-- CSS Pages Style -->
	<!-- <link rel="stylesheet" href="../../assets/css/pages/page_one.css"> -->
	
	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<link rel="stylesheet" href="../../assets/css/pages/profile.css">


	<style type="text/css">

	.btn-u {

    border: 0;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    font-weight: 400;
    padding: 6px 13px;
    position: relative;
    background: #446cb3;
    white-space: nowrap;
    display: inline-block;
    text-decoration: none;
	}

	.title-v1 p {
    font-size: 20px;
    font-weight: 200;
	}

	.bg-color-grey {
    background-color: #f7f7f7 !important;
	}



	/*////*/
	.bg-color-white{
		box-shadow: 0 2px 2px rgba(0,0,0,.175);
	}
	.boxstylejobview{
		border: 1px;
	    border-color: #ccc;
	    border-style: double;
	    border-radius: 7px;
	    padding-top: 8px;
	    /*margin: 10px;*/
	    margin-top: 25px;
	    background-color: #f7f7f7
	}
	.job-viewbox{
		padding-top: 20px;
		padding-left: 50px;
		padding-right: 50px;
		padding-bottom: 20px;
	}
	.news-v3 p {
    margin-bottom: 30px;
	}
	.btn-u {
	    font-size: 18px;
	}
	.btn-bottom{
	    font-size: 24px;
	}
	.font-head{
		font-size: 23px;
	}
	.rightbox-jobview{
		 margin: 0px 0px;
	}
	.job-viewbox-right{
		padding-top: 14px;
	    padding-left: 30px;
	    padding-right: 30px;
	    padding-bottom: 14px;
	}
	.news p, li, li a {
    font-size: 19px;
	}

	.hr-title{
		margin: 12px 0px;
    	margin-bottom: 20px;
	}


	.news-v3 h2 {
    font-size: 28px;
    font-weight: 200;
    margin: 6px 0 10px;
    line-height: 45px;
    text-transform: none;
	}
	.jobstyple{
		border: 1px;
    	border-style: double;
    	border-color: #777;

	}

	.label-color{
		color: #555;
	}

	.tab-v1 .nav-tabs a {
    font-size: 19px;
    padding: 5px 15px;
	}

	</style>


<body class="header-fixed header-fixed-space">
	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->

		


		<!--=== Content Part ===-->
		
		<div class="bg-color-light">
		<div class="container content ">

			<div class="col-md-12 col-xs-12">
			<div class="news-v3 bg-color-white margin-bottom-30">
			<div class="row job-viewbox">

				<!-- Head title View -->
				<div class="row">
					<div class="col-md-12">
						<h3><strong>Create Your Profile</strong> </h3>
						<HR class="hr-title">
						
					</div>
				</div>
				<!-- End Head title View -->
<?

$sql = mysql_query("SELECT * FROM  `resumes` ORDER BY  `resumes`.`resume_id` DESC LIMIT 1" );
$loadidresume = mysql_fetch_array($sql);
 
 $idresume = $loadidresume[resume_id]+1;

 ?>
				<!-- Create Profile -->
				<div class="row">
					<div class="col-md-12">

					<div class="alert alert-success fade in hidden" name="showalert" id="showalert">
									<strong>Well done!</strong> Change a few things up and try submitting again.
					</div>

						<div class="tab-v1">
						<ul class="nav nav-tabs">
							<li id="litab1" class="active"><a >Personal Detail</a></li>
							<li id="litab2" class=""><a >Professional Experience</a></li>
							<li id="litab3" class=""><a >Other Information</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tab1">
								<div class="row">
									
									<!-- <? echo  $idresume;  ?> -->
									<form id="form1" name="form1" class="sky-form" novalidate="novalidate">
									<input type="text" name="type" id="type" value="personaldetail" hidden>
									<input type="text" name="resumeid" id="resumeid" value="<? echo $idresume; ?>" hidden>
									<input type="text" id="statusbtn1" name="statusbtn1" value="0" hidden>
									
									<fieldset>
										
										<div class="row">
										<div class="col-md-12"><label class="label">Candidate Name </label></div>
											<section class="col col-6">
												<label class="input">
													<input type="text" name="firstname" id="firstname" placeholder="First name">
													
												</label>
											</section>
											<section class="col col-6">
												<label class="input">
													<input type="text" name="lastname" id="lastname" placeholder="Last name">
													
												</label>
											</section>
										</div>

										<div class="row">
										<section class="col col-6">
										<label class="label">E-Mail Address</label>
											<label class="input">
												<i class="icon-append fa fa-envelope"></i>
												<input type="text" name="email" id="email" placeholder="Email address">
												
											</label>
										</section>
										<section class="col col-6">
										<label class="label">Mobile Phone</label>
											<label class="input">
												<i class="icon-append fa  fa-phone"></i>
												<input type="text" name="phone" id="phone" placeholder="Mobile Phone">
												
											</label>
										</section>
										</div>
										

										<section>
										<label class="label">Your Image</label>
										<label for="file" class="input input-file">
										<h6>*File Image size limit 10MB and allow (png,jpg,gif)</h6>
											<div class="row" style="padding-top:10px;">
									            <div class="col-xs-2">
									              <button id="uploadBtn" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20">Choose File</button>
									            </div>
									            <div class="col-xs-10">
									          <div id="progressOuter" class="progress progress-striped active" style="display:none;">
									            <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
									            </div>
									          </div>
									            </div>
									          </div>
									          <div class="row" style="padding-top:5px;">
									            <div class="col-xs-10">
									              <div id="msgBox">
									              </div>
									            </div>
									          </div>
											
										</label>
										</section>

										<div class="row">
										<section class="col col-6">
										<label class="label">Applied Position</label>
											<label class="input">
												<i class="icon-append fa fa-suitcase"></i>
												<input type="text" name="applied-position" id="applied-position" placeholder="Applied Position">
												
											</label>
										</section>
										<section class="col col-6">
										<label class="label">Current Position</label>
											<label class="input">
												<i class="icon-append fa fa-briefcase"></i>
												<input type="text" name="current-position" id="current-position" placeholder="Current Position">
												
											</label>
										</section>
										</div>

										<div class="row">
										<section class="col col-6">
										<label class="label">Nationality</label>
											<label class="input">
												<i class="icon-append fa fa-flag"></i>
												<input type="text" name="nationality" id="nationality" placeholder="Nationality">
												
											</label>
										</section>
										<section class="col col-6">
										<label class="label">Date of Birth</label>
											<label class="input">
												<i class="icon-append fa fa-birthday-cake"></i>
												<input type="text" name="datebirth" id="datebirth" placeholder="Date of Birth">
												
											</label>
										</section>
										</div>

										<div class="row">
										<section class="col col-6">
											<label class="label">Sex</label>
											<div class="inline-group">
												<label class="radio"><input type="radio" name="radio-sex" id="radio-sex" value="Female" checked=""><i class="rounded-x"></i>Female </label>
												<label class="radio"><input type="radio" name="radio-sex" id="radio-sex" value="Male"><i class="rounded-x"></i>Male</label>
											</div>
										</section>
										<section class="col col-6">
											<label class="label">Status</label>
											<div class="inline-group">
												<label class="radio"><input type="radio" name="radio-status" id="radio-status" value="Single" checked=""><i class="rounded-x"></i>Single </label>
												<label class="radio"><input type="radio" name="radio-status" id="radio-status" value="Married"><i class="rounded-x"></i>Married</label>
												<label class="radio"><input type="radio" name="radio-status" id="radio-status" value="Divorced"><i class="rounded-x"></i>Divorced</label>
												<label class="radio"><input type="radio" name="radio-status" id="radio-status" value="Separated"><i class="rounded-x"></i>Separated</label>
											</div>
										</section>
										</div>

										<section>
											<label class="label">Communication</label>
											<div class="inline-group">
												<label class="checkbox"><input type="checkbox" name="checkbox-communication" id="checkbox-communication" value="Thai" checked=""><i></i>Thai</label>
												<label class="checkbox"><input type="checkbox" name="checkbox-communication" id="checkbox-communication" value="English"><i></i>English</label>
												<label>
												<label class="checkbox">Others</label>
												<input type="Others" name="Others" id="Others" placeholder="Others">
												
												</label>
											</div>
										</section>

										</form>

										<form id="form2" name="form2" class="sky-form" novalidate="novalidate">
										<input type="text" name="type" id="type" value="qualifications" hidden>
										<input type="text" name="resumeid" id="resumeid" value="<? echo $idresume; ?>" hidden>
										<input type="text" id="numq" name="numq" value="1" hidden>
										<input type="text" id="statusbtna" name="statusbtna" value="0" hidden>

										<div class="row">
										<div class="col-md-12"><label class="label">Academic Qualifications</label></div>
										<section class="col col-6">
											<label class="input">
												<i class="icon-append fa fa-university"></i>
												<input type="text" name="school_1" id="school_1" placeholder="School/University">
												
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<i class="icon-append fa fa-star"></i>
												<input type="text" name="major_1" id="major_1" placeholder="Major">
												
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<i class="icon-append fa fa-line-chart"></i>
												<input type="text" name="education-level_1" id="education-level_1" placeholder="Education Level">
												
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<i class="icon-append fa fa-graduation-cap"></i>
												<input type="text" name="year_1" id="year_1" placeholder="Year">
												
											</label>
										</section>
										<section class="hidden" >
											<label class="input">
												<i class="icon-append fa fa-graduation-cap"></i>
												<input type="text" name="itemid_1" id="itemid_1" value="1">
											</label>
										</section>
										</div>

										<div  id="myForm"></div>

										<a onclick="addQualifications()" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 pull-left "> Add Academic Qualifications </a>

									</fieldset>

									
									<footer>
										<div class="heading heading-v5">
											<a onclick="btnnextstep1()" href="#tab2"  data-toggle="tab" aria-expanded="false" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 "> Next Step </a>
										</div>


									</footer>
								</form>

								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
								<div class="row">
									<form name="form3" id="form3" class="sky-form" novalidate="novalidate">

									<input type="text" name="type" id="type" value="experience" hidden>
									<input type="text" name="resumeid" id="resumeid" value="<? echo $idresume; ?>" hidden>
									<input type="text" id="nume" name="nume" value="1" hidden>
									<input type="text" id="statusbtn2" name="statusbtn2" value="0" hidden>

									<fieldset>

										<label class="label">Company Name</label>
										<section>
											<label class="input">
												<input type="text" name="company-name_1" id="company-name_1" placeholder="Company Name">
												
											</label>
										</section>

										<div class="row">
										<section class="col col-4">
										<label class="label">Start Date</label>
											<label class="select ">
												<select name="month-start-work_1" id="month-start-work_1" class="valid">
													<option value="0" selected="" disabled="">Month</option>
													<option value="1">January</option>
													<option value="1">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
												<i></i>
											</label>
										</section>
										<section class="col col-2">
										<label class="label hidden-xs "><br></label>
											<label class="input">
												<input type="text" name="yearstart_1" id="yearstart_1" placeholder="Year" class="invalid">
											</label>
										</section>

										<section class="col col-4">
										<label class="label">End Date</label>
											<label class="select ">
												<select name="month-end-work_1" id="month-end-work_1" class="valid">
													<option value="0" selected="" disabled="">Month</option>
													<option value="1">January</option>
													<option value="1">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
												<i></i>
											</label>
										</section>
										<section class="col col-2">
										<label class="label  hidden-xs"><br></label>
											<label class="input">
												<input type="text" name="yearend_1" id="yearend_1" placeholder="Year" class="invalid">
											</label>
										</section>
										</div>

										<div class="row">
										<section class="col-md-12">
											<label class="label">Present</label>
											<div class="inline-group">
												<label class="checkbox"><input type="checkbox" name="present_1" id="present_1" value="1" onclick="present(1)" ><i></i>Present</label>
											</div>
										</section>
										</div>

										

										<div class="row">
										<section class="col col-6">
										<label class="label">Position</label>
											<label class="input">
												<i class="icon-append fa fa-suitcase"></i>
												<input type="text" name="position_1" id="position_1" placeholder="Position">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>
										<section class="col col-6">
										<label class="label">Report To</label>
											<label class="input">
												<i class="icon-append fa fa-briefcase"></i>
												<input type="text" name="report-to_1" id="report-to_1" placeholder="Report To">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>
										</div>

										<section >
										<label class="label">Number of Subordinate</label>
											<label class="input">
												<i class="icon-append fa fa-briefcase"></i>
												<input type="text" name="num-subordinate_1" id="num-subordinate_1" placeholder="Number of Subordinate">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>

										<section>
											<label class="label">Key Achievement</label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="3" name="Key-Achievement_1" id="Key-Achievement_1" placeholder="Key Achievement"></textarea>
											</label>
										</section>

										<section>
											<label class="label">Key Responsibility</label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="3" name="Key-Responsibility_1" id="Key-Responsibility_1" placeholder="Key Responsibility"></textarea>
											</label>
										</section>

										<section>
											<label class="label">Reason For Leaving</label>
											<label class="textarea">
												<i class="icon-append fa fa-comment"></i>
												<textarea rows="3" name="Reason-Leaving_1" id="Reason-Leaving_1" placeholder="Reason For Leaving"></textarea>
											</label>
										</section>

										<section class="hidden" >
											<label class="input">
												<input type="text" name="itemid_1" id="itemid_1" value="1">
											</label>
										</section>

										<div id="experience"></div>

										<a onclick="addexperience()" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20  "> Add Professional Experience </a>

										
									</fieldset>

									
									<footer>
										<div class="heading heading-v5">
											<a onclick="btnbackstep1()" href="#tab1" data-toggle="tab" aria-expanded="false" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 "> Back Step </a>
											<a onclick="btnnextstep2()" href="#tab3" data-toggle="tab" aria-expanded="false" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 "> Next Step </a>
										</div>
									</footer>
								</form>
								</div>	
							</div>
							<div class="tab-pane fade" id="tab3">
								<div class="row">
									<form name="form4" id="form4" class="sky-form" novalidate="novalidate">
									<input type="text" name="type" id="type" value="other" hidden>
									<input type="text" name="resumeid" id="resumeid" value="<? echo $idresume; ?>" hidden>
									<input type="text" name="jobid" id="jobid" value="<? echo $jobid; ?>" hidden>
									
									
									<fieldset>

										<section>
										<label class="label">Current Basic Salary</label>
											<label class="input">
												<i class="icon-append fa fa-flag"></i>
												<input type="text" name="Current-Salary" id="Current-Salary" placeholder="Current Basic Salary">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>

										<div class="row">
										<section class="col col-6">
										<label class="label">Fix Bonus</label>
											<label class="input">
												<i class="icon-append fa fa-suitcase"></i>
												<input type="text" name="fix-Bonus" id="fix-Bonus" placeholder="Fix Bonus">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>
										<section class="col col-6">
										<label class="label">Variable Bonus</label>
											<label class="input">
												<i class="icon-append fa fa-briefcase"></i>
												<input type="text" name="Variable-Bonus" id="Variable-Bonus" placeholder="Variable Bonus">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>
										</div>

										<section>
										<label class="label">Other Allowance</label>
											<label class="input">
												<i class="icon-append fa fa-flag"></i>
												<input type="text" name="Other-Allowance" id="Other-Allowance" placeholder="Other Allowance">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>

										<section>
										<label class="label">Expectation</label>
											<label class="input">
												<i class="icon-append fa fa-flag"></i>
												<input type="text" name="Expectation" id="Expectation" placeholder="Expectation">
												<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
											</label>
										</section>

										<div class="row">
										<section class="col col-6">
										<label class="label">Notice Period</label>
											<label class="select">
												<select name="period" id="period" class="valid">
													<option value="Immediately" selected="" >Immediately</option>
													<option value="30 Days">30 Days</option>
													<option value="60 Days">60 Days</option>
												</select>
												<i></i>
											</label>
										</section>
										</div>
										

									

										
									</fieldset>

									
									<footer>
										<div class="heading heading-v5">
											<a onclick="btnbackstep2()" href="#tab2" data-toggle="tab" aria-expanded="false" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 "> Back Step </a>
											<a onclick="btnfinish()" data-toggle="tab" aria-expanded="false" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20 "> Finish </a>
											
										</div>

										

									</footer>


								</form>
								</div>
							</div>
							
						</div>
					</div>
					</div>
				</div>
				<!-- Create Profile  -->
				

				

			</div>
			</div>
			</div>
			<div class="heading heading-v5">
			<br>
				<h3><font color="#777">----- OR -----</font></h3>
				<a href="uploadresume-nojob" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20"> Upload Resume </a>					
			</div>

			
		</div><!--/container-->
		</div>
		<!--=== End Content Part ===-->


		

	
	
		<!-- requrie footer -->
		<? require ('footer-homepage.php'); ?>
		<!-- End reurie footer  -->
			

			
		</div><!--/wrapper-->



		<!-- JS Global Compulsory -->
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery.parallax.js"></script>
		<script src="../../assets/plugins/master-slider/masterslider/masterslider.min.js"></script>
		<script src="../../assets/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
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
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
		<!-- <script type="text/javascript" src="../../assets/js/plugins/master-slider-showcase4.js"></script> -->

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
		        url: 'fileupload-imageresume.php',
		        name: 'imageresume',
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
		
		
		<script type="text/javascript">

			/// loop add data
			var loop1=1;  //Qualifications
			var loop2=1;
		function btnnextstep1() {
    		document.getElementById("litab1").className = '';
    		document.getElementById("litab2").className = 'active';
    		document.getElementById("litab3").className = '';

    		///// pre
    		var favorite = [];
            $.each($("input[name='checkbox-communication']:checked"), function(){            
                favorite.push($(this).val());
            });

            var other = $("#Others").val();

            var comsent = ""+favorite.join(", ")+","+other;

    			var form = new FormData($('#form1')[0]);
				form.append('comsent',comsent);
				// form.append('q',q);
				// form.append('r',r);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){
				       
				        // alert("Data has been updated successfully");
				     
				    }
				});
			///// qu

				var form2 = new FormData($('#form2')[0]);
				// form2.append('comsent',comsent);
				// form.append('q',q);
				// form.append('r',r);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form2,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){
				       
				        // alert("Data has been updated successfully");
				     
				    }
				});



		}
		function btnnextstep2() {
    		document.getElementById("litab1").className = '';
    		document.getElementById("litab2").className = '';
    		document.getElementById("litab3").className = 'active';

    			var form3 = new FormData($('#form3')[0]);
				// form2.append('comsent',comsent);
				// form.append('q',q);
				// form.append('r',r);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form3,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){
				       
				        // alert("Data has been updated successfully");
				     
				    }
				});
		}
		function btnfinish() {
    		
    			var form4 = new FormData($('#form4')[0]);
				// form2.append('comsent',comsent);
				// form.append('q',q);
				// form.append('r',r);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form4,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){

				    			

							    $.ajax({
							    type: "POST",
							    url: "../backend/export-pdf.php?idresume=<? echo $idresume;?>",
							    cache: false,
							    contentType: false,
							    processData: false,
							    success:  function(data){
							       // alert("PDF successfully");
							    }
							});
				       
				       	document.getElementById("showalert").setAttribute("class", "alert alert-success fade in"); 
				        alert("Sent request successfully");
				        var url = "http://theimastermind.com/page/en/resume-preview?idresume=<? echo $idresume; ?>"; 
				        window.location.assign(url,'_blank');
 						 
				     
				    }
				});
		}
		function btnbackstep1() {
    		document.getElementById("litab1").className = 'active';
    		document.getElementById("litab2").className = '';
    		document.getElementById("litab3").className = '';

    		var statusbtn1 = 1;
    		document.getElementById('statusbtn1').value = statusbtn1;
    		document.getElementById('statusbtna').value = statusbtn1;

		}
		function btnbackstep2() {
    		document.getElementById("litab1").className = '';
    		document.getElementById("litab2").className = 'active';
    		document.getElementById("litab3").className = '';

    		var statusbtn2 = 1;
    		document.getElementById('statusbtn2').value = statusbtn2;
		}

		var i = 1; /* Set Global Variable i */
		function increment(){
		i += 1; /* Function for automatic increment of field's "Name" attribute. */
		}
		/*
		---------------------------------------------

		Function to Remove Form Elements Dynamically
		---------------------------------------------

		*/
		function removeElement(parentDiv, childDiv,type,itemid){
		if (childDiv == parentDiv){
		alert("The parent div cannot be removed.");
		}
		else if (document.getElementById(childDiv)){
		var child = document.getElementById(childDiv);
		var parent = document.getElementById(parentDiv);
		parent.removeChild(child);

		var check1 = $("#statusbtn2").val();
		var check2 = $("#statusbtna").val();
		var resumesid1 ="<? echo $idresume;?>"; 
		if (check1 == 1 || check2 == 1) {

				var form5 = new FormData($('#form5')[0]);
				form5.append('type',type);
				form5.append('itemid',itemid);
				form5.append('idresume',resumesid1);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form5,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){
				       
				        // alert("Data has been removed successfully");
				    }
				});

		}
		else {}

				


		}
		else{
		alert("Child div has already been removed or does not exist.");
		return false;
		}
		}
		/*
		---------------------------------------------

		
		---------------------------------------------

		*/

		function present(item){
			

			var idpresent = "present_"+item;


			if (document.getElementById(idpresent).checked) 
			  {
			  	
			  	var m1 = "month-end-work_"+item;
			  	var m2 = "yearend_"+item;
			     document.getElementById(m1).disabled = true;
			     document.getElementById(m2).disabled = true;
			  } else {
			  	var m1 = "month-end-work_"+item;
			  	var m2 = "yearend_"+item;
			     document.getElementById(m1).disabled = false;
			     document.getElementById(m2).disabled = false;
			     
			  }
		}
		
		

		function addQualifications1() {
			// var r = document.createElement('span');
   //  		var y = document.createElement("INPUT");
   //  		y.setAttribute("type", "text");
			// y.setAttribute("placeholder", "School/University");
			// y.setAttribute("Name", "textelement_" + i);
			// r.appendChild(y);
			// r.appendChild(g);
			// r.setAttribute("id", "id_" + i);
			// document.getElementById("myForm").appendChild(r);


			var r = document.createElement('section');
			r.setAttribute("class","col col-6")
			var y = document.createElement("INPUT");
			y.setAttribute("type", "text");
			y.setAttribute("placeholder", "School/University");

			var icon = document.createElement('i');
			icon.setAttribute("class","icon-append fa fa-university")
			r.appendChild(icon);
			
			// var g = document.createElement("IMG");
			// g.setAttribute("src", "delete.png");
			increment();
			y.setAttribute("Name", "textelement_" + i);
			r.appendChild(y);
			// g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
			// r.appendChild(g);
			// r.setAttribute("id", "id_" + i);
			document.getElementById("myForm").appendChild(r);
		}

		function addQualifications() {

			increment();

			var div = document.createElement('div');
			div.setAttribute("class","row");

			var hr = document.createElement('hr');
			hr.setAttribute("class","hr-title");
			div.appendChild(hr);

			var divhead = document.createElement('div');
			divhead.setAttribute("class","col-md-12");
			var headname = document.createElement('label');
			headname.setAttribute("class","label");
			var texthead = document.createTextNode(" Academic Qualifications ");
			headname.appendChild(texthead);
			divhead.appendChild(headname);

			//// School / University
			var section1 = document.createElement('section');
			section1.setAttribute("class","col col-6");

			var label1 = document.createElement('label');
			label1.setAttribute("class","input");

			var icon1 = document.createElement('i');
			icon1.setAttribute("class","icon-append fa fa-university")

			var input1 = document.createElement("INPUT");
			input1.setAttribute("type", "text");
			input1.setAttribute("placeholder", "School/University");
			input1.setAttribute("Name", "school_" + i);

			label1.appendChild(icon1);
			label1.appendChild(input1);
			section1.appendChild(label1);

			//// End School / University

			//// major
			var section2 = document.createElement('section');
			section2.setAttribute("class","col col-6");

			var label2 = document.createElement('label');
			label2.setAttribute("class","input");

			var icon2 = document.createElement('i');
			icon2.setAttribute("class","icon-append fa fa-star")

			var input2 = document.createElement("INPUT");
			input2.setAttribute("type", "text");
			input2.setAttribute("placeholder", "Major");
			input2.setAttribute("Name", "major_" + i);

			label2.appendChild(icon2);
			label2.appendChild(input2);
			section2.appendChild(label2);
			//// End major

			//// Education Level
			var section3 = document.createElement('section');
			section3.setAttribute("class","col col-6");

			var label3 = document.createElement('label');
			label3.setAttribute("class","input");

			var icon3 = document.createElement('i');
			icon3.setAttribute("class","icon-append fa fa-line-chart")

			var input3 = document.createElement("INPUT");
			input3.setAttribute("type", "text");
			input3.setAttribute("placeholder", "Education Level");
			input3.setAttribute("Name", "education-level_" + i);

			label3.appendChild(icon3);
			label3.appendChild(input3);
			section3.appendChild(label3);
			//// End Education Level

			//// Year Level
			var section4 = document.createElement('section');
			section4.setAttribute("class","col col-6");

			var label4 = document.createElement('label');
			label4.setAttribute("class","input");

			var icon4 = document.createElement('i');
			icon4.setAttribute("class","icon-append fa fa-graduation-cap")

			var input4 = document.createElement("INPUT");
			input4.setAttribute("type", "text");
			input4.setAttribute("placeholder", "Year");
			input4.setAttribute("Name", "year_" + i);

			label4.appendChild(icon4);
			label4.appendChild(input4);
			section4.appendChild(label4);
			//// End Year

			//// item id
			var section5 = document.createElement('section');
			section5.setAttribute("class","hidden");

			var label5 = document.createElement('label');
			label5.setAttribute("class","input");

			var icon5 = document.createElement('i');
			icon5.setAttribute("class","icon-append fa fa-graduation-cap")

			var input5 = document.createElement("INPUT");
			input5.setAttribute("type", "text");
			input5.setAttribute("placeholder", "itemid_");
			input5.setAttribute("Name", "itemid_" + i);
			input5.setAttribute("value", "" + i);

			label5.appendChild(icon5);
			label5.appendChild(input5);
			section5.appendChild(label5);
			//// item id

			//// btn delete
			var btndelete = document.createElement('a');
			btndelete.setAttribute("class","btn btn-u  btn-u-red btn-md rounded-2x margin-bottom-10 pull-right");

			var icondelete = document.createElement('i');
			icondelete.setAttribute("class","icon-append fa fa-trash")
			var textbtn = document.createTextNode("Delete" );
			// btndelete.appendChild(icondelete);
			btndelete.appendChild(textbtn);
			btndelete.setAttribute("onclick", "removeElement('myForm','id_" + i + "','removequalifications','"+i+"')");
			/// end btn delete

			div.appendChild(divhead);
			div.appendChild(section1);
			div.appendChild(section2);
			div.appendChild(section3);
			div.appendChild(section4);
			div.appendChild(section5);
			div.appendChild(btndelete);

			div.setAttribute("id", "id_" + i);
			document.getElementById("myForm").appendChild(div);

			// add to loop1
			loop1 = loop1+1;
			document.getElementById('numq').value = loop1;
			// alert(loop1);
		
		}

		var i2 = 1; /* Set Global Variable i */
		function increment2(){
		i2 += 1; /* Function for automatic increment of field's "Name" attribute. */
		}

		function addexperience() {	

			increment2();
			//div row
			var divexperience = document.createElement('div');
			divexperience.setAttribute("class","row");

			//hr line
			var hrexperience = document.createElement('hr');
			hrexperience.setAttribute("class","hr-title");
			divexperience.appendChild(hrexperience);

			//section company name
			var section2_1 = document.createElement('section');
			section2_1.setAttribute("class","col-md-12");

			var label2_1 = document.createElement('label');
			label2_1.setAttribute("class","label");
			var textlabel2_1 = document.createTextNode("Company Name");
			label2_1.appendChild(textlabel2_1);

			var labelinput2_1 = document.createElement('label');
			labelinput2_1.setAttribute("class","input");
			var input2_1 = document.createElement('input');
			input2_1.setAttribute("type", "text");
			input2_1.setAttribute("placeholder", "Company Name");
			input2_1.setAttribute("Name", "company-name_" + i2);
			labelinput2_1.appendChild(input2_1);

			section2_1.appendChild(label2_1);
			section2_1.appendChild(labelinput2_1);
			//End section company name

			//section 
			var section2_123 = document.createElement('section');
			section2_123.setAttribute("class","col-md-12");

			var label2_123 = document.createElement('label');
			label2_123.setAttribute("class","label");
			var textlabel2_123 = document.createTextNode("Present");
			label2_123.appendChild(textlabel2_123);

			var labelinput2_123 = document.createElement('label');
			labelinput2_123.setAttribute("class","checkbox");
			var input2_123 = document.createElement('input');
			input2_123.setAttribute("type", "checkbox");
			input2_123.setAttribute("value", "1");
			input2_123.setAttribute("Name", "present_" + i2);
			input2_123.setAttribute("id", "present_" + i2);
			input2_123.setAttribute("onclick", "present('"+i2+"')");
			var i2_123 = document.createElement('i');
			var t2_123 = document.createTextNode("Present");

			labelinput2_123.appendChild(input2_123);
			labelinput2_123.appendChild(i2_123);
			labelinput2_123.appendChild(t2_123);

			section2_123.appendChild(label2_123);
			section2_123.appendChild(labelinput2_123);
			//End section company name


			//Start Deta
			var section2_2 = document.createElement('section');
			section2_2.setAttribute("class","col col-4");

			var labelhead2_2 = document.createElement('label');
			labelhead2_2.setAttribute("class","label");
			var textlabel2_2 = document.createTextNode("Start Date");
			labelhead2_2.appendChild(textlabel2_2);

			var labelinput2_2 = document.createElement('label');
			labelinput2_2.setAttribute("class","select");
			var select2_2 = document.createElement('select');
			select2_2.setAttribute("name","month-start-work_"+i2);
			select2_2.setAttribute("class","valid");
				var option1_1 = document.createElement('option');
				option1_1.setAttribute("value","0");
				option1_1.setAttribute("selected", "");
				option1_1.setAttribute("disabled", "");
				var textoption1_1 = document.createTextNode("Month");
				option1_1.appendChild(textoption1_1);
				select2_2.appendChild(option1_1);

				var option1_2 = document.createElement('option');
				option1_2.setAttribute("value","1");
				var textoption1_2 = document.createTextNode("January");
				option1_2.appendChild(textoption1_2);
				select2_2.appendChild(option1_2);

				var option1_21 = document.createElement('option');
				option1_21.setAttribute("value","2");
				var textoption1_21 = document.createTextNode("February");
				option1_21.appendChild(textoption1_21);
				select2_2.appendChild(option1_21);

				var option1_3 = document.createElement('option');
				option1_3.setAttribute("value","2");
				var textoption1_3 = document.createTextNode("February");
				option1_3.appendChild(textoption1_3);
				select2_2.appendChild(option1_3);

				var option1_4 = document.createElement('option');
				option1_4.setAttribute("value","3");
				var textoption1_4 = document.createTextNode("March");
				option1_4.appendChild(textoption1_4);
				select2_2.appendChild(option1_4);

				var option1_5 = document.createElement('option');
				option1_5.setAttribute("value","4");
				var textoption1_5 = document.createTextNode("April");
				option1_5.appendChild(textoption1_5);
				select2_2.appendChild(option1_5);

				var option1_6 = document.createElement('option');
				option1_6.setAttribute("value","5");
				var textoption1_6 = document.createTextNode("May");
				option1_6.appendChild(textoption1_6);
				select2_2.appendChild(option1_6);

				var option1_7 = document.createElement('option');
				option1_7.setAttribute("value","6");
				var textoption1_7 = document.createTextNode("June");
				option1_7.appendChild(textoption1_7);
				select2_2.appendChild(option1_7);

				var option1_8 = document.createElement('option');
				option1_8.setAttribute("value","7");
				var textoption1_8 = document.createTextNode("July");
				option1_8.appendChild(textoption1_8);
				select2_2.appendChild(option1_8);

				var option1_9 = document.createElement('option');
				option1_9.setAttribute("value","8");
				var textoption1_9 = document.createTextNode("August");
				option1_9.appendChild(textoption1_9);
				select2_2.appendChild(option1_9);

				var option1_10 = document.createElement('option');
				option1_10.setAttribute("value","9");
				var textoption1_10 = document.createTextNode("September");
				option1_10.appendChild(textoption1_10);
				select2_2.appendChild(option1_10);

				var option1_11 = document.createElement('option');
				option1_11.setAttribute("value","10");
				var textoption1_11 = document.createTextNode("October");
				option1_11.appendChild(textoption1_11);
				select2_2.appendChild(option1_11);

				var option1_12 = document.createElement('option');
				option1_12.setAttribute("value","11");
				var textoption1_12 = document.createTextNode("November");
				option1_12.appendChild(textoption1_12);
				select2_2.appendChild(option1_12);

				var option1_13 = document.createElement('option');
				option1_13.setAttribute("value","12");
				var textoption1_13 = document.createTextNode("December");
				option1_13.appendChild(textoption1_13);
				select2_2.appendChild(option1_13);

			labelinput2_2.appendChild(select2_2);
			section2_2.appendChild(labelhead2_2);
			section2_2.appendChild(labelinput2_2);

			//start year

			var section2_3 = document.createElement('section');
			section2_3.setAttribute("class","col col-2");

			var labelhead2_3 = document.createElement('label');
			labelhead2_3.setAttribute("class","label ");
			var textlabel2_3 = document.createTextNode("Year");
			labelhead2_3.appendChild(textlabel2_3);

			var labelinput2_3 = document.createElement('label');
			labelinput2_3.setAttribute("class","input");
			var input2_3 = document.createElement('input');
			input2_3.setAttribute("type", "text");
			input2_3.setAttribute("placeholder", "Year");
			input2_3.setAttribute("Name", "yearstart_" + i2);
			labelinput2_3.appendChild(input2_3);

			section2_3.appendChild(labelhead2_3);
			section2_3.appendChild(labelinput2_3);


			//End Deta
			var section2_4 = document.createElement('section');
			section2_4.setAttribute("class","col col-4");

			var labelhead2_4 = document.createElement('label');
			labelhead2_4.setAttribute("class","label");
			var textlabel2_4 = document.createTextNode("End Date");
			labelhead2_4.appendChild(textlabel2_4);

			var labelinput2_5 = document.createElement('label');
			labelinput2_5.setAttribute("class","select");
			var select2_5 = document.createElement('select');
			select2_5.setAttribute("name","month-end-work_"+i2);
			select2_5.setAttribute("id","month-end-work_"+i2);
			select2_5.setAttribute("class","valid");
				var option2_1 = document.createElement('option');
				option2_1.setAttribute("value","0");
				option2_1.setAttribute("selected", "");
				option2_1.setAttribute("disabled", "");
				var textoption2_1 = document.createTextNode("Month");
				option2_1.appendChild(textoption2_1);
				select2_5.appendChild(option2_1);

				var option2_2 = document.createElement('option');
				option2_2.setAttribute("value","1");
				var textoption2_2 = document.createTextNode("January");
				option2_2.appendChild(textoption2_2);
				select2_5.appendChild(option2_2);

				var option2_3 = document.createElement('option');
				option2_3.setAttribute("value","2");
				var textoption2_3 = document.createTextNode("February");
				option2_3.appendChild(textoption2_3);
				select2_5.appendChild(option1_3);

				var option2_4 = document.createElement('option');
				option2_4.setAttribute("value","3");
				var textoption2_4 = document.createTextNode("March");
				option2_4.appendChild(textoption2_4);
				select2_5.appendChild(option2_4);

				var option2_5 = document.createElement('option');
				option2_5.setAttribute("value","4");
				var textoption2_5 = document.createTextNode("April");
				option2_5.appendChild(textoption2_5);
				select2_5.appendChild(option2_5);

				var option2_6 = document.createElement('option');
				option2_6.setAttribute("value","5");
				var textoption2_6 = document.createTextNode("May");
				option2_6.appendChild(textoption2_6);
				select2_5.appendChild(option2_6);

				var option2_7 = document.createElement('option');
				option2_7.setAttribute("value","6");
				var textoption2_7 = document.createTextNode("June");
				option2_7.appendChild(textoption2_7);
				select2_5.appendChild(option2_7);

				var option2_8 = document.createElement('option');
				option2_8.setAttribute("value","7");
				var textoption2_8 = document.createTextNode("July");
				option2_8.appendChild(textoption2_8);
				select2_5.appendChild(option2_8);

				var option2_9 = document.createElement('option');
				option2_9.setAttribute("value","8");
				var textoption2_9 = document.createTextNode("August");
				option2_9.appendChild(textoption2_9);
				select2_5.appendChild(option2_9);

				var option2_10 = document.createElement('option');
				option2_10.setAttribute("value","9");
				var textoption2_10 = document.createTextNode("September");
				option2_10.appendChild(textoption2_10);
				select2_5.appendChild(option2_10);

				var option2_11 = document.createElement('option');
				option2_11.setAttribute("value","10");
				var textoption2_11 = document.createTextNode("October");
				option2_11.appendChild(textoption2_11);
				select2_5.appendChild(option2_11);

				var option2_12 = document.createElement('option');
				option2_12.setAttribute("value","11");
				var textoption2_12 = document.createTextNode("November");
				option2_12.appendChild(textoption2_12);
				select2_5.appendChild(option2_12);

				var option2_13 = document.createElement('option');
				option2_13.setAttribute("value","12");
				var textoption2_13 = document.createTextNode("December");
				option2_13.appendChild(textoption2_13);
				select2_5.appendChild(option2_13);

			labelinput2_5.appendChild(select2_5);
			section2_4.appendChild(labelhead2_4);
			section2_4.appendChild(labelinput2_5);

			//end year

			var section2_5 = document.createElement('section');
			section2_5.setAttribute("class","col col-2");

			var labelhead2_5 = document.createElement('label');
			labelhead2_5.setAttribute("class","label ");
			var textlabel2_5 = document.createTextNode("Year");
			labelhead2_5.appendChild(textlabel2_5);

			var labelinput2_6 = document.createElement('label');
			labelinput2_6.setAttribute("class","input");
			var input2_6 = document.createElement('input');
			input2_6.setAttribute("type", "text");
			input2_6.setAttribute("placeholder", "Year");
			input2_6.setAttribute("Name", "yearend_" + i2);
			input2_6.setAttribute("id", "yearend_" + i2);
			labelinput2_6.appendChild(input2_6);

			section2_5.appendChild(labelhead2_5);
			section2_5.appendChild(labelinput2_6);

			/// end date

			//postion
			var section2_6 = document.createElement('section');
			section2_6.setAttribute("class","col col-6");

			var labelhead2_6 = document.createElement('label');
			labelhead2_6.setAttribute("class","label ");
			var textlabel2_6 = document.createTextNode("Position");
			labelhead2_6.appendChild(textlabel2_6);

			var labelinput3_6 = document.createElement('label');
			labelinput3_6.setAttribute("class","input");
			var icon3_6 = document.createElement('i');
			icon3_6.setAttribute("class","icon-append fa fa-suitcase");
			labelinput3_6.appendChild(icon3_6);
			var input3_6 = document.createElement('input');
			input3_6.setAttribute("type", "text");
			input3_6.setAttribute("placeholder", "Position");
			input3_6.setAttribute("Name", "position_" + i2);
			labelinput3_6.appendChild(input3_6);

			section2_6.appendChild(labelhead2_6);
			section2_6.appendChild(labelinput3_6);


			//report to 
			var section2_7 = document.createElement('section');
			section2_7.setAttribute("class","col col-6");

			var labelhead2_7 = document.createElement('label');
			labelhead2_7.setAttribute("class","label ");
			var textlabel2_7 = document.createTextNode("Report To");
			labelhead2_7.appendChild(textlabel2_7);

			var labelinput3_7 = document.createElement('label');
			labelinput3_7.setAttribute("class","input");
			var icon3_7 = document.createElement('i');
			icon3_7.setAttribute("class","icon-append fa fa-briefcase");
			labelinput3_7.appendChild(icon3_7);
			var input3_7 = document.createElement('input');
			input3_7.setAttribute("type", "text");
			input3_7.setAttribute("placeholder", "Report To");
			input3_7.setAttribute("Name", "report-to_" + i2);
			labelinput3_7.appendChild(input3_7);

			section2_7.appendChild(labelhead2_7);
			section2_7.appendChild(labelinput3_7);

			//Number of Subordinate
			var div2_8 = document.createElement('div');
			div2_8.setAttribute("class","");

			var section2_8 = document.createElement('section');
			section2_8.setAttribute("class","col-md-12");

			var labelhead2_8 = document.createElement('label');
			labelhead2_8.setAttribute("class","label ");
			var textlabel2_8 = document.createTextNode("Number of Subordinate");
			labelhead2_8.appendChild(textlabel2_8);

			var labelinput3_8 = document.createElement('label');
			labelinput3_8.setAttribute("class","input");
			var icon3_8 = document.createElement('i');
			icon3_8.setAttribute("class","icon-append fa fa-briefcase");
			labelinput3_8.appendChild(icon3_8);
			var input3_8 = document.createElement('input');
			input3_8.setAttribute("type", "text");
			input3_8.setAttribute("placeholder", "Number of Subordinate");
			input3_8.setAttribute("Name", "num-subordinate_" + i2);
			labelinput3_8.appendChild(input3_8);

			section2_8.appendChild(labelhead2_8);
			section2_8.appendChild(labelinput3_8);

			// Key Achievement
			var section2_9 = document.createElement('section');
			section2_9.setAttribute("class","col-md-12");

			var labelhead2_9 = document.createElement('label');
			labelhead2_9.setAttribute("class","label ");
			var textlabel2_9 = document.createTextNode("Key Achievement");
			labelhead2_9.appendChild(textlabel2_9);

			var labelinput3_9 = document.createElement('label');
			labelinput3_9.setAttribute("class","textarea");
			var icon3_9 = document.createElement('i');
			icon3_9.setAttribute("class","icon-append fa fa-comment");
			labelinput3_9.appendChild(icon3_9);
			var input3_9 = document.createElement('textarea');
			input3_9.setAttribute("rows", "3");
			input3_9.setAttribute("placeholder", "Key Achievement");
			input3_9.setAttribute("Name", "Key-Achievement_" + i2);
			labelinput3_9.appendChild(input3_9);

			section2_9.appendChild(labelhead2_9);
			section2_9.appendChild(labelinput3_9);

			// Key Responsibility
			var section2_10 = document.createElement('section');
			section2_10.setAttribute("class","col-md-12");

			var labelhead2_10 = document.createElement('label');
			labelhead2_10.setAttribute("class","label ");
			var textlabel2_10 = document.createTextNode("Key Responsibility");
			labelhead2_10.appendChild(textlabel2_10);

			var labelinput3_10 = document.createElement('label');
			labelinput3_10.setAttribute("class","textarea");
			var icon3_10 = document.createElement('i');
			icon3_10.setAttribute("class","icon-append fa fa-comment");
			labelinput3_10.appendChild(icon3_10);
			var input3_10 = document.createElement('textarea');
			input3_10.setAttribute("rows", "3");
			input3_10.setAttribute("placeholder", "Key Responsibility");
			input3_10.setAttribute("Name", "Key-Responsibility_" + i2);
			labelinput3_10.appendChild(input3_10);

			section2_10.appendChild(labelhead2_10);
			section2_10.appendChild(labelinput3_10);

			// Key Responsibility
			var section2_11 = document.createElement('section');
			section2_11.setAttribute("class","col-md-12");

			var labelhead2_11 = document.createElement('label');
			labelhead2_11.setAttribute("class","label ");
			var textlabel2_11 = document.createTextNode("Reason For Leaving");
			labelhead2_11.appendChild(textlabel2_11);

			var labelinput3_11 = document.createElement('label');
			labelinput3_11.setAttribute("class","textarea");
			var icon3_11 = document.createElement('i');
			icon3_11.setAttribute("class","icon-append fa fa-comment");
			labelinput3_11.appendChild(icon3_11);
			var input3_11 = document.createElement('textarea');
			input3_11.setAttribute("rows", "3");
			input3_11.setAttribute("placeholder", "Reason For Leaving");
			input3_11.setAttribute("Name", "Reason-Leaving_" + i2);
			labelinput3_11.appendChild(input3_11);

			section2_11.appendChild(labelhead2_11);
			section2_11.appendChild(labelinput3_11);

			// item id
			var section2_12 = document.createElement('section');
			section2_12.setAttribute("class","hidden");

			var labelhead2_12 = document.createElement('label');
			labelhead2_12.setAttribute("class","label ");
			var textlabel2_12 = document.createTextNode("Reason For Leaving");
			labelhead2_12.appendChild(textlabel2_12);

			var labelinput3_12 = document.createElement('label');
			labelinput3_12.setAttribute("class","input");
			var icon3_12 = document.createElement('i');
			icon3_12.setAttribute("class","icon-append fa fa-comment");
			labelinput3_12.appendChild(icon3_12);
			var input3_12 = document.createElement('input');
			input3_12.setAttribute("type", "text");
			input3_12.setAttribute("Name", "itemid_" + i2);
			input3_12.setAttribute("value", "" + i2);
			labelinput3_12.appendChild(input3_12);

			section2_12.appendChild(labelhead2_12);
			section2_12.appendChild(labelinput3_12);


			//// btn delete
			var btndelete2 = document.createElement('a');
			btndelete2.setAttribute("class","btn btn-u  btn-u-red btn-md rounded-2x margin-bottom-10 pull-right");
			var icondelete2 = document.createElement('i');
			icondelete2.setAttribute("class","icon-append fa fa-trash")
			var textbtn2 = document.createTextNode("Delete " );
			// btndelete.appendChild(icondelete);
			btndelete2.appendChild(textbtn2);
			btndelete2.setAttribute("onclick", "removeElement('experience','idex_" + i2 + "','removeexperience','"+i2+"')");
			/// end btn delete

		

			//
			div2_8.appendChild(section2_8);

			divexperience.appendChild(section2_1);
			
			divexperience.appendChild(section2_2);
			divexperience.appendChild(section2_2);			
			divexperience.appendChild(section2_3);
			divexperience.appendChild(section2_4);

			divexperience.appendChild(section2_5);
			divexperience.appendChild(section2_123);
			divexperience.appendChild(section2_6);


			divexperience.appendChild(section2_7);
			divexperience.appendChild(div2_8);
			divexperience.appendChild(section2_9);
			divexperience.appendChild(section2_10);
			divexperience.appendChild(section2_11);
			divexperience.appendChild(section2_12);
			divexperience.appendChild(btndelete2);

			divexperience.setAttribute("id", "idex_" + i2);
			document.getElementById("experience").appendChild(divexperience);

			loop2 = loop2+1;
			document.getElementById('nume').value = loop2;
		
		}


		</script>


		<script type="text/javascript">
			

		</script>
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				MSfullWidth.initMSfullWidth();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();




			});

			//ANMAINT
			jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
			new WOW().init();
			});


		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/576e66a6b814591e0c917d60/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 1px; right: 5px; opacity: 1; cursor: pointer;"></div>
</body>
</html>

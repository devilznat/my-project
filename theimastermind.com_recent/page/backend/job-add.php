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
				<h1 class="pull-left">Add-Jobs Page</h1>

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
	// mysql_close($objConnect);
	return $resultArray;
}

$resultAll = returnDetailAll();



//echo '<pre>';
//var_dump($resultCus);
//echo '</pre><hr />';


$sql = mysql_query("SELECT * FROM  `jobs_value` ORDER BY  `jobs_value`.`job_id` DESC LIMIT 1" );
$loadidjob = mysql_fetch_array($sql);
 
 $idjob = $loadidjob[job_id]+1;
?>
					<!-- Logo -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Add Job </h3>
						</div>
						<div class="panel-body">

							<div class="col-md-12">
							 	<form name="form" id="form" class="sky-form">
							 	<input type="text" name="type" id="type" value="add-job" hidden>
							 	<input type="text" name="jobid" id="jobid" value="<? echo $idjob; ?>" hidden>
										
										<div class="row">
											
											
											<section class="col-md-6">
											<label class="label">Location</label>
											
												<label class="select">	
									                <select name="text2" onchange="getamphur(this.value);">
									                <option value="">Select Province</option> 
									    <?php
											foreach ($resultAll as $result)
											{
										?>
									                   <option value="<?echo $result["province_id"];?>"><?echo $result["province_name_eng"];?></option> 
									    <?
											}
										?>
									                </select>
									                <i></i>
												</label>
											</section>
											<section class="col-md-6">
												<label class="label">Location</label>
											
												<label class="select">	
									                <select name="textamphur" id="textamphur">
									    				 <option value="">Select Amphur</option> 
									                </select>
									                <i></i>
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-6">
											<label class="label">Salary Start</label>
												<label class="input">
													<input type="text" name="text3"  placeholder="Salary Start">
												</label>
											</section>
											<section class="col col-6">
											<label class="label">Salary End</label>
												<label class="input">
													<input type="text" name="text4" placeholder="Salary End">
												</label>
											</section>
											</div>

											
											<div class="row">
											<section class="col col-6">
											<label class="label">Negotiable</label>
												<label class="select">	
									                <select name="text5">
									                   <option value="0">No</option>
								                        <option value="1">Yes</option>
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
                        <option value="Agriculture">Agriculture/Livestock/Fishery/Mining</option>
                        <option value="Computer">Computer/IT/Programmer</option>
                        <option value="Civil">Construction/Survey/Architecture/Interior Design</option>
                        <option value="Ads">Creative Arts/Computer Graphics</option>
                        <option value="Relation">Customer Service/Support/PR</option>
                        <option value="Debt_Collector">Debt Collector/Credit Control</option>
                        <option value="Doctor">Doctor/Nurse/Phamacist</option>
                        <option value="Drawing">Drawing/AutoCAD/Engineering Design</option>
                        <option value="Driver">Driver/Messenger/Delivery/Security/Janitor</option>
                        <option value="Teacher">Education/Teachers</option>
                        <option value="Engineer">Engineering</option>
                        <option value="Account">Finance/Accounting</option>
                        <option value="Chef">Food and Beverage/Chef/Cook/Bar Tender/Waiter</option>
                        <option value="Garment">Garment</option>
                        <option value="Geographic">Geographic/Mapping/GIS</option>
                        <option value="HealthCare">Healthcare/Fitness/Spa</option>
                        <option value="HouseKeeper">House Keeper / Gardener</option>
                        <option value="BOI">Import-Export/Shipping/BOI</option>
                        <option value="GUIDE">Interpreter/Tourist Guide/Reservation</option>
                        <option value="Jew">Jewelry</option>
                        <option value="Law">Legal</option>
                        <option value="Manager">Manager/Director</option>
                        <option value="Qc">Manufacturing/Production/QA&amp;QC</option>
                        <option value="Marketing">Marketing</option>
                        <option value="MassComm">Mass Communication</option>
                        <option value="Acting">Musician/Actor/Singer</option>
                        <option value="Ga">Purchasing/Administrative</option>
                        <option value="ECONOMIC">Research / Analysis ( Insurance/Economics/Banking )</option>
                        <option value="Safety">Safety/Environment</option>
                        <option value="Sale">Sales</option>
                        <option value="Chemical">Sciences/Chemical/Biotech/Food Sciences</option>
                        <option value="Secretary">Secretarial</option>
                        <option value="Security">Security Division / Parking Lot</option>
                        <option value="Technical">Technicians</option>
                        <option value="Human">Training/HR/Recruiting</option>
                        <option value="Stock">Warehouse/Logistics</option>
                        <option value="Web">Web Design/Web Content</option>
                        <option value="Writer">Writer/Editor/Copywriter/Proffreader</option>
                        <option value="Other">Others</option>
                        <option value="Parttime">Part-time Jobs</option>
              			<option value="Freelance">Freelance</option>
									                </select>
									                <i></i>
												</label>
											</section>
											<section class="col col-6">
											<label class="label">Industries</label>
												<label class="select">
													<select name="text7" >
									                   <option value="All">All Industries</option>
                        <option value="Accounting">Accounting and Law Service</option>
                        <option value="Advertising">Advertising</option>
                        <option value="Agricultural">Agricultural</option>
                        <option value="Automobile">Automobile</option>
                        <option value="Banking">Banking</option>
                        <option value="Chemical">Chemical/Plastic</option>
                        <option value="Computer/IT">Computer/IT</option>
                        <option value="Construction">Construction</option>
                        <option value="Consulting">Consulting</option>
                        <option value="Design">Design/Interior Design</option>
                        <option value="Education">Education</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Energy">Energy</option>
                        <option value="Entertaining">Entertaining</option>
                        <option value="Finance">Finance</option>
                        <option value="Food">Food, Drink &amp; Tobacco</option>
                        <option value="Furniture">Furniture/Appliance</option>
                        <option value="Garment">Garment</option>
                        <option value="Government">Government/Non-profit</option>
                        <option value="Hospital/Clinic">Hospital/Clinic</option>
                        <option value="Hotel/Resort/Spa/">Hotel/Resort/Spa/Golf Club</option>
                        <option value="Import/Export">Import/Export</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Jewelry">Jewelry</option>
                        <option value="Loan">Loan/Credit Card</option>
                        <option value="Mass Communication">Mass Communication</option>
                        <option value="Medicine/Cosmetic">Medicine/Cosmetic/Medical Equipment</option>
                        <option value="Packaging">Packaging</option>
                        <option value="Paper">Paper</option>
                        <option value="Publishing">Publishing/Printing</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Services">Services</option>
                        <option value="Steel/Metal">Steel/Metal</option>
                        <option value="Telecommunication">Telecommunication</option>
                        <option value="Trading/Commerce">Trading/Commerce</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Travel">Travel</option>
                        <option value="Others">Others</option>
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
													<input type="text" name="text1"  placeholder="Position">
												</label>
											</section>

											<section class="col-md-12">
												<label class="label">Qualifications</label>
												<div id="qualifications" name="text8"></div>
											</section>

											<section class="col-md-12">
												<label class="label">Responsibilities</label>
												<div id="responsibilities" name="text9"></div>
											</section>
									</div>

									<div class="tab-pane fade in " id="th">
											<section class="col-md-12">
											<label class="label">Position</label>
												<label class="input">
													<input type="text" name="text1th"  placeholder="Position">
												</label>
											</section>

											<section class="col-md-12">
												<label class="label">Qualifications</label>
												<div id="qualifications2" name="text8th"></div>
											</section>

											<section class="col-md-12">
												<label class="label">Responsibilities</label>
												<div id="responsibilities2" name="text9th"></div>
											</section>
									</div>
									</div>
									</div>


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
		<script src="https://code.jquery.com/jquery-3.1.1.slim.js" integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA=" crossorigin="anonymous"></script>
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
		<script type="text/javascript">
			
			function getamphur(val){
				var provinceid = new FormData($('#form')[0]);
				provinceid.append('id',val);

				$.ajax({ 
					type: "POST",
					url: "getdataamphur.php",
					data: provinceid,
					cache: false,
				    contentType: false,
				    processData: false,
					success: function(data){
						$("#textamphur").html(data);
					}
				});
			}

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
		        window.location.assign("job-uploadlogo?idjob=<? echo $idjob;?>");
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

<?php
session_start();
require('../../db/connect.php');

$getresume = $_GET[idresume];


?>
<?
	
$sqlresume = mysql_query("SELECT * FROM resumes WHERE resume_id = '$getresume' " );
$loadresume = mysql_fetch_array($sqlresume);
 


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Resume  <? echo $loadresume[first_name];?>  <? echo $loadresume[surname];?> </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="../../assets/css/headers/header-default.css">
	<link rel="stylesheet" href="../../assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../assets/plugins/animate.css">
	<link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="../../assets/css/pages/profile.css">
	<link rel="stylesheet" href="../../assets/css/pages/shortcode_timeline2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">

	<style type="text/css">
		.timeline-v2 > li .cbp_tmicon {
    		background: #446cb3;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		
		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				

			

				<!-- Profile Content -->
				<div class="col-md-12 ">
					<div class="profile-body">
						<div class="profile-bio">
							<div class="row">
								<div class="col-md-5">
									<img class="img-responsive md-margin-bottom-10" src="../../uploadfile/resume/<? echo $loadresume[image];?>" alt="">
									
								</div>
								<div class="col-md-7">
									<h1><? echo $loadresume[first_name];?>  <? echo $loadresume[surname];?></h1>
									<h4><span><strong>Applied Position:</strong> <? echo $loadresume[applied_position];?></span>
									<span><strong>Current Position:</strong> <? echo $loadresume[current_position];?></span>
									<br>
										<span><strong>Nationality:</strong> <? echo $loadresume[nationality];?></span>
										<span><strong>Date of birth:</strong> <? echo $loadresume[date_of_birth];?></span>
										
										<span><strong>Sex:</strong> <? echo $loadresume[sex];?></span>
										<span><strong>Status:</strong> <? echo $loadresume[status];?></span>
										<span><strong>Communication:</strong> <? echo $loadresume[communication];?></span></h4>
									<hr>
									<div class="row">
										<div class="col-md-6">
											<h4><strong>E-mail :</strong> <? echo $loadresume[email];?><br>
											</h4>
										</div>
										<div class="col-md-6">
											<h4><strong>Mobile phone:</strong> <? echo $loadresume[mobile_phone];?><br>
											</h4>
										</div>
									</div>
									
								</div>
							</div>
						</div><!--/end row-->

						<hr>


<? 

$strSQL = "SELECT * FROM professional_experience WHERE resume_id = '$getresume' ORDER BY item_id ASC ";
$result = mysql_query($strSQL);


?>

						<!--Timeline-->
						<div class="panel panel-profile">
							<div class="panel-heading overflow-h">
								<h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i> Experience</h2>
								<a href="#"><i class="fa fa-cog pull-right"></i></a>
							</div>
							<div class="panel-body margin-bottom-40">
								<ul class="timeline-v2 timeline-me">
		<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i++;

		?>

									<li>
										<time datetime="" class="cbp_tmtime"><span><h4><strong><? echo $rs["position"]; ?></h4></strong></span> <span><? echo $rs["start_year"]; ?> - <?

										if ($rs["status_present"]==1) {
											echo "Present";
										}

										else{
											 echo $rs["end_year"];
										}

			$title1 = $rs["key_achieve"];
			$title2 = $rs["key_respon"];
            $titleconvert1 = str_replace("%27","'" ,$title1);
            $titleconvert2 = str_replace("%27","'", $title2);

            
										 


										?></span></time>
										<i class="cbp_tmicon rounded-x hidden-xs"></i>
										<div class="cbp_tmlabel">
										<br>
											<h4><strong><? echo $rs["company_name"]; ?></strong></h4>
											<h4>Report to : <? echo $rs["report_to"]; ?></h4>
											<h4>Key achievement : <? echo $titleconvert1; ?></h4>
											<h4>Key responsibility : <? echo $titleconvert2; ?></h4>
											
										</div>
									</li>


	<? } ?>								
									
								</ul>
							</div>
						</div>
						<!--End Timeline-->
<? 



$strSQL2 = "SELECT * FROM academic_qualifications WHERE resume_id = '$getresume'  ";
$result2 = mysql_query($strSQL2);


?>
						<!--Timeline-->
						<div class="panel panel-profile">
							<div class="panel-heading overflow-h">
								<h2 class="panel-title heading-sm pull-left"><i class="fa fa-mortar-board"></i> Education</h2>
								<a href="#"><i class="fa fa-cog pull-right"></i></a>
							</div>
							<div class="panel-body">
								<ul class="timeline-v2 timeline-me">

	<?php	

		while($edu = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i2++;

		?>

									<li>
										<time datetime="" class="cbp_tmtime"><span><h4><strong><? echo $edu["edu_level"]; ?></h4></strong></span> <span><? echo $edu[year]; ?></span></time>
										<i class="cbp_tmicon rounded-x hidden-xs"></i>
										<div class="cbp_tmlabel">
											<h2><? echo $edu["school_university"]; ?></h2>
											<h4><? echo $edu["major"]; ?></h4>
									</li>

	<? } ?>		
									
								</ul>
							</div>
						</div>
						<!--End Timeline-->

						<hr>
					<!--other information-->
						<div class="panel panel-profile">
							<div class="panel-heading overflow-h">
								<h2 class="panel-title heading-sm pull-left"><i class="fa fa-mortar-board"></i> Other Information</h2>
								<a href="#"><i class="fa fa-cog pull-right"></i></a>
							</div>
							<div class="panel-body">
								<strong>Current Basic Salary : </strong> <? echo $loadresume[salary];?><br>
								<strong>Fix Bonus : </strong> <? echo $loadresume[fix_bonus];?><br>
								<strong>Variable Bonus : </strong> <? echo $loadresume[variable_bonus];?><br>
								<strong>Other Allowance : </strong> <? echo $loadresume[other_allowance_salary];?><br>
								<strong>Expectation : </strong> <? echo $loadresume[expectation_salary];?><br>
								<strong>Notice Period : </strong> <? echo $loadresume[notice_period];?><br>


							</div>
						</div>
						<!--End other information-->

						
					</div>
				</div>
				<!-- End Profile Content -->
			</div>
		</div>
		<!--=== End Profile ===-->

		
	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="../../assets/plugins/circles-master/circles.js"></script>
	<script type="text/javascript" src="../../assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../../assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../../assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../../assets/js/app.js"></script>
	<script type="text/javascript" src="../../assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="../../assets/js/plugins/circles-master.js"></script>
	<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			Datepicker.initDatepicker();
			CirclesMaster.initCirclesMaster1();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

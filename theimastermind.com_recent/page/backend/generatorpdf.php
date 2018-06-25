<?php
session_start();
require('../../db/connect.php');
$getresume = $getresume1;
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
		.dd{
    		padding-left: 30px;
    		
		}
		.boldadd{
			font-weight: bold;
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
					<div class="">
						<div class="">
							<div class="row">
								<div class="col-md-5">
									<img class="img-responsive img-bordered md-margin-bottom-10" src="../../uploadfile/resume/<? echo $loadresume[image];?>" width="150";
    height="auto">
									
								</div>
								<div class="col-md-7">
									<h3 class="boldadd"><? echo $loadresume[first_name];?>  <? echo $loadresume[surname];?></h3>
									<h6><strong class="boldadd">Applied Position: </strong><? echo $loadresume[applied_position];?><br>
										<strong class="boldadd">Current Position: </strong><? echo $loadresume[current_position];?><br>
									<br>
										<strong class="boldadd">Nationality: </strong><? echo $loadresume[nationality];?><br>
										<strong class="boldadd">Date of birth: </strong><? echo $loadresume[date_of_birth];?><br>
										<strong class="boldadd">Sex: </strong><? echo $loadresume[sex];?><br>
										<strong class="boldadd">Status: </strong><? echo $loadresume[status];?><br>
										<strong class="boldadd">Communication: </strong><? echo $loadresume[communication];?><br>
										<strong class="boldadd">E-mail: </strong><? echo $loadresume[email];?><br>	
										<strong class="boldadd">Mobile Phone: </strong><? echo $loadresume[mobile_phone];?><br>
									</h6>
									
									
								</div>
							</div>
						</div><!--/end row-->

						<hr>
<? 

$strSQL = "SELECT * FROM professional_experience WHERE resume_id = '$getresume' ORDER BY item_id ASC ";
$result = mysql_query($strSQL);


?>
						<div class="">
							<div class="row">
								<div class="">
								<h4 class="boldadd"> Experience </h4>
		<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i++;
if ($rs["start_month"] == 1 || $rs["start_month"] == 1 ) {

		$monthstart  = "January";
		$monthend  = "January";
	}
	else if ($rs["start_month"] == 2 || $rs["start_month"] == 2) {
		$monthstart  = "February";
		$monthend  = "February";
	}
	else if ($rs["start_month"] == 3 || $rs["start_month"] == 3) {
		$monthstart  = "March";
		$monthend  = "March";
	}
	else if ($rs["start_month"] == 4 || $rs["start_month"] == 4) {
		$monthstart  = "April";
		$monthend  = "April";
	}
	else if ($rs["start_month"] == 5 || $rs["start_month"] == 5) {
		$monthstart  = "May";
		$monthend  = "May";
	}
	else if ($rs["start_month"] == 6 || $rs["start_month"] == 6) {
		$monthstart  = "June";
		$monthend  = "June";
	}
	else if ($rs["start_month"] == 7 || $rs["start_month"] == 7) {
		$monthstart  = "July";
		$monthend  = "July";
	}
	else if ($rs["start_month"] == 8 || $rs["start_month"] == 8) {
		$monthstart  = "August";
		$monthend  = "August";
	}
	else if ($rs["start_month"] == 9 || $rs["start_month"] == 9) {
		$monthstart  = "September";
		$monthend  = "September";
	}
	else if ($rs["start_month"] == 10 || $rs["start_month"] == 10) {
		$monthstart  = "October";
		$monthend  = "October";
	}
	else if ($rs["start_month"] == 11 || $rs["start_month"] == 11) {
		$monthstart  = "November";
		$monthend  = "November";
	}
	else if ($rs["start_month"] == 12 || $rs["start_month"] == 12) {
		$monthstart  = "December";
		$monthend  = "December";
	}
		?>
									<h6 class="boldadd"><? echo $rs["company_name"]; ?> ( <? echo $monthstart; ?> <? echo $rs["start_year"]; ?> - <? 
										if ($rs["status_present"] == 1) {
											echo "Present";
										}
										else{
											echo $monthend; ?> <? echo $rs["end_year"]; 
										}

									?>) </h6> 

									<?
									$title1 = $rs["key_achieve"];
			$title2 = $rs["key_respon"];
            $titleconvert1 = str_replace("%27","'" ,$title1);
            $titleconvert2 = str_replace("%27","'", $title2);
									?>
									<h6 class="dd"><strong class="boldadd">Position : </strong> <? echo $rs["position"]; ?><br>
									<strong class="boldadd dd">Report to : </strong><? echo $rs["report_to"]; ?><br>
									<strong class="boldadd dd">Key achievement : </strong><? echo $titleconvert1; ?><br>
									<strong class="boldadd dd">Key responsibility : </strong><? echo $titleconvert2; ?></h6>


	<? } ?>								
									
								</div>
							</div>
						</div><!--/end row-->

						<hr>
<? 



$strSQL2 = "SELECT * FROM academic_qualifications WHERE resume_id = '$getresume'  ";
$result2 = mysql_query($strSQL2);


?>
						<div class="">
							<div class="row">
								<div class="">
								<h4 class="boldadd"> Academic Qualifications </h4>

	<?php	

		while($edu = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i2++;

		?>

									
									<h6 class="boldadd"><? echo $edu["school_university"]; ?> ( <? echo $edu[year]; ?> ) </h6> 
									
									<h6 class="dd"><strong class="boldadd">Education level : </strong><? echo $edu["edu_level"]; ?><br>
									<strong class="boldadd dd">Major : </strong><? echo $edu["major"]; ?></h6>

	<? } ?>		
									
								</div>
							</div>
						</div><!--/end row-->

						<hr>
					<!--other information-->
					<div class="">
					<div class="row">
					<div class="">
						
						<h4 class="boldadd"> Other Information </h4>	
						<h6 class="dd">
							<strong class="boldadd">Current Basic Salary : </strong><? echo $loadresume[salary]; ?><br>
							<strong class="boldadd dd">Fix Bonus : </strong><? echo $loadresume[fix_bonus]; ?><br>
							<strong class="boldadd dd">Variable Bonus : </strong><? echo $loadresume[variable_bonus]; ?><br>
							<strong class="boldadd dd">Other Allowance : </strong><? echo $loadresume[other_allowance_salary]; ?><br>
							<strong class="boldadd dd">Expectation : </strong><? echo $loadresume[expectation_salary]; ?><br>
							<strong class="boldadd dd">Notice Period : </strong><? echo $loadresume[notice_period]; ?><br>
						</h6>

					</div>
					</div>
					</div><!--/end row-->
					
						<!--End other information-->

					<?
					if ($loadresume[status_resume] == 1 ) {

						$idjob = $loadresume[job_id];
						

						$sqljob = mysql_query("SELECT * FROM jobs_value WHERE id = '$idjob' " );
						$loadjob = mysql_fetch_array($sqljob);
 
						$location = $loadjob[province_id];
						$sqllocation = mysql_query("SELECT * FROM province WHERE province_id = '$location' " );
						$loadlocation = mysql_fetch_array($sqllocation);

						$timestamp = strtotime($loadjob['created_date']);
						$date = date('Y-m-d', $timestamp);
					?>
					<hr>
					<div class="">
					<div class="row">
					<div class="">
						
						<h4 class="boldadd"> Job Refer </h4>	
						<h5 class="boldadd dd"><? echo $loadjob[title]; ?></h5> 
						<h6 class="dd">
							<strong class="boldadd">Job ID : </strong><? echo $loadjob[job_id]; ?><br>
							<strong class="boldadd dd">Salary : </strong><? 
								if( $loadjob["negotiable"] == '1') 
								{ 
									echo " Negotiable";
								}
								else{
									echo $loadjob[salary_start]; echo " - "; echo $loadjob[salary_end]; echo "  THB";
								}
							 ?><br>
							<strong class="boldadd dd">Location : </strong><? echo $loadlocation[province_name_eng]; ?><br>
							<strong class="boldadd dd">Created Date : </strong><? echo $date; ?><br>
						</h6>

					</div>
					</div>
					</div><!--/end row-->


					<?	
					}
					?>	

						
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

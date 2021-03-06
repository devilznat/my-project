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



  $status = 0;
  $status = $_GET['search'];

  $gettext = $_GET['textsearch'];

  $getdatestart = $_GET['textdatestart'];
  $getdateend = $_GET['textdateend'];

  if ($status==0) {
  		$number="SELECT * FROM resumes ORDER BY resume_id ";

  	# code...
  } 

  else if ($status==1) {
  		$number="SELECT * FROM resumes WHERE first_name like '%$gettext%' OR surname like '%$gettext%' ";
  	# code...
  }
  else if ($status==2) {
  		$number="SELECT * FROM resumes WHERE created_date BETWEEN '$getdatestart' AND '$getdateend' AND (first_name like '%$gettext%' OR surname like '%$gettext%') ";
  	# code...
  }
  



$rows= 10;
if($page<=0) $page=1;
$total_data=mysql_num_rows(mysql_query($number));
$total_page=ceil($total_data/$rows);
if($page>=$total_page) $page=$total_page;

$start=($page-1)*$rows;


  if ($status==0) {

  		$sql = "SELECT * FROM resumes ORDER BY resume_id DESC limit $start,10";
  	# code...
  } 

  else if($status==1) {

  		$sql = "SELECT * FROM resumes WHERE first_name like '%$gettext%' OR surname like '%$gettext%' ORDER BY resume_id DESC limit $start,10";
  }
  else if($status==2) {

  	$sql = "SELECT * FROM resumes WHERE created_date BETWEEN '$getdatestart' AND '$getdateend' AND (first_name like '%$gettext%' OR surname like '%$gettext%') limit $start,10";
  }



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
				<h1 class="pull-left">All-Resumes Page</h1>

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

					<!-- Logo -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Search Resume </h3>
						</div>
						<div class="panel-body">

							<div class="col-md-12">
							 	<form action="#" id="sky-form" class="sky-form" onsubmit="Searchresume(event, this); return false;">
										<label class="label">Search Name</label>
										<div class="row">
											<section class="col-md-12">
												<label class="input">
													<input type="text" placeholder="Name" name="textsearch" id="textsearch" >
												</label>
											</section>
										</div>
										<label class="label">Select date </label>

										<div class="row">
											<section class="col col-6">
												<label class="input">
													<i class="icon-append fa fa-calendar"></i>
													<input type="text" name="start" id="start" placeholder="Start date">
												</label>
											</section>
											<section class="col col-6">
												<label class="input">
													<i class="icon-append fa fa-calendar"></i>
													<input type="text" name="finish" id="finish" placeholder="Expected finish date">
												</label>
											</section>
										</div>
										<div class="row">
										
											<section class="col col-3">
										<a class="btn btn-u btn-block " onclick="Searchresume()";> Search </a>
										</section>
										</div>
								</form>
							</div>
						</div>
					</div>
					<!-- End Logo -->

<? 

$strSQL = $sql;
$result = mysql_query($strSQL);


?>
					<!-- Logo -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"> Resume </h3>
						</div>
						<div class="panel-body">
							<div class="col-md-12">
							<table class="table">
								<thead>
									<tr>
										<th>Date </th>
										<th>Name</th>
										<th >Description</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i++;

									$idjob1 = "".$rs[job_id];
									
									$sqljob = mysql_query("SELECT * FROM jobs_value WHERE id = '$idjob1' " );
									$loadjob1 = mysql_fetch_array($sqljob);

		?>
									<tr>
										<td><? echo $rs["created_date"]; ?></td>
										<td><? echo $rs["first_name"]; ?> <? echo $rs["surname"]; ?></td>
										<td >

										<? if ($rs["status_resume"]== 1 || $rs["status_resume"] == 2) {
										?>

											<b><u>Job Refer</u></b> : <br>
											 <font color="#446cb3"><? echo $loadjob1[title]; ?><br></font>
											 <font color="red"><b><u>Job ID</u></b> <? echo $loadjob1[job_id]; ?></font>
											<br> 
										<?
										}
										?>

										<? echo $rs["email"]; ?> <br> 
										<? echo $rs["mobile_phone"]; ?> 

										</td>
										<td>

										<a href="deletedata?type=resume&resumeid=<? echo $rs["resume_id"]; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">
										<i class="fa fa-trash"></i> Delete</a>
										<?
											if ($rs["status_resume"]== 2 || $rs["status_resume"] == 3) {
												?>
													<a class="btn btn-primary btn-xs"  href="../../uploadfile/resume/upload_resume/<? echo $rs["resume_file"]; ?>" download>
													<i class="fa fa-download"></i> Download</a>
												<?
											}
											else if ($rs["status_resume"]== 0 || $rs["status_resume"] == 1){
												?>
													<a class="btn btn-primary btn-xs"  href="../../uploadfile/resume/file/<? echo $rs["resume_file"]; ?>" download>
													<i class="fa fa-download"></i> Download</a>
												<?
											}

										?>

										

										<? if ($rs["status_resume"]== 0 || $rs["status_resume"] == 1) {
										?>
											<button class="btn btn-success btn-xs" onclick="window.location.href='resume-detail?from=all&idresume=<? echo $rs["resume_id"]; ?>'">
											<i class="fa fa-eye"></i> Preview</button>
										<?
										}
										?>

										

										</td>
									</tr>
<? } ?>		
									
								</tbody>
							</table>
							</div>

							
						</div>
					</div>
					<!-- End Logo -->

<div class="text-center" >
					
					
  <ul class="pagination">
    <li <? if($page==1) echo 'class="page-item disabled"';?>>

    	<?
    		$numback = $page-1;
    		if ($status == 0 ) {

    			
    			$pagenumback = "resume?page=".$numback;
  				
    		} else {
    			
    			$pagenumback = "resume?search=1&textsearch=".$gettext."&page=".$numback;
    			# code...
    		}
    		
    	?>
   
      <a class="page-link" href="<? echo $pagenumback;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
      
    </li>
    <? 
    for ($i=1; $i<=$total_page; $i++) { 
    	
   	?>
    <li <? 
    	if($page==$i) echo 'class="page-item active"';?> >

    		<?

    		if ($status == 0 ) {

    			
    			$pagenumnext = "resume?page=".$i;
  				
    		} else {
    		
    			$pagenumnext = "resume?search=1&textsearch=".$gettext."&page=".$i;
    			# code...
    		}
    		
    		?>

    	<a class="page-link" href="<?echo $pagenumnext;?>">
    	<?=$i?>
    	</a></li>
    <? 
	}
	?>
    <li <? if($page==$total_page) echo 'class="page-item disabled"';?>>

      <a class="page-link" href="<?echo $pagenumnext;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>

  </ul>
  

				</div>


				

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


			
			function Searchresume(event, form){
				
				var datestart = $("#start").val();
				var dataend = $("#finish").val();
				

				if (datestart == "" ) {

					textsearch = $("#textsearch").val();
					// category = $("#Category").val();
					// industries= $("#Industries").val();
					search ="1";

					url = "resume?search="+search+"&textsearch="+textsearch;
					window.location.assign(url);
				}
				else {



					textsearch = $("#textsearch").val();
					// category = $("#Category").val();
					// industries= $("#Industries").val();
					search ="2";

					url = "resume?search="+search+"&textsearch="+textsearch+"&textdatestart="+datestart+"&textdateend="+dataend;
					 window.location.assign(url);

				}

				

        }

			//   $(document).ready(function(){
			//   $("form").submit(function(){
			//         alert("Submitted");
			//         Searchjob();
			//     });
			// });

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

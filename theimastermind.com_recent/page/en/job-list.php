<?php
  session_start();
  require('../../db/connect.php');
  $headlink = "job-list";

  $status = 0;
  $status = $_GET['search'];

  $gettext = $_GET['textsearch'];
  $getcategory = $_GET['category'];
  $getindustries = $_GET['industries'];
  $getdata1 = $_GET['getdataslider1'];
  $getdata2 = $_GET['getdataslider2'];


  $getdata1 = str_replace(",", "", $getdata1);
$getdata2 = str_replace(",", "", $getdata2);

 // echo $getdata1; 
 //  echo $getdata2;


  // echo $status;


   if ($status==0) {
      $number="SELECT * FROM jobs_value WHERE language_code = 'en' ";

    # code...
  } 

  // else if ($status==2) {
    
  //  if ($getindustries == 'All') {
  //    $number = "SELECT * FROM jobs_value WHERE category like '$getcategory%' ";
  //  }

  //  else if ($getcategory == 'All') {
  //    $number = "SELECT * FROM jobs_value WHERE industry like '$getindustries%' ";
  //  }

  //  else {

  //    $number = "SELECT * FROM jobs_value WHERE category like '$getcategory%' AND industry like '$getindustries%' ";
  //  }

  // }

  // ค้นหาจากหน้า index
else if ($status==2) {


    if ($getcategory == 'All' && $getindustries == 'All') {
      $number = "SELECT * FROM jobs_value WHERE language_code = 'en' ";
    }

    else if ($getindustries == 'All') {
      $number = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND language_code = 'en' ";
    }

    else if ($getcategory == 'All') {
      $number = "SELECT * FROM jobs_value WHERE industry like '%$getindustries%' AND language_code = 'en' ";
    }

    // else if ($getcategory != 'All' && $getindustries != 'All') {
    //   $sql = "SELECT * FROM jobs_value WHERE language_code = 'en'  ";
    // }

    else {

      $number = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' ";
    }
    
  }

  else {


      if ($gettext != "") {


    if ($getindustries == 'All' && $getcategory == 'All') {

      $number = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

      

    else if ($getindustries == 'All') {
      $number = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

    else if ($getcategory == 'All') {
      $number = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

    else if ($getcategory != 'All' && $getindustries != 'All') {

      $number = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";

    }

    else if ($gettext != "" && $getcategory != 'All' && $getindustries != 'All' ){
      
    $number = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    # code...
  }

    else {

      $number="SELECT * FROM jobs_value WHERE title like '%$gettext%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

  }

  else if ($gettext == "") {

    if ($getindustries == 'All' && $getcategory == 'All') {

      $number = "SELECT * FROM jobs_value WHERE language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2'  ";

    }

    else if ($getindustries == 'All') {
      $number = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

    else if ($getcategory == 'All') {
      $number = "SELECT * FROM jobs_value WHERE industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2'";
    }

    else if ($getcategory != 'All' && $getindustries != 'All') {

      $number = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";

    }

    else if ($gettext == "" && $getcategory != 'All' && $getindustries != 'All' ){
      
    $number = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    # code...
  }

    else {

      $number="SELECT * FROM jobs_value WHERE language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ";
    }

  }

}
// echo "<br>";
// echo $number;
// echo "<br>";


$rows= 5;
if($page<=0) $page=1;
$total_data=mysql_num_rows(mysql_query($number));
$total_page=ceil($total_data/$rows);
if($page>=$total_page) $page=$total_page;

$start=($page-1)*$rows;


  if ($status==0) {

      $sql= "SELECT * FROM jobs_value WHERE language_code = 'en'  ORDER BY id DESC limit $start,5";
    # code...
  } 

  else if ($status==2) {

    if ($getcategory == 'All' && $getindustries == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE language_code = 'en'  ORDER BY id DESC limit $start,5";
    }

    else if ($getindustries == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND language_code = 'en' ORDER BY id DESC limit $start,5";
    }

    else if ($getcategory == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE industry like '%$getindustries%' AND language_code = 'en'  ORDER BY id DESC limit $start,5";
    }


    else {

      $sql = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en'  ORDER BY id DESC limit $start,5";
    }
    
  }

  else {


    if ($gettext != "") {

    if ($getindustries == 'All' && $getcategory == 'All') {

      $sql = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

      

    else if ($getindustries == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

    else if ($getcategory == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

    else if ($getcategory != 'All' && $getindustries != 'All') {

      $sql = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";

    }

    else if ($gettext != "" && $getcategory != 'All' && $getindustries != 'All' ){
      
    $sql = "SELECT * FROM jobs_value WHERE title like '%$gettext%' AND category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    # code...
  }

    else {

      $sql ="SELECT * FROM jobs_value WHERE title like '%$gettext%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

  }

  else if ($gettext == "") {

    if ($getindustries == 'All' && $getcategory == 'All') {

      $sql = "SELECT * FROM jobs_value WHERE language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2'  ORDER BY id DESC limit $start,5 ";

    }

    else if ($getindustries == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

    else if ($getcategory == 'All') {
      $sql = "SELECT * FROM jobs_value WHERE industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    }

    else if ($getcategory != 'All' && $getindustries != 'All') {

      $sql = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5";

    }

    else if ($gettext == "" && $getcategory != 'All' && $getindustries != 'All' ){
      
    $sql = "SELECT * FROM jobs_value WHERE category like '%$getcategory%' AND industry like '%$getindustries%' AND language_code = 'en' AND salary_start >= '$getdata1' AND salary_end <= '$getdata2' ORDER BY id DESC limit $start,5 ";
    # code...
  }

    else {

      $sql ="SELECT * FROM jobs_value WHERE language_code = 'en'  ORDER BY id DESC limit $start,5 ";
    }

  }



    }


  
  // echo $sql;


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Job List | The i Mastermind </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

$strSQL = $sql;
$result = mysql_query($strSQL);

               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
?>
  <meta property="og:url" content="http://theimastermind.com/page/en/job-view?id=<?echo $rs["id"];?>"/>
<meta property="og:title" content="<?echo $rs["title"];?>"/>
<meta property="og:image" content="http://www.theimastermind.com/assets/img/job/<? echo $rs["value_custom"]; ?>"/>
<meta property="og:description" content="" />
<meta property="og:type" content="website"/>

<?
}
?>

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
	


	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<link rel="stylesheet" href="../../assets/css/custom_2.css">

	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<style type="text/css">
	.bg-color-white{
		box-shadow: 0 2px 2px rgba(0,0,0,.175);
	}
	/*.bg-color-white:hover{
		background-color: #f1f6ff;
	}*/

	}	
	.rounded-2x {
    	border-radius: 6px !important;
	}
	.btn-u {
	    font-size: 18px;
	}
	.btn-grey-job {
	    font-size: 18px;
	}

	.blog-job{
		padding-top: 10px;
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom: 10px;
	}
	/*.blog-job:hover{
		background-color: #f1f6ff;
	}*/
	.blog-paddingbtn{
		
    	margin:  auto; 
    	vertical-align: middle;
	}
	.imgjob {
    	display: block;
    	margin: 23px auto;
    	padding: 1px !important;
    	border: solid 1px #eee !important;
    	max-width: 141%;
      margin-left: 12px;
	}

  .imgjob-rp {
      display: block;
      margin: 23px auto;
      padding: 1px !important;
      border: solid 1px #eee !important;
      max-width: 92%;
      margin-left: 12px;
  }

  .imgjob-rp-md {
      display: block;
      margin: 23px auto;
      padding: 1px !important;
      border: solid 1px #eee !important;
      max-width: 157%;
      margin-left: 12px;
  }

	.job-search{
		padding-top: 10px;
		padding-left: 30px;
		padding-right: 30px;
		padding-bottom: 10px;
	}
	.job-search-form{
		background-color: #446cb3;
		border-radius: 5px;
	}


	.sky-form .ui-slider-handle {

	    background: #4765a0;
	   
	}

	.sky-form header {
    padding: 8px 4px;
	}
	.share-font-a {
    font-size: 18px;
	}

	.enlarge:hover {
	transform:scale(1.2,1.2);
	transform-origin:0 0;
	position: relative;
    right: 5%;
    
}

	</style>
	

	

<section id="intro" class="intro-section">
</section>
<body class="header-fixed header-fixed-space" data-spy="scroll" data-target=".one-page-header" id="body">
<?

// $rows= 5;
// if($page<=0) $page=1;
// $total_data=mysql_num_rows(mysql_query("SELECT * FROM jobs_value WHERE language_code = 'en' "));
// $total_page=ceil($total_data/$rows);
// if($page>=$total_page) $page=$total_page;

// $start=($page-1)*$rows;


$strSQL = $sql;
$result = mysql_query($strSQL);

?>
	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->
		

		
		

		
		
		<!--=== Content Part ===-->
		
		<div class="bg-color-light">
		<div class="container content ">
			
			<div class="col-md-4 col-xs-12">
			<div class="news-v3 bg-color-white margin-bottom-30">
			<div class="row">
				<div class="col-md-12 job-search">
				
				
				<form action="#" id="sky-form" class="sky-form" onsubmit="Searchjob(event, this); return false;">
				<header><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Job Search</header>
				<div class="margin-bottom-20"></div>
				<section>
					<!-- <label class="label">Enter Job Title</label> -->
					<label class="input">
					<i class="icon-prepend fa fa-suitcase"></i>
					<input type="text" placeholder="Enter Job Title" name="textsearch" id="textsearch">
					
					</label>
				</section>
				<!-- End job title  -->
				<section>
				<label class="select">
						<select name="Category" id="Category">
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
				<!-- End selete category -->
				<section>
				<label class="select">
						<select name="Industries" id="Industries">
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
                        <option value="Others">Others</option>icon-prepend
					</select>
					<i></i>
				</label>
				</section>
				<!-- End Selete Indutry -->
				
				</form>
					
				<form action="#" id="sky-form2" class="sky-form label-rounded">
				
					<section>
						<label class="label rounded-x" id="slidermoney" name="slidermoney">Salary 
						(<span id="slidermoney-value1-rounded" value="slidermoney-value1-rounded">10,000</span> THB -
						 <span id="slidermoney-value2-rounded" value="slidermoney-value2-rounded">100,000</span> THB)
						</label>
						<div id="slidermoney-rounded"></div>
					</section>							
				</form>
				<header></header>
				<div class="margin-bottom-20"></div><!-- 
				<button class="btn btn-u btn-lg rounded-2x btn-block margin-bottom-20"> Search </button> -->
				<a class="btn btn-success btn-lg rounded-2x btn-block margin-bottom-20" onclick="Searchjob();">Search</a>
				</div>
				
			</div>
			</div>
<?



	$sqlbannerjoblist1 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist1' " );
	$loadbannerjoblist1 = mysql_fetch_array($sqlbannerjoblist1 );

	$sqlbannerjoblist2 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist2' " );
	$loadbannerjoblist2 = mysql_fetch_array($sqlbannerjoblist2 );

	$sqlbannerjoblist3 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-joblist3' " );
	$loadbannerjoblist3 = mysql_fetch_array($sqlbannerjoblist3 );
?>

			<!-- Start banner -->
					<!-- Banner 1 -->
				<div class="news-v3 bg-color-white margin-bottom-30 hidden-sm hidden-xs">
				<div class="row">
				<div class="col-md-12 job-search">
					<div class="hidden-sm col-md-12 sidebar nopadding-left" style="padding-right:20px;">
					<div class="nopadding-right bclick" data-link=""
					style="margin-bottom: 30px;">
					<div class id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist1[imagename];?>);background-size:cover!important; margin-top: 11px;">
					<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist1[value_custom];?></h3>
					<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
						<? echo $loadbannerjoblist1[value_custom2];?>
					</p>
					<p class="text-center">

						<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist1[linkbanner];?>"
						style="padding-top: 0px;"><? echo $loadbannerjoblist1[value_custom3];?></a>
					</p>
					</div>
					</div>
					</div>
					<!-- End Banner 1 -->
					<!-- Banner 2 -->
					<div class="hidden-sm col-md-12 sidebar nopadding-left" style="padding-right:20px;">
					<div class="nopadding-right bclick" data-link=""
					style="margin-bottom: 30px;">
					<div class id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist2[imagename];?>);background-size:cover!important">
					<h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist2[value_custom];?></h3>
					<p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
						<? echo $loadbannerjoblist2[value_custom2];?>
					</p>
					<p class="text-center">

						<a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist2[linkbanner];?>"
						style="padding-top: 0px;"><? echo $loadbannerjoblist2[value_custom3];?></a>
					</p>
					</div>
					</div>
					</div>
					<!-- End Banner 2 -->
					 <!-- Banner 3 -->
            <div class="hidden-sm col-md-12 sidebar nopadding-left" style="padding-right:20px;">
          <div class="nopadding-right bclick" data-link=""
          style="margin-bottom: 30px;">
          <div class id="#" style="height:160px;width:313px;background-color:#434a5c;background-image:url(../../uploadfile/banner/<? echo $loadbannerjoblist3[imagename];?>);background-size:cover!important">
          <h3 class="baner_h text-center  dth dth36 dfw500 "><? echo $loadbannerjoblist3[value_custom];?></h3>
          <p class="text-center baner_p  dth dth20 dlh20 dfw300 dpt-13 ">
            <? echo $loadbannerjoblist3[value_custom2];?>
          </p>
          <p class="text-center">

            <a class="a-custom baner_a  dth dth24 dfw400 dpt-20" href="<? echo $loadbannerjoblist3[linkbanner];?>"
            style="padding-top: 0px;"><? echo $loadbannerjoblist3[value_custom3];?></a>
          </p>
          </div>
          </div>
          </div>
          <!-- End Banner 3 -->
				</div>
				</div>
				</div>
			
			<!-- End banner -->




			</div>

			<div class="col-md-8 col-xs-12">
				<h4 class="hidden"> &nbsp; 1 - 25 of 2317 jobs positions</h4>
				
					<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

  $i++;

  $timestamp = strtotime($rs['created_date']);
$date = date('Y-m-d', $timestamp);

$s1 = $rs["salary_start"];
$s2 = $rs["salary_end"];

$num1 = number_format($s1);
$num2 = number_format($s2);

$cnt = mysql_num_rows($result);





?>



				<div class="news-v3 bg-color-white margin-bottom-10">

				
					<div class="row blog-job">
						<div class="col-md-2">


							<img src="../../assets/img/job/<? echo $rs["value_custom"]; ?>" class="img-responsive  
              imgjob enlarge hidden-xs hidden-sm hidden-md" alt="">

              <img src="../../assets/img/job/<? echo $rs["value_custom"]; ?>" class="img-responsive  
              imgjob-rp hidden-lg hidden-md" alt="">

              <img src="../../assets/img/job/<? echo $rs["value_custom"]; ?>" class="img-responsive  
              imgjob-rp-md enlarge hidden-lg hidden-xs hidden-sm" alt="">

						</div>
						<div class="col-md-7">
							<h3><strong><a href="job-view?id=<? echo $rs["id"]; ?>" style="text-decoration: none; color: rgb(0,0,0); padding-left: 50px;"><?php echo $rs["title"];?></a></strong></h3>
							<h4 style="padding-left: 50px;">THB 
							<?php
							if ($rs["salary_start"] != 0 && $rs["salary_end"] != 0){
							echo $num1; ?> 
							- 
							<?php 
							echo $num2;
							if($rs["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'><b> (Negotiable)</b></font>";
								} 
							}
							else if($rs["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'><b> Negotiable</b></font>";
								}


							?> 
							</h4>
							<?

							$province_id = $rs["province_id"];

$sql4 = mysql_query("SELECT * 
FROM  `province` 
WHERE  `province_id` = '$province_id' " );
$loadprovince = mysql_fetch_array($sql4);

?>

							<p style="padding-left: 50px;"><i class="fa fa-map-marker"></i> <?echo $loadprovince["province_name_eng"];?> &nbsp; &nbsp;<i class="fa fa-clock-o"></i> <?php echo $date;?>
							</p>
							<!-- <p><a href="">Accounting</a> <a href="">Industial</a></p> -->
							<ul class="list-inline tags-v2 margin-bottom-10" style="padding-left: 50px;">
								<li><a><?echo $rs[category]; ?></a></li>
								<li><a><?echo $rs[industry]; ?></a></li>
							</ul>
						</div>
						<div class="col-md-3 blog-paddingbtn">
							<div class="margin-bottom-30"></div>
							<button class="btn btn-u btn-lg rounded-2x btn-block margin-bottom-20" onclick="location.href='job-view?id=<? echo $rs["id"]; ?>'"> View Details </button>
							<br class="hidden-md hidden-lg">
							
							
							<button type="button" class="btn-u btn-u-dark btn-block rounded-2x  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							
							<i class="fa fa-share-alt"></i> 
								Tell Friend
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu" role="menu">
              <?
            
            $title = $rs["title"];
            $titleconvert = str_replace('&', '%26', $title);

           

             
              ?>
								<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://theimastermind.com/page/en/job-view?id=<?echo $rs["id"];?>">
                <i class="fa fa-facebook"></i> Share on Facebook</a></li>

                <li><a href="https://twitter.com/intent/tweet/?text=Job Position = <?echo $titleconvert?>.&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>">
                <i class="fa fa-twitter"></i> Share on Twitter</a></li>

                <li><a href="https://plus.google.com/share?url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-google-plus"></i> Share on Google+</a></li>

                <li><a href="mailto:?subject=Job Position = <?echo $titleconvert?>.&amp;body=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-envelope"></i> Share on E-mail</a></li>

                <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fsharingbuttons.io&amp;title=Job Position = <?echo $titleconvert?>.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-linkedin"></i> Share on Linkedin</a></li>
							</ul>
							<div class="hidden-md hidden-lg"><br/></div>
						</div>

						
					</div>
					
				</div>
<?


  

						}
						

?>

					

				
					



				<div class="text-center" >
					
					
  <ul class="pagination">
    <li <? if($page==1) echo 'class="page-item disabled"';?>>

    <?
    		$numback = $page-1;
    		if ($status == 0 ) {

    			
    			$pagenumback = "job-list?page=".$numback;
  				
    		} else {
    			
    			$pagenumback = "job-list?search=1&textsearch=".$gettext."&category=".$category."&industries=".$industries."&getdataslider1=".$getdataslider1."&getdataslider2=".$getdataslider2."&page=".$numback;
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
    <li <? if($page==$i) echo 'class="page-item active"';?>>



    <?

    		if ($status == 0 ) {

    			
    			$pagenumnext = "job-list?page=".$i;
  				
    		} else {
    		
    			$pagenumnext = "job-list?search=1&textsearch=".$gettext."&category=".$category."&industries=".$industries."&getdataslider1=".$getdataslider1."&getdataslider2=".$getdataslider2."&page=".$i;
    			# code...
    		}
    		
    		?>


    <a class="page-link" href="<?echo $pagenumnext;?>"><?=$i?></a></li>
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





			
		</div><!--/container-->
		</div>
		<!--=== End Content Part ===-->

		
	
	
			
			
			

		<!-- requrie footer -->
		<? require ('footer-homepage.php'); ?>
		<!-- End reurie footer  -->

		</div><!--/wrapper-->
		


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="../backend/plugins-upload/loupe/jquery.loupe.js"></script>
	<script type="text/javascript">$('.demo').loupe();</script>


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
	

		
	
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		<script src="../../assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/form-sliders.js"></script>



		<script type="text/javascript">
			
			function Searchjob(event, form){

				textsearch = $("#textsearch").val();
				category = $("#Category").val();
				industries= $("#Industries").val();
				slidermoney= $("#slidermoney").val();


				getdataslider1= $('#slidermoney-value1-rounded').text();
				getdataslider2= $('#slidermoney-value2-rounded').text();

				search ="1";

				

				// alert(getdataslider1);
				// alert(getdataslider2);


				url = "job-list?search="+search+"&textsearch="+textsearch+"&category="+category+"&industries="+industries+"&getdataslider1="+getdataslider1+"&getdataslider2="+getdataslider2;
				 window.location.assign(url);

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
			
				OwlCarousel.initOwlCarousel();
				
				FormSliders.initFormSliders();

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

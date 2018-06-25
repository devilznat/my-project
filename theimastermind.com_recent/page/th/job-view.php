<?php
  session_start();
  require('../../db/connect.php');

  $jid=$_GET["id"];
  $headlink = "job-view";

$strSQL = "SELECT * FROM jobs_value WHERE language_code = 'th' AND id = '$jid' ORDER BY id DESC ";
$result = mysql_query($strSQL);

$strSQL2 = "SELECT * FROM jobs_value WHERE language_code = 'th' ORDER BY RAND()
LIMIT 5";
$result2 = mysql_query($strSQL2);

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
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
?>
	<meta property="og:url" content="http://theimastermind.com/page/en/job-view?id=<?echo $rs["id"];?>"/>
<meta property="og:title" content="<?echo $rs["title"];?>"/>
<meta property="og:image" content="http://theimastermind.com/assets/img/job/<? echo $rs["value_custom"]; ?>"/>
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
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<style type="text/css">
	.bg-color-white{
		box-shadow: 0 2px 2px rgba(0,0,0,.175);
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



$strSQL = "SELECT * FROM jobs_value WHERE language_code = 'th' AND id = '$jid' ORDER BY id DESC ";
$result = mysql_query($strSQL);

$strSQL2 = "SELECT * FROM jobs_value WHERE language_code = 'th' ORDER BY RAND()
LIMIT 5";
$result2 = mysql_query($strSQL2);

?>

	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->
		

		
		

		
		
		<!--=== Content Part ===-->
		
		<div class="bg-color-light">
		<div class="container content ">
		
			<div class="col-md-9 col-xs-12">
			<div class="news-v3 bg-color-white margin-bottom-30">
			<div class="row job-viewbox">
				    <?php
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

	$timestamp = strtotime($rs['created_date']);
$date = date('Y-m-d', $timestamp);

$s1 = $rs["salary_start"];
$s2 = $rs["salary_end"];

$num1 = number_format($s1);
$num2 = number_format($s2);
                ?>

				<!-- Head Job View -->
				<div class="row">
					<div class="col-md-3">
						<img src="../../assets/img/job/<?echo $rs["value_custom"]?>" class="img-responsive img-bordered enlarge" alt="">
					</div>
					<div class="col-md-6">
						<h3><strong><?echo $rs["title"];?></strong></h3>
						<h4> <?php
							if ($rs["salary_start"] != 0 && $rs["salary_end"] != 0){
							echo $num1;  ?> 
							- 
							<?php 
							echo $num2;
							if($rs["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'> Negotiable</font>";
								} 
							}
							else if($rs["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'> Negotiable</font>";
								}


							?>  THB </h4>
						<p><i class="fa fa-map-marker"></i> Bangkok &nbsp; 
						<i class="fa fa-clock-o"></i> <?php echo $date;?></p>
						<ul class="list-inline tags-v2 margin-bottom-10">
								<li><a href="#">Accounting</a></li>
								<li><a href="#">Industial</a></li>
						</ul>
					</div>
					<div class="col-md-3 blog-paddingbtn">
						<div class="margin-bottom-30"></div>
						<a href="upload-resume?jobid=<? echo $rs["id"]; ?>" class="btn btn-success btn-lg rounded-2x btn-block margin-bottom-20"> Apply Now </a>
						<br class="hidden-md hidden-lg">
						<button type="button" class="btn-u btn-u-dark-2 btn-block rounded-2x  dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="location.href='referral-friend?jobid=<? echo $rs["id"]; ?>'">
						
						<i class="fa fa-users"></i> 
							Referred Friend
							<!-- <i class="fa fa-angle-down"></i> -->
						</button>
						
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
								<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//theimastermind.com/page/en/job-view?id=<?echo $rs["id"];?>">
								<i class="fa fa-facebook"></i> Share on Facebook</a></li>

								<li><a href="https://twitter.com/intent/tweet/?text=Job Position = <?echo $titleconvert?>.&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>">
								<i class="fa fa-twitter"></i> Share on Twitter</a></li>

								<li><a href="https://plus.google.com/share?url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-google-plus"></i> Share on Google+</a></li>

								<li><a href="mailto:?subject=Job Position = <?echo $titleconvert?>.&amp;body=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-envelope"></i> Share on E-mail</a></li>

								<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>&amp;title=Job Position = <?echo $titleconvert?>.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Fjob-view?id=<?echo $rs["id"];?>"><i class="fa fa-linkedin"></i> Share on Linkedin</a></li>
							</ul>
						<div class="hidden-md hidden-lg"><br/></div>
					</div>
				</div>
				<!-- End Head Job View -->
				
				<!-- Qualifications -->
				<HR>
				<h3 class="font-head"><font color="#446cb3"><b>Qualifications</b></font></h3>
				<ul class="list-unstyled">
					<li> <?echo $rs["detail"];?> </li>
					<!-- <li><i class="fa fa-check color-green"></i> At least 5 years in marketing retail space preferably shopping centre.</li>
					<li><i class="fa fa-check color-green"></i> Management skill gained from a prestigious shopping centre.</li>
					<li><i class="fa fa-check color-green"></i> Strong interpersonal skills and very good in English communication.</li>
					<li><i class="fa fa-check color-green"></i> Ability in conducting negotiations and achieving results through smooth persuasion.</li>
					<li><i class="fa fa-check color-green"></i> Work under pressure and able to meet deadline.</li>
					<li><i class="fa fa-check color-green"></i> Computer literate in MS. Office.</li> -->
				</ul>
				<!-- End Qualifications -->

				<!-- Responsibilities -->
				<HR>
				<h3 class="font-head"><font color="#446cb3"><b>Responsibilities</b></font></h3>
				<ul class="list-unstyled">

					<li> <?echo $rs["job_requirement"];?> </li>
					<!-- <li><i class="fa fa-check color-green"></i>  To implement leasing and marketing strategy to the agreed leasing volumes, rental, and other policies according to Marketing Department Policy.</li>
					<li><i class="fa fa-check color-green"></i>  To develop and improve the tenant mix of the Retail Center.</li>
					<li><i class="fa fa-check color-green"></i>  To develop strategy of leasing for each customer, case by case.</li>
					<li><i class="fa fa-check color-green"></i>  To co-ordinate with external agency for leasing activities.</li>
					<li><i class="fa fa-check color-green"></i>  To respond to and follow up enquiries by telephone and personal visit.</li>
					<li><i class="fa fa-check color-green"></i>  To maintain existing customers in an upward moving market.</li>
					<li><i class="fa fa-check color-green"></i>  To prepare monthly report and provide relevant management information.</li>
					<li><i class="fa fa-check color-green"></i>  To gather market research and competitor surveys.</li>
					<li><i class="fa fa-check color-green"></i>  To develop relevant knowledge and skills.</li>
					<li><i class="fa fa-check color-green"></i>  To provide information for setting budget in yearly basis.
					Apply</li>
 -->

				</ul>
				<!-- End Responsibilities -->

				<!-- Btn Apply Now -->
				<div class="col-md-4"></div>
				<div class="col-md-4 margin-top-20">
					<a href="upload-resume?jobid=<? echo $rs["id"]; ?>" class="btn btn-success btn-lg rounded-2x btn-block margin-bottom-20"> Apply Now </a>
				</div>
				<div class="col-md-4"></div>

				<!-- End Btn Apply Now -->
				<?
				}
				?>
			</div>
			</div>
			</div>

			<div class="col-md-3 col-xs-12">

			 <!-- Jobs you may like -->
			<div class="news-v3 bg-color-white margin-bottom-15">
			<div class="row job-viewbox-right">
				<h3 ><b>Jobs You May like </b></h3><hr class="rightbox-jobview ">
				<div class="margin-bottom-20"></div>
				
					<ul class="list-unstyled blog-trending margin-bottom-30">

					<?php
               while($rs2 = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

$s1 = $rs2["salary_start"];
$s2 = $rs2["salary_end"];

$num1 = number_format($s1);
$num2 = number_format($s2);
                ?>

						<li>
							<h3><a href="job-view?id=<? echo $rs2["id"]; ?>"><?echo $rs2["title"] ?></a></h3>	
							<h5><i class="fa fa-map-marker"></i> Bangkok &nbsp;  <i class="fa fa-diamond"></i><?php
							if ($rs2["salary_start"] != 0 && $rs2["salary_end"] != 0){
							echo $num1; ?> 
							- 
							<?php 
							echo $num2;
							if($rs2["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'> Negotiable</font>";
								} 
							}
							else if($rs2["negotiable"] == '1') 
								{ 
									echo "<font color='#446cb3'> Negotiable</font>";
								}


							?> THB</h5>	
						</li>
						<? } ?>
						
					</ul>
					
			</div>
			</div>
			<!-- End Jobs you may like -->
			
			<!-- Tag Job -->
			<div class="news-v3 bg-color-white margin-bottom-15">
			<div class="row job-viewbox-right">
				<h3 >Tag Jobs </h3><hr class="rightbox-jobview ">
				<div class="margin-bottom-10"></div>
				
				<ul class="list-inline tags-v2 margin-bottom-10">
					<li><a href="#">Accounting</a></li>
					<li><a href="#">Industial</a></li>
					<li><a href="#">Accounting</a></li>
					<li><a href="#">Industial</a></li>
					<li><a href="#">Accounting</a></li>
					<li><a href="#">Industial</a></li>
					<li><a href="#">Industial</a></li>
					<li><a href="#">Accounting</a></li>
					<li><a href="#">Industial</a></li>
				</ul>
					
			</div>
			</div>
			<!-- End Tag Job -->

<? 
$sqlbannerjobview1 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-jobview1' " );
$loadbannerjobview1 = mysql_fetch_array($sqlbannerjobview1);
?>
			<!-- Banner Job-right -->
			<div class="news-v3 bg-color-white margin-bottom-30">
			<div class="row job-viewbox-right">
				
				
				<a href="<?echo $loadbannerjobview1["linkbanner"]?>"><img class="img-responsive" src="http://theimastermind.com/uploadfile/banner/<?echo $loadbannerjobview1["imagename"];?>"></a>

			</div>
			</div>
			<!-- End Banner Job-right -->


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
	

		
	
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
			
				OwlCarousel.initOwlCarousel();
				

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

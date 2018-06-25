<?
session_start();
  require('../../db/connect.php');
  $headlink = "newsletters_alltag";

  $alltag=$_GET["tag"];
  $detail=$_GET["id"];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Knowledge center | The i Mastermind </title>

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

	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body class="header-fixed header-fixed-space">



<?php

if($alltag == 6) 
{

	$rows= 5;
if($page<=0) $page=1;
$total_data=mysql_num_rows(mysql_query("SELECT * FROM newsletter WHERE language_code = 'th'  "));
$total_page=ceil($total_data/$rows);
if($page>=$total_page) $page=$total_page;

$start=($page-1)*$rows;


$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' ORDER BY nid DESC limit $start,5";
$result = mysql_query($strSQL);
}
else {

	
$rows= 5;
if($page<=0) $page=1;
$total_data=mysql_num_rows(mysql_query("SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '$alltag' "));
$total_page=ceil($total_data/$rows);
if($page>=$total_page) $page=$total_page;

$start=($page-1)*$rows;


$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '$alltag' ORDER BY nid DESC limit $start,5";
$result = mysql_query($strSQL);

}




/*function returnAllarticles()
{



	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'en' AND location = 'Articles' ORDER BY nid desc LIMIT $start";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	mysql_close($objConnect);
	return $resultArray;
}

$resultAllarti = returnAllarticles();*/


?>



	<div class="wrapper">

		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->
<?


$sql4 = mysql_query("SELECT * 
FROM  `newsletter_category` 
WHERE  `category_id` = '$alltag' " );
$loadtag = mysql_fetch_array($sql4);
?>
<!--=== Breadcrumbs v1 ===-->
<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left"> All <? echo $loadtag["title"]; ?> </h1>
				
			</div>
		</div>
<!--=== End Breadcrumbs v1 ===-->

<!--=== Blog Posts ===-->
		<div class="container content-md">
			<div class="row">
				<!-- Blog All Posts -->
				<div class="col-md-9">
					<!-- News v3 -->
					<div class="row margin-bottom-20">
					<?php	

		while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
	$i++;
		?>

						<div class="col-sm-5 sm-margin-bottom-20">
						    <a  target="_blank" href="newsletters_page?id=<? echo $rs["nid"]; ?>" >
							<img class="img-responsive" src="../../uploadfile/article/<?php echo $rs["pic"];?>" alt="Articles1">
		                    </a> 				
						</div>
						<div class="col-sm-7 news-v3">
							<div class="news-v3-in-sm no-padding">
								<ul class="list-inline posted-info">
									<li>By Admin. </li>
									<li>In <a href="#"><?php echo $loadtag["title"];?> </a></li>
									<li>Posted <?php echo $rs["created_date"];?></li>
								</ul>
								<h2><b><a href="newsletters_page?id=<? echo $rs["nid"]; ?>"><?php echo $rs["topic"];?> </a></b></h2>
								<!-- <p>Have you ever wonder what kind of information you put in your Resume? Let’s check it out our tips to help you write the interesting ones....</p> -->


								<div align="right">
								    <a href="newsletters_page?id=<? echo $rs["nid"]; ?>" target="_blank">
								<button class="btn-u btn-brd btn-brd-hover rounded-3x btn-u-blue-custom btn-u-lg-custom" type="button"><i class=""></i> Read more..</button> 
								    </a>
								</div>
								<!-- <ul class="post-shares">
									<li>
										<a href="#">
											<i class="rounded-x icon-speech"></i>
											<span>4</span>
										</a>
									</li>
									<li><a href="#"><i class="rounded-x icon-share"></i></a></li>
									<li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
								</ul> -->
								<br>
							</div>
						</div>
						<?
						}
						?>
					</div><!--/end row-->
					<!-- End News v3 -->

				

			<div class="clearfix margin-bottom-20"><hr></div>

					<center>
					<nav aria-label="Page navigation" >
					
  <ul class="pagination">
    <li <? if($page==1) echo 'class="page-item disabled"';?>>
   
      <a class="page-link" href="newsletters_alltag?tag=<? echo $alltag; ?>&page=<?=$page-1?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
      
    </li>
    <? 
    for ($i=1; $i<=$total_page; $i++) { 
    	
   	?>
    <li <? if($page==$i) echo 'class="page-item active"';?> ><a class="page-link" href="newsletters_alltag?tag=<? echo $alltag; ?>&page=<?=$i?>"><?=$i?></a></li>
    <? 
	}
	?>
    <li <? if($page==$total_page) echo 'class="page-item disabled"';?>>
      <a class="page-link" href="newsletters_alltag?tag=<? echo $alltag; ?>&page=<?=$page+1?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>

  </ul>
  
</nav>
</center>

					<!-- Pager v3 -->
					<!-- <ul class="pager pager-v3 pager-sm no-margin-bottom">
						<li class="previous"><a href="#">&larr; Older</a></li>
						<li class="page-amount">1 of 7</li>
						<li class="next"><a href="#">Newer &rarr;</a></li>
					</ul> -->
					<!-- End Pager v3 -->
				</div>
				<!-- End Blog All Posts -->
<?
$strSQL2 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY RAND()
LIMIT 3";
$result2 = mysql_query($strSQL2);

$strSQL3 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY nid DESC
LIMIT 2";
$result3 = mysql_query($strSQL3);

?>

				<!-- Blog Sidebar -->
				<div class="col-md-3">
					<div class="headline-v2 bg-color-light"><h2>Trending</h2></div>
					<!-- Trending -->
					<ul class="list-unstyled blog-trending margin-bottom-50">

	

<?php
               while($rs2 = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
                ?>
						<li>
							<h3><a href="newsletters_page?id=<? echo $rs2["nid"]; ?>"><b><font color="#446cb3"><? echo $rs2["topic"]; ?></font></b></a></h3>
							<small><? echo $rs2["created_date"]; ?> / <a href="newsletters_alltag?tag=<? echo $rs2["category_id"]; ?>"><? echo $rs2["location"]; ?></a></small>
						</li>

<? } ?>
						
					</ul>
					<!-- End Trending -->

					<div class="headline-v2 bg-color-light"><h2>Latest Posts</h2></div>
					<!-- Latest Links -->
					<ul class="list-unstyled blog-latest-posts margin-bottom-50">

					<?php
               while($rs3 = mysql_fetch_array($result3))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
                ?>
						<li>
							<h3><a href="newsletters_page?id=<? echo $rs3["nid"]; ?>"><b><font color="#446cb3"><? echo $rs3["topic"]; ?></font></b></a></h3>
							<small><? echo $rs3["created_date"]; ?> / <a href="newsletters_alltag?tag=<? echo $rs3["category_id"]; ?>"><? echo $rs3["location"]; ?></a> </small>
							
						</li>

						<? } ?>
						
					</ul>
					<!-- End Latest Links -->

					<div class="headline-v2 bg-color-light"><h2>Tags</h2></div>
					<!-- Tags v2 -->
					<ul class="list-inline tags-v2 margin-bottom-50">
						<li><a href="newsletters_alltag?tag=1">Articles</a></li>
						<li><a href="newsletters_alltag?tag=4">Populars</a></li>
						<li><a href="newsletters_alltag?tag=2">Tips</a></li>
						<li><a href="newsletters_alltag?tag=3">Knowledge</a></li>
						<li><a href="newsletters_alltag?tag=6">Recents</a></li>
					</ul>
					<!-- End Tags v2 -->

					
				</div>
				<!-- End Blog Sidebar -->
			</div>
		</div>
		<!--=== End Blog Posts ===-->

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
		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
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
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

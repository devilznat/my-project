<?php
  session_start();
  require('../../db/connect.php');

  $headlink = "newsletters";
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Newsletters | The i Mastermind </title>

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

	<!-- <link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/settings.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/layers.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/navigation.css"> -->
	<!-- SLIDE MASTER -->
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/master-slider/masterslider/skins/black-2/style.css">
	<link rel="stylesheet" href="../../assets/blogtheme/css/blog.style.css">


	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">
	


	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<style type="text/css">
		.content {
    padding-top: 10px;
    padding-bottom: 40px;
		}
		.content-md {
    padding-top: 40px;
    padding-bottom: 80px;
		}
		.block-lastnew{
			padding-left: 0;
			width: 23.5%;
		}
		.margin{
			margin-bottom: 20px;
		}
		}
	</style>




<body class="header-fixed header-fixed-space">

<?php

function returnRecents()
{

	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th'  ORDER BY nid desc LIMIT 3 ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	// mysql_close($objConnect);
	return $resultArray;
}

$resultRe = returnRecents();

//echo '<pre>';
//var_dump($resultCus);
//echo '</pre><hr />';

function returnPopulars()
{

	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '4' ORDER BY nid desc LIMIT 3 ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	// mysql_close($objConnect);
	return $resultArray;
}

$resultPop = returnPopulars();
                

function returnKnowledge()
{

	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '3' ORDER BY nid desc LIMIT 4 ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	// mysql_close($objConnect);
	return $resultArray;
}

$resultKn = returnKnowledge();                    
                            
function returnArticles()
{

	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '1' ORDER BY nid desc LIMIT 4 ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	// mysql_close($objConnect);
	return $resultArray;
}

$resultAr = returnArticles();                    
    

function returnTips()
{

	$strSQL = "SELECT * FROM newsletter WHERE language_code = 'th' AND category_id = '2' ORDER BY nid desc LIMIT 4 ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	// mysql_close($objConnect);
	return $resultArray;
}

$resultTp = returnTips(); 



?>

	<div class="wrapper">

		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->


<?

	$sqlbannernewsletter1 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-newsletters1' " );
	$loadbannernewsletter1 = mysql_fetch_array($sqlbannernewsletter1);

	$sqlbannernewsletter2 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-newsletters2' " );
	$loadbannernewsletter2 = mysql_fetch_array($sqlbannernewsletter2);

	$sqlbannernewsletter3 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-newsletters1' " );
	$loadbannernewsletter3 = mysql_fetch_array($sqlbannernewsletter3);

	$sqlbannernewsletter4 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-newsletters2' " );
	$loadbannernewsletter4 = mysql_fetch_array($sqlbannernewsletter4);

?>
		
<!-- Master Slider -->
	<div class="container content no-padding-bottom blog-ms-v2">
		<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">

<?php
$sqlpinslide = mysql_query("SELECT * FROM newsletter_slide WHERE id = '1' " );
$loadpinslide = mysql_fetch_array($sqlpinslide);

$pinarticleid = $loadpinslide[newsletter_id];
$sqlslide1= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'th' AND article_id = '$pinarticleid' " );
$loadslide1 = mysql_fetch_array($sqlslide1);
$timestampslide1 = strtotime($loadslide1['created_date']);
$date1slide1 = date('d', $timestampslide1);
$date2slide1 = date('M', $timestampslide1);
$date3slide1 = date('Y', $timestampslide1);

$sqlslide2= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'th' AND category_id = '1' ORDER BY nid DESC LIMIT 1 " );
$loadslide2 = mysql_fetch_array($sqlslide2);
$timestampslide2 = strtotime($loadslide2['created_date']);
$date1slide2 = date('d', $timestampslide2);
$date2slide2 = date('M', $timestampslide2);
$date3slide2 = date('Y', $timestampslide2);

$sqlslide3= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'th' AND category_id = '2' ORDER BY nid DESC LIMIT 1 " );
$loadslide3 = mysql_fetch_array($sqlslide3);
$timestampslide3 = strtotime($loadslide3['created_date']);
$date1slide3 = date('d', $timestampslide3);
$date2slide3 = date('M', $timestampslide3);
$date3slide3 = date('Y', $timestampslide3);

$sqlslide4= mysql_query("SELECT * FROM  newsletter WHERE  language_code = 'th' AND category_id = '3' ORDER BY nid DESC LIMIT 1 " );
$loadslide4 = mysql_fetch_array($sqlslide4);
$timestampslide4 = strtotime($loadslide4['created_date']);
$date1slide4 = date('d', $timestampslide4);
$date2slide4 = date('M', $timestampslide4);
$date3slide4 = date('Y', $timestampslide4);

?>

			<div class="ms-slide blog-slider">
				<img src="../../uploadfile/article/<? echo $loadslide1["pic"]; ?>" data-src="../../uploadfile/article/<? echo $loadslide1["pic"]; ?>" />
				<span class="blog-slider-badge"><? echo $loadslide1[location];?></span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><? echo $date2slide1; echo " "; echo $date1slide1;?>, <? echo $date3slide1; ?></span>
					<h2><a href="newsletters_page?id=<? echo $loadslide1[nid];?>"> <? echo $loadslide1[topic];?></a></h2>
				</div>
				<div class="ms-thumb">
					<h3>POPULARS</h3>
					<p><? echo $loadslide1[topic];?></p>
				</div>
			</div>



			<div class="ms-slide blog-slider">
				<img src="../../uploadfile/article/<? echo $loadslide2["pic"]; ?>" data-src="../../uploadfile/article/<? echo $loadslide2["pic"]; ?>" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge">ARTICLES</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><? echo $date2slide2; echo " "; echo $date1slide2;?>, <? echo $date3slide2; ?></span>
					<h2><a href="newsletters_page?id=<? echo $loadslide2[nid];?>"><? echo $loadslide2[topic];?></a></h2>
				</div>
				<div class="ms-thumb">
					<h3>ARTICLES</h3>
					<p><? echo $loadslide2[topic];?></p>
				</div>
			</div>

			<div class="ms-slide blog-slider">
				<img src="../../uploadfile/article/<? echo $loadslide3["pic"]; ?>" data-src="../../uploadfile/article/<? echo $loadslide3["pic"]; ?>" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge">TIPS</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><? echo $date2slide3; echo " "; echo $date1slide3;?>, <? echo $date3slide3; ?></span>
					<h2><a href="newsletters_page?id=<? echo $loadslide3[nid];?>"><? echo $loadslide3[topic];?></a></h2>
				</div>
				<div class="ms-thumb">
					<h3>TIPS</h3>
					<p><? echo $loadslide3[topic];?></p>
				</div>
			</div>

			

			<div class="ms-slide blog-slider">
				<img src="../../uploadfile/article/<? echo $loadslide4["pic"]; ?>" data-src="../../uploadfile/article/<? echo $loadslide4["pic"]; ?>" alt="lorem ipsum dolor sit"/>
				<span class="blog-slider-badge">KNOWLEDGE</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><? echo $date2slide4; echo " "; echo $date1slide4;?>, <? echo $date3slide4; ?></span>
					<h2><a href="newsletters_page?id=<? echo $loadslide4[nid];?>"><? echo $loadslide4[topic];?></a></h2>
				</div>
				<div class="ms-thumb">
					<h3>Knowledge</h3>
					<p><? echo $loadslide4[topic];?></p>
				</div>
			</div>

			
		</div>
	</div>
	<!-- End Master Slider -->
	<div class="container content no-padding-bottom blog-ms-v2">
		<br>
	<div class="col-md-12">
				<a href="<? echo $loadbannernewsletter1[linkbanner]; ?>" ><img class="img-responsive" src="../../uploadfile/banner/<? echo $loadbannernewsletter1[imagename]; ?>"></a>
	</div>
	</div>
	<div class="container content-md"> 
			<div class="row">
	<div class="col-md-12">
					<div class="headline-v2 bg-color-light-recents"><h2><i class="fa fa-history"></i>RECENTS</h2></div>
					<div class="row news-v2">
	
	<?php
		foreach ($resultRe as $result)
		{

$timestamp = strtotime($result['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
		?>

	<!--=== Blog Posts ===-->
		
				<!-- Blog All Posts -->
				

						<div class="col-md-4 <?php echo $result["value"];?> ">
							<div class="news-v2-badge">
							<a href="newsletters_page?id=<? echo $result["nid"]; ?>">
								<img class="img-responsive" src="../../uploadfile/article/<?php echo $result["pic"];?>" alt="" >
							</a>
								<p>
									<span><?echo $date1;?></span>
									<small><?echo $date2;?></small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="newsletters_page?id=<? echo $result["nid"]; ?>"><?php echo $result["topic"];?></a></h4>
								
								<div>
									<h5><a href="newsletters_page?id=<? echo $result["nid"]; ?>">Read More..</a></h5>
								</div>
							</div>
						</div>
						
						
				
					
				


				<!-- <div class="col-md-12 hidden">
					<div class="headline-v2 bg-color-light-recents"><h2><i class="fa fa-history"></i>RECENTS</h2></div>
					<div class="row news-v2">
						<div class="col-md-4 sm-margin-bottom-30">
							<div class="news-v2-badge">
								<img class="img-responsive" src="http://theimastermind.com/uploaded/articles/1456911672.png" alt="">
								<p>
									<span>26</span>
									<small>Feb</small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="">Talking About Resume</a></h4>
								
								<div>
									<h5><a href="newsletters_page.html">Read More..</a></h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 sm-margin-bottom-30">
							<div class="news-v2-badge">
								<img class="img-responsive" src="http://theimastermind.com/uploaded/articles/1437621873.png" alt="">
								<p>
									<span>24</span>
									<small>Feb</small>
								</p>
								
							</div>
							<div class="news-v2-desc bg-color-light  ">
								<h4 class="headblog"><a href="#">What’re included in resume?</a></h4>
								
									<div>
									<h5><a href="newsletters_alltag.html">Read More..</a></h5>
								</div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="news-v2-badge">
								<img class="img-responsive" src="http://theimastermind.com/uploaded/articles/1437621873.png" alt="">
								<p>
									<span>24</span>
									<small>Feb</small>
								</p>
								
							</div>
							<div class="news-v2-desc bg-color-light  ">
								<h4 class="headblog"><a href="#">What’re included in resume?</a></h4>
								
									<div>
									<h5><a href="newsletters_alltag.html">Read More..</a></h5>
								</div>
							</div>
						</div>
				-->
				<!-- 	</div>
					<br>
				</div>  -->
			<?
			}
			?>
			</div>
			<br>
					
					
					<button class="btn-u  btn-block  marign-bottom-10" onclick="window.location.href='newsletters_alltag?tag=6'"> All Recents </button>
					
					<br><br>
				
				</div>

				<div class="col-md-12">
					<div class="headline-v2-popular bg-color-light-popular"><h2><i class="fa fa-star"></i>POPULARS</h2></div>
					<div class="row news-v2">
					<?php
		foreach ($resultPop as $result)
		{

			$timestamp = strtotime($result['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
		?>

	<!--=== Blog Posts ===-->
		
				<!-- Blog All Posts -->
				

						<div class="col-md-4 <?php echo $result["value"];?> ">
							<div class="news-v2-badge">
							<a href="newsletters_page?id=<? echo $result["nid"]; ?>">
								<img class="img-responsive" src="../../uploadfile/article/<?php echo $result["pic"];?>" alt="">
								</a>
								<p>
									<span><?echo $date1;?></span>
									<small><?echo $date2;?></small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="newsletters_page?id=<? echo $result["nid"]; ?>"><?php echo $result["topic"];?></a></h4>
								
								<div>
									<h5><a href="newsletters_page?id=<? echo $result["nid"]; ?>">Read More..</a></h5>
								</div>
							</div>
						</div>
						

				
			<?
			}
			?>
				
					</div>
					<br>
				</div>
				<!-- end rect news popual -->


				<div class="col-md-9">
				<div class="col-md-12">
					<div class="headline-v2 bg-color-light"><h2><i class="fa fa-sticky-note"></i>ARTICLES</h2></div>
					<div class="row news-v2">
						
					<?php
		foreach ($resultAr as $result)
		{

			$timestamp = strtotime($result['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
		?>


						<div class="col-md-6 margin">
							<div class="news-v2-badge">
							<a href="newsletters_page?id=<? echo $result["nid"]; ?>">
								<img class="img-responsive" src="../../uploadfile/article/<?php echo $result["pic"];?>" alt="">
								</a>
								<p>
									<span><?echo $date1;?></span>
									<small><?echo $date2;?></small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="newsletters_page?id=<? echo $result["nid"]; ?>"><?php echo $result["topic"];?></a></h4>
								
								<div>
									<h5><a href="newsletters_page?id=<? echo $result["nid"]; ?>">Read More..</a></h5>
								</div>
							</div>
						</div>
						
					<?php

					}

					?>	
						
					</div>
					<br>
					
					
					<button class="btn-u  btn-block  marign-bottom-10" onclick="window.location.href='newsletters_alltag?tag=1'"> All Articles </button>
					
					<br><br>
				</div>
				<div class="col-md-12">
					<div class="headline-v2 bg-color-light"><h2><i class="fa fa-lightbulb-o"></i>TIPS</h2></div>
					<div class="row news-v2">
						

					<?php
		foreach ($resultTp as $result)
		{

			$timestamp = strtotime($result['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
		?>


						<div class="col-md-6 margin">
							<div class="news-v2-badge">
							<a href="newsletters_page?id=<? echo $result["nid"]; ?>">
								<img class="img-responsive" src="../../uploadfile/article/<?php echo $result["pic"];?>" alt="">
							</a>
								<p>
									<span><?echo $date1;?></span>
									<small><?echo $date2;?></small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="newsletters_page?id=<? echo $result["nid"]; ?>"><?php echo $result["topic"];?></a></h4>
								
								<div>
									<h5><a href="newsletters_page?id=<? echo $result["nid"]; ?>">Read More..</a></h5>
								</div>
							</div>
						</div>
						
					<?php

					}

					?>	



						
					</div>
					<br>
					
					
					<button class="btn-u  btn-block  marign-bottom-10" onclick="window.location.href='newsletters_alltag?tag=2'"> All Tips </button>
					
					<br><br><br>
				</div>

				<div class="col-md-12">
					<div class="headline-v2 bg-color-light"><h2><i class="fa fa-book"></i>KNOWLEDGE</h2></div>
					<div class="row news-v2">

					<?php
		foreach ($resultKn as $result)
		{

			$timestamp = strtotime($result['created_date']);
$date1 = date('d', $timestamp);
$date2 = date('M', $timestamp);
		?>


						<div class="col-md-6 margin">
							<div class="news-v2-badge">
							<a href="newsletters_page?id=<? echo $result["nid"]; ?>">
								<img class="img-responsive" src="../../uploadfile/article/<?php echo $result["pic"];?>" alt="">
								</a>
								<p>
									<span><?echo $date1;?></span>
									<small><?echo $date2;?></small>
								</p>
							</div>
							<div class="news-v2-desc bg-color-light">
								<h4 class="headblog"><a href="newsletters_page?id=<? echo $result["nid"]; ?>"><?php echo $result["topic"];?></a></h4>
								
								<div>
									<h5><a href="newsletters_page?id=<? echo $result["nid"]; ?>">Read More..</a></h5>
								</div>
							</div>
						</div>
						
					<?php

					}

					?>	


					</div>
				

					
					<br>
					<button class="btn-u  btn-block  marign-bottom-10" onclick="window.location.href='newsletters_alltag?tag=3'"> All Knowledge</button>
					
					<br><br><br>
				</div>

				
			
					

				</div>
				<!-- End Blog All Posts -->

<?
$strSQL2 = "SELECT * FROM newsletter WHERE language_code = 'en' ORDER BY RAND()
LIMIT 3";
$result2 = mysql_query($strSQL2);
?>
				<!-- Blog Sidebar -->
				<div class="col-md-3 hidden-xs hidden-sm  block-lastnew" >
					<div class="headline-v2 bg-color-light"><h2>Trending</h2></div>
					<!-- Trending -->
					<ul class="list-unstyled blog-trending margin-bottom-50">

					<?php
               while($rs2 = mysql_fetch_array($result2))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
                ?>
						<li>
							<h3><a href="newsletters_page?id=<? echo $rs2["nid"]; ?>"><b><font color="#446cb3"><? echo $rs2["topic"]; ?></font></b></a></h3>
							<small><? echo $rs2["created_date"]; ?> / <a href="newsletters_alltag?tag=<? echo $rs2["location"]; ?>"><? echo $rs2["location"]; ?></a> </small>
						</li>
				<?  } ?>
					</ul>
					<!-- End Trending -->

					

					<div class="headline-v2 bg-color-light"><h2>Tags</h2></div>
					<!-- Tags v2 -->
					<ul class="list-inline tags-v2 margin-bottom-50">
						<li><a href="newsletters_alltag?tag=1">Articles</a></li>
						<li><a href="newsletters_alltag?tag=4">Populars</a></li>
						<li><a href="newsletters_alltag?tag=2">Tips</a></li>
						<li><a href="newsletters_alltag?tag=3">Knowledge</a></li>
						
					
					</ul>
					<!-- End Tags v2 -->

					<div>
						

						<a href="<? echo $loadbannernewsletter3[linkbanner]; ?>"><img class="img-responsive" src="../../uploadfile/banner/<? echo $loadbannernewsletter2[imagename]; ?>"></a>
					</div>

					
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
		<script type="text/javascript" src="../../assets/plugins/counter/waypoints.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/counter/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="../../assets/plugins/wow-animations/js/wow.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/spin.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/ladda.min.js"></script>

	<!-- 	<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 -->
 		<!-- Slide Master  -->
 		<script src="../../assets/blogtheme/plugins/master-slider/masterslider/masterslider.js"></script>
		<script src="../../assets/blogtheme/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
		<script src="../../assets/blogtheme/plugins/modernizr.js"></script>

		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
		<!-- <script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script> -->
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
		
		<!-- <script src="../../assets/blogtheme/js/plugins/blog-masonry.js"></script>
		<script src="../../assets/blogtheme/js/plugins/revo-slider.js"></script> -->

		<!-- Slide Master  -->
		<script src="../../assets/blogtheme/js/plugins/master-slider-showcase3.js"></script>


		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				// MSfullWidth.initMSfullWidth();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();

				MasterSliderShowcase3.initMasterSliderShowcase3();



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

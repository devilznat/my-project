<?php
  session_start();
  $headlink = "index";
 
  require('../../db/connect.php');

  $status = 0;
  $status = $_GET['search'];

  
  $getcategory = $_GET['category'];
  $getindustries = $_GET['industries'];

   if ($status==0) {

  		$sql= "SELECT * FROM jobs_value WHERE language_code = 'th' ORDER BY id DESC limit $start,5";
  	# code...
  } 


$strSQL = "SELECT * FROM jobs_value WHERE language_code = 'th' ORDER BY id DESC limit 0,5 ";
$result = mysql_query($strSQL);
  

  
function formatValue($size, $precision = 1)
{
    static $suffixes = array('', 'k', 'm');
    $base = log($size) / log(1000);

    return round(pow(1000, $base - floor($base)), $precision) . $suffixes[floor($base)];
}

?>

	<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Home | Theimastermind </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
	<link href='https://fonts.googleapis.com/css?family=Kanit:300,400&subset=latin,thai' rel='stylesheet' type='text/css'>
	
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/css/one.style.css">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="../../assets/hometheme/assets/css/footers/footer-v7.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/animate.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/pace/pace-flash.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
	<link rel="stylesheet" href="../../assets/hometheme/assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
	<!--[if lt IE 9]><link rel="stylesheet" href="../../assets/hometheme/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

	<!-- Style Switcher -->
	<link rel="stylesheet" href="../../assets/hometheme/assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/hometheme/assets/css/theme-colors/blue-theimastermind.css" id="style_color">
	<link rel="stylesheet" href="../../assets/hometheme/assets/css/theme-skins/one.dark.css">

 	<link rel="stylesheet" href="../../assets/hometheme/assets/css/shiping.style.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">

	<!-- Job Slider -->
	<link rel="stylesheet" href="../../assets/plugins/owl-carousel2/assets/owl.carousel.css">
	<style type="text/css">
	.container-fluid.pattern-v1 {
    background: url(../../assets/img/patterns/16.png) repeat;
}
		.offer {
    box-shadow: 2px 2px 2px #ebebeb;
    background: #fff;
    height: 300px;
	}
	.g-mb-40 {
    margin-bottom: 40px;
	}
	.g-padding-50 {
    padding: 40px;
	}
	.g-dp-block {
    display: block;
	}
	.offer__price {
    color: #446cb3;
    font-weight: bold;
    font-size: 30px;
    line-height: 1;
	}
	.g-dp-block {
    display: block;
	}
	.offer__price--per {
    color: #999;
    font-weight: lighter;
    text-transform: uppercase;
    font-size: 12px;
	}
	.g-mb-60 {
    margin-bottom: 60px;
	}
	.offer__name {
    color: #000;
    font-weight: bold;
    font-size: 18px;
    text-transform: uppercase;
    position: relative;
    line-height: 115%;
	}
	.offer__namepinjob {
    color: #000;
    font-weight: bold;
    font-size: 18px;
    text-transform: uppercase;
    position: relative;
    line-height: 115%;
	}
	p {
    display: block;
    -webkit-margin-before: 0em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
	}
	.offer__btn-u, .offer__btn-u:focus {
    color: #fff;
    border: 3px solid #6bda95;
    background: #6bda95;
    text-transform: uppercase;
    padding: 17px 23px;
    font-size: 13px;
    font-weight: bold;
	}
	.btn-u {
	   
    border: 0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    font-weight: 400;
    padding: 10px 50px;
    position: relative;
    background: #72c02c;
    white-space: nowrap;
    display: inline-block;
    text-decoration: none;

	}
	a, a:focus, a:hover, a:active {
	    outline: 0 !important;
	}
	a {
	    color: inherit;
	}
	.offer__name:after {
    position: absolute;
    content: "";
    width: 50px;
    height: 10px;
    top: 150%;
    left: 50%;
    margin-left: -25px;
    background: #446cb3;
	}
	

	.offer__namepinjob:after {
	    position: absolute;
	    content: "";
	    width: 50px;
	    height: 10px;
	    top: 150%;
	    left: 50%;
	    margin-left: -25px;
	    background: #d9534f;
	}

	.owl-theme .owl-controls .owl-page span {

    margin: 5px 7px;
    
	}
	/*font logo*/
	


	.span-logo{
	padding-right:6px; 
	
	}
	.line-logo{

	color: #fff;
	}

	.paddingcont{
	padding-top: 60px;
    padding-bottom: 10px;
	} 

	.formselet{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #999ba0;
    margin: 6px;
    width: 32%;
	}

	.formselet2{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #999ba0;
    margin: 6px;
    width: 80%;
	}

	.formselet-respon{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #999ba0;
   	margin: 4px;
    margin-left: -6px;
    width: 88%;
	}

	.paddingbtnjob{
	padding-top: 5px;
    padding-left: 5px;
	}

	</style>

</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">

	<!-- require head -->
	<? require('head-homepage.php'); ?>
	<!-- End require head  -->

<?
	$sqlsliderhomepage = mysql_query("SELECT * FROM slide_homepage WHERE language_code =  'th' AND location = 'slide1'  " );
	$loadsliderhomepage = mysql_fetch_array($sqlsliderhomepage);

	$sqlsliderhomepage2 = mysql_query("SELECT * FROM slide_homepage WHERE language_code =  'th' AND location = 'slide2' " );
	$loadsliderhomepage2 = mysql_fetch_array($sqlsliderhomepage2);

	$sqlsliderhomepage3 = mysql_query("SELECT * FROM slide_homepage WHERE language_code =  'th' AND location = 'slide3' " );
	$loadsliderhomepage3 = mysql_fetch_array($sqlsliderhomepage3);

	$sqlsliderhomepage4 = mysql_query("SELECT * FROM slide_homepage WHERE language_code =  'th' AND location = 'slide4' " );
	$loadsliderhomepage4 = mysql_fetch_array($sqlsliderhomepage4);

	$sqlsliderhomepage5 = mysql_query("SELECT * FROM slide_homepage WHERE language_code =  'th' AND location = 'slide5' " );
	$loadsliderhomepage5 = mysql_fetch_array($sqlsliderhomepage5);
?>

	<!-- Intro Section -->
	<section id="intro" class="intro-section">
		<div class="fullscreenbanner-container">
			<div class="fullscreenbanner">
				<ul>

				<!-- SLIDE 5 -->
					<li data-transition="slideup" data-slotamount="5" data-masterspeed="700"  data-title="Slide 4">
						<!-- MAIN IMAGE -->
						<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage5[value_custom4];?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-xs hidden-sm"
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage5[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-lg hidden-md" style="font-size: 50px;
    left: 65px;"
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage5[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-3 sfb"
							data-x="center"
							data-hoffset="0"
							data-y="370"
							data-speed="800"
							data-start="3500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<span class="page-scroll"><a href="<? echo $loadsliderhomepage5[value_custom3];?>" class="btn-u btn-brd btn-brd-hover btn-u-light">
							<? echo $loadsliderhomepage5[value_custom2];?></a></span>
							
						</div>

						<!-- LAYERS -->
						<div class="tp-caption tp-fade fadeout fullscreenvideo"
						data-x="0"
						data-y="0"
						data-speed="1000"
						data-start="1100"
						data-easing="Power4.easeOut"
						data-endspeed="1500"
						data-endeasing="Power4.easeIn"
						data-autoplay="true"
						data-autoplayonlyfirsttime="false"
						data-nextslideatend="true"
						data-forceCover="1"
						data-dottedoverlay="twoxtwo"
						data-aspectratio="16:9"
						data-forcerewind="on"
						style="z-index: 2">
						<video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
						poster='<? echo $loadsliderhomepage5[value_custom4];?>' data-setup="{}">
						<source src='../../uploadfile/slide/homepage/<? echo $loadsliderhomepage5[value_custom5];?>' type='video/mp4' />
						<source src='../../uploadfile/slide/homepage/<? echo $loadsliderhomepage5[value_custom5];?>' type='video/webm' /> 
						</video>	
						</div>
					</li>
					
					<!-- SLIDE 1 -->
					<li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
						<!-- MAIN IMAGE -->
						<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage[value_custom4]; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-xs hidden-sm"  
							data-x="center"
							data-hoffset="0"
							data-y="100"
							data-speed="800"
							data-start="2000"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage[value];?>
						</div>

						<!-- LAYERS --> respon xs sm
						<div class="tp-caption rs-caption-1 sft start hidden-md hidden-lg" style="font-size: 70px;
    left: 104px;" 
							data-x="center"
							data-hoffset="0"
							data-y="100"
							data-speed="800"
							data-start="2000"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage[value];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sft hidden-sm hidden-xs" 
							data-x="center"
							data-hoffset="0"
							data-y="200"
							data-speed="1000"
							data-start="3000"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage[value_custom];?>
							
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sft hidden-lg hidden-md" style="font-size: 60px;
    left: 60px; padding: 45px;"
							data-x="center"
							data-hoffset="0"
							data-y="200"
							data-speed="1000"
							data-start="3000"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage[value_custom];?>
							
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-3 sft" 
							data-x="center"
							data-hoffset="0"
							data-y="360"
							data-speed="800"
							data-start="3500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">

							<span class="page-scroll"><a href="<? echo $loadsliderhomepage[value_custom3];?>" class="btn-u btn-brd btn-brd-hover btn-u-light" style="top: 30px;"><? echo $loadsliderhomepage[value_custom2];?></a></span>
							
						</div>
					</li>

					<!-- SLIDE 2 -->
					<li data-transition="slideup" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
						<!-- MAIN IMAGE -->
						<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage2[value_custom4];?>" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-xs hidden-sm"
							data-x="center"
							data-hoffset="0"
							data-y="100"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage2[value];?>
						</div>

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-md hidden-lg" style="font-size: 70px;
    left: 65px;" 
							data-x="center"
							data-hoffset="0"
							data-y="100"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage2[value];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sft hidden-xs hidden-sm"
							data-x="center"
							data-hoffset="0"
							data-y="200"
							data-speed="1000"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6 font-size: 20px left: 77px;">
							<? echo $loadsliderhomepage2[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sft hidden-lg hidden-md" style="font-size: 50px;
    left: 65px; padding: 45px;"
							data-x="center"
							data-hoffset="0"
							data-y="200"
							data-speed="1000"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6 font-size: 20px left: 77px;">
							<? echo $loadsliderhomepage2[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-3 sft"
							data-x="center"
							data-hoffset="0"
							data-y="360"
							data-speed="800"
							data-start="3500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<span class="page-scroll"><a href="<? echo $loadsliderhomepage2[value_custom3];?>" class="btn-u btn-brd btn-brd-hover btn-u-light" style="top: 20px;">
							<? echo $loadsliderhomepage2[value_custom2];?></a></span>
							
						</div>
					</li>

					<!-- SLIDE 3 -->
					<li data-transition="slideup" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
						<!-- MAIN IMAGE -->
						<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage3[value_custom4];?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-sm hidden-xs"
							data-x="center"
							data-hoffset="0"
							data-y="110"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage3[value];?>
						</div>

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-md hidden-lg" style="font-size: 53px;
    left: 45px;"
							data-x="center"
							data-hoffset="0"
							data-y="110"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage3[value];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-xs hidden-sm"
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage3[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-lg hidden-md" style="font-size: 40px;
    left: 65px; top: 370.526px;"
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage3[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-3 sfb"
							data-x="center"
							data-hoffset="0"
							data-y="370"
							data-speed="800"
							data-start="3500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<span class="page-scroll"><a href="<? echo $loadsliderhomepage3[value_custom3];?>" class="btn-u btn-brd btn-brd-hover btn-u-light" style="top: 10px;">
							<? echo $loadsliderhomepage3[value_custom2];?></a></span>
							
						</div>
					</li>
					<!-- SLIDE 4 -->
					<li data-transition="slideup" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
						<!-- MAIN IMAGE -->
						<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage4[value_custom4];?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-sm hidden-xs"
							data-x="center"
							data-hoffset="0"
							data-y="110"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage4[value];?>
						</div>

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start hidden-md hidden-lg" style="font-size: 70px;
    left: 65px; "
							data-x="center"
							data-hoffset="0"
							data-y="110"
							data-speed="800"
							data-start="1500"
							data-easing="Back.easeInOut"
							data-endspeed="300">
							<? echo $loadsliderhomepage4[value];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-xs hidden-sm"  
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage4[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-2 sfb hidden-lg hidden-md" style="font-size: 50px;
    left: 65px; padding: 45px;"
							data-x="center"
							data-hoffset="0"
							data-y="210"
							data-speed="800"
							data-start="2500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<? echo $loadsliderhomepage4[value_custom];?>
						</div>

						<!-- LAYER -->
						<div class="tp-caption rs-caption-3 sfb"
							data-x="center"
							data-hoffset="0"
							data-y="370"
							data-speed="800"
							data-start="3500"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6">
							<span class="page-scroll"><a href="<? echo $loadsliderhomepage4[value_custom3];?>" class="btn-u btn-brd btn-brd-hover btn-u-light" style="top: 30px;">
							<? echo $loadsliderhomepage4[value_custom2];?></a></span>
							
						</div>
					</li>

					
				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
				<div class="tp-dottedoverlay twoxtwo"></div>
			</div>
		</div>
	</section>
	<!-- End Intro Section -->

	<?

	$sqlbannerhomepage1 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-homepage1' " );
	$loadbannerhomepage1 = mysql_fetch_array($sqlbannerhomepage1 );

	$sqlbannerhomepage2 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-homepage2' " );
	$loadbannerhomepage2 = mysql_fetch_array($sqlbannerhomepage2);

?>


	<!--=== Call To Action ===-->
	<div class="call-action-v1 bg-color-light">
		<a href="<? echo $loadbannerhomepage1[linkbanner]; ?>""><img src="../../uploadfile/banner/<? echo $loadbannerhomepage1[imagename]; ?>" width="100%" height="auto"></a>
	</div>
	<!--=== End Call To Action ===-->



<!--  About Section -->
<?
	$sqlourservice1 = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-1' " );
	$loadourservice1 = mysql_fetch_array($sqlourservice1);

	$sqlourservice2 = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-2' " );
	$loadourservice2 = mysql_fetch_array($sqlourservice2);
	
	$sqlourservice3 = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'ourservice-3' " );
	$loadourservice3 = mysql_fetch_array($sqlourservice3);


?>



	<section id="about" class="about-section section-first" >
		<div class="block-v1">
			<div class="container">
				<div class="row content-boxes-v3">
					<div class="col-md-4 md-margin-bottom-30">
						<i class="icon-custom rounded-x icon-bg-dark <? echo $loadourservice1[value_custom]; ?>"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm"><? echo $loadourservice1[key]; ?></h2>
							<p><? echo $loadourservice1[value]; ?></div>
					</div>
					<div class="col-md-4 md-margin-bottom-30">
						<i class="icon-custom rounded-x icon-bg-dark <? echo $loadourservice2[value_custom]; ?>"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm"><? echo $loadourservice2[key]; ?></h2>
							<p><? echo $loadourservice2[value]; ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<i class="icon-custom rounded-x icon-bg-dark <? echo $loadourservice3[value_custom]; ?>"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm"><? echo $loadourservice3[key]; ?></h2>
							<p><? echo $loadourservice3[value]; ?></p>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--  END About Section -->
		


		<!--=== Job search ===-->
	<?
	$sqljobsearch = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'jobsearch' " );
	$loadjobsearch  = mysql_fetch_array($sqljobsearch );
	?>

	<div class="parallax-quote parallaxBg">
		<div class="container">

			<div class="wow zoomIn parallax-quote-in">
				<h1><label> <font color="#fff">
				<i class="icon-lg rounded-x icon  <? echo $loadjobsearch[value_custom]; ?> "></i></font><br>
				<font color="#446cb3"><? echo $loadjobsearch[key]; ?>  </font></label></h1>
				<h3> <font color="#fff"><? echo $loadjobsearch[value]; ?> </font>  </h3>

				<br><br>

				 <form class="shipping-form">
	              
	              <div class="row">

	                <select class="formselet rounded-3x input-lg  col-lg-4 hidden-sm hidden-xs " name="Category" id="Category">
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

	                <select class="formselet rounded-3x input-lg  col-lg-4 hidden-sm hidden-xs" name="Industries" id="Industries">
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

	                <!-- ซ่อน respon ใหญ่ -->
	                 <select class="formselet2 rounded-3x input-lg  col-lg-4 col-md-4 hidden-md hidden-lg"   name="Category" id="Category">
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

	                <select class="formselet2 rounded-3x input-lg  col-lg-4 hidden-md hidden-lg" name="Industries" id="Industries">
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


	                <div class="col-lg-4 paddingbtnjob">
	                  <a class="btn btn-block btn-lg btn-primary btn-u-lg rounded btn-u-blue-custom ladda-button" onclick="Searchjob();"> Job Search</a>
	                </div>

	               </div>
	             
	            
	            </form>



	            
				
						
			</div>
		</div>
	</div>
	<!--=== End Job search ===-->

<!--=== Call To Action ===-->
	<div class="call-action-v1 bg-color-light">
		<a href="<? echo $loadbannerhomepage2[linkbanner]; ?>""><img src="../../uploadfile/banner/<? echo $loadbannerhomepage2[imagename]; ?>" width="100%" height="auto"></a>
	</div>
	<!--=== End Call To Action ===-->

<?

	$sqlpinjob = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'pinjob' " );
	$loadpinjob = mysql_fetch_array($sqlpinjob);

	
	$idjob1 = $loadpinjob[value];

	$sqlpinjob = mysql_query("SELECT * FROM jobs_value WHERE job_id = '$idjob1' " );
	$loadpinjob1 = mysql_fetch_array($sqlpinjob);

	$timestamp2 = strtotime($loadpinjob1['created_date']);
	$datepinjob = date('Y-m-d', $timestamp2);

	$location = $loadpinjob1[province_id];
	$sqllocation = mysql_query("SELECT * FROM province WHERE province_id = '$location' " );
	$loadlocation = mysql_fetch_array($sqllocation);
	
	

?>

		<!-- Our Offers -->
		<section id="offers">
			<div class="container-fluid no-padding pattern-v1" style="line-height: 0.6;">
				<div class="container">
					<div class="content-lg g-pb-90">
						
						<div class="title-v1">
							<h1>Latest Job Oppotunities </h1>
							<p></p>
						</div>
						<!-- Owl Carousel v4-->
						<div class="owl2-carousel-v4 owl-theme dots-v1 ">
							<div class="item text-center g-mb-40">
								<div class="offer g-padding-50">
									<span class="offer__price g-dp-block"><font color="#d9534f"><i class="fa fa-flag" aria-hidden="true"></i>
										<?php
									if($loadpinjob1["negotiable"] == '1') 
										{ 
											echo "Negotiable";
										} 

									else if ($loadpinjob1["negotiable"] != '1') 
									{
									echo formatValue($loadpinjob1["salary_start"],1); 
									?> 
									- 
									<?php 
									echo formatValue($loadpinjob1["salary_end"],1); 
									}
									?></font>  



									<span class="offer__price--per g-dp-block g-mb-30">THB</span>
									<h2 class="offer__namepinjob font-main g-mb-60"><? echo $loadpinjob1[title]; ?> </h2>
									<p class="offer__text g-mb-30">
										<i class="fa fa-map-marker"></i> <? echo $loadlocation[province_name_eng]; ?>&nbsp; &nbsp;
										<i class="fa fa-clock-o"></i> <? echo $datepinjob; ?>
									</p>
									<a href="job-view?id=<? echo $loadpinjob1["id"]; ?>" class="btn btn-block btn-md btn-danger">View More</a>
								</div>
							</div>
			<?php	

		while($loadjob = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{

$timestamp = strtotime($loadjob['created_date']);
$date = date('Y-m-d', $timestamp);

$province_id = $loadjob["province_id"];

$sql4 = mysql_query("SELECT * 
FROM  `province` 
WHERE  `province_id` = '$province_id' ");
$loadprovince = mysql_fetch_array($sql4);

		?>
							<div class="item text-center g-mb-40">

						
								<div class="offer g-padding-50">

						
									<span class="offer__price g-dp-block"> 
									<?php
									if($loadjob["negotiable"] == '1') 
										{ 
											echo "Negotiable";
										} 

									else if ($loadjob["negotiable"] != '1') 
									{
									echo formatValue($loadjob["salary_start"],1); 
									?> 
									- 
									<?php 
									echo formatValue($loadjob["salary_end"],1); 
									}
									?>
									</span>
									<span class="offer__price--per g-dp-block g-mb-30">THB</span>
									<h2 class="offer__name font-main g-mb-60"><? echo $loadjob[title]; ?> <br><br></h2>
									<p class="offer__text g-mb-30">
										<i class="fa fa-map-marker"></i> <?echo $loadprovince["province_name_eng"];?> &nbsp; &nbsp;
										<i class="fa fa-clock-o"></i> <? echo $date; ?> 
									</p>
									<a href="job-view?id=<? echo $loadjob["id"]; ?>" class="btn btn-block btn-md btn-primary">View More</a>

								
								</div>

									
							</div>

							<? } ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Offers -->

		

	
		
	

		<!--=== Parallax Counter v4 ===-->
		<div class="parallax-counter-v4 parallaxBg">
			<div class="container paddingcont">
				<div class="row">
					<div class="col-md-3 col-xs-6 md-margin-bottom-50">
						
						<i class="icon-briefcase"></i>
						<span class="counter">265</span>
						<h4>Jobs</h4>
					</div>
					<div class="col-md-3 col-xs-6 md-margin-bottom-50">
						<i class="icon-wallet"></i>
						<span class="counter">300,000</span>
						<h4>Salary</h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<i class="icon-emoticon-smile"></i>
						<span class="counter">3495</span>
						<h4>Candidates</h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<i class="icon-bulb"></i>
						<span class="counter">576</span>
						<h4>Artticles</h4>
					</div>
				</div><!--/end row-->
				</br></br>

			</div><!--/end container-->
		</div>
		<!--=== End Parallax Counter v4 ===-->
	

<?

	$sqltitletestimonials = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'titletestimonials' " );
	$loadtitletestimonials = mysql_fetch_array($sqltitletestimonials);

	$sqlclientsay = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'clientsay' " );
	$loadclientsay = mysql_fetch_array($sqlclientsay);

	$sqlcandidatesay = mysql_query("SELECT * FROM homepage WHERE language_code =  'th' AND location = 'candidatesay' " );
	$loadcandidatesay = mysql_fetch_array($sqlcandidatesay);


?>

		<!-- Testimonials -->
				<div class="bg-color-light">
					<div class="container content-md custom">
						<div class=" wow pulse headline-center margin-bottom-60">
							<h2><? echo $loadtitletestimonials[key]; ?></h2>
							<p><? echo $loadtitletestimonials[value]; ?> </p>
							</div>

							<div class="row">
								<div class="wow pulse col-sm-6 pull-bottom">
									<div class="testimonials-v4 md-margin-bottom-50">
										<div class="testimonials-v4-in">
											<p><? echo $loadclientsay[value]; ?></p>
										</div>
										<img class="rounded-x" src="../../assets/img/icons/Clients.png" alt="thumb">
										<span class="testimonials-author">
											Client <br>
											<em><? echo $loadclientsay[key]; ?></em>
										</span>
									</div>
								</div>

								<div class="wow pulse col-sm-6">
									<div class="testimonials-v4">
										<div class="testimonials-v4-in">
											<p><? echo $loadcandidatesay[value]; ?></p>
										</div>
										<img class="rounded-x" src="../../assets/img/icons/Clients.png" alt="thumb">
										<span class="testimonials-author">
											Candidate<br>
											<em><? echo $loadcandidatesay[key]; ?></em>
										</span>
									</div>
								</div>
							</div>
						</div><!--/end container-->
					</div>
					<!-- End Testimonials -->


		<div class="parallax-counter parallaxBg hidden">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="counters">
							<span class="counter">10629</span>
							<h4>Users</h4>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="counters">
							<span class="counter">277</span>
							<h4>Projects</h4>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="counters">
							<span class="counter">78</span>
							<h4>Team Members</h4>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="counters">
							<span class="counter">109</span>
							<h4>Awards</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  About Section -->

	<!-- require footer -->
	<? require('footer-homemain.php'); ?>
	<!-- End require footer  -->
	

	

	
	
	<!-- JS Global Compulsory -->
	<script src="../../assets/hometheme/assets/plugins/jquery/jquery.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="../../assets/hometheme/assets/plugins/smoothScroll.js"></script>
	<script src="../../assets/hometheme/assets/plugins/jquery.easing.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/pace/pace.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/jquery.parallax.js"></script>
	<script src="../../assets/hometheme/assets/plugins/counter/waypoints.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/counter/jquery.counterup.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="../../assets/hometheme/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="../../assets/hometheme/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

	<!-- JS Page Level-->
	<script src="../../assets/hometheme/assets/js/one.app.js"></script>
	<script src="../../assets/hometheme/assets/js/forms/login.js"></script>
	<script src="../../assets/hometheme/assets/js/forms/contact.js"></script>
	<script src="../../assets/hometheme/assets/js/plugins/pace-loader.js"></script>
	<script src="../../assets/hometheme/assets/js/plugins/owl-carousel.js"></script>
	<script src="../../assets/hometheme/assets/js/plugins/style-switcher.js"></script>
	<script src="../../assets/hometheme/assets/js/plugins/revolution-slider.js"></script>
	<script src="../../assets/hometheme/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>

	<!-- Job sLider -->
		<script src="../../assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
		<script src="../../assets/js/plugins/owl2-carousel-v4.js"></script>



		<script type="text/javascript">
			
			function Searchjob(){

				
				category = $("#Category").val();
				industries= $("#Industries").val();
				search ="2";

				url = "job-list?search="+search+"&category="+category+"&industries="+industries;
				 window.location.assign(url);

        }

			  $(document).ready(function(){
			  $("form").submit(function(){
			        alert("Submitted");
			        Searchjob();
			    });
			});

		</script>

	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initParallaxBg();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			RevolutionSlider.initRSfullScreen();

			//slider job
				Owl2Carouselv4.initOwl2Carouselv4();
		});
	</script>

	<script type="text/javascript">

		function getRepString (rep) {
		  rep = rep+''; // coerce to string
		  if (rep < 1000) {
		    return rep; // return the same number
		  }
		  if (rep < 10000) { // place a comma between
		    return rep.charAt(0) + ',' + rep.substring(1);
		  }
		  // divide and format
		  return (rep/1000).toFixed(rep % 1000 != 0)+'k';
		}
		var lowcash ="<? echo $loadpinjob[value_custom2];  ?>";
		var highcash ="<? echo $loadpinjob[value_custom3];  ?>";

		var cash1 = getRepString(lowcash);
		var cash2 = getRepString(highcash);

		document.getElementById("low-high").innerHTML = cash1+" - "+cash2 ;
	


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
		<script src="../../assets/hometheme/assets/plugins/respond.js"></script>
		<script src="../../assets/hometheme/assets/plugins/html5shiv.js"></script>
		<script src="../../assets/hometheme/assets/js/plugins/placeholder-IE-fixes.js"></script>
		<script src="../../assets/hometheme/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
		<script src="../../assets/hometheme/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->

</body>
</html>
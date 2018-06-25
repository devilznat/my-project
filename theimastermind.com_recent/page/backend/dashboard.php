<?php
  session_start();
 
  require('../../db/connect.php');



	if(!isset($_SESSION['user_id']))
	{
		
		header("location:backend");
		exit();
	}
	
	// //*** Update Last Stay in Login System
	// $sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	// $query = mysqli_query($con,$sql);

	// //*** Get User Login
	// $strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	// $objQuery = mysqli_query($con,$strSQL);
	// $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);


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
	<meta name="EnlighterJS" content="Advanced javascript based syntax highlighting" data-indent="4" data-selector-block="pre" data-selector-inline="code" data-language="javascript" />
	
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

	<!-- Include EnlighterJS Styles -->
<link rel="stylesheet" type="text/css" href="plugins-upload/EnlighterJS/Build/EnlighterJS.min.css" />
<!-- Include MooTools Framework -->
<script type="text/javascript" src="plugins-upload/EnlighterJS/Resources/MooTools.min.js"></script>
<!-- Include EnlighterJS -->
<script type="text/javascript" src="plugins-upload/EnlighterJS/Build/EnlighterJS.min.js" ></script>


<!--		<script src="plugins-upload/ckeditor/config.js"></script>
	<script src="plugins-upload/ckeditor/styles.js"></script>
	<script src="plugins-upload/ckeditor/contents.css"></script>
  	<script src="plugins-upload/ckeditor/build-config.js"></script> -->

  	<script type="text/javascript" src="plugins-upload/ckeditor/sample.js"></script>
	<script src="plugins-upload/ckeditor/ckeditor.js"></script>
  	

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
						<a href="#" target="" >
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
				<h1 class="pull-left">My Dashboard</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->


		<div class="container content">
			<div class="row">

				<!-- Begin Sidebar Menu -->
				<? require('sidebarmenu.php'); ?>
				<!-- End Sidebar Menu -->
				
				<!-- contact -->
				<div class="col-md-9">
					<div class="tag-box tag-box-v3">
						<div class="heading heading-v4">
							<h2>Welcome to <b style="color:#446cb3;">TheiMasterMind</b> Management Site.</h2>
							<p>ยินดีต้อนรับเข้าสู่หน้าการจัดการเว็บไซต์ TheiMasterMind. You can managing all of contents , alements or updating the website in more comfortable ways. Please read the guildline below carefully & Follow the step. <br>If you <u>Have a problem.</u> <b>Please contact : nuthakulnuthep@gmail.com (NAT) | pongsatorn.swc@gmail.com (ART)</b> </p>
						</div>

						<hr class="devider devider-dotted">

						<p><span class="dropcap dropcap-bg bg-color-dark">A</span>How To <u><b>Control The LIVE CHAT (Tawk.to)</b></u> <br> 1. เข้าไปที่ <a href="https://dashboard.tawk.to/login">https://dashboard.tawk.to/login</a> <br> 2. User: manlika@theimastermind.com | PW: Manlika2015 <br> 3. เข้าสู่หน้าควบคุม LIVE CHAT </p> 

						<hr class="devider devider-dashed">

						<p><span class="dropcap dropcap-bg rounded bg-color-dark">B</span>
						<u>Example code for using</u> <br>(*Please <b>Be Careful</b> if you forgot a <b>/</b> or wrting the wrong code <b>"The whole page will be crash" </b>) <br>
						<u><font color="#446cb3">For Cuztomize Web Style.</font></u> 
						<font size="3px"> (โค้ดสำหรับปรับแต่ง Website ทีใช้บ่่อย) </font><br><br>
						<b><u><font color="#BE695C"size="3px">PS. สำหรับการทำ Animate จาก Wow.js เลือก Div Class จากลิ้งค์ด้านล่าง <br></font></u></b><a href="http://codepen.io/TimLamber/pen/dLxbF">http://codepen.io/TimLamber/pen/dLxbF</a> หรือ <a href="http://theimastermind.webstarterz.com/wow-js/index.html">http://theimastermind.webstarterz.com/wow-js/index.html</a> 
<pre data-enlighter-language="html" data-enlighter-group="group0001" data-enlighter-title="HTML">//ตัวหนา <b> FONT </b>
//ขีดเส้นใต้ <u> FONT </u>
//ตัวเอียง <i> FONT </i>
//ใส่สี <font color="#codecolor"> FONT </font>
//เพิ่มขนาดฟ้อน <font size="2px"> FONT </font> 
//เพิ่มทั้งสีและขนาด <font color="#codecolor" size="2px"> FONT </font> 
//เว้นบรรทัด <br>
</pre>
<pre data-enlighter-language="html" data-enlighter-group="group0001" data-enlighter-title="IMGGIF">
//วิธีใส่ไฟล์ Gif ให้เล่นในหน้า Articles Add (พิมพ์หน้า code)
<img src="ไฟล์gif.gif">
//END

//Example : <img src="http://i.giphy.com/n3xGSMpOVawhy.gif">

</pre>
<pre data-enlighter-language="html" data-enlighter-group="group0001" data-enlighter-title="WOW.JS">

//ถ้าต้องการหน่วงเวลา ให้ใส่ data-wow-delay=".25s" (กำหนดเลขวิเองได้) ลงไปใน div 
//Example : <div data-wow-delay=".50s" class="wow bounce"></div>

//ถ้าต้องการให้เล่นแบบวนซ้ำไปเรื่อยๆ ให้ใส่ data-wow-duration="2s" และ data-wow-iteration="100" ลงไปใน div
//Example : <div data-wow-duration="2s" data-wow-iteration="100" class="wow pulse"></div>

//Start วิธีใส่ Animate Scrolling ใน Object ด้วย Div ของ Wow.js 
<div data-wow-delay=".75s" class="wow bounce">  
Div หลักของ Object ที่อยากจะให้มีการ Animate 
</div>
//END

//Start Example จากหน้า Our services
<div data-wow-delay=".75s" class="wow bounce">
	<div class="col-md-4 col-sm-12"> //div หลักของ icon Testimonials
		<div class="service-block service-block-default no-margin-bottom">
			<i class="icon-lg rounded-x icon-line <? echo $loadservicedetail3[value]; ?>"></i>
			<h2 class="heading-sm"><font color="#446DB1"><? echo $loadservicedetail3[key]; ?></font></h2>
			<p><? echo $loadservicedetail3[value_custom]; ?></p>
		</div> //ปิด div หลัก
	</div>
</div>
//End
</pre>
<pre data-enlighter-language="html" data-enlighter-group="group0001" data-enlighter-title="EmbedLink">
//วิธีใส่ Link video ในหน้า Corporate Overview (Contact Us)(ทำใน Backend)
// 1. เลือก Link Youtube ที่ต้องการ 
// 2. กดแชร์ แล้วเลือกเป็นแบบฝัง (Embed)
// 3. Copy Link เฉพาะส่วนที่เป็น Link https://www.youtube.com/embed/xxxxxx เท่านั้น


Example : https://www.youtube.com/embed/uiAZel_iKiM

</pre>

						
						

						</p>

						<hr>

						<p><span class="dropcap dropcap-bg rounded-2x bg-color-dark">C</span><u><b>How to Debug Link newsletter Facebook Sharing.</b></u><br/>
						1. เข้าไปที่ <a href="https://developers.facebook.com/tools/debug/og/object/">https://developers.facebook.com/tools/debug/og/object/</a><br/>
						2. ใส่ลิ้งหน้า newsletter_page ที่รูปไม่ขึ้นขณะแชร์ เช่น <br/>
						http://theimastermind.netdesignhost.com/page/en/newsletters_page?id=221 <br/>
						3. กดปุ่ม "ดึงข้อมูลสเครปใหม่" ถ้ายังไม่โชว์รูปให้กดซ้ำจนกว่าจะขึ้น<br/>
						4. กดปุ่ม "แสดงข้อมูลสเครปที่มีอยู่" </p>
					</div>


		<!-- <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form> -->

							<div class="tab-v1 hidden">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#eng-contactsinfo" data-toggle="tab">Engish</a></li>
									<li><a href="#th-contactsinfo" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-contactsinfo">
										
									</div>
									<div class="tab-pane fade in" id="th-contactsinfo">
										
									</div>
									
								</div>
							</div>

				</div>
				<!-- end contact -->


							

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

	
 		
		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>

		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
	


		
		
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

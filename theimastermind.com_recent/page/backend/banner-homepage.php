<?php
  session_start();
 
  require('../../db/connect.php');

header('Cache-Control: no-cache');
header('Pragma: no-cache');

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
						<a href="logout.php" target="" >
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
				<h1 class="pull-left">Banner Home Page</h1>

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

	<?

	$sqlbannerhomepage1 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-homepage1' " );
	$loadbannerhomepage1 = mysql_fetch_array($sqlbannerhomepage1 );

	$sqlbannerhomepage2 = mysql_query("SELECT * FROM banner WHERE language_code =  'en' AND location = 'banner-homepage2' " );
	$loadbannerhomepage2 = mysql_fetch_array($sqlbannerhomepage2);

	$sqlbannerhomepage3 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-homepage1' " );
	$loadbannerhomepage3 = mysql_fetch_array($sqlbannerhomepage3);

	$sqlbannerhomepage4 = mysql_query("SELECT * FROM banner WHERE language_code =  'th' AND location = 'banner-homepage2' " );
	$loadbannerhomepage4 = mysql_fetch_array($sqlbannerhomepage4);

?>

						<!-- Bannner -->	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Banner HomePage</h3>
						</div>
						<div class="panel-body">
							<div class="tab-v1 ">
								<ul class="nav nav-tabs pull-right">
									<li class="active"><a href="#eng-banner" data-toggle="tab">Engish</a></li>
									<li><a href="#th-banner" data-toggle="tab">Thai</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="eng-banner">
									<form class="sky-form" name="formeng" id="formeng">
									<input type="text" name="type" id="type" value="banner-homepage-link1" hidden>

									<!-- banner Eng -->
									<div class="col-md-12">
										<h4><label>Banner Homepage 1 English</label></h4>
										<img src="../../uploadfile/banner/<? echo $loadbannerhomepage1[imagename]; ?>" width="100%" height="auto">
										<br> <h4>*Image Examples Size 1500x190px </h4>
									</div>
									<div class="col-md-12">
										<div class="row" style="padding-top:10px;">
								            <div class="col-xs-2">
								              <button id="uploadBtn" class="btn btn-large btn-primary">Choose File</button>
								            </div>
								            <div class="col-xs-10">
								          <div id="progressOuter" class="progress progress-striped active" style="display:none;">
								            <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								            </div>
								          </div>
								            </div>
								          </div>
								          <div class="row" style="padding-top:10px;">
								            <div class="col-xs-10">
								              <div id="msgBox">
								              </div>
								            </div>
								          </div>
									</div>
									<br>
									<div class="col-md-12">
									
										
										<section>
											<label class="label"><h4>Url Link Banner </label>
											<label class="input">
												<i class="icon-prepend fa fa-link"></i>
												<input name="textlink1" id="textlink1" type="text" value="<? echo $loadbannerhomepage1[linkbanner]; ?>">
											</label>
										</section>
									
									</div>


									<div class="col-md-12">
										<hr>
										<h4><label>Banner Homepage 2 English</label></h4>
										<img src="../../uploadfile/banner/<? echo $loadbannerhomepage2[imagename]; ?>" width="100%" height="auto">
										<br> <h4>*Image Examples Size 1500x190px </h4>
									</div>
									<div class="col-md-12">
										<div class="row" style="padding-top:10px;">
								            <div class="col-xs-2">
								              <button id="uploadBtn2" class="btn btn-large btn-primary">Choose File</button>
								            </div>
								            <div class="col-xs-10">
								          <div id="progressOuter2" class="progress progress-striped active" style="display:none;">
								            <div id="progressBar2" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								            </div>
								          </div>
								            </div>
								          </div>
								          <div class="row" style="padding-top:10px;">
								            <div class="col-xs-10">
								              <div id="msgBox2">
								              </div>
								            </div>
								          </div>
									</div>
									<br>
									<div class="col-md-12">
									
										<section>
											<label class="label"><h4>Url Link Banner </label>
											<label class="input">
												<i class="icon-prepend fa fa-link"></i>
												<input name="textlink2" id="textlink2" type="text" value="<? echo $loadbannerhomepage2[linkbanner]; ?>">
											</label>
										</section>
										<!-- <button type="submit" id="savelink1" class="btn-u ">Save</button> -->
										<a class="btn-u " onclick="saveeng();" >save</a>
									</form>
									</div>


									<!-- Banner Eng -->
										
									</div>
									<div class="tab-pane fade in" id="th-banner">
									<form class="sky-form" name="formthai" id="formthai">
									<input type="text" name="type" id="type" value="banner-homepage-link2" hidden>
									<!-- Banner thai -->
									<div class="col-md-12">
										<h4><label>Banner Homepage 1 Thai</label></h4>
										<img src="../../uploadfile/banner/<? echo $loadbannerhomepage3[imagename]; ?>" width="100%" height="auto">
										<br> <h4>*Image Examples Size 1500x190px </h4>
									</div>
									<div class="col-md-12">
										<div class="row" style="padding-top:10px;">
								            <div class="col-xs-2">
								              <button id="uploadBtn3" class="btn btn-large btn-primary">Choose File</button>
								            </div>
								            <div class="col-xs-10">
								          <div id="progressOuter3" class="progress progress-striped active" style="display:none;">
								            <div id="progressBar3" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								            </div>
								          </div>
								            </div>
								          </div>
								          <div class="row" style="padding-top:10px;">
								            <div class="col-xs-10">
								              <div id="msgBox3">
								              </div>
								            </div>
								          </div>
									</div>
									<br>
									<div class="col-md-12">
									
									
										<section>
											<label class="label"><h4>Url Link Banner </label>
											<label class="input">
												<i class="icon-prepend fa fa-link"></i>
												<input name="textlink3" id="textlink3" type="text" value="<? echo $loadbannerhomepage3[linkbanner]; ?>">
											</label>
										</section>
									
									</div>


									<div class="col-md-12">
										<hr>
										<h4><label>Banner Homepage 2 Thai</label></h4>
										<img src="../../uploadfile/banner/<? echo $loadbannerhomepage4[imagename]; ?>" width="100%" height="auto">
										<br> <h4>*Image Examples Size 1500x190px </h4>
									</div>
									<div class="col-md-12">
										<div class="row" style="padding-top:10px;">
								            <div class="col-xs-2">
								              <button id="uploadBtn4" class="btn btn-large btn-primary">Choose File</button>
								            </div>
								            <div class="col-xs-10">
								          <div id="progressOuter4" class="progress progress-striped active" style="display:none;">
								            <div id="progressBar4" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								            </div>
								          </div>
								            </div>
								          </div>
								          <div class="row" style="padding-top:10px;">
								            <div class="col-xs-10">
								              <div id="msgBox4">
								              </div>
								            </div>
								          </div>
									</div>
									<br>
									<div class="col-md-12">
									
										<section>
											<label class="label"><h4>Url Link Banner </label>
											<label class="input">
												<i class="icon-prepend fa fa-link"></i>
												<input name="textlink4" id="textlink4" type="text" value="<? echo $loadbannerhomepage4[linkbanner]; ?>">						
											</label>
										</section>
										<!-- <button type="submit" id="savelink2" class="btn-u ">Save</button> -->
										<a class="btn-u " onclick="savethai();" >save</a>
									</form>
									</div>

									<!-- Banner Thai -->

										
									</div>
									
								</div>
							</div>

							
						</div>
					</div>
					<!-- End Banner -->



					
					

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

<script src="../../assets/plugins/Uploader-master/SimpleAjaxUploader.js"></script>
<script>
		function escapeTags( str ) {
		  return String( str )
		           .replace( /&/g, '&amp;' )
		           .replace( /"/g, '&quot;' )
		           .replace( /'/g, '&#39;' )
		           .replace( /</g, '&lt;' )
		           .replace( />/g, '&gt;' );
		}

		window.onload = function() {

		// upload file banner newsletters1 eng
		  var btn = document.getElementById('uploadBtn'),
		      progressBar = document.getElementById('progressBar'),
		      progressOuter = document.getElementById('progressOuter'),
		      msgBox = document.getElementById('msgBox');

		  var uploader = new ss.SimpleUpload({
		        button: btn,
		        url: 'fileupload-banner-homepage.php',
		        name: 'banner-homepage1-en',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar );
		        },
		        onSubmit: function() {
		            msgBox.innerHTML = ''; // empty the message box
		            btn.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn.innerHTML = 'Choose Another File';
		            progressOuter.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter.style.display = 'none';
		            msgBox.innerHTML = 'Unable to upload file';
		          }
			});

		  // upload file banner newsletters2 eng 

		  var btn2 = document.getElementById('uploadBtn2'),
		      progressBar2 = document.getElementById('progressBar2'),
		      progressOuter2 = document.getElementById('progressOuter2'),
		      msgBox2 = document.getElementById('msgBox2');

		  var uploader2 = new ss.SimpleUpload({
		        button: btn2,
		        url: 'fileupload-banner-homepage2.php',
		        name: 'banner-homepage2-en',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter2.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar2 );
		        },
		        onSubmit: function() {
		            msgBox2.innerHTML = ''; // empty the message box
		            btn2.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn2.innerHTML = 'Choose Another File';
		            progressOuter2.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox2.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox2.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox2.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox2.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter2.style.display = 'none';
		            msgBox2.innerHTML = 'Unable to upload file';
		          }
			});

		    // upload file banner newsletters3 th

		  var btn3 = document.getElementById('uploadBtn3'),
		      progressBar3 = document.getElementById('progressBar3'),
		      progressOuter3 = document.getElementById('progressOuter3'),
		      msgBox3 = document.getElementById('msgBox3');

		  var uploader3 = new ss.SimpleUpload({
		        button: btn3,
		        url: 'fileupload-banner-homepage3.php',
		        name: 'banner-homepage3-th',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter3.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar3 );
		        },
		        onSubmit: function() {
		            msgBox3.innerHTML = ''; // empty the message box
		            btn3.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn3.innerHTML = 'Choose Another File';
		            progressOuter3.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox3.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox3.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox3.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox3.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter3.style.display = 'none';
		            msgBox3.innerHTML = 'Unable to upload file';
		          }
			});

		  	   // upload file banner newsletters4 th

		  var btn4 = document.getElementById('uploadBtn4'),
		      progressBar4 = document.getElementById('progressBar4'),
		      progressOuter4 = document.getElementById('progressOuter4'),
		      msgBox4 = document.getElementById('msgBox4');

		  var uploader4 = new ss.SimpleUpload({
		        button: btn4,
		        url: 'fileupload-banner-homepage4.php',
		        name: 'banner-homepage4-th',
		        multipart: true,
		        hoverClass: 'hover',
		        focusClass: 'focus',
		        responseType: 'json',
		        startXHR: function() {
		            progressOuter4.style.display = 'block'; // make progress bar visible
		            this.setProgressBar( progressBar4 );
		        },
		        onSubmit: function() {
		            msgBox4.innerHTML = ''; // empty the message box
		            btn4.innerHTML = 'Uploading...'; // change button text to "Uploading..."
		          },
		        onComplete: function( filename, response ) {
		            btn4.innerHTML = 'Choose Another File';
		            progressOuter4.style.display = 'none'; // hide progress bar when upload is completed

		            if ( !response ) {
		                msgBox4.innerHTML = 'Unable to upload file';
		                return;
		            }

		            if ( response.success === true ) {
		                msgBox4.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ' successfully uploaded.';

		            } else {
		                if ( response.msg )  {
		                    msgBox4.innerHTML = escapeTags( response.msg );

		                } else {
		                    msgBox4.innerHTML = 'An error occurred and the upload failed.';
		                }
		            }
		          },
		        onError: function() {
		            progressOuter4.style.display = 'none';
		            msgBox4.innerHTML = 'Unable to upload file';
		          }
			});





		};
		</script>

		<script type="text/javascript">
		
		// $("button#savelink1").click(function(){  

  //       type="banner-homepage-link1"
  //       var urlsend="senddata.php"; 
  //       var dataSet={ 	type: type , 
  //       				linkeng1: $("#textlink1").val() , 
  //       				linkeng2: $("#textlink2").val() 
  //       				};   
  //       $.post(urlsend,dataSet,function(data){  
  //           	alert( "completed" );  
  //            location.reload(true);
  //        });  
  //       }); 

  //       $("button#savelink2").click(function(){  

  //       type="banner-homepage-link2"
  //       var urlsend="senddata.php"; 
  //       var dataSet={ 	type: type , 
  //       				linkth1: $("#textlink3").val() , 
  //       				linkth2: $("#textlink4").val() 
  //       				};   
  //       $.post(urlsend,dataSet,function(data){  
  //           alert( "completed" );  
  //            location.reload(true);
  //        });  
  //       }); 


        function saveeng(){

		

		var form = new FormData($('#formeng')[0]);
		form.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success:  function(data){
		        //alert("---"+data);
		        alert("Data Engish has been updated successfully.");
		        location.reload(true);
		    }
		});

        }

         function savethai(){
        

		var form = new FormData($('#formthai')[0]);
		form.append('view_type','addtemplate');
		$.ajax({
		    type: "POST",
		    url: "senddata.php",
		    data: form,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success:  function(data){
		        //alert("---"+data);
		        alert("Data Thai has been updated successfully.");
		        location.reload(true);
		    }
		});

        }


		</script>
		

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

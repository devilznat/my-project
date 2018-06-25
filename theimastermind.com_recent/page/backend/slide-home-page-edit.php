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


$idslide = $_GET["silde"];

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
				<h1 class="pull-left">Slide Home Page</h1>

			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

<?
	$idslideth=0;

	switch ($idslide) {

		case '1':
			$idslideth=2;
			break;

		case '3':
			$idslideth=4;
			break;

		case '5':
			$idslideth=6;
			break;

		case '7':
			$idslideth=8;
			break;

		case '9':
			$idslideth=10;
			break;
		
		default:
			# code...
			break;
	}

	$sqlsliderhomepage = mysql_query("SELECT * FROM slide_homepage WHERE shid =  '$idslide'   " );
	$loadsliderhomepage = mysql_fetch_array($sqlsliderhomepage);

	$sqlsliderhomepageth = mysql_query("SELECT * FROM slide_homepage WHERE shid =  '$idslideth'   " );
	$loadsliderhomepageth = mysql_fetch_array($sqlsliderhomepageth);

?>

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
							<h3 class="panel-title"><i class="fa fa-tasks"></i> Slide Home Page <? echo $idslide; ?> </h3>
						</div>
						<div class="panel-body">
							
							<form class="sky-form" id="formsend" id="formsend">

							<div class="col-md-6">
								<h4><label>Picture Slide English</label></h4>
								<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepage[value_custom4];?>" width="100%" height="auto">
								<br> <h4>*Image Examples Size 1920x1080px </h4>
								<div class="">
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
							</div>

							<div class="col-md-6">
								<h4><label>Picture Slide Thai</label></h4>
								<img src="../../uploadfile/slide/homepage/<? echo $loadsliderhomepageth[value_custom4];?>" width="100%" height="auto">
								<br> <h4>*Image Examples Size 1920x1080px </h4>
								<div class="">
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
							</div>

							<div class="col-md-12"><HR></div>
							<input type="text" name="ids" id="ids" value="<? echo $idslide;?>" hidden>
							<input type="text" name="idsth" id="idsth" value="<? echo $idslideth;?>" hidden>
							<input type="text" name="type" id="type" value="slideall" hidden>
							<section class="col-md-12">
								<label class="label">Title Slide - English </label>
								<label class="textarea ">
								<textarea rows="1" name="text1" id="text1" ><? echo $loadsliderhomepage[value];?></textarea>
								</label>
							</section>

							<section class="col-md-12">
								<label class="label">Title Slide - Thai</label>
								<label class="textarea ">
								<textarea rows="1" name="text2" id="text2" ><? echo $loadsliderhomepageth[value];?></textarea>
								</label>
							</section>

							<div class="col-md-12"><HR></div>

							<section class="col-md-12">
								<label class="label">Detail Slide - English</label>
								<label class="textarea ">
								<textarea rows="3" name="text3" id="text3" ><? echo $loadsliderhomepage[value_custom];?></textarea>
								</label>
							</section>

							<section class="col-md-12">
								<label class="label">Detail Slide - Thai</label>
								<label class="textarea ">
								<textarea rows="3" name="text4" id="text4" ><? echo $loadsliderhomepageth[value_custom];?></textarea>
								</label>
							</section>

							<div class="col-md-12"><HR></div>

							<section class="col-md-12">
								<label class="label">Title Button - English </label>
								<label class="textarea">
								<textarea rows="1" name="text5" id="text5" ><? echo $loadsliderhomepage[value_custom2];?></textarea>
								</label>
							</section>

							<section class="col-md-12">
								<label class="label">Title Button - Thai </label>
								<label class="textarea ">
								<textarea rows="1" name="text6" id="text6" ><? echo $loadsliderhomepageth[value_custom2];?></textarea>
								</label>
							</section>

							<section class="col-md-12">
								<label class="label">Link Button</label>
								<label class="textarea ">
								<textarea rows="1" name="text7" id="text7" ><? echo $loadsliderhomepage[value_custom3];?></textarea>
								</label>
							</section>

							<div class="col-md-12"><HR></div>
							<div class="col-md-3 pull-left">
								
								<a href="slide-home-page" class="btn-u btn-block"  >Back</a>
							</div>
							<div class="col-md-3 pull-right">
								
								<a class="btn-u btn-block" onclick="openlink();" >save</a>
							</div>	
							
							</form>



							
						</div>
					</div>
					<!-- End Logo -->

				

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
		        url: 'fileupload-image-slide<?echo $idslide;?>.php',
		        name: 'slidehomepage',
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
		        url: 'fileupload-image-slide<?echo $idslideth;?>.php',
		        name: 'slidehomepage',
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

		    

		  	
		};
		</script>

		<script type="text/javascript"> 

		function openlink(){


		var form = new FormData($('#formsend')[0]);
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
		        alert("Settings has been updated successfully.");
		        window.location.assign("slide-home-page-edit?silde=<? echo $idslide; ?>");
		    }
		});


			// type="slideall"
	  //       var urlsend="senddata.php"; 
	  //       var dataSet={ 	type: type , 
	  //       				ids: $("#ids").val(),
	  //       				idsth: $("#idsth").val(),
	  //       				text1: $("#text1").val() , 
	  //       				text2: $("#text2").val(),
	  //       				text3: $("#text3").val(), 
	  //       				text4: $("#text4").val(), 
	  //       				text5: $("#text5").val(), 
	  //       				text6: $("#text6").val(), 
	  //       				text7: $("#text7").val()
	  //       				}; 
	  //   $.post(urlsend,dataSet,function(data){  
   //          alert( "completed" ); 
   //       });  
        	// window.location.assign("slide-home-page-edit?silde=<? echo $idslide; ?>");
        }


		</script>

	


		
		
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

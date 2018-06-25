<?php
  session_start();
  require('../../db/connect.php');

  $jid=$_GET["jobid"];

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Upload Resume| The i Mastermind </title>

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
	<link rel="stylesheet" href="../../assets/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel='stylesheet' href="../../assets/plugins/master-slider/masterslider/skins/black-2/style.css">
	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">

	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../../assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	


	<!-- CSS Pages Style -->
	<!-- <link rel="stylesheet" href="../../assets/css/pages/page_one.css"> -->
	
	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<link rel="stylesheet" href="../../assets/css/pages/profile.css">


	<style type="text/css">

	.btn-u {

    border: 0;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    font-weight: 400;
    padding: 6px 13px;
    position: relative;
    background: #446cb3;
    white-space: nowrap;
    display: inline-block;
    text-decoration: none;
	}

	.title-v1 p {
    font-size: 20px;
    font-weight: 200;
	}

	.bg-color-grey {
    background-color: #f7f7f7 !important;
	}



	/*////*/
	.bg-color-white{
		box-shadow: 0 2px 2px rgba(0,0,0,.175);
	}
	.boxstylejobview{
		border: 1px;
	    border-color: #ccc;
	    border-style: double;
	    border-radius: 7px;
	    padding-top: 8px;
	    /*margin: 10px;*/
	    margin-top: 25px;
	    background-color: #f7f7f7
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

	.hr-title{
		margin: 12px 0px;
    	margin-bottom: 20px;
	}


	.news-v3 h2 {
    font-size: 28px;
    font-weight: 200;
    margin: 6px 0 10px;
    line-height: 45px;
    text-transform: none;
	}
	.jobstyple{
		border: 1px;
    	border-style: double;
    	border-color: #777;

	}

	.enlarge:hover {
	transform:scale(1.2,1.2);
	transform-origin:0 0;
	position: relative;
    right: 5%;
    
}

	

	</style>

	


<body class="header-fixed header-fixed-space">

<?



$strSQL = "SELECT * FROM jobs_value WHERE language_code = 'th' AND id = '$jid' ORDER BY id DESC ";
$result = mysql_query($strSQL);

?>

	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->

		

		<!--=== Content Part ===-->
		
		<div class="bg-color-light">
		<div class="container content ">


		
			<div class="col-md-12 col-xs-12">
			<div class="alert alert-success fade in hidden" name="showalert" id="showalert">
									<strong>Upload Resume Success!</strong> Your resume sending to us already and we'll contact you as soon as possible.
			</div>
			<div class="news-v3 bg-color-white margin-bottom-30">
			<div class="row job-viewbox">

				<!-- Head title View -->
				<div class="row">

					<div class="col-md-12">
						<h3><strong>Apply Now</strong> </h3>
						<HR class="hr-title">
						
					</div>
				</div>
				<!-- End Head title View -->
				<!-- Job View -->
				<div class="row">
				 <?php
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
{
                ?>
					<div class="col-md-6 boxstylejobview">
					

						<div class="heading heading-v5 margin-bottom-30">
						
							<h2>Job Detail</h2>
							
							<div class="margin-bottom-10">
							   <table align="center" valign="center">
							   <tr align="center">
							   <td align="center">
							   
							      <img class="enlarge" src="../../assets/img/job/<? echo $rs["value_custom"]; ?>" class="jobstyple" width="50%" height="auto"/>
							 	
							   </td></tr>
							   </table>
							</div>
							<br><br>
							<h3><strong><?echo $rs["title"];?></strong></h3>
							<p><i class="fa fa-map-marker"></i> Bangkok &nbsp; 
							<i class="fa fa-clock-o"></i> <?echo $rs["created_date"];?></p>
							
						</div>
						
					</div>

					<div class="col-md-6">
<?

$sql = mysql_query("SELECT * FROM  `resumes` ORDER BY  `resumes`.`resume_id` DESC LIMIT 1" );
$loadidresume = mysql_fetch_array($sql);
 
 $idresume = $loadidresume[resume_id]+1;

 ?>
					<form name="form" id="form" class="sky-form" novalidate="novalidate">

					<input type="text" name="type" id="type" value="uploadresume" hidden>
					<input type="text" name="resumeid" id="resumeid" value="<? echo $idresume; ?>" hidden>
								

								<fieldset>
									<H3>Information Contact</H3>
									<div class="row">
										<section class="col col-6">
											<label class="input">
												<input type="text" name="firstname" placeholder="First name">
												
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<input type="text" name="lastname" placeholder="Last name">
												
											</label>
										</section>
									</div>
									
									<section>
										<label class="input">
											<i class="icon-append fa fa-envelope"></i>
											<input type="email" name="email" placeholder="Email address">
											
										</label>
									</section>

									<section>
										<label class="input">
											<i class="icon-append fa  fa-phone"></i>
											<input type="phone" name="phone" placeholder="Mobile Phone">
											
										</label>
									</section>
									<H3>Upload Your Resume</H3>

									<section>
									
									<label for="file" class="input input-file">
												<div class="row" style="padding-top:10px;">
									            <div class="col-xs-2">
									              <button id="uploadBtn" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20">Choose File</button>
									            </div>
									            <div class="col-xs-10">
									          <div id="progressOuter" class="progress progress-striped active" style="display:none;">
									            <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
									            </div>
									          </div>
									            </div>
									          </div>
									          <div class="row" style="padding-top:5px;">
									            <div class="col-xs-10">
									              <div id="msgBox">
									              </div>
									            </div>
									          </div>
										<h6>*File size limit 10MB and allow (pdf,zip,rar,png,jpg,doc,docx,xls,xlsx,ppt,pps)</h6>
									</label>
									</section>

								</fieldset>

								<!-- <fieldset>
									<section>
										<label class="checkbox"><input type="checkbox" name="subscription" id="subscription"><i></i>I want to receive news and  special offers</label>
										<label class="checkbox"><input type="checkbox" name="terms" id="terms"><i></i>I agree with the Terms and Conditions</label>
									</section>
								</fieldset> -->
								<footer>
									<div class="heading heading-v5">
										<h3><font color="#777">----- OR -----</font></h3>

										<a href="create-resume?jobid=<? echo $rs["id"]; ?>" class="btn btn-u  btn-lg rounded-2x  margin-bottom-20"> Create Your Profile </a>
									</div>

								</footer>
							</form>
						
					</div>
				<?

			}

			?>
				</div>
				<!-- End Job View -->
			<HR class="hr-title">
			<div class="heading heading-v5">
				<a onclick="uploadresume()"  class="btn btn-success btn-lg rounded-2x  margin-bottom-20"><i class="fa fa-paper-plane"></i> Sent Your Resume </a>
			</div>

		
				
			</div>
			</div>
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
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/master-slider-showcase4.js"></script>

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
		        url: 'fileupload-uploadresume?idresume=<? echo $idresume;?>',
		        name: 'uploadresume',
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



		    

		  	
		};
		</script>

		<script type="text/javascript">

			 function uploadresume(){


			 	var jobid = "<? echo $jid;?>";
			 	var form = new FormData($('#form')[0]);
				form.append('jobid',jobid);
				// form5.append('itemid',itemid);
				// form5.append('idresume',resumesid1);
				$.ajax({
				    type: "POST",
				    url: "senddata.php",
				    data: form,
				    cache: false,
				    contentType: false,
				    processData: false,
				    success:  function(data){
				       	document.getElementById("showalert").setAttribute("class", "alert alert-success fade in"); 
				        alert("Sent request successfully");
				    }
				});
				

			 }

		</script>
		
		<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

		<SCRIPT language=JavaScript>
		<!--

		//Accept terms & conditions script (by InsightEye www.insighteye.com)
		//Visit JavaScript Kit (http://javascriptkit.com) for this script & more.

function checkCheckBox(f){
if (f.agree.checked == false )
{
alert('Please check the box to continue.');
return false;
}else
return true;
}
//-->
</SCRIPT>
		
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

<?php
  session_start();
  require('../../db/connect.php');

  $jid=$_GET["jobid"];
  $headlink = "referral-friend";
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Referral Friend | The i Mastermind </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url" content="http://theimastermind.com/page/en/referral-friend"/>
<meta property="og:title" content="Referral Friends Program (เพื่อนได้งาน..คุณได้ทอง)"/>
<meta property="og:image" content="http://theimastermind.com/uploadfile/banner/bannerhomepageCmZ2cpCJSxL66UgLfeNDx0R4.png"/>
<meta property="og:description" content="" />
<meta property="og:type" content="website"/>
		

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

	
	

	</style>


<body class="header-fixed header-fixed-space">

<?



$strSQL = "SELECT * FROM jobs_value WHERE language_code = 'en' AND id = '$jid' ORDER BY id DESC ";
$result = mysql_query($strSQL);

?>

	<div class="wrapper">
		
		<!-- require head  -->
		<? require ('head-page.php');?>
		<!-- End require head  -->
<?
		$sqlbgreferral = mysql_query("SELECT * FROM referral_friend WHERE language_code =  'en' AND location = 'bg-head' " );
		$loadbgreferral = mysql_fetch_array($sqlbgreferral);
?>
		<img src="../../uploadfile/banner/<? echo $loadbgreferral[key]; ?>" width="100%" height="auto">


<div class="col-md-12 mb-margin-bottom-30">
<!-- Sharingbutton Facebook -->


</div>

<div class="container content" style="padding-bottom: 0px;">
			<div class="row margin-bottom-30">
				<div class="col-md-12 mb-margin-bottom-30">

				
<!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Freferral-friend" target="_blank" aria-label="">
  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
        </g>
    </svg>
    </div>
  </div>
</a>

<!-- Sharingbutton Twitter -->
<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%87%E0%B8%B2%E0%B8%99%20...%20%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%97%E0%B8%AD%E0%B8%87&amp;url=http%3A%2F%2Ftheimastermind.com%2Fpage%2Fen%2Freferral-friend" target="_blank" aria-label="">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
        </g>
    </svg>
    </div>
  </div>
</a>


		<div class="heading heading-v4 margin-bottom-40">
							<? echo $loadbgreferral[value]; ?>
						</div>
						</div>
						</div>
						</div>

		<!--=== Content Part ===-->
		<div class="container content" style="padding-top: 0px;" >
			<div class="row margin-bottom-30">
				<div class="col-md-12 mb-margin-bottom-30">
					<div class="headline"><h2>Referral Friend</h2></div>
					 
					<form id="form" name="form" class="sky-form">
					<input type="text" name="type" value="referral-friend" hidden="">
					<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text1" id="text1" placeholder="First name">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" name="text2" id="text2" placeholder="Last name">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-envelope"></i>
										<input type="email" name="text3" id="text3" placeholder="E-mail">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-phone"></i>
										<input type="tel" name="text4" id="text4" placeholder="Phone">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-building"></i>
										<input type="Company name" name="text5" id="text5" placeholder="Company Name">
									</label>
								</section>
								<section class="col col-6">
									<label class="select">
										<select name="text6" id="text6">
											<option value="0" selected disabled>Subject</option>
											
											<option value="4" selected="selected" >Referral Program</option>
											
											
										</select>
										<i></i>
									</label>
								</section>

							</div>

							<div class="row">
							 <?php
               while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
				{

					if ($jid != "") {
						
                ?>
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-building"></i>
										<input type="Jobrefer" name="Jobrefer" id="Jobrefer" placeholder="Job Refer" value="<?echo $rs["title"];?> (JobID :<?echo $rs["job_id"]; ?>) ">
										
									
									<input type="Jobrefer" name="text7" id="text7" placeholder="Job Refer" value="<?echo $rs["job_id"]; ?> " class="hidden">
									
									</label>
								</section>

								<? }  ?>

							

			<? }?>

							</div>

							<div class="row">
							
							<section class="col-md-12">
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>		
									<textarea rows="5" name="text8" id="text8" placeholder="Tell us about your Description."></textarea>
								</label>
								</section>
								
							</div>
						</fieldset>
						<footer>
							<a class="btn-u" onclick="save();">Send request</a>
							<div class="progress"></div>
						</footer>
				</form>

				</div><!--/col-md-9-->

				<?
				$sqlcontactDetail1 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'en' AND location = 'contact-detail1' " );
				$loadcontactDetail1 = mysql_fetch_array($sqlcontactDetail1);

				$sqlcontactDetail2 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'en' AND location = 'contact-detail2' " );
				$loadcontactDetail2 = mysql_fetch_array($sqlcontactDetail2);
				?>


				
			</div><!--/row-->

			
		</div><!--/container-->
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
		

		<script type="text/javascript">
		
		function save(){
        	
		var form = new FormData($('#form')[0]);
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
		        alert("Data has been SEND successfully.");
		       			var sendfirstname = $('#text1').val();
				        var sendlastname = $('#text2').val();
				        var sendemail = $('#text3').val();
				        var sendphone = $('#text4').val();
				        var sendcomname = $('#text5').val();
				        var sendsubject = $('#text6').val();

				        var sendjobtitle = $('#Jobrefer').val();
				        var sendjobid = $('#text7').val();
				        var sendmessage = $('#text8').val();

				        var data = "?firstname="+sendfirstname+"&lastname="+sendlastname+"&email="+sendemail+"&phone="+sendphone+"&comname="+sendcomname+"&subject="+sendsubject+"&jobtitle="+sendjobtitle+"&jobid="+sendjobid+"&message="+sendmessage;


		        window.location.assign("http://theimastermind.com/page/email-templates/sendmail-referralfriend.php"+data);
		    }
		});

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

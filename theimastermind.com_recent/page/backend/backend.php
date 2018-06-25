<?php
  session_start();
 
  require('../../db/connect.php');
  require('../../db/loaddata.php');



?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Admin Page | Theimastermind</title>

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
	<link rel="stylesheet" href="../../assets/css/headers/header-default.css">
	<link rel="stylesheet" href="../../assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../assets/plugins/animate.css">
	<link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_error4_404.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<style type="text/css">
		.reg-page {
    color: #555;
    padding: 30px;
    background: #fefefe;
    border: solid 1px #eee;
    box-shadow: 0 0 3px #eee;
}
	</style>
</head>

<body>

	<!--=== Error V4 ===-->
	<div class="container content valign__middle">
		<!--Error Block-->
	

		
		<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<form class="reg-page" action="check_login.php" method="post">
						<a href="#"><img class=""   width="auto" height="50" src="http://theimastermind.com/assets/img/logo/logo1.png" alt=""></a>
						<hr>
						<div class="reg-header">
							<h2>Login to your account</h2>
						</div>
						
						
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="username" id="username" placeholder="Username" class="form-control">
						</div>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" name="password" id="password" placeholder="Password" class="form-control">
						</div>

						<div class="row">
							<div class="col-md-6 checkbox">
								<label><input type="checkbox"> Stay signed in</label>
							</div>
							<div class="col-md-6">
								<button class="btn-u pull-right" id="login_btn" name="login_btn" type="submit">Login</button>
							</div>
						</div>
						
					</form>
				</div>
			</div>
	</div><!--/container-->
	<!--End Error Block-->

	<!--=== Sticky Footer ===-->
	<div class="container sticky-footer">
		<p class="copyright-space">
			2016 &copy; Theimastermind. All Rights Reserved.
		</p>
	</div>
	<!--=== End Sticky Footer ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../../assets/plugins/backstretch/jquery.backstretch.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../../assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../../assets/js/app.js"></script>
	<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<script type="text/javascript">
		$.backstretch([
			"http://htmlstream.com/preview/unify-v1.9.5/assets/img/blur/img2.jpg"
			])
	</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>

<?php
  session_start();
  require('../../db/connect.php');
?>


	<?
	$sqlfooter = mysql_query("SELECT * FROM footer WHERE language_code =  'en' AND location = 'footer-title' " );
	$loadfooter = mysql_fetch_array($sqlfooter);

	$sqlfootersocial = mysql_query("SELECT * FROM footer WHERE language_code =  'en' AND location = 'footer-social' " );
	$loadfootersocial = mysql_fetch_array($sqlfootersocial);
	?>
<!-- Contact Section -->
	<section id="contact" class="custom-contacts-section">
		<div class="container content-lg  ">
			<div class="title-v1" >
				<h2><? echo $loadfooter[key]; ?></h2>
				<p>						<i class="<? echo $loadfooter[value]; ?>"></i>
										 <? echo $loadfooter[value_custom]; ?>
										 <br/>
										 <i class="<? echo $loadfooter[value_custom2]; ?>"></i>
										&nbsp;<? echo $loadfooter[value_custom3]; ?>
										<br/>
										<i class="<? echo $loadfooter[value_custom4]; ?>"></i>
										&nbsp;<a href="mailto:<? echo $loadfooter[value_custom5]; ?>" style="text-decoration: none; color: inherit;">contact@theimastermind.com</a><br>
										
				</p>
			</div>

			
			</div>
		</div>

		<div class="custom-copyright-section">
			<p><? echo $loadfootersocial[key]; ?> </p>
			<ul class="social-icons">
				<li><a href="<? echo $loadfootersocial[value]; ?>" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
				<li><a href="<? echo $loadfootersocial[value_custom]; ?>" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
				<li><a href="<? echo $loadfootersocial[value_custom2]; ?>" data-original-title="Instagram" class="social_instagram rounded-x"></a></li>
				<li><a href="<? echo $loadfootersocial[value_custom3]; ?>" data-original-title="Youtube" class="social_youtube rounded-x"></a></li>
				<li><a href="<? echo $loadfootersocial[value_custom4]; ?>" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
				<li><a href="<? echo $loadfootersocial[value_custom5]; ?>" data-original-title="Line" class="social_line rounded-x"></a></li>
			</ul>
			<span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span> 
		</div>
	</section>


<!-- End Contact Section -->
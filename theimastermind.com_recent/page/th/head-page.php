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
						<a href="index" style="font-size:21px;color: #898a8c;text-decoration: none;">
								<!-- <img class="img-responsive  " src="../../assets/img/logo/logo1.png" alt="Logo" width="auto" height="60"> -->
								<span class="span-logo" style="padding-right: 0px;"> <img src="../../assets/hometheme/assets/img/logo/logo-resize.png" width="auto" height="55">
					 			</span> <span>|</span> The&nbsp;i&nbsp;Mastermind  						
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

								<!-- ABOUT US -->
								<li class="dropdown" >
									<a href="javascript:void(0);" data-toggle="dropdown">
										ABOUT US
									</a>
								<ul class="dropdown-menu">
							
								<!-- CORPORATE OVERVIEW Page -->
								<li><a href="about-us">CORPORATE OVERVIEW</a></li>
								<!-- End CORPOORATE OVERVIEW -->

								<!-- Our Services Pages -->
								<li><a href="our-services">OUR SERVICES</a></li>
								<!-- End Our Services -->	

								<!-- RECRUITMENT PROCEDURE Page -->
								<li><a href="recruitment-procedure">RECRUITMENT PROCEDURES</a></li>
								<!-- End RECRUITMENT PROCEDURE -->

								<!-- REFFERAL FRIEND Pages -->
								<li><a href="referral-friend">REFERRAL FRIENDS</a></li>
								<!-- End REFFERAL FRIEND -->

								<!-- TESTIMONIALS Pages -->
								<li><a href="testimonials">TESTIMONIALS</a></li>
								<!-- End TESTIMONIALS -->	
								</ul>
								</li>
								<!-- End ABOUT US -->

					<!-- VACANCIES -->
					<li class="dropdown">
						<a href="javascript:void(0);" data-toggle="dropdown">
							FIND JOBS
						</a>
						<ul class="dropdown-menu">
							
							<!-- JOB SEARCH Page -->
							<li><a href="job-list">JOBS LIST</a></li>
							<!-- End JOB SEARCH -->

							<!-- CREATE RESUME Page -->
							<li><a href="create-resume">CREATE RESUME</a></li>
							<!-- End CREATE RESUME -->

								
						</ul>
					</li>
					<!-- End VACANCIES -->

					<!-- NEWSLETTRS -->
					<li class="">
						<a href="newsletters" target="_blank" >
							NEWSLETTERS
						</a>
					</li>
					<!-- End NEWSLETTRS -->

					

					<!-- FIND TALENTS -->
					<li class="">
						<a href="find-talents" >
							FIND TALENTS
						</a>
					</li>
					<!-- End FIND TALENTS -->

					<!-- CONTACT US -->
					<li class="">
						<a href="contact-us" >
							CONTACT US
						</a>
					</li>
					<!-- End CONTACT US -->
					<!-- phone -->
					<li class="hidden-sm hidden-xs">
						<a href="#" >
							
							
						</a>
					</li>
					<!-- End phone -->

					<?
				$sqlcontactDetail1 = mysql_query("SELECT * FROM contact_us WHERE language_code =  'th' AND location = 'contact-detail1' " );
				$loadcontactDetail1 = mysql_fetch_array($sqlcontactDetail1);
				?>
					<!-- phone -->
					<li class="hidden-md">
						<a href="tel:+66 (02) 576-1625" >
							<font color="#446cb3"><storng><? echo $loadcontactDetail1[value_custom2]; ?></storng></font>
							
						</a>
					</li>
					<!-- End phone -->

 
					<!-- VACANCIES -->
					<li class="dropdown hidden-md" >
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						<font color="#446cb3"> <storng><i class="fa fa-globe"></i>  Language (TH) </storng> </font>
						</a>
						<ul class="dropdown-menu">
							
							<!-- JOB SEARCH Page -->
							<li><a href="../en/<? echo $headlink; ?>"> English (EN)</a></li>
							<li><a href="../th/<? echo $headlink; ?>"> ภาษาไทย (TH)</a></li>
							<!-- End JOB SEARCH -->

								
						</ul>
					</li>
					<!-- End VACANCIES -->
					

								
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>

<?php
ob_start();
session_start();
include_once 'login and registration form\dbconnect.php';
?>


<!DOCTYPE html>
<html>
	<head>
   		<meta name="viewport" http-equiv="Content-Type" content="text/html" charset="UTF-8"/>

		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">চিত্র সমাচার</h1>
							<small class="site-description">A Bengali Movie Info Database</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movie reviews</a></li>
						<?php if (isset($_SESSION['usr_id'])) { ?>
							<li class="menu-item current-menu-item">Logged in as <?php echo $_SESSION['usr_name']; ?></li>
							<?php if($_SESSION['usr_typ'] == 'Admin'){ ?>
							<li class="menu-item"><a href="/Movie DB new/responsive-sidebar-navigation/index.php">Admin Panel</a></li>	<?php } ?>
							<li class="menu-item"><a href="login and registration form\logout.php">Log Out</a></li>
						<?php } else { ?>
							<li class="menu-item"><a href="login and registration form\login.php">Login</a></li>
							<li class="menu-item"><a href="login and registration form\register.php">Sign Up</a></li>
						<?php } ?>
						</ul> <!-- .menu -->

						<form action="search.php" class="search-form" method="get">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>


			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>About us</span>
						</div>

						<div class="row">
							<div class="col-md-13">

								<figure><img src="dummy/figure.jpg" alt="figure image"></figure>

								<p class="leading">History of Bengali Movie </p>

								<p>
								The cinema of Bangladesh, often generally referred to as Dhallywood, has been a significant film industry since the early 1970s.
								The 1960s, 1970s, 1980s and the first half of the 1990s were the golden years for Bangladeshi films as the industry produced many successful films.The dominant style of cinema is commercial cinema, which developed from 1947 to 1990 and characterizes most films to this day. Cinema was introduced in Bangladesh in 1898 by Bradford Bioscope Company, credited to have arranged the first film release in Bangladesh. Between 1913 and 1914, the first production company named 'Picture House' was opened. A short silent film titled 'Sukumari' (The Good Girl) was the first produced film in the region during 1928. The first full-length film 'The Last Kiss' , was released in 1931. From the separation of Bangladesh from Pakistan, Dhaka is the center of Bangladeshi film industry, and generated the majority share of revenue, production and audiences. The 1960s, 1970s, 1980s and the first half of the 1990s were the golden years for Bangladeshi films as the industry produced many successful films. 'Mukh O Mukhosh', the first Bengali language Bangladeshi full-length feature film was produced in 1956.<br><br><br><br>
								Let's have a quick overview of evolution of bengali movie history:</p>

								<div class="col-md-14">
								<p>
									<ul>
										  <li>History</li>
											  	<dd>Origin</dd>
											  	<dd>Silent era</dd>
										  <li>Early development</li>
											  	<dd>Pakistan era</dd>
													<dd>
														<li>1950s</li>
														<li>1960s</li>
													</dd>
											  	<dd>After independence</dd>
											  		<dd>
														<li>1970s</li>
														<li>1980s</li>
														<li>1990s</li>
													</dd>
										  <li>Present[2000-till]</li>
									</ul>
								</p>
								</div>
								<p>
									The government of Bangladesh played a huge role in the re-emergence of Bangladeshi films. The Bangladesh Film Development Corporation (BFDC) was established as an assistance hub for Bangladeshi cinema. The government also spends about $1 million annually for the development of Bangladeshi parallel cinema and art cinema.
									<br><br>There are more than 100 production houses in the Bangladeshi film industry, but few have managed to be successful in the market. Such production houses and distribution houses have helped Bangladeshi movies to reach a national and international platform, releasing films and distributing them to audiences overseas. Some well-known production houses in the Bangladeshi cinema include <a href="http://www.impress-group.org/#history">Impress Telefilm Ltd,</a> <a href="http://www.monsoonfilmsbd.com/monsoon/">Monsoon Films,</a>  <a href="http://jaaz-multimedia.com">Jaaz Multimedia,</a> <a href="https://en.wikipedia.org/wiki/Tiger_Media_Limited">Tiger Media Limited,</a> <a href="http://pagelous.com/en/pages/537c90ea421aa9228203cceb">The Abhi Pictures,</a> <a href="https://en.wikipedia.org/wiki/Fatman_Films">Fatman Films</a> and others.</p>

							</div>
						</div>

						<div class="row">
							<div class="col-md-9">
								<h2 class="section-title">Vision &amp; Misssion</h2>
								<p>Cinema industry in Bangladesh was launched in 1956 by releasing 'Mukh O Mukhosh' film , but this is not in proper arrayed at 2016. </p>

								<p>Forty years have passed since independence , we passed twenty years successfully earlier in film industry, we got a lot of standard movies so far.But by the passage of time we are losing the goly of bengali movie culture.Things are getting change periodically and so people's choice &amp; viewpoint.Nowadays we are getting digitized by means of latest technology.So, in this modern era those glorious history of bengali cinema should be recorded in classified way.<br>
								Our vision is to collect all possible information together about Bengali movie focusing on new gen to know about the glorious history of our culture.</p>
							</div>
							<div class="col-md-3">
								<h2 class="section-title">Useful Links</h2>
								<ul class="arrow">
									<li><a href="https://en.wikipedia.org/wiki/Cinema_of_Bangladesh">Wiki</a></li>
									<li><a href="http://www.bcti.gov.bd">বাংলাদেশ চলচ্চিত্র ও টেলিভিশন ইন্সটিটিউট</a></li>
									<li><a href="http://www.cholochitro.com/index.php?option=com_content&task=view&id=33&Itemid=49">চলচিত্র.কম</a></li>
									<li><a href="https://en.wikipedia.org/wiki/Bangladesh_National_Film_Award_for_Best_Film">জাতীয় চলচিত্র পুরষ্কার</a></li>
									<li><a href="https://en.wikipedia.org/wiki/List_of_Bangladeshi_submissions_for_the_Academy_Award_for_Best_Foreign_Language_Film">বিদেশী পুরষ্কারের জন্য মমোনিত</a></li>
									<li><a href="https://bn.wikipedia.org/wiki/বিষয়শ্রেণী:বাংলাদেশী_চলচ্চিত্র">বাংলা উকিপিডিয়া</a></li>
									<li><a href="http://www.imdb.com/list/ls055010868/">IMDb</a></li>
								</ul>
							</div>
						</div> <!-- .row -->

						<h2 class="section-title">Our Team</h2>
						<div class="row">

							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="dummy/person-1.jpg" alt=""></figure>
									<h2 class="team-name">Professor Dr.Md.Anisur Rahman</h2>
									<small class="team-title">Supervisor</small>
									<div class="social-links">
										<a href="https://www.google.com" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="dummy/person-3.jpg" alt=""></figure>
									<h2 class="team-name">Nazmus Sakeef</h2>
									<small class="team-title">Student</small>
									<div class="social-links">
										<a href="https://www.googl.com" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="" class="google-plus"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="dummy/person-2.jpg" alt=""></figure>
									<h2 class="team-name">Nadira Khatun</h2>
									<small class="team-title">Student</small>
									<div class="social-links">
										<a href="https://www.google.com" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="" class="google-plus"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="dummy/person-3.jpg" alt=""></figure>
									<h2 class="team-name">Deep Dutta</h2>
									<small class="team-title">Student</small>
									<div class="social-links">
										<a href="https://www.google.com" class="facebook"><i class="fa fa-facebook"></i></a>
										<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="https://plus.google.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>We some movie freak people from the southern part of Bangladesh trying to put together all about Bengali movie from orthodox.It will help to pursue about Bengali culture from the very beginning.</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="https://www.facebook.com/">Facebook</a></li>
									<li><a href="https://twitter.com/">Twitter</a></li>
									<li><a href="https://plus.google.com/">Google+</a></li>
									<li><a href="https://www.pinterest.com/">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
									<hr>;
									<li><input type = "button" id = "btn" value = "PDF" onclick="window.print();"</li>
								</form>
							</div>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->



		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>

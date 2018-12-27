<?php
ob_start();
session_start();
include_once 'login and registration form\dbconnect.php';

// $email = $_SESSION['email'];
// $password = $_SESSION['password'];
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
						<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
						<li class="menu-item"><a href="about.php">About</a></li>
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
								<div class="row">
									<div class="col-md-9">
										<div class="slider">
											<ul class="slides">
												<li><a href="#"><img src="dummy/movie poster/slide-1.JPG" alt="Slide 1"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-2.JPG" alt="Slide 2"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-3.JPG" alt="Slide 3"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-4.JPG" alt="Slide 4"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-5.JPG" alt="Slide 1"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-6.JPG" alt="Slide 2"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-7.JPG" alt="Slide 3"></a></li>
												<li><a href="#"><img src="dummy/movie poster/slide-8.JPG" alt="Slide 4"></a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-4">
												<h3 class="section-title">Highest Rated Movie</h3>
												<?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "chitra_samachar";

												// Create connection
												$conn = new mysqli($servername, $username, $password, $dbname);
												// Check connection
												if ($conn->connect_error) {
													die("Connection failed: " . $conn->connect_error);
												}
												$sql = "SELECT movie.* FROM movie, (SELECT movie_id, avg(rating) AS avg_rate FROM rate GROUP BY movie_id) AS rate_view WHERE movie.movie_id = rate_view.movie_id ORDER BY rate_view.avg_rate DESC";
												$sql = $conn->query($sql) or die(mysqli_error($conn));
												if ($sql->num_rows > 0) {
													$i = 0;
													while($row = $sql->fetch_assoc()){
														if ($i === 2) {
															break;
														}
														echo '<div class="col-sm-6 col-md-12">';
														echo '<div class="latest-movie">';
														echo '<img src="'. $row['movie_poster'] . '" alt="' . $row['Movie_name'] . '">';
														echo '<div class="movie-title"><a href="ranking.php?id='. $row['Movie_id'] . '">' . $row['Movie_name'] . '</a></div>';
														echo '</div></div>';
														$i++;
													}
												}

												$conn->close();

												?>





											</div>
										</div>
									</div>
								</div> <!-- .row -->
								<div class="row">

									<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "chitra_samachar";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}

									$query = "SELECT * FROM movie WHERE upcoming=0";
									$result = $conn->query($query);
									if ($result->num_rows > 0) {

										// output data of each row
										while($row = $result->fetch_assoc()) {
											echo '<div class="col-sm-6 col-md-3">';
											echo '<div class="latest-movie">';
											echo '<img src="'. $row['movie_poster'] . '" alt="' . $row['Movie_name'] . '">';
											echo '<div class="movie-title"><a href="ranking.php?id='. $row['Movie_id'] . '">' . $row['Movie_name'] . '</a></div>';
											echo "</div>\n";
											echo "</div>\n";
										}
									}
									$conn->close();
									?>


									< <div class="row">
										<div class="col-md-4">
											<h2 class="section-title">Upcoming Movie</h2>

											<div class="movie-list">
												<?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "chitra_samachar";

												// Create connection
												$conn = new mysqli($servername, $username, $password, $dbname);
												// Check connection
												if ($conn->connect_error) {
													die("Connection failed: " . $conn->connect_error);
												}

												$query = "SELECT * FROM movie WHERE upcoming=1";
												$result = $conn->query($query);
												if ($result->num_rows > 0) {

													// output data of each row
													while($row = $result->fetch_assoc()) {
														echo '<div class="movie">';
														echo '<figure class="movie-poster"><img src="'. $row['movie_poster'] . '" alt="' . $row['Movie_name'] . '"></figure>';
														echo '<div class="movie-title"><a href="ranking.php?id='. $row['Movie_id'] . '">' . $row['Movie_name'] . '</a></div>';
														echo '<ul class="movie-schedule"><li><div class="date">coming soon!</div></li></ul>';
														echo "</div>\n";
													}
												}
												$conn->close();
												?>





												<!--div class="movie">
												<figure class="movie-poster"><img src="dummy/coming/movie-2.jpg" alt="Movie 3"></figure>
												<div class="movie-title"><a href="single.html">এক রাস্তা</a></div>
												<ul class="movie-schedule">
												<li>
												<div class="date">coming soon!</div>
											</li>
										</ul>
									</div>
									<div class="movie">
									<figure class="movie-poster"><img src="dummy/coming/movie-3.jpg" alt="Movie 3"></figure>
									<div class="movie-title"><a href="single.html">হারজিৎ</a></div>
									<ul class="movie-schedule">
									<li>
									<div class="date">coming soon!</div>
								</li>
							</ul>
						</div>
						<div class="movie">
						<figure class="movie-poster"><img src="dummy/coming/movie-4.jpg" alt="Movie 3"></figure>
						<div class="movie-title"><a href="single.html">আমি শুধু তোর হবো</a></div>
						<ul class="movie-schedule">
						<li>
						<div class="date">coming soon!</div>
					</li>
				</ul>
			</div>-->
		</div> <!-- .movie-list -->
	</div>  <!-- .page -->
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
						<hr>
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

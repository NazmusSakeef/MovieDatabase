<?php
ob_start();
session_start();
include_once 'login and registration form\dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" http-equiv="Content-Type" content="text/html" charset="UTF-8"/>

	<title>Movie Review | Review</title>

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
						<li class="menu-item"><a href="about.php">About</a></li>
						<li class="menu-item current-menu-item"><a href="review.php">Movie reviews</a></li>
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
									<span>Movie Review</span>
								</div>

								<div class="filters">
									<select name="#" id="#" placeholder="Choose Category">
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

										$sql = "SELECT distinct Genre FROM movie order by Genre";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												echo '<option value="#">'.$row["Genre"].'</option>';
											}
										}
										$conn->close();
										?>
									</select>
									<select name="#" id="#">
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

										$sql = "SELECT distinct year FROM movie order by year desc";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												echo '<option value="#">'.$row["year"].'</option>';
											}
										}
										$conn->close();
										?>

									</select>
								</div>
								<div class="movie-list">
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-3.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Maleficient</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-4.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">The adventure of Tintin</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-5.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Hobbit</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-6.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Exists</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-1.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Drive hard</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-2.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Robocop</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-7.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">Life of Pi</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
									<div class="movie">
										<figure class="movie-poster"><img src="dummy/thumb-8.jpg" alt="#"></figure>
										<div class="movie-title"><a href="single.html">The Colony</a></div>
										<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
									</div>
								</div> <!-- .movie-list -->


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

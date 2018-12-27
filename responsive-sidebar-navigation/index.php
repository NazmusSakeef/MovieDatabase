<?php
ob_start();
session_start();
include_once 'dbconnect.php';
	?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta name="viewport" http-equiv="Content-Type" content="text/html" charset="UTF-8"/>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>Movie Review website</title>
</head>

<body style='overflow:hidden' >
	<header class="site-header" class="fixed-nav-bar">
		<div class="container" overflow="auto">
			<a href="index.php" id="branding">
				<img src="img/logo.png" alt="" class="logo">
				<div class="logo-copy">
					<h1 class="site-title">চিত্র সমাচার</h1>
					<small class="site-description">A Bengali Movie Info Database</small>
				</div>
			</a> <!-- #branding -->

			<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="\Movie DB new\index.php">Home</a></li>
							<li class="menu-item"><a href="\Movie DB new\about.php">About</a></li>
							<li class="menu-item"><a href="\Movie DB new\review.php">Movie reviews</a></li>
						<?php if (isset($_SESSION['usr_id'])) { ?>
							<li class="menu-item current-menu-item">Logged in as <?php echo $_SESSION['usr_name']; ?></li>
							<li class="menu-item"><a href="\Movie DB new\login and registration form\logout.php">Log Out</a></li>
						<?php } else { ?>
							<li class="menu-item"><a href="\Movie DB new\login and registration form\login.php">Login</a></li>
							<li class="menu-item"><a href="\Movie DB new\login and registration form\register.php">Sign Up</a></li>
						<?php } ?>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

			<div class="content-wrapper">
			<h1>Admin Panel</h1>
			</div> <!-- .content-wrapper -->

			<div class="mobile-navigation"></div>
		</div>
	</header>

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Main</li>
				<li class="has-children overview">
					<a href="#0">Add New Movie</a>
					<ul>
						<li class="has-children overview"><a href="#0">Latest Movie</a>
							<ul>
								<!-- <li><a href='\Movie DB new\responsive-sidebar-navigation\file upload\index.php' target='f1'>Add a photo</a></li> -->
								<li><a href='\Movie DB new\responsive-sidebar-navigation\file upload\text input\index.php' target='f1'>Insert movie details</a></li>
							</ul>
						</li>
						<li class="has-children overview"><a href="#0">Upcoming Movie</a>
							<ul>
								<!-- <li><a href='\Movie DB new\responsive-sidebar-navigation\file upload\index.php' target='f1'>Add a photo</a></li> -->
								<li><a href='\Movie DB new\responsive-sidebar-navigation\file upload\text input\index.php' target='f1'>Insert movie details</a></li>						
							</ul>
						</li>
					</ul>
				</li>

				<li class="has-children comments">
					<a href="#0">Comments</a>

					<ul>
						<li><a href="#0">All Comments</a></li>
						<li><a href="#0">Edit Comment</a></li>
						<li><a href="#0">Delete Comment</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>

				<li class="has-children images">
					<a href="#0">Images</a>

					<ul>
						<li><a href="#0">All Images</a></li>
						<li><a href="#0">Edit Image</a></li>
					</ul>
				</li>

				<li class="has-children users">
					<a href="#0">Users</a>

					<ul>
						<li><a href="#0">All Users</a></li>
						<li><a href="#0">Remove User</a></li>
						<li><a href="#0">Add User</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<div class="content-wrapper">
			<iframe name="f1" id="f1" width="900" height="500" >			</iframe>
			<!-- <h1>Responsive Sidebar Navigation</h1> -->
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->


<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>

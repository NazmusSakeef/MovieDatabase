<?php
session_start();

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($connection, $_POST['movie_name']);
	$year = mysqli_real_escape_string($connection, $_POST['year']);
	$length = mysqli_real_escape_string($connection, $_POST['length']);
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$poster = mysqli_real_escape_string($connection, $_POST['poster']);


if(isset($_POST['category']) )
	{
	  $genre = $_POST['category'];
	}



	if (!$error) {
		mysqli_query($connection, "INSERT INTO movie(Movie_id, Movie_name, Year, Genre, Rating, movie_poster, description,youtube, upcoming) VALUES ('','" . $name . "', '" . $year . "','" . $genre . "','', '" . $poster . " ','" . $description . "','youtube.com','0')");
		
		}
		 else {
			$errormsg = "Error in insertion...Please try again !";
		}
	}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Input Form</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <link rel="stylesheet" type="text/css" media="all" href="responsive.css">
</head>

<body>

	<section id="container">		
		<h2>Insert movie details</h2>
		<form name="hongkiat" id="hongkiat-form" method="post" action="#">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
				<input type="text" name="movie_name" id="name" placeholder="Movie name*" autocomplete="off" tabindex="1" class="txtinput">
			
				<input type="text" name="year" id="year" placeholder="Year*" autocomplete="off" tabindex="2" class="txtinput">
			
				<input type="text" name="length" id="length" placeholder="Length(optional)" tabindex="4" class="txtinput">
				
				<input type="text" name="poster" id="poster" placeholder="Poster path" tabindex="5" class="txtinput">
			
				<textarea name="description" id="description" placeholder="Enter a precise description..." tabindex="6" class="txtblock"></textarea>
			</section>
			
			<section id="aside" class="clearfix">
				<section id="recipientcase">
				  <h3>Category:</h3>
					<select id="recipient" name="category" tabindex="6" class="selmenu">
  						<option value="staff">Add a category</option>
  						<option value="Drama">Drama</option>
  						<option value="Adventure">Adventure</option>
  						<option value="Romantic">Romantic</option>
  						<option value="Tragedy">Tragedy</option>
  						<option value="War">War</option>
					</select>
				</section>

				<section id="recipientcase">
				  <h3>Director:</h3>
					<select id="recipient" name="recipient" tabindex="7" class="selmenu">
						<option value="staff">Add a director</option>
  						<option value="none">Satyajit Ray</option>
  						<option value="editor">Srijit Mukherji</option>
  						<option value="technical">Biplab Chowdhury</option>
  						<option value="pr">Raj Chakraborty</option>
  						<option value="support">Ritwik Ghatak</option>
					</select>
				</section>

				<section id="recipientcase">
				  <h3>Actor:</h3>
					<select id="recipient" name="recipient" tabindex="8" class="selmenu">
						<option value="staff">Add a actor</option>
  						<option value="none">Satyajit Ray</option>
  						<option value="editor">Srijit Mukherji</option>
  						<option value="technical">Biplab Chowdhury</option>
  						<option value="pr">Raj Chakraborty</option>
  						<option value="support">Ritwik Ghatak</option>
					</select>
				</section>
				
				<section id="recipientcase">
				  <h3>Actress:</h3>
					<select id="recipient" name="recipient" tabindex="9" class="selmenu">
						<option value="staff">Add a actress</option>
  						<option value="none">Satyajit Ray</option>
  						<option value="editor">Srijit Mukherji</option>
  						<option value="technical">Biplab Chowdhury</option>
  						<option value="pr">Raj Chakraborty</option>
  						<option value="support">Ritwik Ghatak</option>
					</select>
				</section>
		</div>

		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="10" value="Submit this!">
			<br style="clear:both;">
		</section>
		</form>
	</section>


		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>	

</body>
</html>
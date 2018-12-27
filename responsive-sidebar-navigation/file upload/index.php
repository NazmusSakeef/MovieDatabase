<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>File Upload Form</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />

	</head>

	<body style='overflow:hidden'>
		<span class="msg">Make sure that the resulation is resized before uploading!</span>
		<form id="upload" method="post" action="upload.php" >
			<div id="drop"><strong>Drop Here</strong>
				<p><small>OR</small></p>
				<a>Browse</a>				
				<input type="file" name="upl" />							
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>						
		</form>

		
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
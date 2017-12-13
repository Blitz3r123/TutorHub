<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Home</title>
		<!-- Bootstrap Dep -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

		<!-- Jquery Dep -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		
		<!-- Tether Dep -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="node_modules/tether/dist/js/tether.min.js"></script>
		<link rel="stylesheet" href="node_modules/tether/dist/css/tether.min.css">

		<!-- Bootstrap JS Dep -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="css/carouselStyle.css">
		<link rel="stylesheet" href="css/indexStyle.css">
	</head>
	<body>
		<?php require_once('navbar.php'); ?>
		<?php require_once('carousel.php'); ?>
		<div class="body-content">
			<div class="card">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						<img src="" alt="">
						<h1 class="info-title">Easy Organisation</h1>
						<p class="lead">Organise all your students and their work by subject, name or however you want. You control your organisation and decide how you go about your students' education.</p>
					</li>
					<li class="list-group-item">
						<img src="" alt="">
						<h1 class="info-title">Advanced Tracking</h1>
						<p class="lead">Keep track of all your students' works. TutorHub can be configured to let you know if one of your students has not done their homework by a set deadline.</p>
					</li>
					<li class="list-group-item">
						<img src="" alt="">
						<h1 class="info-title">Resource Storage</h1>
						<p class="lead">Store all of your resources here and then you can access them later. You can even store your students' exam papers and results to retrieve later on.</p>
					</li>
				</ul>
			</div>
		</div>
		<!-- <div class="info-card">
			<h1 class="h1">Welcome to TutorHub</h1>
		</div> -->
		<footer>
			<p class="float-right"><a href="#">Back to top</a></p>
			<p>&copy; 2017 TutorHub, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</footer>
	</body>
</html>
<!doctype html>
<html>
	<head>
		<title>TutorHub Login</title>
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

		<!-- Custom Styling -->
		<link rel="stylesheet" href="css/login_style.css">
	</head>
	<body>
		
		<?php require_once('navbar.php'); ?>
		
		<div class="container">
			<form method="post" action="loginScript.php">
				<div class="form-group">
					<label for="inputEmail">Email address</label>
					<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="inputPassword">Password</label>
					<input type="password" class="form-control" id="inputPassword" placeholder="Password">
				</div>
				<input type="submit" value="Login" class="btn btn-primary" style="" id="login-btn"></input>
			</form>
		</div>
	</body>
</html>
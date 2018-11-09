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
		<link rel="stylesheet" href="css/register_style.css">
	</head>
	<body>
		
		<?php require_once('navbar.php'); ?>
		
		<div class="container">
			<form method="post" action="registerScript.php">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Enter your first name">
				</div>
				<div class="form-group">
					<label for="surname">Surname</label>
					<input type="text" class="form-control" id="surname" aria-describedby="emailHelp" placeholder="Enter your surname">
				</div>
				<div class="form-group">
					<label for="inputEmail">Email address</label>
					<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="inputEmailConfirmation">Confirm Email address</label>
					<input type="email" class="form-control" id="inputEmailConfirmation" aria-describedby="emailHelp" placeholder="Confirm email">
				</div>
				<div class="form-group">
					<label for="inputPassword">Password</label>
					<input type="password" class="form-control" id="inputPassword" aria-describedby="emailHelp" placeholder="Enter password">
				</div>
				<div class="form-group">
					<label for="inputPasswordConfirmation">Confirm Password</label>
					<input type="password" class="form-control" id="inputPasswordConfirmation" aria-describedby="emailHelp" placeholder="Confirm password">
				</div>
				<div class="form-group">
					<label for="educationCenter">Education Center</label>
					<input type="password" class="form-control" id="educationCenter" placeholder="Enter name of your education center">
				</div>
				<input type="submit" value="Register" class="btn btn-primary" style="" id="register-btn"></input>
			</form>
		</div>
	</body>
</html>
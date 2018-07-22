<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Dashboard</title>
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
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<link rel="stylesheet" href="css/dashboardStyle.css">
	</head>
	<body>
		<?php require_once('loggedNavbar.php'); ?>
		<?php require_once('sidebar.php'); ?>
		<!-- Main page content -->
			<div class="container-fluid" style="margin-left: 25%;"><!-- container for padding -->

				<!-- RECENT STATISTICS -->
				<div class="statsContainer" style="margin-top: 13vh;">
					<p class="h1">Recent</p>
					<div class="buttonContainer">
						<a href="" class="btn btn-primary">Classes</a>
						<a href="" class="btn btn-primary">Students</a>
						<a href="" class="btn btn-primary">Teachers</a>
						<a href="" class="btn btn-primary">Kaleem Peeroo</a>
						<a href="" class="btn btn-primary">Peter Smith</a>
						<a href="" class="btn btn-primary">Biology</a>
					</div>
				</div>

				<!-- FOUR BIG BUTTONS ON MAIN CONTENT -->
				<div class="topicButton">
					<a href="classes.php">Classes</a>
				</div>
				<div class="topicButton">
					<a href="students.php">Students</a>
				</div>
				<div class="topicButton">
					<a href="teachers.php">Teachers</a>
				</div>
				<div class="topicButton">
					<a href="homeworks.php">Homeworks</a>
				</div>
				<div class="topicButton">
					<a href="tests.php">Tests</a>
				</div>
				<div class="topicButton">
					<a href="timetable.php">Timetable</a>
				</div>
			</div>
		</div>
	</body>
</html>
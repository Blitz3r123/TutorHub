<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Dashboard</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<link rel="stylesheet" href="css/dashboardStyle.css">
	</head>
	<body>
		<?php require_once('loggedNavbar.php'); ?>
		<?php require_once('sidebar.php'); ?>
		<!-- Main page content -->
		<div id="content" class="col-md-9 col-lg-9 col-sm-9 col-xs-12" style="margin-top: 8vh; margin-left: 25vw;">
			<div class="container-fluid" style=""><!-- container for padding -->

				<!-- RECENT STATISTICS -->
				<div class="statsContainer">
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
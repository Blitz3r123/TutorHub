<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Physics</title>

		<!-- Bootstrap Dep -->
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<!-- Jquery Dep -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<!-- Bootstrap JS Dep -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<!-- Chart.js Dep -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>		
		<script src="node_modules/chartjs/chart.js"></script>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/classesStyle.css">
		<link rel="stylesheet" href="css/classDetailStyle.css">
		<link rel="stylesheet" href="css/sidebarStyle.css">
	</head>
	<body>
		<?php require_once('loggedNavbar.php'); ?>
		<?php require_once('sidebar.php'); ?>
		<!-- Main page content -->
		<div id="content" class="col-md-9 col-lg-9 col-sm-9 col-xs-12" style="margin-top: 8vh;">
			<div class="container-fluid"><!-- container for padding -->
				
				<div class="main-content">
					<p class="h1 page-title">GCSE Biology <a href="" class="btn btn-primary" style="float: right; margin-right: 10%; margin-top: 2vh;">Edit</a></p>
					<p class="lead h5 page-subtitle">Saturday 12pm - 2pm</p><br>

					<div class="graphContainer">
						<div class="chartContainer" style="width: 30%; float: left;">
							<canvas id="myChart" width="400" height="400"></canvas>
							<p class="h3 graphTitle">Attendance</p>
						</div>
						<div class="chartContainer" style="width: 30%; float: left;">
							<canvas id="myChart2" width="400" height="400"></canvas>
							<p class="h3 graphTitle">Marks</p>
						</div>
						<div class="chartContainer" style="width: 30%; float: left;">
							<canvas id="myChart3" width="400" height="400"></canvas>
							<p class="h3 graphTitle">Students</p>
						</div>
					</div>
             
					<div class="studentsContainer">
						<p class="h2 student-title">To Do List</p>

						<div class="student-thumbnail-container">
							<ul class="list-group">
								<li class="list-group-item">task 1</li>
								<li class="list-group-item">task 1</li>
								<li class="list-group-item">task 1</li>
								<li class="list-group-item">task 1</li>
								<li class="list-group-item">task 1</li>
							</ul>
						</div>
					</div>

					<div class="studentsContainer">
						<p class="h2 student-title">Students<a href="" class="btn btn-primary" style="float: right; margin-top: -1vh;">Add a Student</a></p>

						<div class="student-thumbnail-container">
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="studentDetails.php">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
						</div>
					</div>

					<div class="teachersContainer">
						<p class="h2 teacher-title">Teachers<a href="" class="btn btn-primary" style="float: right; margin-top: -1vh;">Add a Teacher</a></p>

						<div class="teacher-thumbnail-container">
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
							<div class="thumbnail">
								<img src="images/thumbnail.svg" class="thumbnail-image" alt="">
								<p class="lead thumbnail-name"><a href="">Bob Jones</a> <br> <span class="small lead">Yr 11</span></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<script>
			var ctx = document.getElementById("myChart");
			var myPieChart = new Chart(ctx, {
				type: 'doughnut',
				data: data = {
					datasets: [{
						data: [70, 30],
						backgroundColor: [
							'rgba(255, 255, 0, 0.5)',
							'rgba(255, 0, 0, 0.5)'
						]
					}],

    				// These labels appear in the legend and in the tooltips when hovering different arcs
    				labels: [	
    					'Present',
    					'Absent'
    				]
				}
			});
			var ctx2 = document.getElementById("myChart2");
			var myPieChart = new Chart(ctx2, {
				type: 'doughnut',
				data: data = {
					datasets: [{
						data: [20, 30],
						backgroundColor: ['rgba(255, 0, 0, 0.5)',
						'rgba(0, 0, 255, 0.5)']
					}],

    				// These labels appear in the legend and in the tooltips when hovering different arcs
    				labels: [
    					'Average Incorrect',	
    					'Average Correct'
    				]
				}});

			var ctx3 = document.getElementById("myChart3");
			var myPieChart = new Chart(ctx3, {
				type: 'doughnut',
				data: data = {
					datasets: [{
						data: [10, 20],
						backgroundColor: [
							'rgba(255, 0, 0, 0.5)',
							'rgba(0, 0, 255, 0.5)'
						]
					}],

    				// These labels appear in the legend and in the tooltips when hovering different arcs
    				labels: [
    					'Male',	
    					'Female'
    				]
				}
			});
		</script>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Students</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/studentStyle.css">
		<link rel="stylesheet" href="css/sidebarStyle.css">
	</head>
	<body onload="resetDropdown()">
		<?php require_once('loggedNavbar.php'); ?>
		<?php require_once('sidebar.php'); ?>
		<!-- Main page content -->
		<div id="content" class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
			<div class="container-fluid" style=""><!-- container for padding -->
				<div class="studentSelectionContainer">
					<form action="">
						<select name="studentList" id="studentListSelect">
							<option disabled>Select a student</option>
							<option value="">Bob Jones</option>
							<option value="">Bob Jones</option>
							<option value="">Bob Jones</option>
							<option value="">Bob Jones</option>
						</select>
					</form>
				</div>

				<!-- WHEN A SELECTION HAS BEEN MADE IN ABOVE DIV THEN HIDE ABOVE DIV AND SHOW BELOW DIV -->
				
				<div class="mainContentContainer">
					<div class="studentNameContainer">
						<p class="h4">Kaleem Peeroo</p>
					</div>
					<div class="studentProfileContainer">
						<div class="mainContent">
							<br>
							<p class="h5 yearTitle">Year 11</p>
							<br>
							<div class="progressContainer">
								<p class="h6 progressTitle">Attendance</p>					
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
								</div>
							</div>
							<div class="progressContainer">
								<p class="h6 progressTitle"><a href="mostRecentTest.php">Most Recent Test</a></p>					
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">35%</div>
								</div>
							</div>
							<div class="progressContainer">
								<p class="h6 progressTitle"><a href="mostRecentHomework.php">Most Recent Homework</a></p>					
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">95%</div>
								</div>
							</div>
							<div class="progressContainer">
								<p class="h6 progressTitle">Something Else</p>					
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
								</div>
							</div>

							<div class="subjectDropdownContainer">
								<p class="h4 subjectTitle">
									<a href="#subjectCollapse" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse">Biology &#9660;</a>
								</p>
								<div class="collapse" id="subjectCollapse">
									<div class="card card-block subjectCollapseContainer">

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="subjectDropdownContainer">
								<p class="h4 subjectTitle">
									<a href="#subjectCollapse0" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse0">Biology &#9660;</a>
								</p>
								<div class="collapse" id="subjectCollapse0">
									<div class="card card-block subjectCollapseContainer">
										
										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="subjectDropdownContainer">
								<p class="h4 subjectTitle">
									<a href="#subjectCollapse1" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse1">Biology &#9660;</a>
								</p>
								<div class="collapse" id="subjectCollapse1">
									<div class="card card-block subjectCollapseContainer">
										
										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<div class="subjectDropdownContainer">
								<p class="h4 subjectTitle">
									<a href="#subjectCollapse2" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse2">Biology &#9660;</a>
								</p>
								<div class="collapse" id="subjectCollapse2">
									<div class="card card-block subjectCollapseContainer">
										
										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

										<div class="progressContainer">
											<p class="h6 progressTitle">Something Else</p>					
											<div class="progress">
												<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">100%</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							

						</div>
						<div class="sideContent">
							
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- LOAD SCRIPTS AT END OF SITE FOR FASTER LOADING -->
		<script src="js/studentScript.js"></script>
	</body>
</html>
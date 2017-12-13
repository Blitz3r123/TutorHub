<!DOCTYPE html>
<html>
	<head>
		<title>TutorHub Students</title>

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
		
		<!-- Custom CSS -->
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
						<form action="">
							<select name="" id="studentSelect">
								<option>Kaleem Peeroo</option>
							</select>
						</form>
					</div>
					<div class="studentProfileContainer" id="studentProfileContainer">
						<div class="mainContent">
							<br>
							<p class="h5 yearTitle">Year 11</p>
							<br>
							<div class="progressContainer">
								<p class="h6 progressTitle"><a href="attendance.php">Attendance</a></p>					
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
									<a href="#subjectCollapse" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse">Biology &#9660;</a>
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
									<a href="#subjectCollapse0" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse0">Biology &#9660;</a>
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
									<a href="#subjectCollapse1" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse1">Biology &#9660;</a>
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
									<a href="#subjectCollapse2" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="subjectCollapse2">Biology &#9660;</a>
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
							<div class="profilePictureContainer">
								<img src="images/thumbnail.svg" alt="Profile Picture">
							</div>
							<div class="detailContainer">
								<p class="h3 detailTitle">Details</p>
								<p class="lead detailContent">First Name: <span class="detailContentInfo">Kaleem</span></p>
								<p class="lead detailContent">Last Name: <span class="detailContentInfo">Peeroo</span></p>
								<p class="lead detailContent">Father: <span class="detailContentInfo">Salim</span></p>
								<p class="lead detailContent">Mother: <span class="detailContentInfo">Fadina</span></p>
								<p class="lead detailContent">Email: <span class="detailContentInfo">email@email.com</span></p>
								<p class="lead detailContent">Father Email: <span class="detailContentInfo">email@email.com</span></p>
								<p class="lead detailContent">Mother Email: <span class="detailContentInfo">email@email.com</span></p>
								<p class="lead detailContent">Phone: <span class="detailContentInfo">12345678910</span></p>
								<p class="lead detailContent">Father Phone: <span class="detailContentInfo">12345678910</span></p>
								<p class="lead detailContent">Mother Phone: <span class="detailContentInfo">12345678910</span></p>
								<p><a href="editStudentDetails.php" class="btn btn-primary editStudentDetailButton">Edit</a></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- LOAD SCRIPTS AT END OF SITE FOR FASTER LOADING -->
		<script src="js/studentScript.js"></script>
	</body>
</html>
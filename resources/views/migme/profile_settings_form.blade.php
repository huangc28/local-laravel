<!DOCTYPE html>
<html>
	<head>

		<!-- Google CDN for jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

		<style>
			body {
				background-color: #dddddd;
			}

			form {
				/*border: solid 1px;*/
			}
	
			::-webkit-input-placeholder { /* WebKit, Blink, Edge */
				color:    #cccccc !important;
			}
			:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
				color:    #cccccc !important;
				opacity:  1;
			}
			::-moz-placeholder { /* Mozilla Firefox 19+ */
				color:    #cccccc !important;
				opacity:  1;
			}
			:-ms-input-placeholder { /* Internet Explorer 10-11 */
				color:    #cccccc !important;
			}

			input,select {
				border: 0px !important;
			    outline: 0;
			    background: transparent !important;
			    margin-bottom: 12px;
			    -webkit-box-shadow: none !important;
				-moz-box-shadow: none !important;
				box-shadow: none !important;
				-webkit-border-radius: 0px !important;
				-moz-border-radius: 0px !important;
				border-radius: 0px !important;
				-webkit-appearance: none ;
				font-family: "Lato-Regular";
				font-size: 14px;
				color: #cccccc !important;

			}

			.form-control {
				border-bottom: 1px solid #dddddd !important;
			}

			.form-group {
				padding-top: 14px;
				padding-bottom: 14px;
				padding-left: 16px;
			}

			.form-container {
				width: 520px;
				margin: 0 auto;
			}
			
			.form-horizontal .control-label{
				text-align:left;
			}

			.nopadding {
				padding: 0 !important;
			}

			.profile-setting-form {
				text-align: left;
				background-color: #fff;
				padding-left: 16px;
			}	

			.profile-setting-form div {
				font-family: "Lato-Regular";
				font-size: 14px;
				padding-left: 16px;
				padding-right: 20px;
			}

			.profile-setting-form span {
				/*float: right;
				clear:both;*/
			}

			.profile-setting-form label {
				font-family: "Lato-Regular";
				font-size: 14px;
				text-align: left;
			}
		
			.form-container p{
				
				margin-left: 12px;
			}

			.profile-setting-form {
				margin-top: 12px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row form-container">
				
				<!-- Form Title -->
				<div class="col-md-12">
					
				</div>

				<form class="form-horizontal profile-setting-form">
					<div class="form-group form-title">
						<label class="col-md-12 control-label">Edit Profile</label>
					</div>

					<!-- User Full Name -->
					<div class="form-group">
						<!-- <label for="username" class="col-md-4 control-label">Name</label> -->
						<label for="username" class="col-md-4 control-label">Name</label>
						<div class="col-md-8">
							<input class="form-control" id="username" type="text" placeholder="Your name">								
						</div>
					</div>

					<!-- Birth Day -->
					<div class="form-group">
						<label class="col-md-4 control-label">
							Birth Day
						</label>		
						<div class="col-md-8 nopadding">										
							<div class="row">
								<div class="col-md-4 1_3_select">
									<select class="form-control" name="day">
										<option>Day</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="month">
										<option>Month</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="year">
										<option>Year</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>										
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Gender -->
					<div class="form-group">
						<label for="gender" class="col-md-4 control-label">Gender</label>
						<div class="col-md-8">
							<select class="form-control" id="gender">
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
					</div>

					<!-- Relationship -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="relationship">Relationship</label>
						<div class="col-md-8">
							<select class="form-control" id="relationship">
								<option value="1">single</option>
								<option value="2">stable</option>
							</select>
						</div>							
					</div>

					<!-- Location -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="location">Location</label>							
						<div class="col-md-8">
							<select class="form-control" id="city">
								<option value="1">Taiwan</option>
								<option value="2">Singapore</option>
							</select>	
						</div>
					</div>

					<hr>

					<!-- About -->
					<div>
						<label for="about" class="control-label">About</label>
						<p>
							<textarea id="about" name="about" placeholder="Write something about yourself here..."></textarea>
						</p>
					</div>

					<!-- Interest -->
					<div>
						<label for="interest">Interest</label>
						<p>
							<textarea id="interest" name="interest" placeholder="What are you interested in?"></textarea>
						</p>
					</div>

					<!-- Study -->
					<div>
						<label for="study">Interest</label>
						<p>
							<textarea id="study" name="study" placeholder="Where do you study?"></textarea>
						</p>
					</div>

					<!-- Work -->
					<div class="">
						<label for="study">Interest</label>
						<p>
							<textarea id="study" name="study" placeholder="Where do you work?"></textarea>
						</p>
					</div>
					
					<div class="profile-buttonrr-container">
						<input type="button" value="Cancel">
						<input type="submit" value="Save">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
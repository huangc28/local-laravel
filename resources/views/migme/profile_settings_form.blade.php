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

			input,select,textarea {
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
				resize: none;
				overflow: hidden;
			}
			
			.profile-textarea {
				background-image: -webkit-linear-gradient(white, white 30px, #ddd 30px, #ddd 31px, white 31px) !important;
			    background-image: -moz-linear-gradient(white, white 30px, #ddd 30px, #ddd 31px, white 31px)!important;
			    background-image: -ms-linear-gradient(white, white 30px, #ddd 30px, #ddd 31px, white 31px)!important;
			    background-image: -o-linear-gradient(white, white 30px, #ddd 30px, #ddd 31px, white 31px)!important;
			    background-image: linear-gradient(white, white 30px, #ddd 30px, #ddd 31px, white 31px)!important;
			    border: 1px solid #ddd;
			    border-radius: 8px;
			    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
			    line-height: 31px;
			    font-family: Arial, Helvetica, Sans-serif;
			    padding: 0;
			}

			.form-title {
				padding-top: 12px;
				padding-bottom: 12px;
				padding-left: 16px;
				background-color: #f5f5f5;
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
				padding-left: 0px;
				padding-top: 12px;
				padding-bottom: 12px;
				text-align:left;
			}

			.nopadding {
				padding: 0 !important;
			}

			.profile-setting-form {
				margin-top: 0 !important;
				text-align: left;
				background-color: #fff;
				padding-right: 16px;
				padding-left: 16px;
			}	

			.profile-setting-form div {
				font-family: "Lato-Regular";
				font-size: 14px;
				padding-left: 16px;
				padding-right: 20px;
			}

			.profile-setting-form label {
				font-family: "Lato-Regular";
				font-size: 14px;
				color: #999999;
				text-align: left;
			}
		
			.form-container p{
				margin-top:0;
				margin-bottom:0;
				/*margin-left: 12px;*/
			}

			.profile-setting-form {
				margin-top: 12px;
			}

			.profile-button-container div:first-child {
				text-align: right;
			}

			.profile-button-container button {
				border: solid 1px;
			}
	
			.profile-button-container button:nth-child(2) {
				background-color: #6dcbc4;
			}

			.profile-button-container button{
				height: 44px;
				width: 100%;
				border: solid 1px;
				-webkit-border-radius: 40px !important;
				-moz-border-radius: 40px !important;
				border-radius: 40px !important;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row form-container">
				<div class="form-title">					
					<strong>Edit Profile</strong>
				</div>	
				<form class="form-horizontal profile-setting-form">
					<!-- <div>
						<strong>Edit Profile</strong>
					</div> -->

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
					<div class="form-group">
						<label for="about" class="col-md-12 control-label">ABOUT</label>
						<textarea id="about" class="form-control profile-textarea" name="about" placeholder="Write something about yourself here..."></textarea>						
					</div>

					<!-- Interest -->
					<div class="form-group">
						<label for="interest" class="col-md-12 control-label">INTEREST</label>
						<textarea id="interest" class="form-control profile-textarea" name="interest" placeholder="What are you interested in?"></textarea>						
					</div>

					<!-- Study -->
					<div class="form-group">
						<label for="study" class="col-md-12 control-label">STUDY</label>
						<textarea id="study" class="form-control profile-textarea" name="study" placeholder="Where do you study?"></textarea>						
					</div>

					<!-- Work -->
					<div class="form-group">
						<label class="col-md-12 control-label" for="study">WORK</label>						
						<textarea class="form-control profile-textarea" id="study" name="study" placeholder="Where do you work?"></textarea>						
					</div>
					
					<div class="row profile-button-container">
						<div class="col-md-offset-2 col-md-4">
							<button type="button" class="btn btn-default">Cancel</button>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-default">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
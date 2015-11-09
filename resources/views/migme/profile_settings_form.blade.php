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
				border: solid 1px;
			}
			
			.profile-setting-form {
				text-align: left;
				background-color: #fff;
				padding-left: 16px;
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
		<div>
			<div class="container">
				<div class="row form-container">
					<form class="col-md-12 profile-setting-form">

						<!-- Form Title -->
						<p class="form-title">
							<strong>Edit Profile</strong>
						</p>
						
						<!-- User Full Name -->
						<p>
							<label for="username">Name</label>
							<input id="username" type="text" placeholder="Your name">								
						<p>

						<!-- Birth Day -->
						<p>
							<fieldset>
								<label> Birth Day</label>
								<select name="day">
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
								<select name="month">
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
								<select name="year">
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
							</fieldset>
						</p>
						
						<!-- Gender -->
						<p>
							<label for="gender">Gener</label>
							<select id="gender">
								<option>Male</option>
								<option>Female</option>
							</select>
						</p>

						<!-- Relationship -->
						<p>
							<label for="relationship">Relationship</label>
							<select id="relationship">
								<option value="1">single</option>
								<option value="2">stable</option>
							</select>
						</p>

						<!-- Location -->
						<p>
							<fieldset>
								<label for="location">Location</label>
								<select id="city">
									<option value="1">Taiwan</option>
									<option value="2">Singapore</option>
								</select>	
							</fieldset>
						</p>

						<hr>

						<!-- About -->
						<p>
							<label for="about">About</label>
							<textarea id="about" name="about" placeholder="Write something about yourself here..."></textarea>
						</p>

						<!-- Interest -->
						<p>
							<label for="interest">Interest</label>
							<textarea id="interest" name="interest" placeholder="What are you interested in?"></textarea>
						</p>

						<!-- Study -->
						<p>
							<label for="study">Interest</label>
							<textarea id="study" name="study" placeholder="Where do you study?"></textarea>
						</p>

						<!-- Work -->
						<p>
							<label for="study">Interest</label>
							<textarea id="study" name="study" placeholder="Where do you work?"></textarea>
						</p>

						<input type="button" value="Cancel">
						<input type="submit" value="Save">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
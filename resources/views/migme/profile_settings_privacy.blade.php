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
				padding: 0 !important;
				border-width: 0px 0px 1px 0px !important;
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

			.nopadding-bottom {
				padding-bottom: 0 !important;
			}

			.profile-setting-form {
				margin-top: 0 !important;
				text-align: left;
				background-color: #fff;
				padding-right: 16px;
				padding-left: 16px;
				padding-bottom: 24px;
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

			.profile-button-container {
				text-align: center;
			}

			.profile-button-container .setting-btn {
				margin: 0 auto;
				width: 132px;
				display: inline-block;
			}

			.profile-button-container .cancel-btn {
				color: #999999;
			}

			.profile-button-container .save-btn {
				background: #6dcbc4;
				color: #ffffff;
			}			

			.profile-button-container button:first-child {
				margin-right: 12px;
			}

			.profile-button-container button:nth-child(2) {
				margin-left: 12px;
			}

			.profile-button-container button {
				line-height: 20px
				font-family: 'Lato-Regular';
				font-size: 14px;
				background: #ffffff;
				height: 44px;
				width: 100%;
				border: solid 1px #999999;
				-webkit-border-radius: 40px !important;
				-moz-border-radius: 40px !important;
				border-radius: 40px !important;
			}

			.remark {
				line-height: 20px;
				font-family: "Lato-Regular";
				font-size: 14px;
				color: #999999;
				padding: 14px 0px 14px 0px;
			}

			.no-margin-bottom {
				margin-bottom: 0px !important;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row form-container">
				<div class="form-title">					
					<strong>Decide who gets to see your stuff and get in touch</strong>
				</div>	
				<form class="form-horizontal profile-setting-form">
					
					<!-- Remark -->					
					<p class="remark">Who can chat with you?</p>
						
					<!-- Friends -->
					<div class="form-group nopadding-bottom">
						<div class="col-md-12 nopadding">
							<select class="form-control" id="gender">
								<option>Friends</option>
								<option>Anonnymous</option>
								<option>Strangers</option>
							</select>
						</div>
					</div>

					<p class="remark">Who can chat with you?</p>
						
					<!-- Who Can Be Fan? -->
					<div class="form-group no-margin-bottom nopadding-bottom">
						<div class="col-md-12 nopadding">
							<select class="form-control" id="relationship">
								<option value="1">People I approve</option>
								<option value="2">People I don't approve</option>
							</select>
						</div>							
					</div>

					<p class="remark">Only people you approve will be able to see your posts and activities. Your posts will not appear in public search results.</p>
						
					<div class="row profile-button-container">						
						<button type="button" class="btn setting-btn save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
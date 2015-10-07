<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html>
<html>
<head>
	<title>Migme invite friends template</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" async></script>

    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" async></script>

	<!-- Import font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			background-color: #EEEEEE;	
		}

		p{
			font-family: "Helvetica Neue", "HelveticaNeue-Medium", "HelveticaNeue-Light", "Helvetica Neue Light", Helvetica, Arial, "Lucida Grande", sans-serif;
		}

		.circular{
			width: 148px;
			height: 148px;
			border-radius: 124px;
			-webkit-border-radius: 124px;
			-moz-border-radius: 124px;
		}

		.container{
			width:820px;
			text-align: center;
		}
		.content-container{
			padding-top: 0px;
			margin-top: 53.333333px;
		}
		.centerred{
			margin: 0 auto;
			float: none;
		}
		.company-logo{
			width: 60px;
		}
		.invitation-text{
			margin-top: 46.533333px;
		}

		.invitation-text p{
			font-size: 2em;
			text-align: left;
			padding-right: 41px;
			padding-left: 48px;
		}

		.user-avatar{
			background-color: #EEEEEE;
			height: 148px;
			width: 100%;
			position: relative;
			margin-top: 40.8px;
		}

		.user-avatar::before{
			content: "";
			-webkit-border-radius: 6.666667px 6.666667px 0 0;
			-moz-border-radius: 6.666667px 6.666667px 0 0;
			border-radius: 6.666667px 6.666667px 0 0;
			background-color: #F9F9F9;
			position:absolute;
			top: 50%;
			right: 0;
			bottom: 0;
			width: 100%;	
			height:50%;
		}

		.user-avatar .user-image{
			position:absolute;
			top:0;
			left:0;
			right:0;
			bottom:0;
			margin:auto;
			z-index: 90;
			overflow:hidden;
		}

		.profile-container{
			/*box-shadow: 0 1.333333px 1.333333px 1.333333px rgba(0, 0, 0, .2);*/
			-webkit-border-radius: 0 0 6.666667px 6.666667px;
			-moz-border-radius: 0 0 6.666667px 6.666667px;
			border-radius: 0 0 6.666667px 6.666667px;
			background-color: #F9F9F9;
			padding-top:17.5px;
			padding-bottom: 39.066667px;
			/*margin-bottom: 15.466667;*/
		}

		.profile-container .username{
			margin-bottom: 13.333333px;
			font-family: "HelveticaNeue-Medium";
			font-size: 24px;
		}

		.profile-container .country{
			font-family: "HelveticaNeue-Light";
			font-size: 24px;
		}
		
		.user-info-list{
			margin-top: 15.466667px;
		}

		.user-info-list .counter{
			font-size: 3em;
			color: #67B8A0;
		}

		.custom-message-box{
			-webkit-border-radius: 6.666667px;
			-moz-border-radius: 6.666667px;
			border-radius: 6.666667px;
			margin-top: 40.533333px;
			padding-top: 10.666667px;
			padding-bottom: 12px;
			padding-right: 32px;
			background-color: white;
			box-shadow: 0 2pt 4pt rgba(0, 0, 0, .2);
		}

		.footer{
			margin-top: 30.5pt;
		}

		.footer .mig-intro p{
			font-size: 1.5em;
			color: #7E7065
		}

		.footer .invitation-link{
			margin-top: 37.333333pt;
		}

		.footer .invitation-link p{
			font-size: 1em;
			color: #7E7065;
		}

		.footer .copy-right{
			margin-top: 43.6px;
		}
	</style>
</head>
<body>	
	<div class="container">
		<div class="row content-container">
			<div class="col-md-12">

				<!-- Company Logo -->
				<div class="row">
					<div class="col-md-12 company-logo centerred">
						<i class="fa fa-4x fa-file-image-o"></i>
					</div>
				</div>

				<!-- Invitation Text -->
				<div class="row">
					<div class="col-md-10 col-md-offset-1 invitation-text">
						<p>
							Chi-Heng Huang wants to share photos, music, games and hottest updates with you.
						</p>
					</div>
				</div>

				<!-- User Avatar -->
				<div class="row">
					<div class="col-md-12 user-avatar">
						<div class="user-image centerred circular">
							<img src="data:image/jpeg;base64,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">
						</div>
					</div>
				</div>

				<!-- User Related Information -->
				<div class="row profile-container">
					<div class="row">
						<div class="col-md-12">
							<div class="username centerred">huangc28</div>
							<div class="country centerred">Napel</div>
						</div>
					</div>

					<!-- Display User Mig Info -->
					<div class="row user-info-list">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Fans</p>
								</div>
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Badges</p>
								</div>
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Gifts</p>
								</div>
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Groups</p>
								</div>
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Chatrooms</p>
								</div>
								<div class="col-md-2">
									<span class="counter">204</span>
									<p>Games</p>
								</div>
							</div>
						</div>
					</div><!-- End of Display Mig Info -->

					<!-- Custom Invite Message -->
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 custom-message-box">
							<p>
								custom messages
							</p>
						</div>
					</div>
				</div>
			</div>

				<div class="row">
					<div class="footer col-md-12">

						<!-- Mig Intro Text -->
						<div class="row">
							<div class="mig-intro col-md-12">
								<p>
									mig is a fun place where you can chat with friends, meet new people, join conversations and just hangout.
								</p>
							</div>
						</div>

						<!-- Show Invitation Link -->
						<div class="row">
							<div class="invitation-link col-md-8 col-md-offset-2">
								<p>
									Having problems with the link? You can also paste the following address into your browser: 
									<a href="https://register.mig.me/referral?referrer=email&invitationToken=fc01d82e5f9582cbe821f5
									65096614c5&email=migtester%40yopmail.com">https://register.mig.me/referral?referrer=email&invitationToken=fc01d82e5f9582cbe821f5
									65096614c5&email=migtester%40yopmail.com</a>
								</p>
							</div>
						</div>

						<!-- Copy Right -->
						<div class="row">
							<div class="copy-right col-md-4 col-md-offset-4">
								©2007-2015 migme Limited. All Rights Reserved.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
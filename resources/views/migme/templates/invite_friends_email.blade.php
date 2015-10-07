<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html>
<html>
<head>
	<title>Migme invite friends template</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Import font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			background-color: #EEEEEE;	
		}

		p{
			font-family: "Helvetica Neue", "HelveticaNeue-Light", "Helvetica Neue Light", Helvetica, Arial, "Lucida Grande", sans-serif;
		}

		.circular{
			width: 148px;
			height: 148px;
			border-radius: 124px;
			-webkit-border-radius: 124px;
			-moz-border-radius: 124px;
			/*border:1px solid;*/
		}

		.container{
			width: 800px;
			text-align: center;
		}
		.content-container{
			/*border:solid 1px;*/
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
			background: url(http://s.nownews.com/media_crop/21864/hash/bb/f1/bbf1e50090ae1513d3ed0b37c5af5032.jpg) no-repeat;
			z-index: 90;
		}

		.profile-container{
			width:100%;
			box-shadow: 0 1.333333px 1.333333px 1.333333px rgba(0, 0, 0, .2);
			-webkit-border-radius: 0 0 6.666667px 6.666667px;
			-moz-border-radius: 0 0 6.666667px 6.666667px;
			border-radius: 0 0 6.666667px 6.666667px;
			background-color: #F9F9F9;
			padding-top:17.5px;
			padding-bottom: 39.066667px;
		}

		.profile-container div{
			margin-bottom: 13.333333px;
			font-size: 1.5em;
		}
		
		.user-info-list{
			margin: auto 0;
			width: 100%;
		}

		.user-info-list li{
			/*border:solid 1px;*/
			width: 109.2px;
		}

		.user-info-list li .counter{
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
			width: 648px;
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

				<div class="row">
					<div class="col-md-10 col-md-offset-1 invitation-text">
						<p>
							Chi-Heng Huang wants to share photos, music,<br/> games and hottest updates with you.
						</p>
					</div>
				</div>

				<!-- User Avatar -->
				<div class>
					<div class="user-avatar">
						<div class="user-image centerred circular"></div>
					</div>
				</div>

				<!-- User Related Information -->
				<div class="profile-container">
					<div class="username">
						huangc28 
					</div>
					<div class="country">
						Nepal
					</div>

					<!-- User Information List -->
					<nav>
						<ul class="user-info-list list-inline">
							<li>
								<span class="counter">204</span>
								<p>Fans</p>
							</li>
							<li>
								<span class="counter">05</span>
								<p>Badges</p>
							</li>
							<li>
								<span class="counter">124</span>
								<p>Gifts</p>
							</li>
							<li>
								
								<span class="counter">20</span>
								<p>Groups</p>
							</li>
							<li>								
								<span class="counter">04</span>
								<p>Chatrooms</p>
							</li>
							<li>								
								<span class="counter">03</span>
								<p>Games</p>
							</li>
						</ul>
					</nav>

					<!-- Custom Invite Message -->
					<div class="custom-message-box centerred">
						<p>
							custom messages
						</p>
					</div>
				</div> <!-- End of Profile Container -->

				<div class="row">
					<div class="footer col-md-12">

						<!-- Mig Intro Text -->
						<div class="row">
							<div class="mig-intro col-md-12">
								<p>
									mig is a fun place where you can chat with friends, meet new people, join conversations
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
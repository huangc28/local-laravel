<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Migme invite friends template</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Import font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Invite Friends Email Template -->
	<link rel="stylesheet" href="{{ asset('css/invite_friends_email.css') }}">

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
							<img src="data:image/jpeg;base64,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"/>
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

					<!-- List of Posts -->
					<div class="row posts-container centerred">
						<!-- Loop Posts From here -->
						<div class="col-xs-12 col-sm-12 post">
							<div class="row">
								<div class="col-xs-2 col-sm-1">
									<!-- User Photo -->
									<div class="post-author-avatar">
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="268" oldtitle="cutmemey" title="" aria-describedby="qtip-268">
											<img src="http://img.mig.me/dp/cutmemey?w=36&amp;h=36&amp;a=1&amp;c=1" width="36" height="36" class="img-circle">
										</a>
									</div>	
								</div>

								<!-- User Name and Badges -->
								<div class="post-author-status col-xs-8 col-sm-10 no-padding-left">
									<div class="post-author"> 
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="269" oldtitle="cutmemey" title="">cutmemey</a>
									</div>
									<div class="clearfix"></div>
									<div class="post-time font-size12">
										<a href="http://mig.me/u/reiayunan/post/213460180-1444289207177">
											<time class="timeago" datetime="2015-10-08T07:26:47Z">18 mins ago</time> via Web | Location name, City, Country
										</a>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>

							<!-- Post Text -->
							<div class="row">
								<div class="col-xs-12">
									<div class="post-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									</div>
								</div>
							</div>

							<!-- User Post Image -->
							<div class="row">
								<div class="col-xs-12">
									<div class="post-image">
										<a href="http://b-img.cdn.mig.me/i/8035/db3e4c2cce2395a89b062e0c0bd0e29f9b6c/1444291907398" class="fancybox" rel="homefeed" title="jeffreykumar: There&amp;#039;s a wall in #migme office where we hang the multis/bots we kill...  #justkidding #halloween ">
            								<img class="post-image-img" src="http://b-img.cdn.mig.me/i/8035/db3e4c2cce2395a89b062e0c0bd0e29f9b6c/1444291907398">
        								</a>
									</div>
								</div>
							</div>
						</div>	

						<div class="col-xs-12 col-sm-12 post">
							<div class="row">
								<div class="col-xs-2 col-sm-1">
									<!-- User Photo -->
									<div class="post-author-avatar">
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="268" oldtitle="cutmemey" title="" aria-describedby="qtip-268">
											<img src="http://img.mig.me/dp/cutmemey?w=36&amp;h=36&amp;a=1&amp;c=1" width="36" height="36" class="img-circle">
										</a>
									</div>	
								</div>

								<!-- User Name and Badges -->
								<div class="post-author-status col-xs-8 col-sm-10 no-padding-left">
									<div class="post-author"> 
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="269" oldtitle="cutmemey" title="">cutmemey</a>
									</div>
									<div class="clearfix"></div>
									<div class="post-time font-size12">
										<a href="http://mig.me/u/reiayunan/post/213460180-1444289207177">
											<time class="timeago" datetime="2015-10-08T07:26:47Z">18 mins ago</time> via Web | Location name, City, Country
										</a>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>
						</div>	
						
						<div class="col-xs-12 col-sm-12 post">
							<div class="row">
								<div class="col-xs-2 col-sm-1">
									<!-- User Photo -->
									<div class="post-author-avatar">
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="268" oldtitle="cutmemey" title="" aria-describedby="qtip-268">
											<img src="http://img.mig.me/dp/cutmemey?w=36&amp;h=36&amp;a=1&amp;c=1" width="36" height="36" class="img-circle">
										</a>
									</div>	
								</div>

								<!-- User Name and Badges -->
								<div class="post-author-status col-xs-8 col-sm-10 no-padding-left">
									<div class="post-author"> 
										<a href="http://mig.me/u/cutmemey" class="profile-hovercard" data-username="cutmemey" data-hasqtip="269" oldtitle="cutmemey" title="">cutmemey</a>
									</div>
									<div class="clearfix"></div>
									<div class="post-time font-size12">
										<a href="http://mig.me/u/reiayunan/post/213460180-1444289207177">
											<time class="timeago" datetime="2015-10-08T07:26:47Z">18 mins ago</time> via Web | Location name, City, Country
										</a>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>
						</div>			
					</div><!-- End of Posts -->
				</div>
			</div>
			<div class="row footer">
				<div class="col-md-12">

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
						<div class="copy-right col-md-6 col-md-offset-3">
							©2007-2015 migme Limited. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
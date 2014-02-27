<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/holding.js"></script>
	</head>
	<body>
		<div class="overlay"></div>
		<div class="feature">
			<div class="content">
				<div class="logo"></div>
				<div class="first">
					<div class="title">
						The Degree Show
					</div>
					<div class="description">
						16th - 20th June 2014
					</div>
					<div class="newsletter">
						<button class="news" onclick="app.signUp()">Sign up for news</button>
					</div>
				</div>
				<div class="second">
					<input class="title _email" type="text" placeholder="" ></input>
					<div class="description">
						&uarr; Type your email &uarr; 
					</div>
					<div class="newsletter">
						<button class="news" onclick="app.completeSignUp()">Sign up</button>
					</div>
				</div>
				<div class="third">
					<div class="title">
						Thank You
					</div>
					<div class="description">
						Watch this space.
					</div>
				</div>
			</div>
			
		</div>
		<footer>
		
		</footer>
	</body>
</html>
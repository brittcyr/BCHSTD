<?php session_start();?>
<html>
	<head>
		<title>Fantasy Politics</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/candidates.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
	</head>

	<body background="flag.jpg">
		<div id="top">
			<div id="logo">
				<img src="icon_images/icon-usmap.png" />
			</div>
			<div id="navbar">
			  <?php require_once 'navbar.php'; ?>
			</div>		
		</div>

		<div id="main">
			<div id="Candidate1">
				<a href="http://www.mittromney.com" target="_blank">
					<h1>Romney</h1>
				<img src="candidates/romney.jpg" />
				</a>
			</div>
			<div id="Candidate2">
				<a href="http://www.ronpaul2012.com" target="_blank">
					<h1>Paul</h1>
				<img src="candidates/paul.jpg" />
				</a>
			</div>
			<div id="Candidate3">
				<a href="http://www.ricksantorum.com" target="_blank">
					<h1>Santorum</h1>
				<img src="candidates/santorum.jpg" />
				</a>
			</div>
			<div id="Candidate4">
				<a href="http://www.newt.org" target="_blank">
					<h1>Gingrich</h1>
				<img src="candidates/gingrich.jpg" />
				</a>
			</div>
		</div>	

	</body>
</html>

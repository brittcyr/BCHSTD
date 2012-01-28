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
				<a href="http://www.mittromney.com">
					<h1>Romney</h1>
				</a>
				<img src="candidates/romney.jpg" />
			</div>
			<div id="Candidate2">
				<a href="http://www.ronpaul2012.com">
					<h1>Paul</h1>
				</a>
				<img src="candidates/paul.jpg" />
			</div>
			<div id="Candidate3">
				<a href="http://www.ricksantorum.com">
					<h1>Santorum</h1>
				</a>
				<img src="candidates/santorum.jpg" />
			</div>
			<div id="Candidate4">
				<a href="http://www.newt.org">
					<h1>Gingrich</h1>
				</a>
				<img src="candidates/gingrich.jpg" />
			</div>
		</div>	

	</body>
</html>

<?php
echo 'Welcome, ' . $_SESSION['user'];
?>

<html>
	<head>
		<title> Fantasy Politics </title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
	</head>
	<body>
		<div id="top">
			<div id="Logo">
				<img src="icon_images/icon-usmap.png"/>
			</div>
			<div id="NavBar">
				<a href="candidates.html"> Candidates </a>
				<a href="home.php"> Home </a>
				<a href="map.php"> Map </a>
				<a href="logout.php"> Logout </a>
			</div>
		</div>
		<div id="main">
			<div id="news_feed">

			</div>
			<div id="profile">
				<h1> Profile </h1>

			</div>
		</div>
		<div id="bottom">
			<div id="friend_scoreboard">

			</div>
			<div id="overall_scoreboard">

			</div>
		</div>
	</body>
</html>

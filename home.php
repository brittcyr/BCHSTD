<!-- Home Page --!>
<?php
session_start();
$_SESSION['test'] = 'hi';
require 'db.php';
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$confirm = htmlspecialchars($_POST['confirm_password']);
$password = sha1($password);
$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$result = mysql_query($query) or die(mysql_error());
mysql_close($db);
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
				<a href="home.html"> Home </a>
				<a href="map.html"> Map </a>
				<a href="index.html"> Logout </a>
			</div>
		</div>
		<div id="main">
			<div id="news_feed">
				<!-- RSS News Feed --!>
			</div>
			<div id="profile">
				<h1> Profile </h1>
				<!-- Profile (Picture, email, et cetera --!>
			</div>
		</div>
		<div id="bottom">
			<div id="friend_scoreboard">
				<!-- Friend scoreboard --!>
			</div>
			<div id="overall_scoreboard">
				<!-- Overall scoreboard --!>
			</div>
		</div>
	</body>
</html>

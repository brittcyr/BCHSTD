<?php
require_once 'db.php';
session_start();
if (!isset($_SESSION['user']))
{
session_destroy();
header('Location:index.php');}
?>

<html>
	<head>
		<title>Map</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
	</head>

	<body>
		<div id="top">
			<div id="logo">
				<img src="icon_images/icon-usmap.png" />
			</div>
			<div id="navbar">
				<a href="candidates.php"> Candidates </a>
				<a href="home.php"> Home </a>
				<a href="map.php"> Map </a>
				<a href="logout.php"> Logout </a>
			</div>		
		</div>

		<div id="main">
			<div id="score">

			</div>

			<div id="map>

			</div>

			<div id="picks_or_results">

			</div>
		</div>	

	</body>
</html>

<?php
require_once 'db.php';
session_start();
if (!isset($_SESSION['user']))
   {require 'logout.php';  exit();}
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
				<a href="candidates.php"> Candidates </a>
				<a href="home.php"> Home </a>
				<a href="map.php"> Map </a>
				<a href="logout.php"> Logout </a>
			</div>
		</div>

<?php echo 'Welcome, ' . $_SESSION['user']; ?>

		<div id="main">
			<div id="news_feed">
			  <h1> Political News </h1>
			</div>

			<div id="profile">
			  <h1> Profile </h1>
			  <?php require ("home/profile.php"); ?>
                        </div>
		</div>
		<div id="bottom">
			<div id="upcoming_picks">
			  <h1> Upcoming Picks </h1>
			  <?php require ("home/upcoming_picks.php"); ?>
			</div>
			<div id="overall_scoreboard">
			  <h1> Overall Scoreboard </h1>
			</div>
		</div>
	</body>
</html>


<?php
mysql_close($db);
?>

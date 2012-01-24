<?php
require_once 'db.php';
session_start();
if (!isset($_SESSION['user'])){
   session_destroy();
   header('Location:index.php');
   exit();}
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
				<a href="candidates.php"> Candidates </a>
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
 <form class="forms" action="update_profile.php" method="post">
	Email: <input type="text" name="user_email"/> <br/>
	Password: <input id="text1" type="password" name="user_password"/> <br/>
	Confirm Password: <input id="text2" type="password" name="confirm_password"/> <br/>
	<input id="button1" type="submit" value="Submit!" />
      </form>
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


<?php
mysql_close($db);
?>

<?php
require_once 'db.php';
session_start();
if (!isset($_SESSION['user'])){
   session_destroy();
   header('Location:index.php');
   exit();}
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

<?php
echo 'Welcome, ' . $_SESSION['user'];
?>

		<div id="main">
			<div id="news_feed">
			  
			</div>
			<div id="profile">
				<h1> Profile </h1>
 <form class="forms" action="update_profile.php" method="post">

<?php
echo	'Email: <input id="user_email" type="text" name="user_email" value="'
                . $_SESSION['user'] .'"/> <br/>';
?>
	Password: <input id="text1" type="password" name="user_password"/> <br/>
	Confirm Password: <input id="text2" type="password" name="confirm_password"/> <br/>
	Home State: <input id="home_state" type="text" name="home_state"/> <br/>
	Political Party: <input id="party" type="text" name="party"/> <br/>
	<input id="button1" type="submit" value="Submit!" />
      </form>
			</div>
		</div>
		<div id="bottom">
			<div id="friend_scoreboard">
			  <h1> Friend Scoreboard </h1>
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

<?php
require_once 'db.php';
require_once 'library.php';
require_once 'checkcookies.php';
session_start();
if (!isset($_SESSION['user']))
   {require 'logout.php';  exit();}
$user = $_SESSION['user'];
?>

<html>
	<head>
		<title> Fantasy Politics </title>
    		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/home2.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
		<script type="text/javascript" src="javascript/home.js"> </script>
	</head>
	<body background="images/flag.jpg">
		<script>
			var el = document.getElementsByTagName("body")[0];
			el.className = "";
		</script>
	      <div id="fb-root"></div>
	      <script>(function(d, s, id) {
  	      	var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=202773199813124";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="top">
		<div class="inner">
			<div id="Logo">
				<h3> chooseyourchief.com<h3>
			</div>
			<nav id="NavBar">
			  <?php require_once 'navbar.php'; ?>
			</nav>
		</div>
		</div>
		
		<div id="main">
		<div id="super">
			<div class="inner">
		   	<div id="header">
				<span id="score"> Current Score is:
				<?php $score = getscore("$user"); echo "$score"; ?> </span>
				<span id="rank"> You are ranked: 
				<?php $score = getrank("$user"); echo "$score"; ?>
				 out of 
				<?php $score = gettotalplayers(); echo "$score"; ?> </span>
			</div>
			<div id="rss">
				<h1> Political News </h1>
				<?php require_once 'home/getrss.php'; ?>
			</div>
			<div id="welcome">
				<h3>
				<?php echo 'Welcome, ' . getusername($_SESSION['user']); ?> 
				</h3>
				<p>
				To get started, go to the map page and predict the winner of each state's primary!
				</p>
				<a href="map.php"> Make Predictions! </a>
			</div>
			<div id="profile">
				<h1> My Information </h1>
			  	<?php require ("home/profile.php"); ?>
			</div>
			<div class="fb-like-box" data-href="https://www.facebook.com/pages/ChooseYourChiefcom/244029609004737" data-width="300" data-height="600" data-show-faces="true" data-stream="true" data-header="true">
			</div>

		<div class="inner">
			<div id="upcoming_picks">
			  <h1> Upcoming Picks </h1>
			  <?php require ("home/upcoming_picks.php"); ?>
			</div>
			<div id="my_results">
				<h1> My Results </h1>
				<?php require ("home/my_results.php"); ?>
			</div>
		</div>
		</div>
		</div>
		<script src="javascript/jquery.js"></script>
		<script src="javascript/modernizr.js"></script>
		<script>
			(function($){
				var nav = $("#navbar");

				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));

						$(this).mouseenter(function(){
							$(this).find("ul").stop(true, true).slideDown(70);
						});

						$(this).mouseleave(function(){
							$(this).find("ul").stop(true, true).slideUp(200);
						});
					}
				});
			})(jQuery);
		</script>
	</body>
	<div id="overlay">

	</div>
	
	<div id="change_profile">
			
			<a id="close" href="#" onclick="saveChanges();"> <img src="icon_images/close.gif"/></a>
			<form class="forms" id="signup_form" action="signup.php" method="post">
		
				<h1> Profile </h1>
			  <?php require ("home/profile_change.php"); ?>
	</div>

</html>


<?php
mysql_close($db);
?>

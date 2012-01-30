<?php
require_once 'library.php';
require_once 'db.php';
require_once 'checkcookies.php';
session_start();
if(isset($_SESSION['user']))
{header('Location:home.php');}
?>
<html>

	<head>
		<title> Fantasy Politics </title>
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/index_menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/index_main.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/index_bottom.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/signup_login.css">
	<script type="text/javascript" src="javascript/signin_login.js"></script>
	</head>
	<body background="images/flag.jpg">
    		<div id="top">
			<div class="inner">
     				 <div id="Logo">
					<h3> chooseyourchief.com </h3>
      				</div>
      				<div id="NavBar">
					<div id="login">
						<form class="forms" action="login.php" method="post">
							<input id="user_email" type="text" name="user_email" placeholder="Username or Email"/>
							<input id="login_password" type="password" name="user_password" placeholder="Password"/>
							<input id="button2" type="submit" value="Login" />
	    					</form>
					</div>
      				</div>
			</div>
    		</div>
		<div id="super">
          	<div id="main">
			<div class="inner">
				<h1 id="title"> Fantasy Politics </h1> 

    	  			<div id="main_image">
					<img src="icon_images/main_logo.png"/>
     	 			</div>
      				<div id="main_right">
					<ul id="description">
						<li> Predict the result of every Republican primary!</li>
						
						<li> Compete against people all over the country! </li>
						<li> Keep up with the latest political news! </li>
						<li> Track the primary results! </li>
						
						<li> Use our interactive map! </li>
					</ul>
					<a href="#" onclick="view('outer')"> Create a Profile!  </a>
        			</div>
			</div>
		</div>
		<div id="bottom">
			<div class="inner">
      				<div id="bottom_left" class="bottom_third">
					<a href="candidates.php">
	 					 <h1> Meet the Candidates <h1>	
	  					<img src="images/candidates.jpg"/>
					</a>
      				</div>
      				<div id="bottom_center" class="bottom_third">
					<a href="leaderboard.php">
	  					<h1> Leaderboard <h1>
	 					 <img src="images/leaderboard.jpg"/>
					</a>
      				</div>
      				<div class="bottom_third">
					<a href="about_us.php">
	  					<h1> About Us </h1>
	  					<img src="images/about_us2.jpg"/>
					</a>
      				</div>
			</div>
		</div>
		</div>
		<div id="outer">
		</div>
		<div id="signup">
			<a id="close" href="#" onclick="hide('outer')"> <img src="icon_images/close.gif"/></a>
			<form class="forms" id="signup_form" action="signup.php" method="post">
				<h1> Create Your Profile <h1>
				<div id="form_a"/>
					Username <br/>
					Email <br/>
					Password <br/>
					Confirm Password <br/>
				</div>
				<div id="form_b">
					<input id="text5" type="text" name="username" onkeyup="checkSubmit()"/><br/> 
					<input id="text3" type="text" name="user_email" onkeyup="checkSubmit()" /> <br/>
					<input id="text1" type="password" name="user_password" onchange="checkSubmit()" onkeyup="checkSubmit()"/> <br/>
					<input id="text2" type="password" name="confirm_password" onchange="checkSubmit()" onkeyup="checkSubmit()"/><br/>
				</div>
				<div id='x_check'>
					<img id="x" src="images/x.png"/> <img id="check" src="images/check.png" style="display:none;"/>
				</div>
				<div id="help_message"> Reminder: The password must be at least six characters or numbers
				 </div>
				<div id="button1div">
					<input id="button1" type="submit" value="Sign Up!!" />
				</div>
      			</form>
		</div>

	</body>
</html>

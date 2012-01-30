<html>
 <head>
    <title> Fantasy Politics </title>
    <link rel="SHORTCUT ICON" href="images/icon.jpg"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/index_main.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/index_bottom.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/signup_login.css">
    <script type="text/javascript" src="javascript/signin_login.js"></script>
  </head>
  <body background="images/flag.jpg">
    <div id="top">
		<div id="Logo">
			<?php require_once 'logo.php'; ?>
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
          <div id="main">

      <div id="main_image">
	<img src="icon_images/main_logo.png"/>
      </div>
      <div id="page_title">
	<h1 id="title"> Fantasy Politics </h1> <br/>
     	 <form class="forms" id="signup_form" action="signup.php" method="post">
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
	<span id="help_message">Reminder: The password must be at least six characters or numbers </span>
	<div id="button1div">
	<input id="button1" type="submit" value="Sign Up!!" />
	</div>
      </form>
    </div>
    </div>
    <div id="bottom">
      <div class="bottom_third">
	<a href="candidates.php">
	  <h1> Meet the Candidates <h1>	
	  <img src="images/candidates.jpg"/>
	</a>
      </div>
      <div class="bottom_third">
	<a href="leaderboard.php">
	  <h1> Leaderboard <h1>
	  <img src="images/leaderboard.jpg"/>
	</a>
      </div>
      <div class="bottom_third">
	<a href="about_us.php">
	  <h1> About Us </h1>
	  <img src="images/about_us.jpg"/>
	</a>
      </div>
    </div>
      </body>
</html>

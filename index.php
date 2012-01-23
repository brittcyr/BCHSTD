<html>
 <head>
    <title> Fantasy Politics </title>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/signup_login.css"/>
    <script type="text/javascript" src="index_js/signin_login.js"></script>
  </head>
  <body>
    <div id="top">
      <div id="Logo">
	<img src="icon_images/icon-usmap.png"/>
      </div>
      <div id="NavBar">
	<a id="link1" href="#" onclick="view('signup')"> Sign Up </a>
	<a id="link2" href="#" onclick="view('login')"> Login </a>
      </div>
    </div>
    <div id="main">
      <div id="main_image">
	<img src="icon_images/main_logo.png"/>
      </div>
      <div id="page_title">
	<h1> Fantasy Politics </h1>
      </div>
    </div>
    <div id="bottom">
      <div class="bottom_third">
	<a href="candidates.php">
	  <img src="images/candidates.jpg"/>
	</a>
      </div>
      <div class="bottom_third">
	<a href="leaderboard.php">
	  <img src="images/leaderboard.jpg"/>
	</a>
      </div>
      <div class="bottom_third">
	<a href="about_us.php">
	  <img src="images/about_us.jpg"/>
	</a>
      </div>
    </div>
    <div id="signup">
      <form class="forms" action="signup.php" method="post">
	<a href="#" onclick="hide('signup')"> Close </a>
	Email: <input type="text" name="user_email"/> <br/>
	Password: <input id="text1" type="password" name="user_password" onchange="passwordCheck()" onkeyup="passwordCheck()"/> <br/>
	Confirm Password: <input id="text2" type="password" name="confirm_password" onchange="passwordCheck()" onkeyup="passwordCheck()"/> <img id="x" src="images/x.png"/> <img id="check" src="images/check.png"/> <br/>
	<div id="help_message">Reminder: The password must be at least six characters or numbers </div>
	<input id="button1" type="submit" value="Sign Up!!" />
      </form>
    </div>
    <div id="login">
      <form class="forms" action="login.php" method="post">
	<a href="#" onclick="hide('login')"> Close </a>
	Email: <input type="text" name="user_email"/> <br/>
	Password: <input type="password" name="user_password"/> <br/>
	<input id="button2" type="submit" value="Login" />
      </form>

    </div>
  </body>
</html>

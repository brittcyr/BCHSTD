<html>
 <head>
    <title> Fantasy Politics </title>
    <link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/signup_login.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/index_main.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/index_bottom.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
    <script type="text/javascript" src="javascript/signin_login.js"></script>
  </head>
  <body background="images/flag.jpg">
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
	<h1> Fantasy Politics </h1> <br/>
	<button id="signup_button" type="button" onclick="view('signup')"> Sign Up </button> <br/>
	<button id="login_button" type="button" onclick="view('login')"> Login </button>
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
    <div id="signup">
	<a href="#" onclick="hide('signup')"><img class="close_button" src="icon_images/close.gif"/></a>
      <form class="forms" action="signup.php" method="post">
		Email: <input id="text3" type="text" name="user_email" onkeyup="emailCheck()"/> <br/>
	Password: <input id="text1" type="password" name="user_password" onchange="passwordCheck()" onkeyup="passwordCheck()"/> <br/>
	Confirm Password: <input id="text2" type="password" name="confirm_password" onchange="passwordCheck()" onkeyup="passwordCheck()"/> <br/>
	<div id="help_message">Reminder: The password must be at least six characters or numbers </div>
	<input id="button1" type="submit" value="Sign Up!!" />
      </form>
<img id="x" src="images/x.png"/> <img id="check" src="images/check.png"/> 
    </div>
    <div id="login">
	<a href="#" onclick="hide('login')"> <img class="close_button" src="icon_images/close.gif"/></a>
      <form class="forms" action="login.php" method="post">
	Username or Email: <input id="user_email" type="text" name="user_email"/> <br/>
	Password: <input type="password" name="user_password"/> <br/>
	<input id="button2" type="submit" value="Login" />
      </form>

    </div>
  </body>
</html>

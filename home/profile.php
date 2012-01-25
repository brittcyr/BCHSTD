<?php
session_start();
?>
        <form class="forms" action="update_profile.php" method="post">

<?php
echo	'Email: <input id="user_email" type="text" name="user_email" value="'
                . $_SESSION['user'] .'"/> <br/>';
?>
	Password: <input id="text1" type="password" name="user_password"/> <br/>
	Confirm Password: <input id="text2" type="password" name="confirm_password"/> <br/>
	Home State: <input id="home_state" type="text" name="home_state"/> <br/>
	Political Party: <input id="party" type="text" name="party"/> <br/>
	<input id="button1" type="submit" value="Change Profile" />
      </form>

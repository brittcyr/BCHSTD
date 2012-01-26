<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

$email = $_SESSION['user'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$home_state = $result['home_state'];
$political_party = $result['political_party'];
?>
        <form class="forms" action="home/update_profile.php" method="post">

<?php
echo	'Email: <input id="user_email" type="text" name="user_email" value="'
                . $_SESSION['user'] .'"/> <br/>' . "\n";

echo	'Password: <input id="text1" type="password" name="user_password"/> <br/>';
echo	'Confirm Password: <input id="text2" type="password" name="confirm_password"/> <br/>';

if ($home_state == '')
{echo	'Home State: <input id="home_state" type="text" name="home_state" /> <br/>';}
else{ echo	'Home State: <input id="home_state" type="text" name="home_state" value='. "$home_state /> <br/>";}

if ($political_party == '')
{echo	'Political Party: <input id="political_party" type="text" name="political_party" /> <br/>';}else
{echo	'Political Party: <input id="political_party" type="text" name="political_party" value='. "$political_party" .  " /> <br/>";}
?>
	<input id="button1" type="submit" value="Change Profile" />
      </form>

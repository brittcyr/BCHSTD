
<?php
session_start();
require 'db.php';
if (isset($_POST['user_email'])) {
	$email = htmlspecialchars($_POST['user_email']);
	$password = htmlspecialchars($_POST['user_password']);
	$password = sha1($password);

	$query = "SELECT count(*) from users WHERE email='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

	if ($result<1) {
		       echo 'Invalid email or password';
		include 'index.php';		
	} else {
	$query = "SELECT password from users WHERE email='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

        if($result==$password){echo 'Success   '; 
		       $_SESSION['user']  = $email;
		       include 'home.php';}

		       else{
		       echo 'Invalid email or password'; include 'index.php';
		       }
	}
}
mysql_close($db);
?>


<?php
session_start();
$_SESSION['test'] = 'hi';
require 'db.php';
if (isset($_POST['user_email'])) {
	$email = htmlspecialchars($_POST['user_email']);
	$password = htmlspecialchars($_POST['user_password']);
	$confirm = htmlspecialchars($_POST['confirm_password']);
	$password = sha1($password);

	$query = "SELECT count(*) from users WHERE email='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

	if ($result>0) {
		echo 'Error, email already used';
		include 'index.php';		
	} else {
		$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
		$result = mysql_query($query) or die(mysql_error());
                include 'home.php';
	}
}

mysql_close($db);
?>

<?php
session_start();
require_once 'db.php';
require_once 'library.php';
if (isset($_POST['user_email'])) {
	$email = htmlspecialchars($_POST['user_email']);
	$password = htmlspecialchars($_POST['user_password']);
	$password = sha1($password);

        $_SESSION['failed'] = $email;

        $parts = explode("@",$email);
        $count = count($parts);

	$query = "SELECT COUNT(*) 
		  FROM users 
		  WHERE email='$email'
		   OR username='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

	if ($result<1) {
		      header('Location:index.php');		
	} else {
	$query = "SELECT password 
		  FROM users 
		  WHERE email='$email'
		   OR username='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

        if($result<>$password){
		       header('Location:index.php');}
else
{
unset($_SESSION['failed']);
header('Location:home.php');
//-----------SUCCESSFUL LOGIN NEED TO DETERMINE IF WAS USERNAME OR EMAIL-----------

	$query = "SELECT COUNT(*) 
		  FROM users 
		  WHERE email='$email'";
	$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

if ($result == 1)
{$_SESSION['user']  = $email;}
else 
{
$username = $email;
$email = getemail($username);
$_SESSION['user']  = $email;
}
setcookie('user', $email, time() + 314496000);

}

	}
}
else
{header('Location:index.php');}
mysql_close($db);
?>

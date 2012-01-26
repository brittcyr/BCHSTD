<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

$server= $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
$extra = 'home.php';
header("Location: http://$server$uri/$extra");

//-------------------UPDATE EMAIL--------------------
if (isset($_POST['user_email']) && $_POST['user_email'] <> $_SESSION['user']){
$email = htmlspecialchars($_POST['user_email']);
$oldemail = $_SESSION['user'];

$isvalidemail = checkemail($email);
$isemailtaken = isemailtaken($email);

if ($isvalidemail <> 0 && $isemailtaken <>0)
{
$query = "UPDATE users SET email='$email' WHERE email='$oldemail'";
$result = mysql_query($query) or die(mysql_error());
$_SESSION['user'] = $email;}
}


//------------------------UPDATE PASSWORD------------------------
if (isset($_POST['user_password']) && isset($_POST['confirm_password'])) {
$password = htmlspecialchars($_POST['user_password']);
$confirm = htmlspecialchars($_POST['confirm_password']);
$user = $_SESSION['user'];

if (checkpassword($password,$confirm)<>0)
{ 
$password = sha1($password);
$user = $_SESSION['user'];
$query = "UPDATE users SET password='$password' WHERE email ='user'";
$result = mysql_query($query) or die(mysql_error());
}
}


//------------------------UPDATE HOME STATE------------------------
if (isset($_POST['home_state'])) {
$home_state = htmlspecialchars($_POST['home_state']);

$user = $_SESSION['user'];

$query = "UPDATE users SET home_state='$home_state' WHERE email ='$user'";
$result = mysql_query($query) or die(mysql_error());
}


//------------------------UPDATE POLITICAL PARTY------------------------
if (isset($_POST['political_party'])) {
$party = htmlspecialchars($_POST['political_party']);

$user = $_SESSION['user'];

$query = "UPDATE users SET political_party='$party' WHERE email ='$user'";
$result = mysql_query($query) or die(mysql_error());
}


mysql_close($db);
?>

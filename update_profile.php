<?php
session_start();
require_once 'db.php';
if (isset($_POST['user_email'])) {
$email = htmlspecialchars($_POST['user_email']);

$email_split = explode('@',$email);
if ( count($email_split) <>  2){
header('Location:home.php'); mysql_close($db);
exit();}

$name = $email_split[0];
$domain = $email_split[1];

$domain_split = explode('.',$domain);
if ( count($domain_split) <>  2){
header('Location:home.php'); mysql_close($db);
exit();}

$query = "SELECT COUNT(*) FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];

if ($result>0) {header('Location:home.php'); exit();}
else {
       $query = "UPDATE users SET email=$email WHERE email=$_SESSION['user']";
       $result = mysql_query($query) or die(mysql_error());
       $_SESSION['user'] = $email;
       header('Location:home.php'); exit();
     }
}


if (isset($_POST['user_password'] && isset($_POST['confirm_password']))) {
$password = htmlspecialchars($_POST['user_password']);
$confirm = htmlspecialchars($_POST['confirm_password']);

if ($password <> $confirm)
{header('Location:index.php'); mysql_close($db); exit();}

if (strlen("$password")<6)
{header('Location:index.php'); mysql_close($db); exit();}
$password = sha1($password);


       $query = "UPDATE users SET password=$password WHERE email = $_SESSION['user']";
       $result = mysql_query($query) or die(mysql_error());
       header('Location:home.php');
     }
}
mysql_close($db);
?>

<?php
session_start();
require_once 'db.php';
if (isset($_POST['user_email'])) {
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$confirm = htmlspecialchars($_POST['confirm_password']);

if ($password <> $confirm)
{header('Location:index.php');}

$password = sha1($password);

$email_split = explode('@',$email);
if ( count($email_split) <>  2){
header('Location:index.php');
exit();}

$name = $email_split[0];
$domain = $email_split[1];

$domain_split = explode('.',$domain);
if ( count($domain_split) <>  2){
header('Location:index.php');
exit();}

$query = "SELECT COUNT(*) FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];

if ($result>0) {header('Location:index.php');}
else {
       $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
       $result = mysql_query($query) or die(mysql_error());
       $_SESSION['user'] = $email;
       header('Location:home.php');
     }
}
mysql_close($db);
?>

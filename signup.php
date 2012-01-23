<?php
session_start();
require_once 'db.php';
if (isset($_POST['user_email'])) {
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$confirm = htmlspecialchars($_POST['confirm_password']);
        if ($password <> $confirm)
        {echo 'Error, confirm password, try again'; include 'index.php';}
$password = sha1($password);

$query = "SELECT COUNT(*) FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
        $result = mysql_fetch_array($result);
        $result = $result[0];

 

if ($result>0) {
                header('Location:index.php');
} else {
$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$result = mysql_query($query) or die(mysql_error());
                $_SESSION['user'] = $email;
                header('Location:home.php');
}
}

mysql_close($db);
?>

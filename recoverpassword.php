<?php

$email = $_POST['user_email'];
require_once 'library.php';

resetpassword($email);

header('Location:index.php');

session_start();
unset($_SESSION['failed']);

?>

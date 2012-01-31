<?php

session_start();
unset($_SESSION['failed']);
session_destroy();
setcookie('user', '', time()-3600);
header('Location:index.php');

?>

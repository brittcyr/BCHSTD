<?php
session_start();
if (!isset($_SESSION['user']) && isset($_COOKIE['user']))
{$_SESSION['user']=$_COOKIE['user'];}
?>

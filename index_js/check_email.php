<?php
session_start();
require_once 'db.php';

$email = $_GET(['email']);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');

if (count($result) == 0){
	echo "true";
} else {
	echo "false";
}

mysql_close($db);
?>

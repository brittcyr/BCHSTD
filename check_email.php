<?php
session_start();
require_once 'db.php';

$email = htmlspecialchars($_GET['email']);

$query = "SELECT email FROM users";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
echo $result[0]

if (($result[0]) == $email){
	echo "true";
} else {
	echo "false";
}

mysql_close($db);
?>

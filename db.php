<?php
$host = 'sql.mit.edu';
$username = 'hsharon';
$password = 'hsharon';
$db = mysql_connect($host, $username, $password) or die('Could not connect: ' . mysql_error());
mysql_select_db('hsharon+6.470');
?>

<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$username = $_GET['username'];
$result = isusernametaken($username);
$result2 = checkusername($username);

echo "$result"."$result2";

?>

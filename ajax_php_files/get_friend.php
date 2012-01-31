<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$friend = $_GET['friend'];

$result = pull_friend_selections($friend);

print_r($result);

?>

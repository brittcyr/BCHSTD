<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$state = $_GET['state'];
$candidate = $_GET['candidate'];

insert_user_selection($state, $candidate);
echo 'done';

?>

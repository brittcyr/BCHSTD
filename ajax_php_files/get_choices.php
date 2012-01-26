<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$result = pull_user_selections();
echo 'done';

?>

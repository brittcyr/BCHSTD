<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$inp = $_GET['inp'];

$result = autocompletesuggestion($inp);

print_r($result);

?>

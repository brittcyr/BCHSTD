<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$email = $_GET['email'];
$result = isemailtaken($email);

echo $result;

?>


<?php

$source = dirname(dirname(__FILE__));
require_once "$source" . "/library.php";

$result = pull_popular_picks();

print_r($result);

?>

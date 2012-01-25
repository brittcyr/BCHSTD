<?php

function checkemail($email)
{
$email_split = explode('@',$email);
if ( count($email_split) <>  2){return 0;}

$name = $email_split[0];
$domain = $email_split[1];

$domain_split = explode('.',$domain);
if ( count($domain_split) <>  2){return 0;}

return 1;
}

function checkpassword($password, $confirm)
{
if ($password <> $confirm)
{return 0;}

if (strlen("$password")<6)
{return 0;}

return 1;
}


function isemailtaken($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT COUNT(*) FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
$result = 1 - min($result,1);
return $result;
}

?>

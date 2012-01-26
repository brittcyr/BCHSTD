<?php

function checkemail($email)
{
$email_split = explode('@',$email);
if (count($email_split) <>  2){return 0;}

$name = $email_split[0];
$domain = $email_split[1];

$domain_split = explode('.',$domain);
if (count($domain_split) <>  2){return 0;}

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



function getusername($email)
{
$email_split = explode('@',$email);
return $email_split[0];
}




function getscore($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT current_score FROM users WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
return $result;
}



function getrank($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$score = getscore("$email");
$query = "SELECT COUNT(*) FROM users WHERE current_score > '$score'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0] + 1;
mysql_close($db);
return $result;
}


function gettotalplayers()
{
require_once 'db.php';
$query = "SELECT COUNT(*) FROM users";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
return $result;
}


function insert_user_selection($state, $candidate)
{
require_once 'db.php';
session_start();
$email = $_SESSION['user'];
$query = "SELECT count(*) FROM user_selections WHERE email='$email' AND state='$state'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];

$query = "UPDATE user_selections SET candidate='$candidate' WHERE email='$email' AND state='$state'";
if ($result == 0)
{$query = "INSERT INTO user_selections (email, state, candidate) VALUES ('$email', '$state', '$candidate')";}

$result = mysql_query($query) or die('bad query');
mysql_close($db);
}

function testconnect($a){return $a;}


function pull_user_selections()
{
require_once 'db.php';
session_start();
$email = $_SESSION['user'];
$query = "SELECT A.state, A.candidate FROM user_selections AS A WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
return $result;
mysql_close($db);
}

}


?>

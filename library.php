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

function checkusername($username)
{

if (strlen("$username")<6)
{return 0;}

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

function isusernametaken($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT COUNT(*) 
	  FROM users 
	  WHERE username='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
$result = 1 - min($result,1);
return $result;
}


function isemailtaken($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT COUNT(*) 
	  FROM users 
	  WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
$result = 1 - min($result,1);
return $result;
}



function getusername($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT username 
	  FROM users 
	  WHERE email='$email'";

$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
return $result;
}

function getemail($username)
{
require_once 'db.php';
$username = htmlspecialchars($username);
$query = "SELECT email 
	  FROM users
	  WHERE username='$username'";

$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
mysql_close($db);
return $result;
}


function getscore($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$query = "SELECT SUM(B.DELEGATES) 
	  FROM user_selections AS A JOIN results AS B 
	    ON A.state = B.state 
	  WHERE A.email='$email' AND A.candidate = B.candidate";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
$result = 0 + $result;
mysql_close($db);
return $result;
}



function getrank($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);
$score = getscore("$email");
$query = "SELECT SUM(B.DELEGATES) AS SCORE, A.EMAIL AS EMAIL 
	  FROM user_selections AS A JOIN results AS B 
	    ON A.state = B.state 
	  WHERE A.candidate = B.candidate 
	  GROUP BY A.EMAIL 
	  ORDER BY SCORE DESC, A.EMAIL ASC";
$result = mysql_query($query) or die('bad query');
$count = 1;
while ($row = mysql_fetch_array($result))
{
if ($row['EMAIL']==$email || $row['SCORE']==$score)
{break;}
$count++;
}
mysql_close($db);
return $count;
}


function gettotalplayers()
{
require_once 'db.php';
$query = "SELECT * 
	  FROM user_selections 
	  GROUP BY email";
$result = mysql_query($query) or die('bad query');
$count = 0;
while ($row = mysql_fetch_array($result))
{
$count++;
}
mysql_close($db);
return $count;
}


function insert_user_selection($state, $candidate)
{
require_once 'db.php';
session_start();
$email = $_SESSION['user'];
if ($email == ''){return;}
$query = "SELECT count(*) 
	  FROM user_selections 
	  WHERE email='$email' AND state='$state'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];

$query = "UPDATE user_selections 
	  SET candidate='$candidate' 
	  WHERE email='$email' AND state='$state'";
if ($result == 0)
{$query = "INSERT INTO user_selections (email, state, candidate) 
	   VALUES ('$email', '$state', '$candidate')";}

$result = mysql_query($query) or die('bad query');
mysql_close($db);
}

function testconnect($a){return $a;}


function pull_results()
{
require_once 'db.php';
session_start();
$query = "SELECT A.state, A.candidate 
	  FROM results AS A 
	  WHERE candidate IS NOT NULL AND candidate <>''";
$result = mysql_query($query) or die('bad query');
$return = '';
while($row = mysql_fetch_array($result))
{
$return = "$return" . '!' . $row['state'] . '#' . $row['candidate'];
}
return $return;
mysql_close($db);
}


function pull_user_selections()
{
require_once 'db.php';
session_start();
$email = $_SESSION['user'];
$query = "SELECT A.state, A.candidate 
	  FROM user_selections AS A 
	  WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$return = '';
while($row = mysql_fetch_array($result))
{
$return = "$return" . '!' . $row['state'] . '#' . $row['candidate'];
}
return $return;
mysql_close($db);
}


function pull_popular_picks()
{
require_once 'db.php';

$query = "SELECT COUNT(*) AS COUNT, state, candidate 
	  FROM user_selections 
	  GROUP BY state, candidate";
$result = mysql_query($query) or die('bad query');

while($row = mysql_fetch_array($result))
{
$votes = $row['COUNT'];
$state = $row['state'];
$candidate = $row['candidate'];
$votecount[$state][$candidate] = $votes;
}

foreach ($votecount as $state => $candidate)
{
arsort($candidate); //Sort the candidates in a state by num of votes
$a = $candidate[0]; //Set pointer to beginning
$best[$state] = key($candidate); //Take the one with most and call it best for state
}

$return = '';
foreach ($best as $state => $candidate)
{$return = "$return" . '!' . $state . '#' . $candidate;}
return $return;
mysql_close($db);

}


function resetpassword($email)
{
require_once 'db.php';
$email = htmlspecialchars($email);

$chars = "abcdefghijklmnopqrstuvwxyz";
$nums = "0123456789";

$newpassword = $chars[rand(0,25)] . $chars[rand(0,25)] . $nums[rand(0,9)] . $nums[rand(0,9)] . $chars[rand(0,25)] . $chars[rand(0,25)];

$hashpass = sha1($newpassword);

$query = "SELECT COUNT(*)
	  FROM users
	  WHERE email = '$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$result = $result[0];
if ($result == 0)
{return ; }

$query = "UPDATE users
	  SET password = '$hashpass'
	  WHERE email = '$email'";
$result = mysql_query($query) or die('bad query');

$to = $email;
$fromemail = "do_not_reply@chooseyourchief.com";
$fromname = "Fantasy Politics";
$subject = "Reset Password";
$message = "Your password has been reset to:   " . $newpassword;
$replytoname = "Fantasy Politics";
$replytoemail = "do_not_reply@chooseyourchief.com";
$returnname = "Fantasy Politics";
$returnpath = "do_not_reply@chooseyourchief.com";

$headers = "From:" . "$fromname <$fromemail>";
$headers .= "\n"."Reply-To: $replytoname  <$replytoemail>";
$headers .= "\n"."Return-Path: $returnname <$returnpath>";

mail($to, $subject, $message, $headers);
mysql_close($db);
}

function numstateswon($candidate)
{
require_once 'db.php';
$query = "SELECT COUNT(*)
	  FROM results
	  WHERE candidate = '$candidate'";
$result = mysql_query($query) or die("$query");
$result = mysql_fetch_array($result);
$result = $result[0];
return $result;
}


?>

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
$query = "SELECT SUM(B.DELEGATES) 
	  FROM user_selections AS A JOIN results AS B ON A.state = B.state 
	  WHERE A.email='$email' AND A.candidate = B.candidate";
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
$query = "SELECT SUM(B.DELEGATES) AS SCORE, A.EMAIL AS EMAIL 
	  FROM user_selections AS A JOIN results AS B ON A.state = B.state 
	  WHERE A.candidate = B.candidate 
	  GROUP BY A.EMAIL 
	  ORDER BY SCORE DESC, A.EMAIL ASC";
$result = mysql_query($query) or die('bad query');
$count = 1;
while ($row = mysql_fetch_array($result))
{
if ($row['EMAIL']==$email)
{break;}
$count++;
}
mysql_close($db);
return $count;
}


function gettotalplayers()
{
require_once 'db.php';
$query = "SELECT COUNT(*) FROM user_selections GROUP BY email";
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

/*function pull_popular_picks()
{
require_once 'db.php';
$query = "SELECT INTO #temptable count(*) AS COUNT, state, candidate FROM user_selections GROUP BY state, candidate";
$result = mysql_query($query) or die('bad query');
query = "SELECT INTO #temptable2 MAX(COUNT) AS COUNT, state FROM #temptable GROUP BY state";
$result = mysql_query($query) or die('bad query');
query = "SELECT INTO #temptable3 A.state, A.candidate FROM #temptable2 AS A JOIN #temptable AS B  WHERE A.COUNT = B.COUNT";
$result = mysql_query($query) or die('bad query');
query = "SELECT state, FIRST(candidate) FROM #temptable3 GROUP BY state";
$result = mysql_query($query) or die('bad query');

mysql_query("DROP TABLE #temptable, #temptable2, #temptable3");

$return = '';
while($row = mysql_fetch_array($result))
{
$return = "$return" . '!' . $row['state'] . '#' . $row['candidate'];
}
return $return;
mysql_close($db);
}

*/
?>

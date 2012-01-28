<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

if(!isset($_SESSION['user'])){
session_destroy(); echo 'not logged in';}

$user = $_SESSION['user'];

$query  = "SELECT A.CANDIDATE AS PICK,
	  	  A.STATE,
	          B.DATE,
                  B.CANDIDATE AS WINNER,
		  B.DELEGATES
	   FROM user_selections AS A JOIN results AS B
	     ON A.state = B.state
	   WHERE A.email = '$user'
	     AND A.state <> 'DC'
	   ORDER BY B.date
	   LIMIT 10";

$result = mysql_query($query) or die ("$query");

if (count($result)==0){exit();}

echo "<table>
      <tr>
      <th>Date</th>
      <th>Pick</th>
      <th>State</th>
      <th>Winner</th>
      <th>Delegates</th>
      <th>Points</th>
      </tr> \n";

$parity = 0;
while($row = mysql_fetch_array($result))
  {
if ($parity==0)
 { echo "<tr class='alt'>" . "\n";}
else
 { echo "<tr>" . "\n";}
  echo "<td>" . $row['DATE'] . "</td>" . "\n";
  echo "<td>" . $row['PICK'] . "</td>" . "\n";
  echo "<td>" . $row['STATE'] . "</td>" . "\n";
  echo "<td>" . $row['WINNER'] . "</td>" . "\n";
  echo "<td>" . $row['DELEGATES'] . "</td>" . "\n";
$parity = ($parity +1)%2;
$score = 0;
if ($row['PICK']==$row['WINNER']){$score = $row['DELEGATES'];}
echo "<td>" . $score . "</td>" . "\n";

  echo "</tr> </br>" . "\n";
  }

echo "\n </table>" . "\n";
?>

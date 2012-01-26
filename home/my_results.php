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
      </tr> </br> \n";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>" . "\n";
  echo "<td>" . $row['DATE'] . "</td>" . "\n";
  echo "<td>" . $row['PICK'] . "</td>" . "\n";
  echo "<td>" . $row['STATE'] . "</td>" . "\n";
  echo "<td>" . $row['WINNER'] . "</td>" . "\n";
  echo "<td>" . $row['DELEGATES'] . "</td>" . "\n";
  echo "</tr> </br>" . "\n";
  }

echo "\n </table>" . "\n";
?>

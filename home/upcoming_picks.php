<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

if(!isset($_SESSION['user'])){
session_destroy(); echo 'not logged in';}

$user = $_SESSION['user'];

$query  = "SELECT A.STATE,
	          B.DATE,
                  A.CANDIDATE
	   FROM user_selections AS A JOIN results AS B
	     ON A.state = B.state
	   WHERE B.DATE > CURDATE()
	     AND A.email = '$user'
	   ORDER BY B.date
	   LIMIT 10";

$result = mysql_query($query) or die ("$query");

if (count($result)==0){exit();}

echo "<table>
      <tr>
      <th>Date</th>
      <th>Candidate</th>
      <th>State</th>
      </tr> </br> \n";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>" . "\n";
  echo "<td>" . $row['DATE'] . "</td>" . "\n";
  echo "<td>" . $row['CANDIDATE'] . "</td>" . "\n";
  echo "<td>" . $row['STATE'] . "</td>" . "\n";
  echo "</tr> </br>" . "\n";
  }

echo "\n </table>" . "\n";
?>

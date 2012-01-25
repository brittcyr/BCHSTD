<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

$_SESSION['user'] = 'abc@123.com';
if(!isset($_SESSION['user'])){
session_destroy(); echo 'not logged in';}

$user = $_SESSION['user'];


$query  = "SELECT A.*,
	          B.date
	   FROM user_selections AS A JOIN results AS B
	     ON A.state = B.state
	   WHERE A.is_locked='N'
	     AND A.email = '$user'
	   ORDER BY B.date";

$result = mysql_query($query) or die ('bad query');

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
  echo "<td>" . $row['date'] . "</td>" . "\n";
  echo "<td>" . $row['candidate'] . "</td>" . "\n";
  echo "<td>" . $row['state'] . "</td>" . "\n";
  echo "</tr> </br>" . "\n";
  }
echo "\n </table>" . "\n";

mysql_close($db);
?>

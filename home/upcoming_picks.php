<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

if(!isset($_SESSION['user'])){
session_destroy(); echo 'not logged in';}

$user = $_SESSION['user'];

$query  = "SELECT STATE,
	          DATE
	   FROM results
	   WHERE DATE > CURDATE()
	   ORDER BY DATE
	   LIMIT 10";

$result = mysql_query($query) or die ("$query");

echo "<table>
      <tr>
      <th>Date</th>
      <th>Candidate</th>
      <th>State</th>
      </tr> \n";

while($row = mysql_fetch_array($result))
  {
$date = $row['DATE'];
$date = formatdate($date);
$state = $row['STATE'];
$query = "SELECT CANDIDATE
	  FROM user_selections
	  WHERE state = '$state'
	    AND email = '$user'";
$newresult = mysql_query($query) or die ("$query");
$newresult = mysql_fetch_array($newresult);
$candidate='';
if (count($newresult)==0)
{$candidate = "&nbsp;";}
else
{$candidate = $newresult[0];}
if ($count==1)
 {echo "<tr>" . "\n";}
else {echo "<tr class='alt'>" . "\n";}
  echo "<td>" . $date . "</td>" . "\n";
  echo "<td>" . $candidate . "</td>" . "\n";
  echo "<td>" . $state . "</td>" . "\n";
  echo "</tr>" . "\n";
$count=($count+1)%2;
  }

echo "\n </table>" . "\n";
?>

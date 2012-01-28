<?php
require_once 'db.php';
require_once 'library.php';
?>
<?php session_start();?>
<html>
	<head>
		<title>Leaderboard</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/leaderboard.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
	</head>

	<body>
		<div id="top">
			<div id="logo">
				<img src="icon_images/icon-usmap.png" />
			</div>
			<div id="navbar">
			  <?php require_once 'navbar.php'; ?>
			</div>		
		</div>

		<div id="main">
<h1>LEADERBOARD</h1> <br/>
<?php
$query = "SELECT SUM(B.DELEGATES) AS SCORE, A.EMAIL AS EMAIL 
	  FROM user_selections AS A JOIN results AS B 
	    ON A.state = B.state 
	  WHERE A.candidate = B.candidate 
	  GROUP BY A.EMAIL 
	  ORDER BY SCORE DESC, A.EMAIL DESC
	  LIMIT 25";

$result = mysql_query($query) or die ('bad query');

if (count($result)==0){exit();}

echo "<table>
      <tr>
	<th>Rank</th>
	<th>User</th>
	<th>Score</th>
      </tr> </br> \n";

$count=0;
while($row = mysql_fetch_array($result))
  {
  echo "<td>" . $count . "</td>" . "\n";
      $email = $row['EMAIL'];
      $username = getusername($email);
if ($count%2 == 1)
  {echo "<tr>" . "\n";}
else {echo "<tr class='alt'>" . "\n";}
  echo "<td>" . "$username" . "</td>" . "\n";
  echo "<td>" . $row['SCORE'] . "</td>" . "\n";
  echo "</tr> </br>" . "\n";
  $count++;
  }
echo "\n </table>" . "\n";
?>	
		</div>	
	</body>
</html>


<?php
mysql_close($db);
?>

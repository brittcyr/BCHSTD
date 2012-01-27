<?php
require_once 'db.php';
require_once 'library.php';
?>

<html>
	<head>
		<title>Leaderboard</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/leaderboard.css"/>
	</head>

	<body>
		<div id="top">
			<div id="logo">
				<img src="icon_images/icon-usmap.png" />
			</div>
			<div id="navbar">
				<a href="candidates.php"> Candidates </a>
				<a href="home.php"> Home </a>
				<a href="map.php"> Map </a>
				<a href="logout.php"> Logout </a>
			</div>		
		</div>

		<div id="main">
<?php
$query  = "SELECT email,
	          current_score
	   FROM users
	   ORDER BY current_score
	   DESC";

$result = mysql_query($query) or die ('bad query');

if (count($result)==0){exit();}

echo "<table>
      <tr>
      <th>User</th>
      <th>Score</th>
      </tr> </br> \n";

while($row = mysql_fetch_array($result))
  {
      $email = $row['email'];
      $username = getusername($email);
  echo "<tr>" . "\n";
  echo "<td>" . "$username" . "</td>" . "\n";
  echo "<td>" . $row['current_score'] . "</td>" . "\n";
  echo "</tr> </br>" . "\n";
  }
echo "\n </table>" . "\n";
?>	
		</div>	

	</body>
</html>


<?php
mysql_close($db);
?>

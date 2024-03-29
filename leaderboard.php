<?php
require_once 'db.php';
require_once 'library.php';
session_start();
?>
<html>
	<head>
		<title> Fantasy Politics </title>
    		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/leaderboard.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
	</head>

	<body background="images/flag.jpg">
		<script>
			var el = document.getElementsByTagName("body")[0];
			el.className = "";
		</script>
		<div id="top">
		<div class="inner">
			<div id="logo">
				<h3> chooseyourchief.com </h3>
			</div>
			<nav id="navbar">
			  <?php require_once 'navbar.php'; ?>
			</nav>		
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
      </tr> \n";

$count=0;
$currentscore=-1;
$currentrank=0;
while($row = mysql_fetch_array($result))
  {
      $count++;
      $email = $row['EMAIL'];
      $score = $row['SCORE'];
if($currentscore<>$row['SCORE'])
{$currentrank = $count;}
$currentscore=$row['SCORE'];

      $username = getusername($email);
if ($count%2 == 0)
  {echo "<tr>" . "\n";}
else {echo "<tr class='alt'>" . "\n";}
  echo "<td>" . $currentrank . "</td>" . "\n";
  echo "<td>" . $username . "</td>" . "\n";
  echo "<td>" . $score . "</td>" . "\n";
  echo "</tr>" . "\n";
  }
echo "\n </table>" . "\n";
?>	
		</div>
		
		<script src="javascript/jquery.js"></script>
		<script src="javascript/modernizr.js"></script>
		<script>
			(function($){
				var nav = $("#navbar");

				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));

						$(this).mouseenter(function(){
							$(this).find("ul").stop(true, true).slideDown(70);
						});

						$(this).mouseleave(function(){
							$(this).find("ul").stop(true, true).slideUp(200);
						});
					}
				});
			})(jQuery);
		</script>	
	</body>
</html>


<?php
mysql_close($db);
?>

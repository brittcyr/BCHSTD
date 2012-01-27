<?php
session_start();
if (isset($_SESSION['user']))
{
?>

<a href="leaderboard.php"> Leaderboard </a>
<a href="candidates.php"> Candidates </a>
<a href="home.php"> Home </a>
<a href="map.php"> Map </a>
<a href="logout.php"> Logout </a>

<?php
}
else{
echo '<a href="index.php"> Back </a>';}
?>

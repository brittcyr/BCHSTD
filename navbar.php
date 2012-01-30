<?php
session_start();
if (isset($_SESSION['user']))
{
?>

<a href="logout.php"> Logout </a>
<a href="FAQ.html">FAQ</a>
<a href="about_us.php"> About Us </a>
<a href="leaderboard.php"> Leaderboard </a>
<a href="candidates.php"> Candidates </a>
<a href="home.php"> Home </a>
<a href="map.php"> Map </a>


<?php
}
else{
echo '<a href="index.php"> Back </a>';}
?>

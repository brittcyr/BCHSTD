<?php
session_start();
if (isset($_SESSION['user']))
{
?>
<ul id="nav">
<li>
        <a href="map.php">Map</a>
</li>
<li>
        <a href="#">Statistics</a>
        <ul>
        <li><a href="home.php"> My Profile </a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        </ul>
</li>
<li>
        <a href="#">Candidates</a>
        <ul>
        <li><a href="http://www.mittromney.com" target="_blank">Mitt Romney</a></li>
        <li><a href="http://www.ronpaul2012.com" target="_blank">Ron Paul</a></li>
        <li><a href="http://www.ricksantorum.com" target="_blank">Rick Santorum</a></li>
        <li><a href="http://www.newt.org" target="blank">Newt Gingrich</a></li>
        <li><a href="candidates.php">All</a></li>
        </ul>
</li>
<li>
        <a href="#">Account</a>
        <ul>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
</li>
</ul>

<?php
}
else{
echo '<ul id="nav"><li><a href="index.php"> Back </a><li></ul>';}
?>


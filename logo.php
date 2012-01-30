<?php
session_start();
if (isset($_SESSION['user']))
{
	?>
	<a href="map.php"><img src="icon_images/icon-usmap.png"/></a>
	<?php	
}
else{
	echo '<img src="icon_images/icon-usmap.png/>';
}
?>
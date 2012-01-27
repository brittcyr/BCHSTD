<html>
	<head>
		<title>Candidates</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/candidates.css"/>
	</head>

	<body>
		<div id="top">
			<div id="logo">
				<img src="icon_images/icon-usmap.png" />
			</div>
			<div id="navbar">

<?php
session_start();
if (!isset($_SESSION['user']))
{
?>
				<a href="candidates.php"> Candidates </a>
				<a href="home.php"> Home </a>
				<a href="map.php"> Map </a>
				<a href="logout.php"> Logout </a>
<?php
}
else{
echo '<a href="index.php"> Back </a>';}
?>

			</div>		
		</div>

		<div id="main">
			<div id="Candidate1">
				<a href="http://www.mittromney.com">
					<h1>Romney</h1>
				</a>
				<img src="candidates/romney.jpg" />
			</div>
			<div id="Candidate2">
				<a href="http://www.ronpaul2012.com">
					<h1>Paul</h1>
				</a>
				<img src="candidates/paul.jpg" />
			</div>
			<div id="Candidate3">
				<a href="http://www.ricksantorum.com">
					<h1>Santorum</h1>
				</a>
				<img src="candidates/santorum.jpg" />
			</div>
			<div id="Candidate4">
				<a href="http://www.newt.org">
					<h1>Gingrich</h1>
				</a>
				<img src="candidates/gingrich.jpg" />
			</div>
		</div>	

	</body>
</html>

<?php
require_once 'checkcookies.php';
?>
<html>
	<head>
		<title>Fantasy Politics</title>
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/about.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css"/>
	</head>

	<body background="images/flag.jpg">
		<div id="top">
			<div id="Logo">
				<?php require_once 'logo.php'; ?>
			</div>
			<div id="navbar">
			  <?php require_once 'navbar.php'; ?>
			</div>		
		</div>

		<div id="main">
			<h1>About Us</h1>
			<div id="text">
				We are sophomores taking 6.470, an MIT Web Design competition / class. We enjoy basketball, counting, and chilling in our free time. 
			</div>	
			<div id="pics">
				<img src="images/tim_bamf.jpg"/>
				<img src="images/bsmoney.jpg"/>
			</div>
		</div>	
	</body>
</html>

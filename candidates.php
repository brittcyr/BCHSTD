<?php session_start();
      require_once 'library.php';
      require_once 'checkcookies.php';
?>
<html>
	<head>
		<title> chooseyourchief </title>
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/candidates.css"/>
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
			<div id="Candidate1">
				<a href="http://www.mittromney.com" target="_blank">
					<h1>Romney</h1>
				<img src="candidates/romney.jpg" />
				</a>
				<p>
					Mitt Romney </br>
					Former Governor </br>
					Massachusetts </br>
					States Won: 
					<?php echo numstateswon('ROMNEY'); ?>
				</p>
			</div>
			<div id="Candidate2">
				<a href="http://www.ronpaul2012.com" target="_blank">
					<h1>Paul</h1>
				<img src="candidates/paul.jpg" />
				</a>
				<p>
					Ron Paul </br>
					US Congressman </br>
					Texas </br>
					States Won: 
					<?php echo numstateswon('PAUL'); ?>
				</p>
			</div>
			<div id="Candidate3">
				<a href="http://www.ricksantorum.com" target="_blank">
					<h1>Santorum</h1>
				<img src="candidates/santorum.jpg" />
				</a>
				<p>
					Rick Santorum </br>
					Former US Senator </br>
					Pennsylvania </br>
					States Won: 
					<?php echo numstateswon('Santorum'); ?>
				</p>
			</div>
			<div id="Candidate4">
				<a href="http://www.newt.org" target="_blank">
					<h1>Gingrich</h1>
				<img src="candidates/gingrich.jpg" />
				</a>
				<p>
					Newt Gingrich </br>
					Former Speaker of the House </br>
					Georgia </br>
					States Won: 
					<?php echo numstateswon('GINGRICH'); ?>
				</p>
			</div>
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


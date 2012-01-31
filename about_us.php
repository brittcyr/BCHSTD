<html>
	<head>
		<title>Fantasy Politics</title>
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/about.css"/>
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
			<h1>About Us</h1>
			<div id="text">
				We are sophomores taking 6.470, an MIT Web Design competition / class. We enjoy counting, winning, and chilling in our free time. 
			</div>
			<div id="pics">
				<img src="images/tim_bamf.jpg"/>
				<img src="images/bsmoney.jpg"/>
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


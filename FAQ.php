<?php
require_once 'checkcookies.php';
?>
<html>
	<head>
		<title> Fantasy Politics </title>
		<link rel="SHORTCUT ICON" href="images/icon.jpg"/>
		<link rel="stylesheet" type="text/css" href="stylesheets/menu_bar.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/faq.css" />
		
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
		<h1 id='title'>FAQ</h1>
		
		<div id="main">
			<div id="questions">
				<a href="#what">What is Fantasy Politics?</a></br>
				<a href="#who">Who is this site directed at?</a></br>
				<a href="#win">How do I increase my chances of winning?</a></br>
				<a href="#how">How do I play?</a></br>
				<a href="#why">Why was Fantasy Politics created?</a></br>
			</div>
			<div id="text">
				<div class="q">
				<a name="what"></a>
				<b>	What is Fantasy Politics?</b>
				</div>
				<div class="answer">
					Fantasy Politics is a website built to encourage users to learn more about the upcoming presidential elections.
				</div>
				<div class="q">
				<a name="who"></a><b>Who is this site directed at?</b>
				</div>
				<div class="answer">
					This site is directed at anyone with any political interest. This site is also directed at people that like to win.
				</div>
				<div class="q">
				<a name="win"></a><b>How do I increase my chances of winning?</b>
				</div>
				<div class="answer">
					The most ideal solution would be to look into the future and find out who wins each primary. But since we are only human, the next best solution would be to follow the debates going on in each state, learn about state demographics and voting patterns, and learn about each candidate's platform.
				</div> 
					
				<div class="q">
				<a name="how"></a><b>How do I play?</b>
				</div>
				<div class="answer">
					On the map page, when you are in 'choices' mode, you can select a candidate, and then click on a state to make your prediction. If the state has already held it's election, then you will not be allowed to make or change your choice.
				</div>
				<div class="q">
				<a name="why"></a><b>Why was Fantasy Politics created?</b>
				</div>
				<div class="answer">
					Fantasy Politics was created for the MIT class 6.470. The goal of Fantasy Politics is to encourage an interest in politics. Most people are not very politically informed. We hope that when we throw a little competition into the mix, more people will be inspired to read up on candidates in order to make an educated selection.
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

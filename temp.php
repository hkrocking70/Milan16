<!--<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>


 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque semper, ipsum et laoreet pharetra, metus nisi placerat dui, vitae facilisis justo lacus a lacus. Donec urna erat, sagittis at justo eget, rhoncus lobortis purus. Quisque in diam metus. Ut vel sem sagittis, sagittis magna quis, sodales tortor. Nulla sodales tellus ut efficitur lacinia. Nulla arcu arcu, pellentesque ac sem in, sodales vehicula purus. Duis ullamcorper ante at enim venenatis mollis. Mauris eu dolor cursus, egestas lectus vel, varius nunc.

<br>
Sed viverra blandit malesuada. Pellentesque condimentum velit ac euismod bibendum. Praesent eleifend quam in nunc mollis, eget auctor mauris viverra. Cras faucibus id risus a feugiat. Curabitur at sem non nunc semper condimentum ut in tellus. Cras tempus nulla eget felis ornare ultricies. Morbi maximus, neque ac ultrices molestie, libero nisl ultrices nunc, a laoreet tellus lectus a ligula. Integer in lectus sed sem varius maximus. Mauris mattis orci ante, eu fermentum lectus vulputate et. Donec est orci, tincidunt vitae magna quis, rhoncus egestas nibh. Aenean ac leo finibus, volutpat nulla elementum, pretium ante. Nunc odio velit, laoreet dictum lacus at, porttitor posuere orci. Aliquam sed libero urna. Fusce tincidunt imperdiet enim, eget dapibus leo mollis nec. In a finibus diam. Praesent faucibus at dui et suscipit. 
-->

<!--

	http://www.sinuousgame.com/
-->




<!DOCTYPE html>
<html lang="en">
	<!--
	    @author Hakim El Hattab | (http://hakim.se/)
	    @version 1.0
	 -->
    <head>
		
	    <meta property="og:image" content="http://www.sinuousgame.com/assets/images/icon_512.png" />

        <title>Sinuous - Avoid the red dots!</title>

		<script type="text/javascript">
			if( navigator.userAgent.match( /iphone|ipad|ipod/gi ) ) window.location = '/mobile';

			var sc = 6156;

			var FACEBOOK_MODE = false;
		</script>

		<link type="text/css" href="gamecss/reset.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="gamecss/main.css" rel="stylesheet" media="screen" />
    </head>
    <body>

    	<header>
    		<h1>Sinuous</h1>
    		<span class="header-instruction">Expand for instructions &amp; settings.</span>

    		<!-- The extra content that can be expanded -->
    		<div class="extra">

    			<!-- About the game in general -->
    			<section id="about">
    				<h3>About</h3>
	    			<p>A game with a single objective: avoid colliding with the red dots.<br/>You can activate a boosts by picking up the rare green dots.</p>
	    			<p>Sounds simple, eh? If only... Give it a try!</p>
	    		</section>

    			<!-- Legend that defines the boost types -->
    			<section id="legend">
    				<h3>Legend</h3>
	    			<ul>
	    				<li class="shield"><span>S</span> Shield</li>
	    				<li class="gravity-field"><span>G</span> Gravity Field</li>
	    				<li class="time-warp"><span>T</span> Time Warp</li>
	    				<li class="minimize-dots"><span>M</span> Minimize Dots</li>
	    			</ul>
	    			<ul>
	    				<li class="life-up"><span>1</span> Life Up</li>
	    				<li class="player"><span></span> Player</li>
	    				<li class="enemy"><span></span> Enemy</li>
	    			</ul>
	    		</section>

	    		<!-- Gameplay and surrounding settings -->
	    		<section id="settings">
	    			<h3>Settings</h3>
	    			<ul>
	    				<li><a id="mute-button" href="#"></a></li>
	    				<li><a id="reset-button" href="#">Reset game</a></li>
	    			</ul>
	    		</section>

    		</div>

    	</header>

    	<!-- Wraps all game elements including UI panels and the canvas the game is rendered on -->
    	<div id="game">

	    	<!-- Displays status information (score, time, fps) about the current game -->
	    	<div id="game-status" class="ui"></div>

	    	<!-- Holds the main game UI such as high score lists and instructions -->
			<div id="game-panels">
				<div id="message" class="ui">
					<h2 id="title">Instructions</h2>
					<ul class="instructions">
						<li>1. Avoid red dots.</li>
						<li>2. Hit other dots for boosts.</li>
						<li>3. Score extra points by moving around a lot.</li>
						<li>4. Stay alive.</li>
					</ul>
					<a href="#" id="start-button">Start</a>
					<div id="level-selector">
						<span>Level:</span>
						<ul class="levels">
							<!-- This will be populated by JS -->
						</ul>
					</div>
				</div>
				<div id="highscore-list" class="ui">
					<h2>High Score</h2>
					<ul id="highscore-output"></ul>
					<!-- Auth markup is injected via JS here -->
				</div>
				<div id="highscore-win" class="ui">
					<h2 id="highscore-place"></h2>
					<p>Something to identify you by</p>
					<input id="highscore-input" type="text" name="alias" maxlength="10" />
					<a id="highscore-submit" href="#">Go</a>
				</div>
			</div>


			<canvas id="world"></canvas>

		</div>

		<script src="gamejs/jquery.min.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="gamejs/jquery.min.js"%3E%3C/script%3E'))</script>

		<script type="text/javascript" src="gamejs/swfobject.js"></script>
		<script type="text/javascript" src="gamejs/sinuous.min.js"></script>
    </body>
</html>



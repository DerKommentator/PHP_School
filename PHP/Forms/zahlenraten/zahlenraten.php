<!DOYTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="zahlenratenSpiel.css" />
	</head>

	<body>
		<div id="bgvideo" style="width: 1920px; height: 1080px;">
			<video id="bgvideo_player" style="width:100%; height:auto;" preload="auto" autoplay="true" loop autobuffer muted="muted" poster="https://ubistatic19-a.akamaihd.net/resource/en-us/game/rainbow6/siege/r6-siege-bg.jpg">
				<source src="https://ubistatic2-a.akamaihd.net/gamesites/rainbow6/r6-siege-bg_1280.mp4" type="video/mp4">
				<source src="https://ubistatic2-a.akamaihd.net/gamesites/rainbow6/r6-siege-bg_1280.webm" type="video/webm">
			</video>
		</div>

		<div id="main">
				<div class="php">
					<?php


						echo '<h1>Zahlenraten</h1><br>';
						echo 'Geben Sie eine Zahl zwischen 1 und 100 an:';

						if(!$_POST)
						{
							$_POST['randomNumber']= rand(1, 100);
							//$_POST['randomNumber']= 33;
							$_POST['inputValue']= '';
							$_POST['tries']=0;
						}


						echo '<form action="zahlenraten.php" method="get">';
							echo '<input type="submit" name="restart" value="Neues Spiel">';
						echo '</form>';

						if(isset($_POST['submit']) && is_numeric($_POST['inputValue']) && $_POST['inputValue'] < 100 && $_POST['inputValue'] > 1)
						{
							$_POST['tries']++;
						}

						echo '<form method="post">';
							echo '<input type="text" name="inputValue" value="'.$_POST['inputValue'].'">';
							echo '<input type="submit" name="submit" value="Tippen"><br>';

							echo '<input type="hidden" name="randomNumber" value="'.$_POST['randomNumber'].'">';
							echo '<input type="hidden" name="tries" value="'.$_POST['tries'].'">';
						echo '</form>';

						if(isset($_POST['submit']) && is_numeric($_POST['inputValue']) && $_POST['inputValue'] < 100 && $_POST['inputValue'] > 1)
						{
							if($_POST['randomNumber'] < $_POST['inputValue'])
							{
								echo $_POST['inputValue'].' ist zu hoch'.'<br>';
							}
							elseif($_POST['randomNumber'] > $_POST['inputValue'])
							{
								echo $_POST['inputValue'].' ist zu niedrig'.'<br>';
							}

							elseif($_POST['randomNumber'] == $_POST['inputValue'])
							{
								echo $_POST['inputValue'].' ist der richtige Wert'.'<br>';
								echo 'Du hast '.$_POST['tries'].' Versuch(e) gebraucht<br><br>';

								echo '<img src="feuerwerk.gif" alt="Feuerwerk">';
							}
						}

						?>
			</div>
		</div>
	</body>
</html>

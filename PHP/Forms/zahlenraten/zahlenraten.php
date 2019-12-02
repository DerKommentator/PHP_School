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
							$_POST['Geheim']= rand(1, 100);
							//$_POST['Geheim']= 33;
							$_POST['eWert']= '';
							$_POST['versuche']=0;
						}

						if(isset($_POST['eWert']) && is_numeric($_POST['eWert']))
						{
							$_POST['versuche']++;
						}



						echo '<form action="zahlenraten.php" method="link">';
							echo '<input type="submit" name="restart" value="Neues Spiel">';
						echo '</form>';



						echo '<form method="post">';
							echo '<input type="hidden" name="Geheim" value="'.$_POST['Geheim'].'">';


							echo '<input type="text" name="eWert" value="'.$_POST['eWert'].'">';
							echo ' ';
							echo '<input type="submit" name="tippen" value="Tippen"><br>';

							echo '<input type="hidden" name="versuche" value="'.$_POST['versuche'].'">';
						echo '</form>';





						if(isset($_POST['eWert']) && is_numeric($_POST['eWert']))
						{
							if($_POST['Geheim'] < $_POST['eWert'])
							{
								echo $_POST['eWert'].' ist zu hoch'.'<br>';
							}
							elseif($_POST['Geheim'] > $_POST['eWert'])
							{
								echo $_POST['eWert'].' ist zu niedrig'.'<br>';
							}

							elseif($_POST['Geheim'] == $_POST['eWert'])
							{
								echo $_POST['eWert'].' ist der richtige Wert'.'<br>';
								echo 'Du hast '.$_POST['versuche'].' Versuch(e) gebraucht';
							}
						}
						?>
			</div>
		</div>
	</body>
</html>

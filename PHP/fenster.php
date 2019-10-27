<?php

echo '<pre>';
echo 'xxxxxx<br>';
echo 'x    x<br>';
echo 'x    x<br>';
echo 'xxxxxx<br>';

echo '<br>';


$wdh = 3;

$hoehe=16;
$breite=17;

for($i=1; $i <= $wdh; $i+=1)
{
	for ($j=1; $j <= $hoehe; $j+=1) 
	{
		if ($j == 1 || $j == $hoehe) 
		{
			for ($k=1; $k <= $breite; $k+=1) 
			{
				echo 'x';
			}
			echo '<br>';
		}
		else 
		{
			echo 'x';
			for ($k=1; $k <= $breite-2; $k+=1) 
			{
				echo ' ';
			}
			echo 'x';
			echo '<br>';
		}
	}
	echo '<br>';
}
echo '</pre>';


?>
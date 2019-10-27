<?php

echo '<pre>';

$hoehe = 5;
$breite = 10;


for($i=1; $i<=$hoehe; $i+=1)
{
	if($i == 1 || $i == $hoehe)
	{
		for($j=0; $j<=$breite; $j+=1)
		{
			echo 'x';
		}
	}
	else
	{
		for($j=1; $j<=round($breite/2); $j+=1)
		{
			echo ' ';
		}
		echo 'x';
	}
	echo '<br>';
}

echo '<br>';

$hoehe = 10;

for($i=1; $i<=$hoehe; $i+=1)
{
	for($j=1; $j<=$i-1; $j+=1)
	{
		echo ' ';
	}
	
	if($i != $hoehe)
	{
		echo 'x';
	}
	for($j=1; $j<=($hoehe*2 - $i*2)-1; $j+=1)
	{
		echo ' ';
	}
	echo 'x';
	echo '<br>';
}




echo '</pre>';

?>
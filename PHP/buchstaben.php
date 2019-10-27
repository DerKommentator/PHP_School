<?php

echo '<pre>';
$hoehe = 11;
$mitteleer = $hoehe*2-2;
$linksleer = 0;

// V

for($i=1; $i <= $hoehe; $i+=1)
{
	for($j=1; $j <= $linksleer; $j+=1)
	{
		echo ' ';
	}
	echo 'x';
	
	for($j=1; $j <= $mitteleer-1; $j+=1)
	{
		echo ' ';
	}
	
	if($i != $hoehe)
	{
		echo 'x';
	}
	echo '<br>';
	
	$linksleer+=1;
	$mitteleer-=2;
}
echo '<br>';

// A

$hoehe = 10;

for($i=1; $i<=$hoehe; $i+=1)
{
	for($j=1; $j<=$hoehe - $i; $j+=1)
	{
		echo ' ';
	}
	echo 'x';
	
	for($j=1; $j<=($i - 1)*2 - 1; $j+=1)
	{
		if($i == round($hoehe/2 + .5))
		{
			echo 'x';
		}
		else
		{
			echo ' ';
		}
	}
	if($i != 1)
	{
		echo 'x';
	}
	
	for($j=1; $j<=$hoehe - $i; $j+=1)
	{
		echo ' ';
	}
	
	echo '<br>';
}

echo '<br>';

// W

$hoehe = 10;

for($i=0; $i <= $hoehe; $i+=1)
{
	for($k=0; $k < 2; $k+=1)
	{
		for($j=0; $j<$i; $j+=1)
		{
			echo ' ';
		}
		
		if($i != $hoehe)
		{
			echo 'x';
		}
		
		for($j=0; $j<$hoehe*2-$i*2-1; $j+=1)
		{
			echo ' ';
		}

		if($i != 0 || $k != 0)
		{
			echo 'x';
		}
		
		for($j=0; $j<$i-1; $j+=1)
		{
			echo ' ';
		}
	}
	echo '<br>';
}

echo '</pre>';
?>
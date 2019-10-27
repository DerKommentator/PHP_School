<?php

	echo '<h1>Zählen ohne Schleife ßẞ</h1>';
	echo 1 .'<br>';
	echo 2 .'<br>';
	echo 3 .'<br>';
	
	echo'<h1>Zählen mit for Schleife</h1>';
	for($i=1;$i<=10;$i++){
		echo $i.'</br>';
	}

	echo '<h1>while Schleife</h1>';
	$i=1;
	while($i<=10){
		echo $i++.'</br>';
	}

	echo '<h1>do-while Schleife</h1>';
	$i=1;
	do{
		echo $i++.'</br>';
	} while($i<=10);
?>

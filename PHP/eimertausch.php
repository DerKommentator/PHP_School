<?php //eimertausch.php

$Eimer1='rot';
$Eimer2='blau';
$Eimer3='';

echo'<h1>Eimer vor dem Tauschen</h1>';
echo'Eimer1 ist '. $Eimer1.'<br>';
echo'Eimer2 ist '. $Eimer2.'<br>';
echo'Eimer3 ist '. $Eimer3.'<br>';

echo '<h1>Eimer nach dem Tausch</h1>';
// 1. 
$Eimer3 = $Eimer1;
// 2.
$Eimer1 = $Eimer2;
// 3.
$Eimer2 = $Eimer3;

echo'Eimer1 ist '. $Eimer1.'<br>';
echo'Eimer2 ist '. $Eimer2.'<br>';
echo'Eimer3 ist '. $Eimer3.'<br>';

?>


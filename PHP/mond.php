<?php

$anzahlknicke = 0;
$entfernung_erde_mond = 400000*1000;
$papierstaerke = 0.1/1000;
$papierhoehe = $papierstaerke;

while($papierhoehe < $entfernung_erde_mond){
    $papierhoehe = $papierhoehe*2;
    $anzahlknicke++;
    echo $anzahlknicke . ' mal knicken = ' . $papierhoehe . 'm <br>';
}
echo '<br>Für die Entfernung von der Erde zum Mond (' . $entfernung_erde_mond . 'm)<br>';
echo ' müsste man das Papier (Papierstärke: ' . $papierstaerke . 'm) ' . $anzahlknicke . ' mal knicken.';
?>
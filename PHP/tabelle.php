<?php

echo '<table border="1">';
echo '<tr> <th>#</th> <th>-#</th> <th>+</th> <th>-</th>';
echo '<th>*</th> <th>/</th> <th>%</th> </tr>';

$Spalte2 = 10;
$SummeSpalte1 = 0;
$SummeSpalte2 = 0;
$SummeSpalte3 = 0;
$SummeSpalte4 = 0;
$SummeSpalte5 = 0;
$SummeSpalte6 = 0;
$SummeSpalte7 = 0;

for($Spalte1=1; $Spalte1 <= 10; $Spalte1 = $Spalte1+1)
{
    $Spalte3 = $Spalte1 + $Spalte2;
    $Spalte4 = $Spalte1 - $Spalte2;
    $Spalte5 = $Spalte1 * $Spalte2;
    $Spalte6 = $Spalte1 / $Spalte2;
    $Spalte7 = $Spalte1 % $Spalte2;
    $SummeSpalte1 = $SummeSpalte1 + $Spalte1;
    $SummeSpalte2 = $SummeSpalte2 + $Spalte2;
    $SummeSpalte3 = $SummeSpalte3 + $Spalte3;
    $SummeSpalte4 = $SummeSpalte4 + $Spalte4;
    $SummeSpalte5 = $SummeSpalte5 + $Spalte5;
    $SummeSpalte6 = $SummeSpalte6 + $Spalte6;
    $SummeSpalte7 = $SummeSpalte7 + $Spalte7;
    echo '<tr>';
    echo '<td>' . $Spalte1 . '</td>';
    echo '<td>' . $Spalte2 . '</td>';
    echo '<td>' . $Spalte3 . '</td>';
    echo '<td>' . $Spalte4 . '</td>';
    echo '<td>' . $Spalte5 . '</td>';
    echo '<td>' . $Spalte6 . '</td>';
    echo '<td>' . $Spalte7 . '</td>';
    echo '</tr>';
    $Spalte2--;
}

echo '<tr>';
echo '<td><b>' . $SummeSpalte1 . '</b></td>';
echo '<td><b>' . $SummeSpalte2 . '</b></td>';
echo '<td><b>' . $SummeSpalte3 . '</b></td>';
echo '<td><b>' . $SummeSpalte4 . '</b></td>';
echo '<td><b>' . $SummeSpalte5 . '</b></td>';
echo '<td><b>' . $SummeSpalte6 . '</b></td>';
echo '<td><b>' . $SummeSpalte7 . '</b></td>';
echo '</tr>';
echo '</table>';

?>
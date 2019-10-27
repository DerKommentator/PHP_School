<?php

$Teilbar2 = 0;
$Teilbar5 = 0;

for ($i=1; $i <= 100; $i++)
{
    if ($i % 2 == 0) 
    {
        $Teilbar2++;
    }
 
    if ($i % 5 == 0) 
    {
        $Teilbar5++;
    }
 
}

echo 'Zwischen 1 und 100 gibt es ' . $Teilbar2 . ' Zahlen die durch 2 teilbar sind.' . '<br>';
echo 'Zwischen 1 und 100 gibt es ' . $Teilbar5 . ' Zahlen die durch 5 teilbar sind.';

?>
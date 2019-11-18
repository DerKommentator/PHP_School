<?php

$hoehe = 30;

echo '<pre>';
for($i=1; $i <= $hoehe; $i+=1)
{
    for($j=1; $j <= $hoehe - $i; $j+=1)
    {
        echo ' ';
    }
    if($i != 1)
    {
        echo 'x';
    }

    for($j=1; $j <= ($i-1)*2 -1; $j+=1)
    {
        echo ' ';
    }
    echo 'x';
    echo '<br>';
}
for($i=1; $i <= $hoehe-1; $i+=1)
{
    for($j=1; $j <= $i; $j+=1)
    {
        echo ' ';
    }
    echo 'x';
    for($j=1; $j <= $hoehe*2 - $i*2 -3; $j+=1)
    {
        echo ' ';
    }
    if($i != $hoehe-1)
    {
        echo 'x';
    }
    echo '<br>';
}




 ?>

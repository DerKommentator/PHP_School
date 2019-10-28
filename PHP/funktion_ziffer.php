<?php

function number_2_numeral($number)
{
    $sign = '';
    $output_string = '';
    $pos_numerals = ['Null', 'Eins', 'Zwei', 'Drei', 'Vier',
                     'Fünf', 'Sechs', 'Sieben', 'Acht', 'Neun'];
    if($number < 0)
    {
        $sign = 'minus ';
        $number = -$number;
    }

    $number = number_2_digits($number);
    foreach($number as $digit)
    {
        if($digit > 0 || $digit == 0)
        {
            $output_string = $pos_numerals[$digit].' '.$output_string;
        }
        else
        {
            $output_string = 'Not a digit';
        }
    }

    return $sign.$output_string;
}


function number_2_digits($number)
{
	$output_array = [];
    if($number != 0)
    {
        while($number <= -1 || $number >= 1)
    	{
    		array_push($output_array, $number % 10);
    		$number = $number / 10;
    	}
    	return $output_array;
    }
    elseif($number > 9 || $number < 0)
    {
        return 'Not a digit';
    }
    else
    {
        return [$number];
    }
    #print_r($output_array);

}

$number = -54;
echo $number.' als Wort: '.number_2_numeral($number).'<br>';

$number = -240;
echo $number.' als Wort: '.number_2_numeral($number).'<br>';

$number = 159;
echo $number.' als Wort: '.number_2_numeral($number).'<br>';

?>

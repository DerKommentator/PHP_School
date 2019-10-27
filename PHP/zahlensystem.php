<?php

function dez2($number, $base_output, $template_bits = 0)
{
	$output_array = [];
	while($number >= 1)
	{
		array_push($output_array, $number % $base_output);

		$number = $number / $base_output;
	}

	if($base_output == 2)
	{
		$template_bits = $template_bits - count($output_array);
		for($i=1; $i <= $template_bits; $i+=1)
		{
			array_push($output_array, '0');
		}
	}
	$output_array = array_reverse($output_array);
	$output_string = implode('', $output_array);

	return $output_string;
}


function _2dez($number, $base_input)
{
	$str_arr = str_split(strval($number));
	$bit_exponent = count($str_arr)-1;
	$bit_value = 0;
	$summe = 0;

	foreach($str_arr as $bit)
	{
		$bit_value = $bit * ($base_input**$bit_exponent);
		$bit_exponent -= 1;
		$summe = $summe + $bit_value;
	}
	echo $summe;
}
# dez2($number, $base_output, $template_bits = 0)
# 2dez($number, $base_input)


echo dez2(190, 5);

echo '<br><br>';

echo _2dez(1230, 5);

echo '<br><br>';

echo _2dez('10101', 2);

echo '<br><br>';

echo dez2(15, 2, 8);

echo '<br><br>';

//echo dez2bin(15, 8);





// function dez2bin($number, $template_bits = 8)
// {
	// $bin_array = [];

	// while($number > 0)
	// {
		// if($number % 2 == 0)
		// {
			// $number = $number / 2;
			// array_push($bin_array, '0');
		// }
		// else
		// {
			// $number = round($number / 2)-1;
			// array_push($bin_array, '1');
		// }
	// }
	// $template_bits = $template_bits - count($bin_array);
	// for($i=1; $i <= $template_bits; $i+=1)
	// {
		// array_push($bin_array, '0');
	// }
	// $bin_array = array_reverse($bin_array);
	// $bin_string = implode('', $bin_array);
	// return $bin_string;
// }


?>

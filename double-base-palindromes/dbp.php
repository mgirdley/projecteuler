<?php

function convert_to_binary_string($number) {
	return decbin($number);
}


function is_palindrome($number) {
	$temparr = strval($number);
	// var_dump($temparr);

	if (strrev($temparr)==$temparr)
	{
		return TRUE;
	} else
		{
			return FALSE;
		}
}

$i=1;

$sum_so_far = 0;

while ($i<1000000) {
	// echo $i . "\n";
	if ((is_palindrome($i)) && (is_palindrome(convert_to_binary_string($i)))) {
		$sum_so_far+=$i;
		// echo "Found one! $i";
	}
	$i++;
}

echo "The total of all palindromic numbers under a millions is $sum_so_far \n"

?>
<?php

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

$i=100;
$j=100;

$largest_so_far = 0;

while ($i<1000) {
	echo $i . "\n";
	while ($j<1000) {
		$product=$i*$j;
		if ((is_palindrome($product)) && ($product>$largest_so_far)) {
			$largest_so_far=$product;
		}
		$j++;
	}
	$j=100;
	$i++;
}

echo "The largest is $largest_so_far \n"

?>
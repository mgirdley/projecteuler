<?php

function collatz_length($number) {
	$currentnumber=$number;

	$length=0;

	// echo $currentnumber;

	while (($currentnumber)!=1) {
		if ($currentnumber%2==0) {
			$currentnumber=$currentnumber/2;
		} else {
			$currentnumber=3*$currentnumber+1;
		}
		// echo $currentnumber;
		$length++;	
	}

	return $length+1;
}

$i=1;

$largest_so_far = 0;

while ($i<=1000000) {
	// echo $i . "\n";

	if ((collatz_length($i)>$largest_so_far)) {
		$largest_so_far=collatz_length($i);
	}
	$i++;
}

echo "The largest is $largest_so_far.\n"

?>
<?php

function is_prime($num) {
    //1 is not prime. 
    if($num == 1)
        return false;

    if($num == 2)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}



function sum_of_subset($array,$start,$finish) {
	$so_far=0;
	for ($i=$start;$i<=$finish;$i++) {
		$so_far+=$array[$i];
	}
	// var_dump($array);
	// var_dump($start);
	// var_dump($finish);
	// var_dump($so_far);
	// echo "\n\n\n\n";
	return $so_far;
}

$i=1;

$primes_array=[];

echo "Computing all primes under 1,000,000.";

while ($i<1000001) {
	//echo $i . " is ";
	//var_dump(is_prime($i));
	// if ((is_palindrome($i)) && (is_palindrome(convert_to_binary_string($i)))) {
	//	$sum_so_far+=$i;
		// echo "Found one! $i";
	if (is_prime($i)) {
		array_push($primes_array, $i);
	}
	$i++;
	if ($i % 100000 == 0) {
		echo ".";
	}
}

echo "done!\n";

// var_dump($primes_array);

$largest_so_far=$primes_array[0];

$i=0;
$j=$i;
	
while ($j<sizeof($primes_array)) {
	$temp += $primes_array[$j];
	// echo "Temp: " . $temp . "\n";
	if (is_prime($temp) && ($temp>$largest_so_far) && ($temp<1000000)) {
		$largest_so_far=$temp;
		// echo "Largest so far is $largest_so_far" . "\n";
	} elseif ($temp>1000000) {
		break;
	}
	$j++;
}

echo "The largest prime that is a sum of consecutive primes is $largest_so_far.\n"

?>
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


$count=0;

$i=1;

while ($count<100001) {
	if (is_prime($i)) {
		$count++;
	}
	$i++;
	if ($i % 1000 == 0) {
		echo ".";
	}
}

echo "The 100001st prime is $i.\n";

?>
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

function remove_last_digit($number) {
    $inchar=intval($number);
    //echo $inchar . " \n";
    $inchar=substr($inchar, 0, strlen($inchar)-1);
    //echo $inchar . " \n";
    return $inchar;
}

function remove_first_digit($number) {
    $inchar=intval($number);
    //echo $inchar . " \n";
    $inchar=substr($inchar, 1, strlen($inchar));
    //echo $inchar . " \n";
    return $inchar;
}


function is_truncatable_fwd($number) {
    if (!is_prime($number)) {
        return FALSE;
    } elseif (($number<10) && (is_prime($number))) {
        return TRUE;
    } else {
        return is_truncatable_fwd(remove_last_digit($number));
    }
}

function is_truncatable_backward($number) {
    if (!is_prime($number)) {
        return FALSE;
    } elseif (($number<10) && (is_prime($number))) {
        return TRUE;
    } else {
        return is_truncatable_backward(remove_first_digit($number));
    }
}

$count=0;

$i=8;


while ($i<1000000) {

	if ((is_truncatable_fwd($i)) && (is_truncatable_backward($i))) {
		$count+=$i;
        echo "$i $j\n";
	}
	$i++;
}

echo "Total is $count.\n";

?>
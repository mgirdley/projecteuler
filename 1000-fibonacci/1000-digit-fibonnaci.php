<?php

function next_fib($num1, $num2) {

    return bcadd($num1, $num2);
}


$f1="1";
$f2="1";

$count=1;

while (strlen($f1)<1000) {

    // echo "$f1\n";

    $temp = next_fib($f1, $f2);

    $f1=$f2;
    $f2=$temp;

    $count++;
}

echo "The first Fibonnaci number with more than 1000 digits is $f1.\n";
echo "It is the $count term.\n";
?>
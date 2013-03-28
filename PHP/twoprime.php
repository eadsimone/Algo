<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peche
 * Date: 3/27/13
 * Time: 7:38 PM
 * To change this template use File | Settings | File Templates.
 */

/*
	 * Given an integer k (1<=k<=2000000000), find two prime numbers that sum up to
	 * it and return the lower number. If there are multiple solutions, always return
	 * the lowest prime. If there are no solutions, return -1.
	 * Examples:
	 * k=12 gives 5 (5 + 7 = 12)
	 * k=68 gives 7 (7 + 61 = 68)
	 * k=77 gives -1
	 */
function primes($k) {
    for ($firstPrime = 2; $firstPrime <= $k; $firstPrime = intval(nextPrime($firstPrime))){
        for ($secondPrime = intval($firstPrime); $secondPrime <= $k; $secondPrime = intval(nextPrime($secondPrime))){
            if ($k == intval($firstPrime) + intval($secondPrime))
                return $firstPrime;
        }
    }
    return -1;
}


function nextPrime($input){
    $result = getNextPrime($input);
    if (intval($result) == intval($input))
        $result = intval(getNextPrime($input+1));
    return $result;
}



function getNextPrime($input) {
    $isPrime = false;
    if ($input <= 2) {
        return 2;
    }
    for ($k = 3; $k < 9; $k += 2) {
        if ($input <= $k) {
            return $k;
        }
    }
    if ($input == (($input >> 1) << 1)) {
        $input += 1;
    }
    for ($i = $input;; $i += 2) {
        $root = intval(sqrt($i));
        for ($j = 3; $j <= $root; $j++) {
            if ($i == ($i / $j) * $j) {
                $isPrime = false;
                break;
            }
            if ($j == $root) {
                $isPrime = true;
            }
        }
        if ($isPrime == true) {
            return $i;
        }
    }
}

$k=12;// gives 5 (5 + 7 = 12)
//$k=68;// gives 7 (7 + 61 = 68)
//$k=77;// gives -1;

echo primes($k);
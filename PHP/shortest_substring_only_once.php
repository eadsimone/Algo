<?php
/**
 * Created by JetBrains PhpStorm.
 * User: edesimone
 * Date: 3/16/13
 * Time: 9:52 PM
 * To change this template use File | Settings | File Templates.
 */

/*
* Given a string s (1<=s.length()<=1000), return the shortest substring that is
* only occurring once.
* Examples:
* s="aabbabbaab" gives either "bab" or "baa"
* s="aaaa" gives "aaaa"
*/

//O(NM)
function shortestSubstring( $A) {

    $solution = '';
    $totalLenght = strlen($A);

    for ( $currentLenght = $totalLenght; $currentLenght > 0; $currentLenght--){
        for ($initialIndex = 0; $initialIndex <= ($totalLenght - $currentLenght); $initialIndex++){
            //$currentSubstring= substr($A, $initialIndex, $initialIndex  + $currentLenght);
            $currentSubstring= substr($A, $initialIndex, $currentLenght);
            // if (substr_count($A, $currentSubstring) == 1){
            if (numberOfOccurrences($A, $currentSubstring) == 1){
                $solution =$currentSubstring;
            }
        }
    }
    return $solution;
}

function numberOfOccurrences($s, $pattern) {
    $ocurrences = 0;
    for ( $initialIndex = 0; $initialIndex < strlen($s) - strlen($pattern) + 1; $initialIndex++){
        if (substr($s,$initialIndex, strlen($pattern))==$pattern)
            $ocurrences++;
    }
    return $ocurrences;
}

$string="aabbabbaab";
//$string="aaaaa";

$sol=shortestSubstring($string);

echo $sol;//$sol;
?>
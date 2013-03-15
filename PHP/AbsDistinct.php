<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peche
 * Date: 3/14/13
 * Time: 6:32 PM
 * To change this template use File | Settings | File Templates.
 *//*
count the number of elements in an array a which are absolute distinct, what it means is if an array had -3 and 3 in it these numbers are not distinct because|-3|=|3|.
i think an example would clear it up better
a={-5,-3,0,1,-3} the result would be 4 because there are 4 absolute distinct elements in this array.

length would be <=10000, and most importantly it stated that assume that the array is sorted in ascending order
    */


function absDistinct ( $A ) {
    $aux=array();
    foreach ($A as $i => $value) {
        $tempVal=abs($value);
        if (!in_array($tempVal, $aux)) {
            print_r($aux);
            $aux[]=$tempVal;
        }
    }
//    echo count($aux);
//    print_r($aux);
    return count($aux);
}

$ar = array( -5, -3, -1, 0, 3, 6 );
//$ar = array(-5,-3,0,1,-3);
absDistinct($ar);

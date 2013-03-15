<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peche
 * Date: 3/14/13
 * Time: 6:02 PM
 * To change this template use File | Settings | File Templates.
 */


/*The method named pairs that will count the number of pairs (2 identical adjacent numbers) that are in the array. Three in succession constitute only 1 pair. Four in succession will be 2 pairs.
You have a function foo(int a, int b) that returns true if 'a' is "adjacent" to 'b' and false if 'a' is not adjacent to 'b'.
You have an array such as this [1,4,5,9,3,2,6,15,89,11,24], but in reality has a very long length,
like 120, and will be repeated over and over (its a genetic algorithm fitness function) which is why efficiency is important.
*/
//codility 3 start
//O(n) time
function adjacent_point_pairs ( $A ) {
    $total=0;
    $is_par=-1;
    $is_par=array();

    for($i=0;$i<count($A);$i++) {

        if ($i!=$is_par) {
            if ($A[$i]==$A[$i+1]) {
                $is_par=$i+1;
                $total++;
            }
        }
    }
//    echo count($aux);
//    print_r($aux);
    return $total;
}

//$A=array(1,4,5,9,3,2,6,15,89,11,24);
$A=array(1,4,4,2,2,2,6,15,11,11,11);//2 pairs
echo adjacent_point_pairs($A);
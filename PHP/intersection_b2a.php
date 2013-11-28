<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ezequiel
 * Date: 28/11/13
 * Time: 12:13
 * To change this template use File | Settings | File Templates.
 */
include'mergesort.php';
/*given two arrays
a(1,4,2,5,3)
b(5,8,9,4,7)
return the intersection between them
intersection(4,5)*/

/*time complexity of O(N)*/
function intersection ($a,$b){
    $i=0;
    $j=0;
    while( ($i<count($a)) and ($j<count($b))){
        if ($a[$i] > $b[$j]): $j++;
        elseif($a[$i] < $b[$j]): $i++;
        else: $final[]= $a[$i];$j++;$i++;
        endif;
    }
    return $final;
}

/*Main
* /*time complexity of O(N Log(N))
*/


$a=array(1,4,2,5,3);
$b=array(5,8,9,4,7);

$asorted=MergeSort($a);
$bsorted=MergeSort($b);

$result=intersection($asorted,$bsorted);
print_r($result);


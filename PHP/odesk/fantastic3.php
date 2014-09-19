<?php
/**
 * Created by PhpStorm.
 * User: edesimone
 * Date: 9/1/14
 * Time: 2:45 PM
 */
$series = array(0,1,1,1);

for($i=3 ; $i<=$n ; $i++){

    $a = (isset($series[ (int)$i-3 ]))?$series[ (int)$i-3 ]:0;

    $b = (isset($series[ (int)$i-2 ]))?$series[ (int)$i-2 ]:0;

    $c = (isset($series[ (int)$i-1 ]))?$series[ (int)$i-1 ]:0;

    $d = ($a+$b+$c)-1;

    if($d<0){

        $d = 0;

    }

    $series[$i] = $d;

}

echo $series[ (int)$n-1 ];
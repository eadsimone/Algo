<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ezequiel
 * Date: 28/11/13
 * Time: 12:29
 * To change this template use File | Settings | File Templates.
 */

function merge_array($x,$y){
    $new=array();
    for($i=0;$i<count($x);$i++){
        $new[$i]=$x[$i];
    }
    for($j=0;$j<count($y);$j++){
        $new[count($x)+$j]=$y[$j];
    }
    return $new;
}

function MergeSort($a){
    if (count($a)>1){
        $cent=floor(count($a)/2);
        $b=MergeSort(array_slice($a,0,$cent));
        $c=MergeSort(array_slice($a,$cent,count($a)));
        return merge($b,$c,$a);
    }else{return $a;}
}

function merge($b,$c,$a){
    $i=$j=$k=0;
    $p=count($b);$q=count($c);
    $a=array();
    while($i<$p && $j<$q){
        if($b[$i]<=$c[$j]){
            $a[$k]=$b[$i];
            $i++;
        }else{
            $a[$k]=$c[$j];
            $j++;
        }
        $k++;
    }
    if($i==$p){
        $xxx = array_slice($c,$j,$q);
    }else{
        $xxx = array_slice($b,$i,$p);
    }
    return merge_array($a,$xxx);
}

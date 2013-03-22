<?php
//Aux functions:slice and merge
//slice_array:Create a new array from an exist array key $from to $to
//function slice_array($arr,$from,$to){
//    if($from>$to) return $arr;
//    elseif($from==$to) return $arr[$from];
//    if(!is_array($arr)||count($arr)==1) {return $arr;}
//    else{
//        $new=array();$a=$to-$from;
//        for($i=0;$i<$a;$i++){
//            $new[$i]=$arr[$from++];
//        }
//    }
//
//    return $new;
//}
//merge_array: create a new array from two exist arrays, order is $x, $y.
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
//Main Script
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


$A=array(10,58,5,33,78,12,1,5);
print_r(MergeSort($A));
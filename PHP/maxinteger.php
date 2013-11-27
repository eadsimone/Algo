<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ezequiel
 * Date: 27/11/13
 * Time: 15:02
 * To change this template use File | Settings | File Templates.
 */

//$entry_data=[0, 4, -34, 3, 4];//  -> 29
$entry_data=[0, 4, [3, 7, 19], [[29, 1], -34], 3, 4];//  -> 29
//$entry_data=array(0,4,array(3,7,19),array(array(29,1),-34),3,4);//  -> 29
/*Return the max of number on given array*/
function MAX_RETURN($arr,&$max){
    for ($i=0;$i<count($arr);$i++){//foreach ($arr as &$value) {
        $value=$arr[$i];
        if(is_array($value)){
            $result=  MAX_RETURN($value,$max);
        }
        else{
            if($value>$max):
            $result=$max=$value;
            else:
            $result=$max;
            endif;
        }
    }
    return $result;
}
echo "<pre>";
print_r($entry_data);
echo "</pre>";

$a=-1;
echo MAX_RETURN($entry_data,$a);

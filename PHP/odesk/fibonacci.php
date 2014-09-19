<?php
/**
 * Created by PhpStorm.
 * User: edesimone
 * Date: 9/1/14
 * Time: 11:42 AM
 */

function fantastic3($n){


    if($n<0){
        return 0;
    }
    else if ($n==1){
        return  0;
    }
    else if (($n==2) || ($n==3)|| ($n==4) ){
        return 1;
    }
    else if ($n>4){
        $valor[]= (fantastic3($n-1) + fantastic3($n-2) + fantastic3($n-3))-1;

        echo $valor[count($valor)];

        return print_r($valor);
    }

}

function fibonacci($n) {

//Error condition:

    if($n<0){
        return -1;
    }
    else if ($n==0){
        return 0;
    }
    else if ($n==1){
        return 1;
    }
    else if ($n>1){
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

function fibo($n,$first = 0,$second = 1)
{
    $fib = [0,1];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
/*
 *
1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144 fibonacci original

The fantastic three sequence is a  series of numbers in which each subsequent number is the sum of the previous three,minus one.
The first few numbers in fantastic three sequence are:


0, 1, 1, 1, 2, 3, 5, etc            este ejercicio fue variante de fibonacci

n:5 outpout:2
n:6 outpout:3

n:7 outpout:5
n:9 outpout:16
n:15 outpout:601
*/
//echo fibonacci(6);
fantastic3(9);

//print_r( fibo(7));
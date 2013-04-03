<?php
/**
 * Created by JetBrains PhpStorm.
 * User: edesimone
 * Date: 3/16/13
 * Time: 9:52 PM
 * To change this template use File | Settings | File Templates.
 */

//multiply(a[0..n−1], b[0..n−1]) // Arrays representing the binary representations
//    x ← 0
//    for i from 0 to 2n−1
//        for j from max(0,i+1−n) to min(i,n−1) // Column multiplication
//            k ← i − j
//            x ← x + (a[j] × b[k])
//        result[i] ← x mod 2
//        x ← floor(x/2)

//function multiply(x, y)
//Input: Positive integers x and y, in binary
//Output: Their product
//n = max(size of x, size of y)
//if n = 1: return xy
//xL , xR = leftmost n/2 , rightmost n/2 bits of x
//yL , yR = leftmost n/2 , rightmost n/2 bits of y
//P1 = multiply(xL , yL )
//P2 = multiply(xR , yR )
//P3 = multiply(xL + xR , yL + yR )
//return P1 × 2n + (P3 − P1 − P2 ) × 2n/2 + P2



/*function $BigInteger_multiply(BigInteger a, BigInteger b) {
    int n = max(strlen(), strlen())
    if(n == 1) {
        return a.intValue() * b.intValue();
    } else {
        BigInteger aR = bottom n/2 digits of a;
        BigInteger aL = top remaining digits of a;
        BigInteger bR = bottom n/2 digits of b;
        BigInteger bL = top remaining digits of b;
        BigInteger x1 = Multiply(aL, bL);
        BigInteger x2 = Multiply(aR, bR);
        BigInteger x3 = Multiply(aL + bL, aR + bR);
        return x1 * pow(10, n) + (x3 - x1 - x2) * pow(10, n / 2) + x2;
    }
}*/
function printing($arr) {
    foreach ($arr as $key => $value) {
        //echo "Key: $key; Value: $value<br />\n";
        echo $value;
    }
}

function Binary_binay($a, $b) {
    $carry=0;
    $n = max(count($a),count($b));
    for($i=0;$i<=$n;$n--){
        if($a[$n-1]==1&&$b[$n-1]==1){
            if($carry==0){
                $result[]=0;
            }else{
            $result[]=1;
            }
            $carry=1;

        }elseif($a[$n-1]==0&&$b[$n-1]==0){
            if($carry==0){
                $result[]=0;
            }else{
                $result[]=1;
            }
            $carry=0;
        }else{
            if($carry==0){
                $result[]=1;
                $carry=0;
            }else{
                $result[]=0;
                $carry=1;
            }

        }
       // $result[]=1;
    }
    return $result;

}

function multiply($a, $b) {
    //$n = max(strlen($a),strlen($b));
    $n = max(count($a),count($b));
    if($n == 1) {
        return intval($a[0]) * intval($b[0]);
    } else {
        $up=ceil($n/2);
        $down=floor($n/2);
        $aL = array_slice($a,0,$up);//leftmost n/2 ;
        $aR = array_slice($a,$up,$down);//rightmost n/2 bits of x floor(n/2);
        $bL = array_slice($b,0,$up);
        $bR = array_slice($b,$up,$down);// , rightmost n/2 bits of y

        $x1 = Multiply($aL, $bL);
        $x2 = Multiply($aR, $bR);
        //$x3 = Multiply(array_reverse(Binary_binay($xL,$yL)), array_reverse(Binary_binay($xR,$yR)));
        $x3 = Multiply(array($aL[0]+$bL[0]),array($aR[0]+$bR[0]));//Multiply(aL + bL, aR + bR);
        return $x1 * pow(10, $n) + ($x3 - $x1 - $x2) * pow(10, $n/2) + $x2;//base 2 bc is binary, base 10 decimal
    }
}

$a=array(1,5);//decimal
$b=array(0,2);//decimal


//$a=array(0,1,0);
//$b=array(0,1,0);

$v1=array(0,1,1,1);
$v2=array(1,0,1,1);
Binary_binay($v1,$v2);

$total = array_reverse(Binary_binay($v1,$v2));



echo"binary first: ";
printing($v1);
echo"<br/>";
echo"binary second: ";
printing($v2);
echo"<br/>";
echo"result: ";
printing($total);


$nada=multiply($a,$b);
echo '<br /> multiply: '.$nada;

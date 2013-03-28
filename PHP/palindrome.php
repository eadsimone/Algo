<?php
/**
 * Created by JetBrains PhpStorm.
 * User: peche
 * Date: 3/26/13
 * Time: 10:46 AM
 * To change this template use File | Settings | File Templates.
 */


function palindrome($A){

        $testword = strtolower($A);
        $testword = preg_replace( '/[^\sa-z0-9]/', '', $testword );
        if($testword == strrev($testword)){
           return true;
        }
        else{
            return false;
        }

}
$word=
    //"madam";
    "madam n madam";
palindrome($word);
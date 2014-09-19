<?php
/**
 * Created by PhpStorm.
 * User: edesimone
 * Date: 9/1/14
 * Time: 12:39 PM
 * PHP Frontend Developer Test v2
Question 2 of 4
Count Days

Write a function named countDays which takes a single parameter named dateInString which is a String in the form "MM.DD.YYYY",
 * representing a real date value. The function should print to the console the number of days from the beginning of the year specified in dateInString until the date represented in dateInString. If the value of dateInString is invalid, the function should print "Bad format" to the console.

Sample Input
dateInString: "01.15.2012"
Sample Output
15
Additional SamplesInput	Output
dateInString: "02.01.2014"	32
dateInString: "This is not a valid date"	Bad format
 */

function countDays($dateInString) {

    $date = explode('.', $dateInString);

    if(count($date) == 3 && checkdate($date[0], $date[1], $date[2])){

        $formatted_date = $date[2].'-'.$date[0].'-'.$date[1].' 00:00:00';

        $diff =  strtotime($formatted_date) - strtotime($date[2].'-01-01 00:00:00');

        echo round($diff/86400)+1;

    } else {

        echo 'Bad format';

    }
}


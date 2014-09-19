<?php

function fantastic3($n) {

  if ($n !==0){
   if ($n <= 2){
       return 1;
   }else{
       return fantastic3($n-1) + fantastic3($n-2);
    }
  }

}

/*
n:7 outpout:5
n:9 outpout:16
n:15 outpout:601
*/

echo fantastic3(7);
/*

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

$dateInString="01.15.2012";
$dateInString="02.01.2014";
//$dateInString="This is not a valid date";

countDays($dateInString);


/*---------------------------------------*/

/*
function changeNickname($oldNickname, $newNickname, $users){

    $valid = preg_match('/^(([^0-9])+([A-Za-z0-9\$\#\<\>\-\_]+))$/i', $newNickname, $matches);

    if($valid == true){

        $old_found = false;

        $new_exists = false;

        foreach($users as $id => $user){

            if($user['nickname'] == $oldNickname){

                $old_found = true;

            }

            if($user['nickname'] == $newNickname){

                $new_exists = true;

            }

        }

        if($old_found == true && $new_exists == false){

            echo 'Your nickname has been changed from '.$oldNickname.' to '.$newNickname;

        } else {

            echo 'Failed to update';

        }

    } else {

    echo 'Failed to update';

    }
}


/*------------------------otro*////
/*
class InternationalShipping extends Shipping

{

    private $_internationalDistance;

    public function __construct($itemsCount, $distance, $internationalDistance){

        parent::__construct($itemsCount, $distance);

        $this->_internationalDistance = $internationalDistance;

    }

    public function getFees(){

        $no_of_items = $this->getItemsCount();

        $local_distance = $this->getDistance();

        $international_distance = $this->_internationalDistance;



        $fees = $no_of_items * ($local_distance * 0.8 + $international_distance * 1.2);

        return $fees;

    }

}


function calculateShippingFees($items) {



// To print results to the standard output you can use print

// Example:

// print “Hello world!”;

    $total = 0;

    foreach ($items as $key => $object) {

# code…

        if($object instanceof InternationalShipping || $object instanceof LocalShipping){

            $total += $object->getFees();

        } else {

            $total = 0;

            break;

        }

    }

    echo $total;

}
*/
    ?>
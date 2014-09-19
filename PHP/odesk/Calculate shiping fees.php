<?php
/*
  *
  Question 4 of 4
Calculate Shipping Fees

A script is required to help calculate shipping fees for a store. The store has two types of shipping: local shipping and international shipping.
They are calculated according to the following formulas:
local shipping: number of items * distance * .8
international shipping: number of items * ( local distance * .8 + international distance * 1.2)

A LocalShipping object should have number of items and local distance, respectively, as its parameters,
while an InternationalShipping object should have number of items, local distance, and international distance, respectively.

Without modifying the Shipping class, add the necessary code so that it can be used to calculate different shipping fees.
Also, create a function named calculateShippingFees that will be given an array of Shipping instances as a parameter and print the total shipping fee.

Sample Input
items: {new InternationalShipping(5, 50, 150), new LocalShipping(6, 35)}
Sample Output
1268
Additional SamplesInput	Output
items: {new FastMail(6, 35)}	0

Note

*If the array has any item that is not a Shipping object it should set its shipping fee as 0.
*/
// Do not modify the Shipping class.
abstract class Shipping
{
    private $_itemsCount;
    private $_distance;

    public function __construct($itemsCount, $distance)
    {
        $this->_itemsCount = $itemsCount;
        $this->_distance = $distance;
    }

    abstract public function getFees();

    public function getDistance()
    {
        return $this->_distance;
    }

    public function getItemsCount()
    {
        return $this->_itemsCount;
    }
}

// You can modify code below this comment.
class InternationalShipping extends Shipping
{
    private $_internationalDistance;

    public function __construct($itemsCount, $distance, $idistance)
    {
        parent::__construct($itemsCount, $distance);
        $this->_internationalDistance = $idistance;
    }
    public function getFees()
    {
        // TODO: Implement getFees() method.
        //number of items * ( local distance * .8 + international distance * 1.2)
        return $this->getItemsCount() * ($this->getDistance() * 0.8 +  $this->_internationalDistance * 1.2);
    }
}

class LocalShipping extends Shipping
{
    public function getFees()
    {
        // TODO: Implement getFees() method.
        //local shipping: number of items * distance * .8
        return $this->getItemsCount() * $this->getDistance() * 0.8;
    }
}

//will be given an array of Shipping instances as a parameter and print the total shipping fee
function calculateShippingFees($items) {

    // To print results to the standard output you can use print
    // Example:
    // print "Hello world!";
    $total=0;
    foreach($items as $instance){

        if(($instance instanceof InternationalShipping) || ($instance instanceof LocalShipping)){

            $total += $instance->getFees();

        } else {

            $total += 0;

        }
    }

    echo $total;

}

/*just for test */
class FastMail extends Shipping
{
    public function getFees()
    {
        // TODO: Implement getFees() method.
        //local shipping: number of items * distance * .8
        return -999;
    }
}

//items:{new InternationalShipping(5, 50, 150), new LocalShipping(6, 35)}
//items:{new InternationalShipping(5, 50, 150), new FastMail(6, 35), new LocalShipping(6, 35)}
//items: {new FastMail(6, 35)}

$InternationalShipping = new InternationalShipping(5, 50, 150);
$LocalShipping = new LocalShipping(6, 35);

$FastMail=new FastMail(6, 35);


//$itemobject = array($InternationalShipping, $LocalShipping);
//$itemobject = array($InternationalShipping, $FastMail, $LocalShipping);
$itemobject = array($FastMail);


calculateShippingFees($itemobject);

// Do NOT call the calculateShippingFees function in the code
// you write. The system will call it automatically.

?>
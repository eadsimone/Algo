<?php
/*
*
*An interface called IUser defines what a user object should do. The implementation of IUser is called User, and a factory class called UserFactory creates IUser objects. This relationship is shown as UML in Figure 1.
Figure 1. The factory class and its related IUser interface and user class
The factory class and its related IUser interface and user class
If you run this code on the command line using the php interpreter, you get this result:
% php factory1.php 
Jack
%
*/
interface IUser
{
  function getName();
}

class User implements IUser
{
  public function __construct( $id ) { }

  public function getName()
  {
    return "Jack";
  }
}

class UserFactory
{
  public static function Create( $id )
  {
    return new User( $id );
  }
}

$uo = UserFactory::Create( 1 );
echo( $uo->getName()."\n" );
?>

<?php
/*
The observer pattern gives you another way to avoid tight coupling between components. This pattern is simple: One object makes itself observable by adding a method that allows another object, the observer, to register itself. When the observable object changes, it sends a message to the registered observers. What those observers do with that information isn't relevant or important to the observable object. The result is a way for objects to talk with each other without necessarily understanding why.
A simple example is a list of users in a system. The code in Listing 4 shows a user list that sends out a message when users are added. This list is watched by a logging observer that puts out a message when a user is added.

*/
interface IObserver
{
  function onChanged( $sender, $args );
}

interface IObservable
{
  function addObserver( $observer );
}

class UserList implements IObservable
{
  private $_observers = array();

  public function addCustomer( $name )
  {
    foreach( $this->_observers as $obs )
      $obs->onChanged( $this, $name );
  }

  public function addObserver( $observer )
  {
    $this->_observers []= $observer;
  }
}

class UserListLogger implements IObserver
{
  public function onChanged( $sender, $args )
  {
    echo( "'$args' added to user list\n" );
  }
}

$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addCustomer( "Jack" );
?>

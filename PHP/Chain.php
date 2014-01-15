<?php
/*
Building on the loose-coupling theme, the chain-of-command pattern routes a message, command, request, or whatever you like through a set of handlers. Each handler decides for itself whether it can handle the request. If it can, the request is handled, and the process stops. You can add or remove handlers from the system without influencing other handlers. Listing 5 shows an example of this pattern.

*/
interface ICommand
{
  function onCommand( $name, $args );
}

class CommandChain
{
  private $_commands = array();

  public function addCommand( $cmd )
  {
    $this->_commands []= $cmd;
  }

  public function runCommand( $name, $args )
  {
    foreach( $this->_commands as $cmd )
    {
      if ( $cmd->onCommand( $name, $args ) )
        return;
    }
  }
}

class UserCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'addUser' ) return false;
    echo( "UserCommand handling 'addUser'\n" );
    return true;
  }
}

class MailCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'mail' ) return false;
    echo( "MailCommand handling 'mail'\n" );
    return true;
  }
}

$cc = new CommandChain();
$cc->addCommand( new UserCommand() );
$cc->addCommand( new MailCommand() );
$cc->runCommand( 'addUser', null );
$cc->runCommand( 'mail', null );
?>

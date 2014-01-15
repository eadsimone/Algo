<?php
/*
Some application resources are exclusive in that there is one and only one of this type of resource. For example, the connection to a database through the database handle is exclusive. You want to share the database handle in an application because it's an overhead to keep opening and closing connections, particularly during a single page fetch.
The singleton pattern covers this need. An object is a singleton if the application can include one and only one of that object at a time. The code in Listing 3 shows a database connection singleton in PHP V5.

RESPONSE:
This code shows a single class called DatabaseConnection. You can't create your own DatabaseConnection because the constructor is private. But you can get the one and only one DatabaseConnection object using the static get method. The UML for this code is shown in Figure 3.
Figure 3. The database connection singleton
The database connection singleton
The proof in the pudding is that the database handle returned by the handle method is the same between two calls. You can see this by running the code on the command line.
% php singleton.php 
Handle = Object id #3
Handle = Object id #3
%
The two handles returned are the same object. If you use the database connection singleton across the application, you reuse the same handle everywhere.
You could use a global variable to store the database handle, but that approach only works for small applications. In larger applications, avoid globals, and go with objects and methods to get access to resources.

*/

require_once("DB.php");

class DatabaseConnection
{
  public static function get()
  {
    static $db = null;
    if ( $db == null )
      $db = new DatabaseConnection();
    return $db;
  }

  private $_handle = null;

  private function __construct()
  {
    $dsn = 'mysql://root:password@localhost/photos';
    $this->_handle =& DB::Connect( $dsn, array() );
  }
  
  public function handle()
  {
    return $this->_handle;
  }
}

print( "Handle = ".DatabaseConnection::get()->handle()."\n" );
print( "Handle = ".DatabaseConnection::get()->handle()."\n" );
?>

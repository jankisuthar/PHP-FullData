<?php
class foo
{
	public static $my_static="i m foo";   // in static keyword use in static variable use like $my_static
	public function static_foo()
	{
		echo self::$my_static;
	}
}
class bar extends foo
{
	public function static_bar()
	{
		echo parent::$my_static;
	}
}
 echo foo::$my_static;  // call class foo with foo $my_static variable    method 1
 echo bar::$my_static;  // call class bar with foo $my_static variable    method 2

?>
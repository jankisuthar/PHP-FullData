<?php
abstract class A  // define abstract before class declare in main class
{
	abstract function foo();    // alwayas use abstract method and also use simple method // if it interfave method than foo(); (;) must othrwise not
	abstract function bar();    
	function simple()           // also use simple method
	{
		echo "This is Simple method";
	}
}
class B extends A
{
	function foo()                  // allways listern abstract method in main class must used in extend class like B & C
	{
		echo "This is B class foo method";
	}
	function bar()
	{
		echo "This is B class bar method";
	}
}
class C extends A
{
	function foo()                  // allways listern abstract method in main class must used in extend class like B & C
	{
		echo "This is C class foo method";
	}
	function bar()
	{
		echo "This is C class bar method";
	}
}
$c=new c();    // call all method by obj
$c->foo();
$c->bar();
?>
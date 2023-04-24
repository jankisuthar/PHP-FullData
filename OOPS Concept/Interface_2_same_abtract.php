<?php
interface A1    // use interface insted of class
{
	function foo(); // if it interfave method than foo(); (;) must othrwise not
}
interface A2
{
	function bar();
}
	
class B implements A1,A2  // use extend impliments 
  
  {
	 function foo() 
	 {
		 echo "This is B class foo.<br>";
	 }
     function bar()
	 {
		 echo "This is B class bar.<br>";
	 }
  }
  $obj=new B;
  $obj->foo();
  $obj->bar();
?>
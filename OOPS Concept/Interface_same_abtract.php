<?php
interface A1    // use interface insted of class
{
	function foo(); // if it interfave method than foo(); (;) must othrwise not
    function bar();
}
class B implements A1  // use extend impliments
  
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
  
 class C implements A1
   {
	 function foo() 
	 {
		 echo "This is C class foo.<br>";
	 }
     function bar()
	 {
		 echo "This is C class bar.<br>";
	 }
  } 
  $obj=new C;
  $obj->foo();
  $obj->bar();
?>
<?php   // usefull in reduce reusable code and remove limitation inheritance multiple

trait first  // use trait insted of class
{
	function method1()
	{
		echo "This is method1.<br>";
	}
    function method2()
	{
		echo "This is method2";
	}
}
class sample
{
	use first;  // here use word (use) for inheritance of class first
}

$obj= new sample;
$obj->method1();
$obj->method2();
?>

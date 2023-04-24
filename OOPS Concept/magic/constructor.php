<?php
class A
{
		public function A()
		{
			echo "Public function is called";
			//return "hi";
		}
		function __construct()
		{
			echo "magic method";
		}
}
$ob = new A;
$ob->A();
//echo $c=$ob->A();
?>
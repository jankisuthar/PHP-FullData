<?php
class a
{
	function __construct()
	{
		echo"this is construct method";
	}
	
	function simple()
	{
		a::__construct();
		self::__construct();
	}
	
}
class b extends a
{
	function b() // same name of class & func = construc func
	{		 
		echo"this is b method.</br>";
		parent::__construct(); // call method by extends with (parent::__construct();) withaout calling in main method 
		a::__construct()
	}
}
$obj=new b;


?>
<?php
class a
{
	function a()  // __construct / class name & fun same
	{
		echo " This is Construct.</br>";
	}
	
	function simple()
	{
		a::__construct();/// call by scope resolution ::
		echo " This is simple.</br>";
	}
	
	
}
$obj=new a();
$obj->simple();
?>
<?php

class a
{
	public $public="PUBLIC";
	protected $protected="PROTECTED";
	private $private="PRIVATE";
	
	function method1()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}
}
   $obj=new a();               //call all public protected private by method1
   $obj->method1();
   //echo $obj->public;     // run work
   //echo $obj->protected;   //  error not work
   //echo $obj->private;     // error not work

?>
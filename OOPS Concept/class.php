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
   $obj->method1();  //run
   //echo $obj->public; // run
   //echo $obj->protected; // error
   //echo $obj->private;   // error
?>
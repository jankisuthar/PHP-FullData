<?php
class abc
{   
	public $a=10;  // global var public var
	public $b=20;
	function sum()
	{
	echo $sum=$this->a+$this->b;	 // $this keyword use
	}	
	
	function multi()
	{
	$this->sum();
	echo $multi=$this->a*$this->b;	 // $this keyword use
	}	
}
$obj=new abc;
$obj->multi();


?>
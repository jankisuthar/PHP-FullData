<?php
class A
{
	public function A()
	{
		echo "Constructor of class A";
	}
}
class B extends A
{
	public function B()
	{
		parent:: __construct();
		//parent::A();
		echo "Constructor of class B";
	}
}
$ob = new B;

?>
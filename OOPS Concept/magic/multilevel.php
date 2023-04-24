<?php
class A
{
		public function test()
		{
			echo "public function of class A"."<br>";
		}
		protected function sam1()
		{
			echo "protected function of class A"."<br>";
		}
}
class B extends A
{
	public function test1()
	{
		echo "public test1 function class B"."<br>";
	}
}
class C extends B
{
	public function Sample()
	{
		$this->sam1();
		parent::sam1();
		echo "public fucntion of C class";
	}
}
$ob = new C;
$ob->test();
$ob->test1();
$ob->Sample();

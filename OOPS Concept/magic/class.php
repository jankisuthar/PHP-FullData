<?php
class A
{
	public function test()
	{
			$this->test1();//pseudo variable
			echo "Public function is called";
	}
	private function test1()
	{
			echo "Private function is called";
	}
}
$ob = new A;
$ob->test();


?>
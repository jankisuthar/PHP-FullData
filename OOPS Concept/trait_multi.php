<?php
trait a
{
	public function test()
		{
		echo "This is test method";
		}
}
trait b 
{
	public function sample()
	{
		echo "this is sample method";
	}
}
class c 
{
	use a,b;
}
$obj=new c();
$obj->test();
$obj->sample();

?>
<?php
class A
{
		public function test()
		{
			$this->sample();
			//$this->sam1();
			echo "public function of class A"."<br>";
		}
		private function sample()
		{
			echo "Private function class A"."<br>";
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
		//$this->sample();error
		$this->sam1();
		echo "public test1 function class B"."<br>";
	}
	
}
$ob = new B;
$ob->test();
$ob->test1();

?>
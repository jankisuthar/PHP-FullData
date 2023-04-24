<?php
class A
{
		private $a,$b;
		public function getval($a,$b)
		{
				$this->a=$a;
				$this->b=$b;
			
		}
		public function add()
		{
			return $this->a+$this->b;
		}
		public function sub()
		{
			return $this->a-$this->b;
		}
}
$ob = new A;
$ob->getval(20,40);
echo $add=$ob->add();
echo "<br>";
echo $sub=$ob->sub();

?>
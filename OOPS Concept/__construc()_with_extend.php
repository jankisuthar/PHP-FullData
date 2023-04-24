<?php
class a
{
	function __construct()
	{
		echo " This is Construct.</br>";
	}
	public function mypublic()
	{
		echo "This is public method.</br>";
	}	
	protected function myprotected()
	{
		echo "This Is protected method.</br>";
	}
	private function myprivate()
	{
		echo "This is private method.</br>";
	}
	public function display()   // combine all function method in one display method by $this->myprivate(); 
	{
		$this->mypublic();
		$this->myprotected();
		$this->myprivate();
	}
}
class b extends a
{
	function display1()
	{
		$this->mypublic();
		$this->myprotected();
	 // $this->myprivate();	    private not work	
	}
}
$obj=new b;
$obj->display1(); // all function work like myprotected mypublic bcoz combine in display and cal display but only private not work
//$obj->mypublic();   //work
//$obj->myprotected();  // error
//$obj->myprivate();    // error
?>
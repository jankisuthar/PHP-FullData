<?php

/*

access modi/visiblity

public : availbale in all class & outside class
private: availbale in own class
protected : available in own class and inheritance/extends class

*/
class a
{
	public $a="This is a variable";
	function adisplay()
	{
		echo $this->a;
	}
}

class b extends a
{
	 function bdisplay()
	{
		$this->adisplay();
	    echo $this->a;
	}
}
$obj= new b;
$obj->adisplay();
$obj->bdisplay();
?>
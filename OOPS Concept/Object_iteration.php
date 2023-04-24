<?php  // boject iterate use full in array with foreach function

class a
{
	public $value1='value1';
	public $value2='value2';
	public $value3='value3';
	
	protected $protected='protected';
	private $private='private';
	
	function iterateVisible()
	{
		//echo "a class::iterateVisible:.<br>";
		foreach($this as $key=>$value)
		{
			//echo "$key=>$value.<br>";
		}
	}
}
//$obj= new a();                  // call class variable of class a show only public not protected & private
foreach($obj as $key=>$value)    
		{
		//	echo "$key=>$value.<br>";  
		}
		echo "<br>";
//$obj->iterateVisible();  // now we use foreacha in this so it can take all value of a method iterateVisible 
?>
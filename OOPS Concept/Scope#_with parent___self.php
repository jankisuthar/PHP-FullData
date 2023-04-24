<?php
class sample
{
	const const_value="I m const.</br>";  // in const keyword use for static & constatnt value & variable name withaout $ sign  
}

class other_sample extends sample
{
public	static $mystatic="I am static";

public function display()
{
	echo parent::const_value;   //  :: use for call method/function or variable withaout obj & with parent for above class variable 
	echo self::$mystatic;       //  :: use for call method/function or variable withaout obj & with self for in class variable 
}
}
 other_sample::display();    // now call other class display method for parent & self variable value 
?>
<?php

class A
{
    public function __get($var) 
	{ // string var name
        echo $var;
        
    }
    public function __set($var,$val) {// string var name & value
        echo $var;
        echo "<br>";
        echo $val;
		echo "<br>";
        
    }
}
$ob= new A();
$ob->var_name;
$ob->y=20;

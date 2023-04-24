<?php
class a
{
    
    public function __construct()
    {
        echo "I'm alive!";    
       
    }
    
    public function __destruct()
    {
        echo "I'm dead now ";
    }
	public function display()
    {
        echo "I'm display now ";
    }
	
}

$a = new a();
$a->display();

?>
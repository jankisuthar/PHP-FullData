<?php
function test(&$a)
{
	$a= " this is a";
	$b= "this is b"; 
}
    
    test($b);  //call function so print $b
    echo $b;  // call by echo call also $b and $a
?>
<?php
class A
{
    function __call($name,$value)
    {
        echo $name."<br>";
        print_r($value);
    }
}
$ob = new A();
$ob->test(1,2,3,4,5); // test array string var name & 1234 is value 
$ob->test("tops","tech");
$ob->mitesh(1,1.3,"Mitesh");
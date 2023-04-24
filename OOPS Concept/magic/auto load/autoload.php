<?php
function __autoload($file_name) // automatecaly inclyde file a.php & b.php due diclare object
{
    include_once($file_name.".php"); // all php file check & get class A & B file include auto 
}
$ob= new A;
$ob->display();

$ob1= new B;
$ob1->display1();

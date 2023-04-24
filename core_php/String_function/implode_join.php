<?php
$im=array("Hindi","English","Gujarati","Other");  //convert array to string

print_r($im);
//Array ( [0] => Hindi [1] => English [2] => Gujarati [3] => other )
// Hindi,English,Gujarati,Other


echo implode(",",$im)."<br>";

echo join(",",$im);
?>
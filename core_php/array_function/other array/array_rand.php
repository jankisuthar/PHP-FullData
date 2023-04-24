<?php
$input=array("a","b","c","d","e");
$rand_keys=array_rand($input,2);
echo $input[$rand_keys[0]]."\n";
echo $input[$rand_keys[1]]."\n";
?>
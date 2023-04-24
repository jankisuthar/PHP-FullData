<?php
$a=array("a"=>"raj","z"=>"ishita","d"=>"nagar"); // key sort accendind order

ksort($a);      // key sort a to z order
print_r($a);
echo "<br>";



krsort($a);     // key sort z to a order
print_r($a);
?>
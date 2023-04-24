<?php

$file=fopen('rajesh.doc','a');
$addtext1='Rajesh';
$addtext2='Gaurav';
$addtext3='Shridhar';
$addtext4='Mahesh';
$addtext5='Chandraprakash';
$addtext6='Girish';


fwrite($file,$addtext1.$addtext2.$addtext3.$addtext4.$addtext5.$addtext6);
fclose($file);

$file=fopen('rajesh.doc','r');
echo $addtext=fread($file,filesize('rajesh.doc'));
fclose($file);

?>
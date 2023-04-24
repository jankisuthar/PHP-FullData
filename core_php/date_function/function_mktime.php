<?php
$date=mktime(0,0,0,date("m")+1,date("d")+1,date("y")+1); // difine future date but add 0,0,0

$time=mktime(date("h")+1,date("i")+20,date("s")+50); // difine future time but reemove 0,0,0 and fist set date_default_timezone_setsss


date_default_timezone_set("asia/calcutta");

echo date("d/m/y",$date)."<br>";

echo date('h:i:s A',$time)."<br>";


?>


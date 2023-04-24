<?php

echo date('d/m/y')."<br>";
echo date('d.m.y')."<br>";


date_default_timezone_set('asia/calcutta');

echo date('h:i:s A')."<br>"; // 12 FORMAT   SO ADD a for am pm 
echo date('H:i:s')."<br>";   //  24 FORMAT



//============= TIMESTAMP


echo time();  // time function print 1970,1 jan seconds

$time=time()+2*60*60; 
$date=time()+2*24*60*60; 


echo "<br>";  // add 2 hours seconds

echo date('h:i:s A',$time)."<br>";
echo date('d/m/y',$date)."<br>";








?>
<?php


function addition()    // define variable as super global use any were in program;
{
$x=25;  // local var
$y=75;
echo $GLOBALS['z']=$x+$y;
}
addition();

echo $z;

session_start();
echo $_SESSION['user'];


echo $_COOKIE['var_name'];
?>
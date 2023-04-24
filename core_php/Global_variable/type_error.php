<?php

/*
1) Notice Error   // Undefined var  // don't terminate script
2) Syntex Error/ perse error   Stop Script Excecution
3) Warning   //  don't terminate script   include()
4) Fettal error  //    Stop Script Excecution  require()

*/


//1) Notice Error   // Undefined var  // don't terminate script

/*
$a=10;
$b=20;
echo $A;
echo $b;

*/
//========================

// 2) Syntex Error/ perse error  //semi column {} //syntext error

/*
$a=10;
$b=20
echo $A;
echo $b;

*/

//  3) Warning

// file include

/*
include('hell.php');
include('hello.php');
include('hello.php');

include_once('hello.php');
include_once('hello.php');
*/



//4) Fettal error  //    Stop Script Excecution  require()


/*

require('hell.php');
require('hello.php');
require('hello.php');

require_once('hello.php');
require_once('hello.php');

*/
?>
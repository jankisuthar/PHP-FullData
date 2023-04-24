<?php

session_start();
$_SESSION['user']="Raj";

$_SESSION['abc']="Rajesh";

//print session print

echo $_SESSION['user'];

// session_delete

//unset($_SESSION['user']);  //single session delete


//session_destroy(); // all session delete

?>
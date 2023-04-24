<?php
/*
In simple word, type hinting means providing hints to function to only accept the given data type.
In technical word we can say that Type Hinting is method by which we can force function to accept the desired data type.
In PHP, we can use type hinting for Object, Array and callable data type.

Since PHP 5 you can use type hinting to specify the expected data type of an argument
 in a function declaration. When you call the function, PHP will check whether or not
 the arguments are of the specified type. If not, the run-time will raise an error 
 and execution will be halted.

*/


// The function can only get array as an argument.
function calcNumMilesOnFullTank(array $models)
{
  foreach($models as $item)
  {
    echo $carModel = $item[0];
    echo " : ";
    echo $numberOfMiles = $item[1] * $item[2];
    echo "<br />";
   }
}
 
calcNumMilesOnFullTank(array(array('Toyota', 12, 44),array('BMW', 13, 41)));
?>
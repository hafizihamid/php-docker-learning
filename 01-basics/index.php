<?php
echo "Hello, PHP with Docker!";

# concatenate in PHP
// use the period (.) as the concatenate operator
echo "hello . hafizi";

# variables in PHP
// create using the dollar sign ($) 
$greet = "hello";
// $greet will hold the "hello" value

// add space in concacenate
echo $greet . " everybody";
echo $greet . " " ."everybody";
// it will output 'hello everybody'

# singles & doubles quotes
// double allow variable interpolation (variables inside the strings are evaluated)
// single treat the content literally (variables not evaluated)
echo "$greet everybody";
echo '$greet everybody';

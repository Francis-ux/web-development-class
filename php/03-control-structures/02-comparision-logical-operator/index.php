<?php
/*
    Comparison Operators
    ==  | Equal to
    === | Identical to
    !=  | Not Equal to
    !== | Not identical to
    <   | Less than
    >   | Greater than
    <=  | Less than or equal to
    >=  | Greater than or equal to


    Logical Operators
    and | True if both are true
    &&  | True if both are tur
    or  | True if either is true
    ||  | True if either is true
    xor | True if one is true
    !   | True if it is not true
    
 
 */

// Comparison

// $x = 10;
// $y = '10';

// var_dump($x == $y);
// var_dump($x === $y);
// var_dump($x != $y);
// var_dump($x !== $y);
// var_dump($x < $y);
// var_dump($x > $y);
// var_dump($x <= $y);
// var_dump($x >= $y);

// Logical

$a = 10;
$b = 20;

var_dump($a == 10  && $b == 20);

var_dump($a == 10  || $b == 20);

var_dump($a == 10  xor $b == 20);

var_dump(!($a == 5));

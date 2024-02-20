<?php
// Function with argument
function add($ab, $b)
{
    return $ab + $b;
}

echo add(9, 6) . "\n";
echo add(6, 6) . "\n";
echo add(50, 6) . "\n";

// Default arguments
function sayHello($name = 'World')
{
    return "Hello $name";
}

echo sayHello() . "\n";

// Variable argument
function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $key => $number) {
        $total += $number;
    }

    return $total;
}

echo addAll(1, 2, 3, 4, 5, 6) . "\n";

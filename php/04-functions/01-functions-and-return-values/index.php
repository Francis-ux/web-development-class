<?php
// Create a function
function sayHello()
{
    echo 'Hello';
}

// Invoke a function
sayHello();

// Return a value
function sayGoodbye()
{
    return 'Goodbye';
}

// Invoke a function
echo sayGoodbye();


$array = [1, 2, 4, 5, 6, 7, 8];


function myCount($array)
{
    $count = 0;

    foreach ($array as $key => $value) {
        $count++;
    }

    return $count;
}

echo count($array);

echo myCount($array);

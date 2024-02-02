<?php
$output = null;

$fruits = [
    [
        ['Apple', 'Red'],
        ['Orange', 'Pink'],
        ['Banana', 'Yellow']
    ]
];

// Accessing elements

$output = $fruits[0][0][1];

// Multidimensional associative array

$users = [
    [
        ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'],
        ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'],
        ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => 'secret'],
    ]
];

$output = $users[0][2]['name'];

// Add a new user
$users[][] = ['name' => 'alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];


// Accessing element

$output = $users[1][0]['name'];

// Remove the last user
// array_pop($users);

// Remove a specific user
// unset($users[0][1]);

// count users/elements
$output = count($users[1]);

// print_r($users);


echo $output;

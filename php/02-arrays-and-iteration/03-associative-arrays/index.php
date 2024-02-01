<?php
$output = null;

$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => 'secret',
    'hobbies' => ['Tennis', 'Video Games']
];

// Accessing elements
$output = $user['name'];
$output = $user['email'];

// Accessing nested elements
$output = $user['hobbies'][1];

// Adding a new element
$user['address'] = 'No 17 Emma Street';

// Removing an element
unset($user['address'], $user['hobbies']);

echo $output;
var_dump($user);

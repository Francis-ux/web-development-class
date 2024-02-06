<?php
// Challenge 1

$numbers = [2, 3, 4, 5, 6];

$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];

$amount = count($numbers);

echo 'The sum of the ' . $amount . ' numbers is ' . $sum;

// Challenge 2
$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);

$colors = array_merge($colors, ['purple', 'orange']);

array_splice($colors, 1, 0, 'pink');

array_pop($colors);

print_r($colors);

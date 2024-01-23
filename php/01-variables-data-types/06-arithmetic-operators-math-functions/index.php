<?php
/* 
    Arithmetics Operators
    + = Addition
    - = Subtraction
    * = Multiplication
    / = Division
    % = Modulus
*/

$num1 = 20;
$num2 = 10;

// Basic Arithmetics

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Appending assignment operator
$num3 = 10;
$num3 += 20; // $num3 = $num3 + 20;
$num3 -= 20; // $num3 = $num3 - 20;
$num3 *= 20; // $num3 = $num3 * 20;
$num3 /= 20; // $num3 = $num3 / 20;

// Generate a random number
$output = rand();
$output = rand(1, 10);

// Rounding a floating point number
$output = round(4.3);

// Rounding a number up to the nearest integer
$output = ceil(4.3);

// Rounding a number down to the nearest integer
$output = floor(4.3);

// Return the square root of a number
$output = sqrt(64);

// abs() - Returns the absolute (positive) value of a number
$output = abs(-4.7);

// max() - Returns the highest value in a list or array of arguments
$output = max(1, 2, 3);

// min() - Returns the lowest value in a list or array of arguments
$output = min(1, 2, 3);

// number_format() - Formats a number with the grouped thousands
$output = number_format(10000);

echo $output;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetics Operators Math Function</title>
</head>

<body>
    <h1>
        Arithmetics Operators Math Function
    </h1>
</body>

</html>
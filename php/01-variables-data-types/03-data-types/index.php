<?php
// A data type is a classification of data which tells the compiler or interpreter how the programmer intends to use the data.

/*
PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$name = 'Francis Nnabuife';
var_dump($name); // Will show the value and type
echo '<br>';
echo gettype($name);
echo '<br>';


// Integer
$age = 33;
var_dump($age);
echo '<br>';


// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';


// Boolean
$isLoaded = false;
var_dump($isLoaded);
echo '<br>';

// Array
$friends = array('john', 'jane', 'jill');
var_dump($friends); // Will show the value and type
echo '<br>';
echo gettype($friends);
echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>

<body>
    <h1>Data Types</h1>
</body>

</html>
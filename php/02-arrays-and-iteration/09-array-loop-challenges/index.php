<?php
// Create a multiplication table using a nested for loop

echo '<h3>Multiplication Table</h3>';

for ($i = 1; $i <= 6; $i++) { // loop through numbers from 1 to 10 for the multiplicand
    for ($j = 1; $j <= 6; $j++) { // loop through numbers from 1 to 10 for the multiplier
        echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
    }
}


// Get the sum of numbers in an array using foreach loop.

echo '<h3>Array Sum Using Foreach</h3>';

$numbers = [1, 2, 3, 4, 5, 6, 7];

$total = 0;

foreach ($numbers as $key => $number) {
    $total += $number;
}

$sum = $total;

echo $sum;

echo "<br>";

echo '<h3>Array Sum Using ForLoop</h3>';

$total2 = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total2 += $numbers[$i];
}

$sum2 = $total2;

echo $sum2;

echo "<br>";


// Count item in an array
echo '<h3>Count Items In Array</h3>';

$count = 0;

foreach ($numbers as $key => $number) {
    $count++;
}

echo $count;

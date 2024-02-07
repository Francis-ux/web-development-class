<?php
$output = null;

// For loop
for ($i = 0; $i <= 10; $i--) {
    echo $i . ',';
}

// While loop
$i = 10;
while ($i >= 0) {
    echo $i . ',';
    $i--;
}

// Do while loop
$i = 0;
do {
    echo $i;
    $i++;
} while ($i <= 10);

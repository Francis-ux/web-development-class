<?php
// $number = 1;

// while ($number <= 10) {
//     if ($number % 2 == 0) {
//         echo $number . ' is even' . "\n";
//     } else {
//         echo $number . ' is odd' . "\n";
//     }

//     $number++;
// }

// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo $i . ' is even' . "\n";
//     } else {
//         echo $i . ' is odd' . "\n";
//     }
// }

// Break out of loop
// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5) {
//         break;
//     }

//     echo $i . ',';
// }

// Skip and continue
// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5 || $i == 9) {
//         echo "*" . ',';
//         continue;
//     }

//     echo $i . ',';
// }

$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80,
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade' . "\n";
    } else {
        echo $name . ' does not have an excellent grade' . "\n";
    }
}

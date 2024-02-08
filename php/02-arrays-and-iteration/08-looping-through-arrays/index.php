<?php
$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

// foreach ($names as $key => $name) {
//     echo $name . ',';
// }

$users = [
    [
        ['name' => 'John', 'email' => 'john@email.com'],
        ['name' => 'Jane', 'email' => 'jane@email.com'],
        ['name' => 'joe', 'email' => 'joe@email.com'],
        ['name' => 'mary', 'email' => 'mary@email.com'],
    ]

];

foreach ($users as $key => $user) {
    foreach ($user as $value) {
        foreach ($value as $values) {
            echo $values . ',';
        }
    }
}

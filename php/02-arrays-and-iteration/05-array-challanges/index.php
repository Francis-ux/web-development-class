<?php
// Challenge 1

// $numbers = [2, 3, 4, 5, 6];

// $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];

// $amount = count($numbers);

// echo 'The sum of the ' . $amount . ' numbers is ' . $sum;

// // Challenge 2
// $colors = ['red', 'blue', 'green', 'yellow'];

// $colors = array_reverse($colors);

// $colors = array_merge($colors, ['purple', 'orange']);

// array_splice($colors, 1, 0, 'pink');

// array_pop($colors);

// print_r($colors);

// Challenge 3

$listings = [
    [
        'id' => 1,
        'job_title' => 'PHP Developer',
        'company' => 'Meta',
        'contact_email' => 'support@meta.com',
        'contact_phone' => '08131949236',
        'skills' => ['PHP', 'SQL'],
    ],
    [
        'id' => 2,
        'job_title' => 'Javascript Developer',
        'company' => 'Mega Mindset',
        'contact_email' => 'support@megamindset.com',
        'contact_phone' => '08131949236',
        'skills' => ['Javascript', 'Node js'],
    ]
];

// Create a new listing using the array push function
$newListing = [
    'id' => 3,
    'job_title' => 'Full Stack Developer',
    'company' => 'Meta',
    'contact_email' => 'support@meta.com',
    'contact_phone' => '08131949236',
    'skills' => ['HTML', 'CSS', 'BOOTSTRAP', 'JAVASCRIPT', 'PHP', 'SQL'],
];

array_push($listings, $newListing);

// Print out the job_title of the second job listing in the array
print_r($listings[1]['job_title']);

// Print out the first skill of the third job listing in the array
print_r($listings[2]['skills'][0]);

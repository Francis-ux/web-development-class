<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// count
$output = count($users);

// // sort
sort($ids);

// // rsort
rsort($ids);

// // array_push - push a element to the end of the array
array_push($ids, 100);

// // array_pop
array_pop($ids);

// array_shift
array_shift($ids);

// array_unshift
array_unshift($ids, 500);

// array_slice
$ids2 = array_slice($ids, 2, 3);

// array_splice
array_splice($ids, 1, 2, 'New ID');

// array_sum
$output = array_sum($ids);

// array_search 
$output = array_search(15, $ids);

// in_array
$output =  in_array(15, $ids);

// explode
$name = 'Francis-Micheal';
$output = explode('-', $name);

// implode
$output = implode(', ', $ids);

var_dump($output);

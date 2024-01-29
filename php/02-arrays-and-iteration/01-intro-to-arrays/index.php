<?php

/**
 * Index Array
 * An array that we don't assign keys to and are automatically assigned by php and they always start from 0.
 */
$names = array('John', 'Jack', 'Jill');
$names = ['John', 'Jack', 'Jill'];


// Add element to array
$names[] = 'Francis';

// Modifying an array
$names[3] = 'Destiny';

// Remove element from array
unset($names[3]);

// array_values - Return all the values of an array
$values = array_values($names);

var_dump($values);

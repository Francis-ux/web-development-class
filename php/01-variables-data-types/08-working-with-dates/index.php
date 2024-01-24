<?php
$output = null;

// Get Year
$output = date('Y');

// use a different date with a timestamp
// $output = date('Y', 1726345600);

// Year for a different date
$output = date('Y', strtotime('1999-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('d');

// Get day of the week
$output = date('D');

// Get hour
$output = date('H');

// Get minutes
$output = date('i');

// Get seconds
$output = date('s');

// Get AM or PM
$output = date('a');

// Get full date and time
$output = date('Y-m-d h:i:s a');

echo $output;

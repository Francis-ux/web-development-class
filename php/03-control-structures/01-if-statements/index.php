<?php

$age = 30;

// If statement
if ($age >= 21) {
    echo 'You are old enough to drink in nigeria';
}


// If-Else 
if ($age >= 21) {
    echo 'You are old enough to drink in nigeria';
} else {
    echo 'You are not old enough to drink in nigeria';
}

// Nested If Statement
if ($age >= 21) {
    echo 'You are old enough to drink and vote in nigeria';
} else {
    if ($age >= 18) {
        echo 'You are only old enough to vote in nigeria';
    } else {
        echo 'You are not old enough to drink and vote in nigeria';
    }
}

// If-Else-If
if ($age >= 21) {
    echo 'You are old enough to drink and vote in nigeria';
} elseif ($age >= 18) {
    echo 'You are only old enough to vote in nigeria';
} else {
    echo 'You are not old enough to drink and vote in nigeria';
}

<?php
// Exercise: Advanced User Age Calculator

// Create a PHP script that does the following:

//     Accepts the user's birthdate as input through a form. Ensure that the input is validated for correctness.
//     Calculates the user's age accurately, taking into account the current date.
//     Displays a personalized message based on their age category (e.g., teenager, adult, senior).
//     Formats and displays the birthdate in a human-readable format.
//     Handles potential errors gracefully and provides informative messages to the user.

$birthDate = '2001-12-14';
$userAge = date('Y') - date('Y', strtotime($birthDate));


if ($userAge == 18 || $userAge == 19) {
    echo "You where born on " . date('D', strtotime($birthDate)) . " " .  date('d', strtotime($birthDate)) . " of " . date("M Y", strtotime($birthDate)) . ", you are {$userAge} years of age and you are a teenager.";
} elseif ($userAge == 20 || $userAge == 21) {
    echo "You where born on " . date('D', strtotime($birthDate)) . " " .  date('d', strtotime($birthDate)) . " of " . date("M Y", strtotime($birthDate)) . ", you are {$userAge} years of age and you are a senior.";
} elseif ($userAge >= 22) {
    echo "You where born on " . date('D', strtotime($birthDate)) . " " .  date('d', strtotime($birthDate)) . " of " . date("M Y", strtotime($birthDate)) . ", you are {$userAge} years of age and you are a adult.";
} else {
    echo "You where born on " . date('D', strtotime($birthDate)) . " " . date('d', strtotime($birthDate)) . " of " . date("M Y", strtotime($birthDate)) . ", you are {$userAge} years of age and you are a kid.";
}

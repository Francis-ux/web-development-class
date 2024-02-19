<?php
// Ternary operator
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null Coalescing operator
$color = $favoriteColor ?? 'blue';

echo $color;

// Ternary operator
$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

// If-else-if statement
if (isset($favoriteColor)) {
    echo $favoriteColor;
} else {
    if (isset($secondFavoriteColor)) {
        echo $secondFavoriteColor;
    } else {
        echo 'blue';
    }
}

// Null Coalescing operator
$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

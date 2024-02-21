<?php
// Define global constants
define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME . "\n" . APP_VERSION . "\n";

function getAppName()
{
    return APP_NAME;
}

echo getAppName() . "\n";


// const

class Person
{
    const AVG_LIFE_SPAN = 79;

    public function getAverageLifeSpan()
    {
        return self::AVG_LIFE_SPAN;
    }
}

$person = new Person();
echo $person->getAverageLifeSpan();

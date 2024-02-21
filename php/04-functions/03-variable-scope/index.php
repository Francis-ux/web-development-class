<?php
// Global Scope
$name = 'Alice';


function sayHello()
{
    global $name;
    echo 'Hello ' . $name;

    // Local Scope
    // $name = 'Micheal';
    // echo $name;
}

sayHello();



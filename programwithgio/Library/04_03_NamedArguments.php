<?php

// Functions lesson 2

declare(strict_types=1);

/*function sum(int $x, int $y) {
    return $x * $y;
}

echo sum('10', 7);

//default parameters

function greet($name = "Guest") {
    echo "Hello, $name!";
}

greet(); // Output: Hello, Guest!
greet("Alice"); // Output: Hello, Alice!

function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(111, 2, 3, 5, 10). '<br />';


$numbers = [111, 2.0, 12, 25,  3, 5, 10];

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

echo sum(...$numbers). '<br />';

function sum(int $x, int $y) {
    if($x % $y === 0) {
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 3; 

setcookie(name: 'foo', value: 'bar', httponly: true);
echo sum(y: $y, x: $x);
*/

function sum(int $x, int $y) {
    var_dump($x, $y);
    return $x + $y;

}

$arr = ['x' => 1, 'y' => 100];

echo sum(...$arr);




?>
<?php

// Functions lesson 2

declare(strict_types=1);

/*function sum(int $x, int $y) {
    return $x * $y;
}

echo sum('10', 7);*/

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

?>
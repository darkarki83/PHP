<?php

// variable, anonymous & arrow functions
/* 
// Example 1: A regular function
function add($a, $b) {
    return $a + $b;
}

$callableFunction = 'add';

if (is_callable($callableFunction)) {
    $result = $callableFunction(5, 3);
    echo "Result from callable function: $result"; // Output: Result from callable function: 8
} else {
    echo "Not a callable function.";
}

echo "<br>";

$x = 121;

$add = function($a, $b) use($x) {
    echo $x;
    return $a + $b;
};

$result = $add(5, 3); // Calling the anonymous function
echo "Result: $result"; // Output: Result: 8

$array = [1, 2, 3, 4];

$array2 = array_map(function($element){
    return $element + 2;
}, $array);

print_r($array2);

$sum = function (callable $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};

var_dump($sum(function ($element) {
    return $element * 2;
}, 1, 2, 3, 4));

$array = [1, 2, 3, 4];

$array = [1, 2, 3, 4];

function foo ($element) {
    return $element * 2;
};

$array2 = array_map('foo', $array);
print_r($array2);

*/

$func = function(int $value): int {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));

// Or as of PHP 7.4.0:

print_r(array_map(fn($value): int => $value * 2, range(1, 5)));


$array = [1, 2, 3, 4];

$array2 = array_map(fn($number) => $number * $number , $array);

print_r($array2);


?>
<?php

// Array Functions

// Array_chunk
/*
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Split the array into chunks of size 3
$chunks = array_chunk($numbers, 4, true);

echo '<pre>' ;
print_r($chunks);
echo '</pre>' ;

// Output the chunks
foreach ($chunks as $chunk) {
    echo "[" . implode(", ", $chunk) . "]<br>";
}   

 //array_combine 
$keys = ['name', 'age', 'country'];
$values = ['Alice', 30, 'USA'];

$associativeArray = array_combine($keys, $values);

print_r($associativeArray);

// array_filter
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Filter even numbers
$evenNumbers = array_filter($numbers, function($value) {
    return $value % 2 == 0;
});

// array_values reindex array

$evenNumbers = array_values($evenNumbers); 

echo '<pre>' ;
print_r($evenNumbers);
echo '</pre>' ;

// array_keys 

$studentScores = [
    'Alice' => 95,
    'Bob' => 85,
    'Charlie' => 78,
    'David' => 92,
    'Eve' => 88
];

$keys = array_keys($studentScores, 88);

echo '<pre>' ;
print_r($keys);
echo '</pre>' ;
// array_map

$numbers = [1, 2, 3, 4, 5];

// Square each number
$squaredNumbers = array_map(function($value) {
    return $value * $value;
}, $numbers);

echo '<pre>' ;
print_r($squaredNumbers);
echo '</pre>' ;

$numbers1 = [1, 2, 3];
$numbers2 = [10, 20, 30];

// Add corresponding elements from both arrays
$sums = array_map(function($a, $b) {
    return $a + $b;
}, $numbers1, $numbers2);

echo '<pre>' ;
print_r($sums);
echo '</pre>' ;

$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$array3 = ['g', 'h', 'i'];

$mergedArray = array_merge($array1, $array2, $array3);

echo '<pre>' ;
print_r($mergedArray);
echo '</pre>';

$numbers = [2, 3, 4, 5];

// Calculate the product of all numbers
$totalProduct = array_reduce($numbers, function($carry, $number) {
    return $carry * $number;
}, 1);

echo "Total Product: $totalProduct";

// array_def

$array1 = [1, 2, 3, 4, 5, 10];
$array2 = [3, 4, 5, 6, 7, 8];
$array3 = [5, 6, 7, 8, 9, 11];

$difference = array_diff($array1, $array2, $array3);

print_r($difference);

//array_dif_key

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['c' => 3, 'd' => 4, 'e' => 5];

$diffKeys = array_diff_key($array1, $array2);

print_r($diffKeys);

*/
// sorts

$fruits = [
    ['name' => 'Apple', 'price' => 1.5],
    ['name' => 'Orange', 'price' => 2.0],
    ['name' => 'Banana', 'price' => 1.0]
];

// Sort the fruits array by price
usort($fruits, function($a, $b) {
    return $a['price'] <=> $b['price'];
});

echo '<pre>';
print_r($fruits);
echo '</pre>';

[$a, , $c] = $fruits;

print_r($c);
















?>
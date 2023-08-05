<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>


<?php
/*   Operators     */

// Error Control Operations (@)

// Increment/Decrement Operators (++, --)
//$x = 5;
//echo ++$x;

// Logical Operators (&& || ! and ar xor)
$x = true;
$y = true;

// Bitwise Operators (& | ^ ` << >> )

// Array Operators (+ = == != )

// Array Union using +
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 3, 'c' => 4];
$resultUnion = $array1 + $array2;

echo '<pre>';
print_r($resultUnion);
echo '<pre>';
// $resultUnion is ['a' => 1, 'b' => 2, 'c' => 4]

// Array Assignment using =
$array1 = ['a' => 1, 'b' => 2];
$array2 = $array1;
// $array2 is now a copy of $array1
print_r($array2);

// Array Equality using ==
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 2, 'c' => 1];
$resultEquality = ($array1 + $array2);
print_r($resultEquality);
// $resultEquality is true because both arrays have the same key-value pairs



?>

</body>

</html>


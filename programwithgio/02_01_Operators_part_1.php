<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>


<?php
/*   Operators     */

// Arithmetic Operations (+ - * / % **)

$x = 10.1;
$y = 10.0;

/*
var_dump($x + $y);
var_dump(fdiv($x , $y));
var_dump($x % $y);
var_dump(fmod($x, $y)); */

// Assignment Operators
/*
1. `=` - Assignment operator
2. `+=` - Addition assignment (Addition: +)
3. `-=` - Subtraction assignment (Subtraction: -)
4. `*=` - Multiplication assignment (Multiplication: *)
5. `/=` - Division assignment (Division: /)
6. `%=` - Modulus assignment (Modulus: %)
7. `**=` - Exponentiation assignment (Exponentiation: **) */
$x = 5;
$x *= 3;
var_dump($x);

// String Operators (. .=)

// Comparison Operators
/*
1. `==` - Equal to
2. `!=` or `<>` - Not equal to
3. `===` - Identical (equal value and type)
4. `!==` - Not identical (not equal value or not of the same type)
5. `>` - Greater than
6. `<` - Less than
7. `>=` - Greater than or equal to
8. `<=` - Less than or equal to
*/

$x = "Hello";
$y = strpos($x, 'H');

//var_dump($x != $y);
//var_dump($x !== $y);

$result = $y === false ? ('H Not Found') : ("H Found at index $y");
var_dump($result);

$username = null;
// Example 1:
$name = $username ?? "Guest";
// If $username is not null, $name will be set to the value of $username.
// Otherwise, if $username is null, $name will be set to "Guest".
echo $name;

// 



?>

</body>

</html>

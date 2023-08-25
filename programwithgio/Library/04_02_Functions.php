<?php
// Global scope variable
$globalVar = "I'm a global variable";

function testFunction() {
    // Function scope variable
    $functionVar = "I'm a function variable";
    
    // Accessing global variable within the function
    global $globalVar;
    
    echo $globalVar . "<br>"; // Output: I'm a global variable
    echo $functionVar . "<br>"; // Output: I'm a function variable
}

testFunction();

// Attempting to access function scope variable outside the function (will result in an error)
// echo $functionVar; // Uncommenting this line will result in an "Undefined variable" error

// Return type: integer
function add(int $a, int $b): int {
    return $a + $b;
}

// Return type: float
function divide(float $a, float $b): float {
    return $a / $b;
}

// Return type: string
function greet(string $name): string {
    return "Hello, " . $name;
}

// Return type: array
function getNumbers(): array {
    return [1, 2, 3, 4, 5];
}

// Return type: mixed
function processInput(mixed $input) {
    if (is_numeric($input)) {
        return (int)$input;
    } else {
        return strtoupper($input);
    }
}

// Return type: void (no return value)
function logMessage(string $message): void {
    file_put_contents('log.txt', $message, FILE_APPEND);
}

// Return type: null
function noReturnValue(): ?string {
    return null;
}

// Testing the functions
echo add(5, 3); // Output: 8

echo divide(10.0, 3.0); // Output: 3.3333333333333

echo greet("Alice"); // Output: Hello, Alice

print_r(getNumbers()); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

echo processInput("123"); // Output: 123
echo processInput("Hello"); // Output: HELLO

logMessage("Log entry"); // Creates a log entry in log.txt

var_dump(noReturnValue()); // Output: NULL

?>
<?php

// variable scopes
/*
$x = 10;

function foo() {
    global $x;
    $x = 3;
    echo $x;
}

foo();
//include('script1.php');
echo $x;
*/
echo 0;

function getValue() {
    static $value = null;

    if($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);
    echo 'Processing';

    return 100;
}


echo getValue() . '<br />';
echo getValue() . '<br />';
echo getValue() . '<br />';


?>
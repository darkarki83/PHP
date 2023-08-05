<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>


<?php
 # 4 Scalar Types
    # bool - true /false
    $completed = true;
    # int - 1, 5, -9
    $score = 75;
    #float - 1.2, 4.0
    $space = 11.5;
    #string - 'Art', "Hello word"
    $greeting = 'Hello Artiom';

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $space . '<br />';
    echo $greeting . '<br />';

    var_dump($completed);
    var_dump($score);
    var_dump($space);
    var_dump($greeting);



# 4 Compound types
    #array
    $companies = [1, 2, 7.8, 'ff', true];
    print_r($companies);
    #object
    #callable
    #iterable

# 2 Special Types
    #resource
    #null

// types in functions
function sum(float $x, float $y) {
    var_dump($x, $y);
    return $x + $y;
}

echo sum(1, 38)  . '<br />';

// change types
$x = (int)'5';
var_dump($x);


?>

</body>

</html>

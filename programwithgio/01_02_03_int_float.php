<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php
/*   Integer     

    #convert types
$x = (int) true; // = 1 
echo $x . '<br />';

$x = (int)null;
var_dump(is_int($x));

$y = 200_000_000;
var_dump($y);

/*     Float   */
$y = 3.4e3;
$x = 3.4e-3;

var_dump($x);
var_dump($y);
echo $y . '<br />';
echo $x . '<br />';

echo PHP_FLOAT_MIN . '<br />';
echo PHP_FLOAT_MAX . '<br />';

$x = floor((0.1 + 0.7) * 10);
$y = ceil((0.1 + 0.7) * 10);

echo $x . '<br />';
echo $y . '<br />';

echo NAN . '<br />';
echo log(-1) . '<br />';

echo INF . '<br />';
$z = PHP_FLOAT_MAX * 2;

var_dump((is_finite($z)));
echo $z . '<br />';

var_dump($z);

$intVar = 5;
var_dump((float)$intVar);
?>

</body>
</html>


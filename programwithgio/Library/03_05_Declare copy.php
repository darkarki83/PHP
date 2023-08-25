<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php

declare(ticks=1);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n <br />";
}

register_tick_function('tick_handler'); // causes a tick event

$a = 1; // causes a tick event

if ($a > 0) {
    echo $a += 2; // causes a tick event\
}

?>
</body>

</html>

<?php
/*
 declare(strict_types=1); ?>

<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>

<?php
function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum('1.5', 2.5));
?>
</body>

</html>
*/
?>

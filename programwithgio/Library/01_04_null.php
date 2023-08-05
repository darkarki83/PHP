<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>


<?php
/*   Null     */

// null constant
$x = null;

var_dump(is_null($x));
var_dump($x === null);

// no variable

var_dump(is_null($art));

// after destroy
$art = 123;

var_dump($art);

unset($art);

//var_dump($art);

var_dump((string)$x);
var_dump((int)$x);
var_dump((bool)$x);



?>

</body>

</html>

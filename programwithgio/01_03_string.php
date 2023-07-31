<!DOCTYPE html>
<html>
<head>
<title>Integer</title>
</head>

<body>


<?php
/*   String     */
$firstName = 'Will';
//$secondName = "{$firstName} Smith";

$secondName = 'Smith';

$name = $firstName . ' ' . $secondName;
   
echo $name . '<br />';
echo $name[5] . '<br />';
$name[-2] = 'I';

var_dump($name);
echo '<br />';

// Heredoc
$text = <<<TEXT
line 1  $name
line 2 $firstName
line 3

TEXT;

echo nl2br($text) . '<br />';

// Nowdoc
$text = <<<'TEXT'
line 1  $name
line 2 $firstName
line 3 ' "

TEXT;

echo nl2br($text) . '<br />';


?>

</body>

</html>

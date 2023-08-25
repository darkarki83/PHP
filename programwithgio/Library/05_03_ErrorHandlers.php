<?php

// php.ini

// Error Handlers  for production
  //error_reporting(E_ALL & ~E_WARNING);


//trigger_error('Artiom example error', E_WARNING);

//echo 1;

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo "An error occurred: [$type] $msg in $file on line $line";

    exit;
}

error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL);

echo $x;

?>
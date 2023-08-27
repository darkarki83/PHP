<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if (file_exists($path)) {
        require $path;
    }   
});

use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};

$transaction = new Transaction(100);

var_dump($transaction);

?>
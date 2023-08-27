<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};

$transaction = new Transaction(100);

//var_dump($transaction);

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($transaction);

?>
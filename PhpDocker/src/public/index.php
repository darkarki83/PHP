<?php

declare(strict_types=1);

use App\Enums\Status;
use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(100);

$transaction->setStatus(Status::PAID);

var_dump($transaction);

?>
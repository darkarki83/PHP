<?php

declare(strict_types=1);

require_once 'PaymentGateway/Stripe/Transaction.php';
require_once 'PaymentGateway/Paddle/Transaction.php';
require_once 'PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Stripe\Transaction as StripeTransaction;
use PaymentGateway\Paddle\{Transaction, CustomerProfile};

$stripeTransaction = new StripeTransaction(100);
$paddleTransaction = new Transaction(25);
$newCustomer = new CustomerProfile();

var_dump($stripeTransaction);
var_dump($paddleTransaction);
var_dump($newCustomer);




//use PaymentGateway\Stripe\Transaction as StripeTransaction;
//use PaymentGateway\Paddle\Transaction as PaddleTransaction;






?>

<?php

declare(strict_types=1);

require_once '../Transaction.php';
require_once '../Customer.php';
require_once '../PaymentProfile.php';

// Create a new instance of Transaction
$transaction1 = new Transaction(100);

// Create a new instance of Customer
$customer = new Customer();

// Set the customer for the transaction
$transaction1->setCustomer($customer);

// Create a new PaymentProfile instance
$paymentProfile = new PaymentProfile('1245');

// Set the payment profile for the customer
$customer->setPaymentProfile($paymentProfile);

// Access the ID of the payment profile
echo $transaction1->getCustomer()?->getPaymentProfile()->id; // Output: 12345


?>

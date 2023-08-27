<?php


namespace App\PaymentGateway\Stripe;

class Transaction
{
    private float $amount;
    private ?Customer $customer = null;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}

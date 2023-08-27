<?php

namespace PaymentGateway\Paddle;

class Transaction
{
    private float $amount;
    private ?Customer $customer = null;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
        //var_dump(new \DateTime());
        //var_dump(new CustomerProfile());
        //var_dump(new Email());
        //var_dump(explode(',', 'hello, world'));

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

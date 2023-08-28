<?php

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    private string $status;

    private float $amount;
    private ?Customer $customer = null;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
       $this->setStatus(Status::PENDING);
        //var_dump(self::STATUS_PAID);

    }

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUSES[$status]))
        {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;

        return $this;
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
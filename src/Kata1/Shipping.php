<?php

declare(strict_types=1);

namespace App\Kata1;

class Shipping implements CostInterface
{
    public function __construct(private readonly float $shippingFee, private readonly CostInterface $price)
    {
    }

    public function cost(): float
    {
        return $this->price->cost() + $this->shippingFee;
    }
}

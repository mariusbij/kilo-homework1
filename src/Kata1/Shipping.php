<?php

declare(strict_types=1);

namespace App\Kata1;

class Shipping implements CostInterface
{
    public function __construct(private readonly float $shippingFee, private readonly CostInterface $cost)
    {
    }

    public function cost(): float
    {
        return $this->cost->cost() + $this->shippingFee;
    }
}

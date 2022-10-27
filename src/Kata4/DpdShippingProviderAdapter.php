<?php

namespace App\Kata4;

use App\Kata1\CostInterface;

class DpdShippingProviderAdapter implements CostInterface
{
    public function __construct(private readonly DpdShippingProvider $dpd,
                                private readonly CostInterface $price)
    {
    }

    public function cost(): float
    {
        return $this->dpd->ourCost() + $this->price->cost();
    }
}
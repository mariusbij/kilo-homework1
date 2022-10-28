<?php

namespace App\Kata4;

use App\Kata1\CostInterface;

class DpdShippingProviderAdapter implements CostInterface
{
    public function __construct(private readonly DpdShippingProvider $dpd,
                                private readonly CostInterface $cost)
    {
    }

    public function cost(): float
    {
        return $this->cost->cost() + $this->dpd->ourCost();
    }
}
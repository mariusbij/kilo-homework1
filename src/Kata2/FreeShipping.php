<?php

namespace App\Kata2;

use App\Kata1\CostInterface;

class FreeShipping implements CostInterface
{
    public function __construct(private readonly CostInterface $cost)
    {
    }

    public function cost(): float
    {
        return $this->cost->cost();
    }
}
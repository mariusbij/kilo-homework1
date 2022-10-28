<?php

declare(strict_types=1);

namespace App\Kata1;

class Discount implements CostInterface
{
    public function __construct(private readonly float $discount, private readonly CostInterface $cost)
    {
    }

    public function cost(): float
    {
        return $this->cost->cost() * (1 - $this->discount / 100);
    }
}

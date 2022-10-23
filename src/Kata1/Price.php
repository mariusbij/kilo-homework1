<?php

declare(strict_types=1);

namespace App\Decorator;

class Price implements CostInterface
{
    public function cost(float $value): float
    {
        return $value;
    }
}

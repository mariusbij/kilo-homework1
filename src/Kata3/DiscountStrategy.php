<?php

declare(strict_types=1);

namespace App\Kata3;

use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorInterface;

class DiscountStrategy
{
    public function decide(bool $isThursday): PriceCalculatorInterface
    {
        return $isThursday ? new FreeShippingCalculator() : new PriceCalculator();
    }
}

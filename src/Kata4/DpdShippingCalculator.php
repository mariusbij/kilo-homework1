<?php

namespace App\Kata4;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata2\PriceCalculatorInterface;

class DpdShippingCalculator implements PriceCalculatorInterface
{
    public function calculate(float $price, float $discount, float $tax): float
    {
        return (new DpdShippingAdapter(new DpdShippingProvider(), new Discount($discount, new Price($price))))->cost();
    }
}
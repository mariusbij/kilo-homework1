<?php

namespace App\Kata2;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use App\Kata4\DpdShippingProvider;
use App\Kata4\DpdShippingProviderAdapter;

class DpdShippingCalculator implements PriceCalculatorInterface
{
    public function calculate(float $price, float $discount, float $tax): float
    {
        $dpd = new DpdShippingProvider();
        return (new DpdShippingProviderAdapter($dpd, new Discount($discount, new Price($price))))->cost();
    }
}
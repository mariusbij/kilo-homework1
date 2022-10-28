<?php

declare(strict_types=1);

namespace App;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorInterface;
use App\Kata3\DiscountStrategy;
use App\Kata4\DpdShippingCalculator;

class DemoRun
{
    private bool $isTuesday = false;

    public function kata1(): float
    {
        return (new Shipping(8, new Discount(20, new Price(100))))->cost();
    }

    public function kata2(PriceCalculatorInterface $calculator): float
    {
        return $calculator->calculate(100, 20, 8);
    }

    public function kata3(): float
    {
        $strategy = new DiscountStrategy($this->isTuesday() ? new FreeShippingCalculator() : new PriceCalculator());

        return $strategy->calculate(100, 20, 8);
    }

    public function kata4(): float
    {
        $calculator = new DpdShippingCalculator();

        return $calculator->calculate(100, 20, 8);
    }

    /**
     * @return bool
     */
    public function isTuesday(): bool
    {
        return $this->isTuesday;
    }

    /**
     * @param bool $isTuesday
     */
    public function setIsTuesday(bool $isTuesday): void
    {
        $this->isTuesday = $isTuesday;
    }
}
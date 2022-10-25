<?php

declare(strict_types=1);

namespace App;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use App\Kata2\PriceCalculatorInterface;

class DemoRun
{
    private bool $isTuesday = false;

    public function kata1()
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //change me!!!
        return 88;
    }

    public function kata2(PriceCalculatorInterface $calculator)
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //oh, no! what a crap, change me now!
        return 88;
    }

    public function kata3()
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //OMG ¯\_(ツ)_/¯ , don't be lazy, change me
        return 80;
    }

    public function kata4()
    {
        // shipping = 8;
        // discount = 20;
        // new Price(100);

        //OMG ¯\_(ツ)_/¯ , don't be lazy, change me
        return 84;
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

<?php

declare(strict_types=1);

namespace App;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use Webmozart\Assert\Assert;

class DemoRun
{
    public function run()
    {
        // shipping = 8;
        // discount = 20;
        $value = new Price(100);

        //DO NOT EDIT BELLOW THIS
        Assert::eq($value->cost(), 88);
    }
}

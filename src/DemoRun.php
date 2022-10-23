<?php

declare(strict_types=1);

namespace App;

use App\Decorator\Price;
use Webmozart\Assert\Assert;

class DemoRun
{
    public function run()
    {
        // shipping = 8;
        // discount = 20;
        $value = new Price();

        //DO NOT EDIT BELLOW THIS
        Assert::same($value->cost(100), 88);
    }
}

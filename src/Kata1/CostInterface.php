<?php

declare(strict_types=1);

namespace App\Decorator;

interface CostInterface
{
    public function cost(float $value);
}

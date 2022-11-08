<?php

use App\Kata4\DpdShippingCalculator;

class DpdShippingTest extends \PHPUnit\Framework\TestCase
{
    public function testDpdShippingCalculator() {
        $dpd = new \App\Kata4\DpdShippingProvider();

        $this->assertEquals(4, $dpd->ourCost());
    }
}
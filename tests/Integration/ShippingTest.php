<?php

namespace Test\Integration;

use App\Kata1\Price;
use App\Kata1\Shipping;
use PHPUnit\Framework\TestCase;

class ShippingTest extends TestCase
{
    /**
     * @dataProvider shippingDataProvider
     */
    public function testCalculateShipping(float $price, float $tax, float $expected) {
        $shipping = new Shipping($tax, new Price($price));
        $this->assertEquals($expected, $shipping->cost());
    }

    public function shippingDataProvider(): \Generator
    {
        yield 'first example with provided data' => [
            'price' => 50,
            'tax' => 10,
            'expected' => 60
        ];

        yield 'second example with provided data' => [
            'price' => 60,
            'tax' => 10,
            'expected' => 70
        ];

        yield 'third example with provided data' => [
            'price' => 70,
            'tax' => 20,
            'expected' => 90
        ];
    }
}
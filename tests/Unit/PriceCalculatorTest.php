<?php

use App\Kata2\PriceCalculator;
use PHPUnit\Framework\TestCase;

class PriceCalculatorTest extends TestCase
{
    /**
     * @dataProvider priceCalculatorDataProvider
     */
    public function testPriceCalculator(float $price, float $discount, float $tax, float $expected) {
        $actual = new PriceCalculator();
        $this->assertEquals($expected, round($actual->calculate($price, $discount, $tax), 2));
    }

    public function priceCalculatorDataProvider(): Generator
    {
        yield 'first example with provided data' => [
            'price' => 110,
            'discount' => 15,
            'tax' => 10,
            'expected' => 103.5
        ];

        yield 'second example with provided data' => [
            'price' => 50,
            'discount' => 5,
            'tax' => 5,
            'expected' => 52.5
        ];

        yield 'third example with provided data' => [
            'price' => 70,
            'discount' => 3,
            'tax' => 20,
            'expected' => 87.9
        ];
    }
}
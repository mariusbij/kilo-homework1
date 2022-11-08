<?php

namespace Test\Integration;

use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;
use App\Kata3\DiscountStrategy;
use PHPUnit\Framework\TestCase;

class DiscountStrategyTest extends TestCase
{
    /**
     * @dataProvider discountStrategyDataProvider
     */
    public function testDiscountStrategy(float $price, float $discount, float $tax, bool $isTuesday, float $expected) {
        $calculator = $isTuesday ? new FreeShippingCalculator() : new PriceCalculator();
        $actual = new DiscountStrategy($calculator);
        $this->assertEquals($expected, round($actual->calculate($price, $discount, $tax), 2));
    }

    public function discountStrategyDataProvider(): \Generator
    {
        yield 'first example with provided data' => [
            'price' => 110,
            'discount' => 15,
            'tax' => 10,
            'isTuesday' => false,
            'expected' => 103.5
        ];

        yield 'second example with provided data' => [
            'price' => 50,
            'discount' => 5,
            'tax' => 5,
            'isTuesday' => true,
            'expected' => 47.5
        ];

        yield 'third example with provided data' => [
            'price' => 70,
            'discount' => 3,
            'tax' => 20,
            'isTuesday' => false,
            'expected' => 87.9
        ];

        yield 'fourth example with provided data' => [
            'price' => 260,
            'discount' => 0,
            'tax' => 15,
            'isTuesday' => true,
            'expected' => 260
        ];
    }
}
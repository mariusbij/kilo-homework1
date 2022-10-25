<?php

declare(strict_types=1);

namespace Test\Unit;

use App\DemoRun;

class DemoRunTest extends \PHPUnit\Framework\TestCase
{
    protected DemoRun $runner;


    public function setUp(): void
    {
        $this->runner = new DemoRun();
    }

    public function testKata1()
    {
        $this->assertEquals($this->runner->kata1(), 88);
    }

    public function testKata2()
    {
        $this->assertEquals($this->runner->kata2(), 88);
    }

    public function testKata3()
    {
        //$this->assertEquals($this->runner->kata2(), 88);
    }
}

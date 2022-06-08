<?php

use drmonkeyninja\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
    protected function tearDown(): void
    {
        unset($this->calculator);
    }

    public function testAdd()
    {

        $this->assertEquals(4, $this->calculator->add(2, 2));
    }

    public function testSub()
    {
        $this->assertEquals(0, $this->calculator->sub(2, 2));
    }

    public function testMul()
    {
        $this->assertEquals(4, $this->calculator->mul(2, 2));
    }
}

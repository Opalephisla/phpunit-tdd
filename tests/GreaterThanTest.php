<?php

use PHPUnit\Framework\TestCase;

class GreaterThanTest extends TestCase
{
    public function testIsGreater()
    {
        $this->assertGreaterThan(2, 3);
    }
}

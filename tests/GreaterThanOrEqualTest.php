<?php

use PHPUnit\Framework\TestCase;

class GreaterThanOrEqualTest extends TestCase
{
    public function testIsGreaterOrEqual()
    {
        $this->assertGreaterThanOrEqual(2, 3);
    }
}

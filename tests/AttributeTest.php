<?php

use drmonkeyninja\Calculator;

use PHPUnit\Framework\TestCase;

final class AttributeTest extends TestCase
{
    public function testAttribute(): void
    {
        $this->assertClassHasAttribute('toto', Calculator::class);
    }
}

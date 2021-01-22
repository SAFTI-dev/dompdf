<?php

use PHPUnit\Framework\TestCase;

class TestFixedPositionner extends TestCase
{

    public function testNonNumericValueEncountered()
    {
        $this::assertSame(10, (int) "blabla" + (int) 10);
    }

}

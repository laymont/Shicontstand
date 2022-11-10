<?php

namespace Laymont\Shicontstand\Tests;

use Laymont\Shicontstand\Shicontstand;
use PHPUnit\Framework\TestCase;

class ShicontstandTest extends TestCase
{
    protected Shicontstand $shicontstand;

    public function testFacade()
    {
        $this->assertInstanceOf(Shicontstand::class, new Shicontstand);
    }
}

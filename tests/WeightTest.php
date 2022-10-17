<?php

namespace sezohessen\conversions\Tests;

use PHPUnit\Framework\TestCase;
use sezohessen\conversions\Weight;

class WeightTest extends TestCase
{
    /** @test **/
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilo(100)->toLbs();
        $this->assertEquals(220.46226199999998,$lbs);
    }
}

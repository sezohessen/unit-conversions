<?php
namespace sezohessen\conversions\Tests;
use PHPUnit\Framework\TestCase;
use sezohessen\conversions\Temperature;


class TemperatureTest extends TestCase  {
    /** @test **/
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212.0000,$fahrenheit);
    }
}

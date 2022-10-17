<?php

namespace sezohessen\conversions;

class Weight
{
    private float $kilo;

    public static function fromKilo(float $kilo): self
    {
        return new static ($kilo);
    }

    public function __construct(float $kilo)
    {
        $this->kilo = $kilo;
    }

    public function toLbs(): float
    {
        return $this->kilo * 2.20462262;
    }
}

<?php

namespace Tebe;

class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }

    public function addData(
        $p0, $p1, $p2, $p3, $p4, $p5,
        $p5, $p6, $p7, $p8, $p9, $p10) {
    }

}

<?php

namespace Tebe;

/**
 * Class Money is a dead simple example for our PHP Unit Test.
 * @package Tebe
 */
class Money
{
    /** @var float */
    private $amount;

    /**
     * Money constructor.
     * @param float $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get the amount.
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get a Money object with the amount negated.
     * @return Money
     */
    public function negate()
    {
        return new Money(-1 * $this->amount);
    }

    /**
     * Example for PMD ExcessiveParameterList.
     * @param $p0
     * @param $p1
     * @param $p2
     * @param $p3
     * @param $p4
     * @param $p5
     * @param $p6
     * @param $p7
     * @param $p8
     * @param $p9
     * @param $p10
     */
    public function addData($p0, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10)
    {
    }
}

<?php

namespace Theogreg\Stats\Functions;

class Variance
{
    public static function calculate(array $numbers): float
    {
        $standardDeviation = StandardDeviation::calculate($numbers);
        return pow($standardDeviation, 2);
    }
}
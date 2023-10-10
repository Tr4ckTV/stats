<?php

namespace Theogreg\Stats\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        $average = Average::calculate($numbers);
        $sum = 0;
        $count = count($numbers);

        foreach ($numbers as $number) {
            $sum += pow($number - $average, 2);
        }

        return sqrt($sum / $count);
    }
}
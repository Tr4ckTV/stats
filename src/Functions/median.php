<?php

namespace Theogreg\Stats\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        sort($numbers);
        $count = count($numbers);

        if ($count % 2 == 0) {
            $middle1 = $numbers[($count / 2) - 1];
            $middle2 = $numbers[$count / 2];
            return ($middle1 + $middle2) / 2;
        } else {
            return $numbers[floor($count / 2)];
        }
    }
}
<?php

use Stats\Functions\average;

$list = [10, 15, 14, 16, 20];

expect(average::calculate($list))->toBe(15.0);
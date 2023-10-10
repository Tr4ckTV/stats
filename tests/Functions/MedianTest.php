<?php
use Theogreg\Stats\Functions\Median;

test('MedianTest', function () {

    $list = [10, 14, 15, 16, 20];

    expect(Median::calculate($list))->toBe(15.0);
});
?>
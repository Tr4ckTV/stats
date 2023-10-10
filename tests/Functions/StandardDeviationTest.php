<?php
use Theogreg\Stats\Functions\StandardDeviation;

test('StandardDeviationTest', function () {

    $list = [10, 15, 14, 16, 20];

    expect(StandardDeviation::calculate($list))->toBe(3.22490309931942);
});
?>
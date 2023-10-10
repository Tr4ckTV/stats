<?php
use Theogreg\Stats\Functions\Variance;

test('VarianceTest', function () {

    $list = [10, 15, 14, 16, 20];

    expect(Variance::calculate($list))->toBe(10.400000000000002);
});
?>
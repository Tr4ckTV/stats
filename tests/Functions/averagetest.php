<?php
use Theogreg\Stats\Functions\Average;

test('AverageTest', function () {

    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});
?>
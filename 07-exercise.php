<?php

$acceleration = -9.81;

function objectPosition(int $time, float $acceleration): float {
    return 0.5 * ($acceleration * pow($time, 2));
}

echo objectPosition(10, $acceleration) . ' m';
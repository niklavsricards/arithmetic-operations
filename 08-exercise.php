<?php

function getTotalPay(int $hoursWorked, float $basePay): float|string {
    $overTime = 0;
    if ($hoursWorked > 60) {
        return "Too many hours worked!";
    }
    if ($basePay < 8) {
        return "Base pay is too low!";
    }
    if ($hoursWorked > 40) {
        $overTime = $hoursWorked - 40;
    }
    if ($overTime > 0) {
        $totalPay = (40 * $basePay) + ($overTime * 1.5 * $basePay);
    } else {
        $totalPay = $hoursWorked * $basePay;
    }
    return $totalPay;
}

$employees = [
    'employee1' => [
        'basepay' => 7.50,
        'hoursworked' => 35,
    ],
    'employee2' => [
        'basepay' => 8.20,
        'hoursworked' => 47,
    ],
    'employee3' => [
        'basepay' => 10.00,
        'hoursworked' => 73,
    ]
];

foreach ($employees as $key => $employee) {
    echo "{$key} : " . getTotalPay($employee['hoursworked'], $employee['basepay']) . PHP_EOL;
}
<?php

$number = (int) readline('Enter an integer to be checked (odd or even): ');

function checkOddEven(int $number): string {
    if ($number == 0) return "Even Number";
    return $number % 2 !== 0 ? "Odd Number" : "Even Number";
}

echo checkOddEven($number) . PHP_EOL;
echo "Bye!";
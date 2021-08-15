<?php

function checkInput(int $first, int $second): bool {
    if (($first == 15 || $second == 15) || ($first + $second == 15) || ($first - $second == 15) || ($second - $first == 15)) {
        return true;
    }
    return false;
}

$primaryNumber = (int) readline("Enter the first integer: ");
$secondaryNumber = (int) readline("Enter the second integer: ");

echo checkInput($primaryNumber, $secondaryNumber) . PHP_EOL;

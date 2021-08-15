<?php

for ($i = 1; $i <= 110; $i++) {
    $stringToPrint = '';

    if (($i % 3 == 0) || ($i % 5 == 0) || ($i % 7 == 0)) {
        if ($i % 3 == 0) {
            $stringToPrint = $stringToPrint . 'Coza';
        }
        if ($i % 5 == 0) {
            $stringToPrint = $stringToPrint . 'Loza';
        }
        if ($i % 7 == 0) {
            $stringToPrint = $stringToPrint . 'Woza';
        }
        echo $stringToPrint . ' ';
    } else {
        echo $i . ' ';
    }
    if ($i % 11 == 0) {
        echo PHP_EOL;
    }
}


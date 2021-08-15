<?php

$weight = (float) readline('Enter your weight in metric units (kg) : ');
$height = (float) readline('Enter your height in metric units (m) : ');

function calculateBmi(float $weight, float $height): float {
    return $weight / pow($height, 2);
}

$bmi = calculateBmi($weight, $height);

if ($bmi < 18.5 ) {
    echo "You are underweight!";
} elseif ($bmi > 25) {
    echo "You are overweight!";
} else {
    echo "Your weight is optimal!";
}
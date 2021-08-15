<?php

require_once 'Geometry.php';

echo "Geometry Calculator" . PHP_EOL;
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit" . PHP_EOL;

$choice = (int) readline("Enter your choice (1-4) : ");

if ($choice == 1) {
    $radius = (float) readline("Please enter the radius of the circle: ");
    echo round(Geometry::circleArea($radius), 2);

} elseif ($choice == 2) {
    $length = (float) readline("Please enter the length of the rectangle: ");
    $height = (float) readline("Please enter the height of the rectangle: ");
    echo round(Geometry::rectangleArea($length, $height), 2);

} elseif ($choice == 3) {
    $base = (float) readline("Please enter the base of the triangle: ");
    $height = (float) readline("Please enter the height of the triangle: ");
    echo round(Geometry::triangleArea($base, $height), 2);

} elseif ($choice == 4) {
    exit();
} else {
    exit("You chose outside of the range 1-4");
}
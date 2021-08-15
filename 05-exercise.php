<?php

$randomNumber = rand(1, 100);

echo "I'm thinking of a number between 1-100.  Try to guess it." . PHP_EOL;
$inputNumber = (int) readline("> ");
echo PHP_EOL;

if ($inputNumber >= 1 && $inputNumber <= 100) {
    if ($inputNumber < $randomNumber) {
        echo "Sorry, you are too low.  I was thinking of {$randomNumber}.";
    } elseif ($inputNumber > $randomNumber) {
        echo "Sorry, you are too high.  I was thinking of {$randomNumber}.";
    } else {
        echo "You guessed it!  What are the odds?!?";
    }
} else {
    exit("You entered an incorrect value");
}
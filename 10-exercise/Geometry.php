<?php

class Geometry {
    public static function circleArea(float $radius): float {
        if ($radius <= 0) {
            exit('Circle radius has to be higher than 0!');
        } else {
            return 2 * pi() * $radius;
        }
    }

    public static function rectangleArea(float $length, float $height): float {
        if ($length <= 0) {
            exit('Length has to be higher than 0!');
        } elseif ($height <= 0) {
            exit('Height has to be higher than 0!');
        } else {
            return $length * $height;
        }
    }

    public static function triangleArea(float $base, float $height): float {
        if ($base <= 0) {
            exit('Base has to be higher than 0!');
        } elseif ($height <= 0) {
            exit('Height has to be higher than 0!');
        } else {
            return ($base * $height) / 2;
        }
    }
}


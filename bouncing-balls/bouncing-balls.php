<?php

function bouncingBall(float $h, float $bounce, float $window) {
    if ($h > 0 && $bounce > 0 && $bounce < 1 && $window < $h) {
        $result = 0;

        do {
            $h *= $bounce;
            $result += 2;
        } while ($h > $window);

        return $result - 1;
    }

    return -1;
}
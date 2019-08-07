<?php

function makeNegative(float $num) : float {
    return $num && ($num > 0) ? -$num : $num;
}
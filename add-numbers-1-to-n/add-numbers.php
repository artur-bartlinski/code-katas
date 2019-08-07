<?php

function f($n = false) {
    return is_int($n) && (abs($n)+$n !== 0) ? array_sum(range(1, $n)) : false;
}
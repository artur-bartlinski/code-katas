<?php

function arrayDiff($a, $b) {
    return array_values(array_diff($a, $b));
}
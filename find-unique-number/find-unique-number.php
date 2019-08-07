<?php

function find_uniq($a) {
    sort($a);
    return ($a[0] === $a[1]) ? $a[count($a)-1] : $a[0];
}
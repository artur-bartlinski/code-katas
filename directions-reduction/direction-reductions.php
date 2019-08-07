<?php

function dirReduc(array $arr) {
    $shouldContinue = false;

    do {
        $shouldContinue = unsetDirections($arr);
    } while ($shouldContinue);

    return $arr;
}

function unsetDirections(&$arr) {
    $shouldContinue = 0;

    for ($i = 0; $i < count($arr); $i++) {
        $unset = false;

        switch ($arr[$i]) {
            case 'NORTH':
                if ($arr[$i+1] === 'SOUTH') $unset = true;
                break;
            case 'SOUTH':
                if ($arr[$i+1] === 'NORTH') $unset = true;
                break;
            case 'EAST':
                if ($arr[$i+1] === 'WEST') $unset = true;
                break;
            case 'WEST':
                if ($arr[$i+1] === 'EAST') $unset = true;
                break;
        }

        if ($unset) {
            unset($arr[$i],$arr[$i+1]);
            $i++;
            $shouldContinue++;
        }
    }

    $arr = array_values($arr);

    return $shouldContinue;
}

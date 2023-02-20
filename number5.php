<?php

function findSecondLargest($arr) {
    $first = $arr[0];
    $second = $arr[0];

    foreach ($arr as $num) {
        if ($num > $first) {
            $second = $first;
            $first = $num;
        } elseif ($num > $second && $num != $first) {
            $second = $num;
        }
    }

    return $second;
}
echo findSecondLargest([4],[4]);
<?php
function removeFirstAndLast($array) {
    array_shift($array);
    array_pop($array);
    return $array;
}


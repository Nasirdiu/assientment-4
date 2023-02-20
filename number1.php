<?php 

function sortStringsByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}


<?php
function concatFromEnd($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    return substr($str1, 0, $len1 - $len2) . $str2;
}

echo concatFromEnd(4, 19);
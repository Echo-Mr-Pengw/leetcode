<?php

/**
 * 给定一个 haystack 字符串和一个 needle 字符串，在 haystack 字符串中找出 needle 字符串出现的第一个位置 (从0开始)。如果不存在，则返回  -1。
 * @Author: pengwei
 * @Date:   2021-01-25 22:57:07
 * @Last Modified by:   pengwei
 */

function strStr1($haystack, $needle) {


    $haystackLen = strlen($haystack);
    $needleLen = strlen($needle);

    if ($needleLen == 0) return 0;

    for ($i = 0; $i < $haystackLen; $i += $needleLen) {
        if (substr($haystack, $i, $needleLen) == $needle) {
            return $i;
        }
    }
    return -1;
}


// 双指针法
function strStr2($haystack, $needle) {

    $i = 0;
    $j = 0;

    while (isset($haystack[$i]) && isset($needle[$j])) {
        if ($haystack[$i] == $needle[$j]) {
            ++$i;
            ++$j;
        } else {
            $i = $i - $j + 1;
            $j = 0;
        }
    }

    if ($j == strlen($needle)) {
        return $i - $j;
    }
    return -1;
}

//"mississippi"
// "issip"
var_dump(strStr2('mississippi', 'issip'));

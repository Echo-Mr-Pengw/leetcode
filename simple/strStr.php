<?php

/**
 * @Author: pengwei
 * @Date:   2021-01-25 22:57:07
 * @Last Modified by:   pengwei
 */

function strStr1($haystack, $needle) {
    $flag = false;
    $index = 0;
    foreach ($needle as $v1) {
        foreach ($haystack as $k2 => $v2) {
            if ($v2 != $v1) {
                continue;
            }
            $flag = true;
        }
        if ($flag) {
            $index = $k2;
        }
    }
    return $index;
}

var_dump(strStr1(['h', 'e', 'l', 'l', 'o'], ['l', 'l']));

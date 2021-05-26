<?php

/**
 * 面试题 01.09. 字符串轮转
 * @Author: pengwei
 * @Date:   2021-05-27 01:09:17
 * @Last Modified by:   pengwei
 */

function isFlipedString($s1, $s2) {

    if (strlen($s1) != strlen($s2)) {
        return false;
    }

    if ($s1 == $s2) {
        return true;
    }
    $s = $s2 . $s2;
    if (strpos($s, $s1) === false) {
        return false;
    }
    return true;
}
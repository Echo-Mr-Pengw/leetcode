<?php

/**
 * 剑指 Offer 58 - I. 翻转单词顺序
 * @Author: pengwei
 * @Date:   2021-05-23 16:52:38
 * @Last Modified by:   pengwei
 */
function reverseWords($s) {
    // 方法1
    $arr = explode(' ', $s);
    $len = count($arr);
    $str = '';
    for ($i = $len - 1; $i >= 0; $i--) {
        // 去除多余的空格
        if (empty($arr[$i])) {
            continue;
        }
        $str .= $arr[$i] . ' ';
    }
    return trim($str);
}
<?php

/**
 * 面试题 01.06. 字符串压缩
 * @Author: pengwei
 * @Date:   2021-05-30 21:38:11
 * @Last Modified by:   pengwei
 */

function compressString($S) {
        
    $len = strlen($S);
    if ($len < 1) return $S;

    $num = 1;
    $tmp = $S[0];
    $newStr = '';

    for ($i = 1; $i < $len; $i++) {
        // 前后相等
        if ($S[$i] == $tmp) {
            ++$num;
            continue;
        }
        
        // 前后不相等
        $newStr .= $tmp . $num;
        $num = 1;
        $tmp = $S[$i];
    }

    $newStr .= $tmp . $num;
    return strlen($newStr) >= $len ? $S : $newStr;
}
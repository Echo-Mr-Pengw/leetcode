<?php

/**
 * 剑指 Offer 61. 扑克牌中的顺子
 * @Author: pengwei
 * @Date:   2021-05-23 22:23:19
 * @Last Modified by:   pengwei
 */
function isStraight($nums) {
    // 方法1
    $min = 14;
    $max = 0;
    $repat = [];

    foreach ($nums as $v) {
        if ($v == 0) {
            continue;
        }

        // 重复
        if (!empty($repat[$v])) {
            return false;
        }

        if ($v < $min) {
            $min = $v;
        }
        if ($v > $max) {
            $max = $v;
        }
        $repat[$v] = true;
    
    }

    return ($max - $min) < 5 ? true : false;
}

var_dump(isStraight([1, 2, 3, 4, 5]));
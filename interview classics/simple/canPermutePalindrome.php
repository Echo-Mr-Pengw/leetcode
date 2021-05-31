<?php

/**
 * 面试题 01.04. 回文排列
 * @Author: pengwei
 * @Date:   2021-05-31 23:11:00
 * @Last Modified by:   pengwei
 */

function canPermutePalindrome($s) {
        
    $map = [];
    $len = strlen($s);
    
    for ($i = 0; $i < $len; $i++) {
        if ($map[$s[$i]]) {
            unset($map[$s[$i]]);
        } else {
            $map[$s[$i]] = true;
        }
    }

    return count($map) > 1 ? false : true;
}
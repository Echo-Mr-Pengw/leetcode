<?php

/**
 * 剑指 Offer 57. 和为s的两个数字
 * @Author: pengwei
 * @Date:   2021-05-23 18:27:40
 * @Last Modified by:   pengwei
 */

function twoSum($nums, $target) {
    // 方法1-hash
    // $map = [];
    // $len = count($nums);
    // for ($i = 0; $i < $len; $i++) {
    //     $map[$nums[$i]] = $nums[$i];
    // }
    // for ($i = 0; $i < $len; $i++) {
    //     $tmp = $target - $nums[$i];
    //     if (isset($map[$tmp])) {
    //         return [$nums[$i], $tmp];
    //     }
    // }
    // return [];

    // 方法2-双指针
    $i = 0;
    $len = count($nums) - 1;
    while ($i < $len) {
        if ($nums[$i] + $nums[$len] == $target) {
            return [$nums[$i], $nums[$len]];
        } elseif ($nums[$i] + $nums[$len] < $target) {
            ++$i;
        } else {
            --$len;
        }
    }
    return [];
}
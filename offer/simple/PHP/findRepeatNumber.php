<?php

/**
 * 剑指 Offer 03. 数组中重复的数字
 * @Author: pengwei
 * @Date:   2021-05-16 23:11:55
 * @Last Modified by:   pengwei
 */


function findRepeatNumber($nums)
{
  	// 方法一：hash
    // $tmp = [];
    // $len = count($nums);
    // for ($i = 0; $i < $len; $i++) {
    //    if (!isset($tmp[$nums[$i]])) {
    //        $tmp[$nums[$i]] = true;
    //    } else {
    //        return $nums[$i];
    //    }
    // }
    // return -1;

    // 方法2
    // sort($nums);

    // $len = count($nums);
    // for ($i = 0; $i < $len; $i++) {
    //     if ($nums[$i] == $nums[$i + 1]) {
    //         return $nums[$i];
    //     }
    // }
    // return -1;
    
    // 方法3
    $len = count($nums);
    for ($i = 0; $i < $len; $i++) {
        while ($i != $nums[$i]) {
            if ($nums[$i] == $nums[$nums[$i]]) {
                return $nums[$i];
            }

            $tmp = $nums[$i];
            $nums[$i] = $nums[$tmp];
            $nums[$tmp] = $tmp;
        }
    }
    return -1;
}
var_dump(findRepeatNumber([0, 1,2,2,1]));
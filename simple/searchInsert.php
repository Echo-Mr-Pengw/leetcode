<?php

/**
 * 35. 搜索插入位置
 * @Author: pengwei
 * @Date:   2021-02-22 22:54:46
 * @Last Modified by:   pengwei
 */


function searchInsert($nums, $target) {
    $len = count($nums);

    // 第一个匹配成功
    if ($nums[0] == $target) {
        return 0;
    }
    
    if ($nums[0] > $target) {
        return 0;
    }

    // 最后一个匹配成功
    if ($nums[$len - 1] == $target) {
        return $len - 1;
    }

    if ($nums[$len - 1] < $target) {
        return $len;
    }
    for ($i = 0; $i < $len; $i++) {
        if ($nums[$i] == $target) {
            return $i;
        }

        if ($nums[$i] < $target && $nums[$i + 1] > $target) {
            return $i + 1;
        }
    }
}

// 简化
// function searchInsert($nums, $target) {
//     $len = count($nums);

//     for ($i = 0; $i < $len; $i++) {
//         if ($nums[$i] == $target) {
//             return $i;
//         }

//         if ($nums[$i] > $target) {
//             return $i;
//         }
//     }
//     return $len;
// }
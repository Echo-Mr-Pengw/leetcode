<?php

/**
 * 剑指 Offer 05. 替换空格
 * @Author: pengwei
 * @Date:   2021-05-17 23:28:29
 * @Last Modified by:   pengwei
 */

//  方法一。时间复杂度和空间复杂度 O(N)
function replaceSpace($s) {

   $data = '';
   $len  = strlen($s);

   for ($i = 0; $i < $len; $i++) {
       if ($s[$i] == ' ') {
           $data .= "%20";
       } else {
           $data .= $s[$i];
       }
   }
   return $data;
}

// 方法2 优化版
function replaceSpaceOptimize($s) {

    if (empty($s)) {
        return $s;
    }

    $spaceNum = 0;
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        if ($s[$i] == ' ') {
            $spaceNum++;
        }
    }

    $allLen = $len + 2 * $spaceNum;

    $i = $len - 1;
    while ($i >= 0) {
        if ($s[$i] == ' ') {
            $s[--$allLen] = '0';
            $s[--$allLen] = '2';
            $s[--$allLen] = '%';
        } else {
            $s[--$allLen] = $s[$i];
        }
        $i--;
    }
    return $s;
}
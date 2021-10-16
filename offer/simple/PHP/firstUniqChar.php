<?php

/**
 * 剑指 Offer 50. 第一个只出现一次的字符
 * @Author: pengwei
 * @Date:   2021-05-22 19:42:33
 * @Last Modified by:   pengwei
 */
function firstUniqChar($s) {

    if (empty($s)) return ' ';
    
    $map = [];
    $len = strlen($s);

    for ($i = 0; $i < $len; $i++) {
        if (isset($map[$s[$i]])) {
            $map[$s[$i]] = false;
            continue;
        }
        $map[$s[$i]] = true;
    }
   
   foreach ($map as $k => $v) {
       if ($v) {
           return $k;
       }
   }
   return ' ';
}
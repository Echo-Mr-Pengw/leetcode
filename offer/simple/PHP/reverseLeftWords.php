<?php

/**
 * 剑指 Offer 58 - II. 左旋转字符串
 * @Author: pengwei
 * @Date:   2021-05-23 17:58:33
 * @Last Modified by:   pengwei
 */
function reverseLeftWords($s, $n) {
    $len = strlen($s);

    $i = 0;
    while ($i < $n) {
        $s[$len] = $s[$i];
        ++$len;
        ++$i;
    }
   return substr($s, $n);
}
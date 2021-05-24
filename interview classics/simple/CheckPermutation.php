<?php

/**
 * 面试题 01.02. 判定是否互为字符重排
 * @Author: pengwei
 * @Date:   2021-05-24 23:35:23
 * @Last Modified by:   pengwei
 */

function CheckPermutation($s1, $s2) {
        
    $len1 = strlen($s1);
    $len2 = strlen($s2);

    if ($len1 == 0 || $len2 == 0 || $len1 != $len2) {
        return false;
    }
    
    $arr1 = [];
    $arr2 = [];
    for ($i = 0; $i < $len1; $i++) {
        $arr1[] = $s1[$i];
        $arr2[] = $s2[$i];
    }

    sort($arr1);
    sort($arr2);
    return (implode('', $arr1) == implode('', $arr2)) ? true : false;
}
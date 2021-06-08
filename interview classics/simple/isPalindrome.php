<?php

/**
 * 面试题 02.06. 回文链表
 * @Author: pengwei
 * @Date:   2021-06-08 22:11:36
 * @Last Modified by:   pengwei
 */

function isPalindrome($head) {
    $data = [];
    while ($head) {
        $data[] = $head->val;
        $head = $head->next;
    }
    $len = count($data);
    if ($len == 0) {
        return true;
    }

    $i = 0;
    $j = $len - 1;
    while ($i < $j) {
        if ($data[$i] != $data[$j]) {
            return false;
        }
        ++$i;
        --$j;
    }
    return true;
}
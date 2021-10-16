<?php

/**
 * 剑指 Offer 06. 从尾到头打印链表
 * @Author: pengwei
 * @Date:   2021-05-18 22:32:59
 * @Last Modified by:   pengwei
 */

function reversePrint($head) {
    // 记录元素个数
    $num  = 0;
    $data = [];
    while (isset($head->val)) {
        ++$num;
        $data[] = $head->val;
        $head = $head->next;
    }
    $tmp = [];
    for ($i = $num - 1; $i >= 0; $i--) {
        $tmp[] = $data[$i];
    }
    return $tmp;
}
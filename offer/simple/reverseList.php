<?php

/**
 * 剑指 Offer 24. 反转链表
 * @Author: pengwei
 * @Date:   2021-05-22 17:05:27
 * @Last Modified by:   pengwei
 */

function reverseList($head)
{
    $prev = null;
    while ($head) {
        $next = $head->next;
        $head->next = $prev;
        $prev = $head;
        $head = $next;
    }
    return $prev;
}
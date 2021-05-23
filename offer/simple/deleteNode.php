<?php

/**
 * 剑指 Offer 18. 删除链表的节点
 * @Author: pengwei
 * @Date:   2021-05-23 16:12:53
 * @Last Modified by:   pengwei
 */

function deleteNode($head, $val) {

    // 首节点
    if ($head->val == $val) {
        return $head->next;
    }

    $prev = $head;
    $curr = $head->next;
    while ($curr && $curr->val != $val) {
        $prev = $curr;
        $curr = $curr->next;
    }
    $prev->next = $curr->next;
    return $head;
}
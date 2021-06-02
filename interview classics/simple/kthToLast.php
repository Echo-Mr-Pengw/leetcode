<?php

/**
 * 面试题 02.02. 返回倒数第 k 个节点
 * @Author: pengwei
 * @Date:   2021-06-02 23:11:39
 * @Last Modified by:   pengwei
 */

function kthToLast($head, $k) {
    $data = [];
    while ($head) {
        $data[] = $head->val;
        $head = $head->next;
    }
    return $data[count($data) - $k];
}
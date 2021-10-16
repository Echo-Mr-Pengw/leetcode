<?php

/**
 * 剑指 Offer 22. 链表中倒数第k个节点
 * @Author: pengwei
 * @Date:   2021-05-20 23:19:49
 * @Last Modified by:   pengwei
 */

/**
 * @param ListNode $head
 * @param Integer $k
 * @return ListNode
 */

// 方法一
function getKthFromEnd($head, $k) {
    
    $tmpHead = $head;
    // 获取链表的节点数
    $nodeNum = 1;
    while ($head->next != null) {
        $head = $head->next;
        ++$nodeNum;
    }

    $tmp = 0;
    $diff = $nodeNum - $k;
    while ($tmpHead->next != null && $tmp < $diff) {
        $tmpHead = $tmpHead->next;
        ++$tmp;
    }
    return $tmpHead;
}

// 方法2
// function getKthFromEnd($head, $k)
// {
// 	$arr = [];
//     while (isset($head->val)) {
//         $arr[] =$head;
//         $head = $head->next;
//     }
//     return $arr[count($arr) - $k];
// }
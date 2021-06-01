<?php

/**
 * 面试题 02.01. 移除重复节点
 * @Author: pengwei
 * @Date:   2021-06-01 22:21:46
 * @Last Modified by:   pengwei
 */
 function removeDuplicateNodes($head) {
        
    $map[$head->val] = true;
    $curr = $head; // 当前节点

    while ($curr) {
       if (isset($map[$curr->next->val])) {
           $curr->next = $curr->next->next;
       } else {
           $curr = $curr->next;
           $map[$curr->val] = true;
       }
    }
    return $head;

    // 进阶
    // $curr1 = $head;
    // while ($curr1) {
    //     $curr2 = $curr1;
    //     $val = $curr2->val;
    //     while ($curr2->next) {
    //         if ($curr2->next->val == $val) {
    //             $curr2->next = $curr2->next->next;
    //         } else {
    //             $curr2 = $curr2->next;
    //         }
    //     }
    //     $curr1 = $curr1->next;
    // }
    // return $head;
}
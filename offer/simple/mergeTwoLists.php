<?php

/**
 * 剑指 Offer 25. 合并两个排序的链表
 * @Author: pengwei
 * @Date:   2021-05-22 19:07:33
 * @Last Modified by:   pengwei
 */
function mergeTwoLists($l1, $l2) {
    $l3 = new ListNode(null);
    $head = $l3;

    while ($l1 && $l2) {
        if ($l1->val <= $l2->val) {
            $nodeVal = $l1->val;
            $l1 = $l1->next;
        } elseif ($l1->val > $l2->val) {
            $nodeVal = $l2->val;
            $l2 = $l2->next;
        }
        
       $l3->next = new ListNode($nodeVal);
       $l3 = $l3->next;
    }
    
    while ($l1) {
        $nodeVal = $l1->val;
        $l1 = $l1->next;
        $l3->next = new ListNode($nodeVal);
        $l3 = $l3->next;
    }
    
    while ($l2) {
        $nodeVal = $l2->val;
        $l2 = $l2->next;
        $l3->next = new ListNode($nodeVal);
        $l3 = $l3->next;
    }
    return $head->next;
}
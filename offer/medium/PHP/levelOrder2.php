<?php

// 剑指 Offer 32 - III. 从上到下打印二叉树 III
// 请实现一个函数按照之字形顺序打印二叉树，
//即第一行按照从左到右的顺序打印，第二层按照从右到左的顺序打印，第三行再按照从左到右的顺序打印，其他行以此类推。

//      1
//  2       3
//    4
function levelOrder2($root) {
    $queue[] = $root;
    $level = 0;
    $result = [];

    while ($num = count($queue)) {
        $tmp = [];
        for ($i = 0; $i < $num; $i++) {
            $elem = array_shift($queue);
            $tmp[] = $elem->val;

            if ($elem->left) {
                array_push($queue, $elem->left);
            }
            if ($elem->right) {
                array_push($queue, $elem->right);
            }
        }

        $result[$level] = $level & 1 ? array_reverse($tmp) : $tmp;
        $level++;
    }
    return $result;
}
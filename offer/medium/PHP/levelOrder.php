<?php

// 剑指 Offer 32 - I. 从上到下打印二叉树
// 从上到下打印出二叉树的每个节点，同一层的节点按照从左到右的顺序打印。

//   1
// 2   3
//        4
function levelOrder($root) {

    $queue[] = $root;
    $result = [];

    while ($queue) {
        $elem = array_shift($queue);
        $result[] = $elem->val;
        if ($elem->left) {
            array_push($queue, $elem->left);
        }
        if ($elem->right) {
            array_push($queue, $elem->right);
        }
    }
    return $result;
}

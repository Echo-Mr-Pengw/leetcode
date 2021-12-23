<?php

// 剑指 Offer 33. 二叉搜索树的后序遍历序列
// 输入一个整数数组，判断该数组是不是某二叉搜索树的后序遍历结果。如果是则返回 true，否则返回 false。
// 假设输入的数组的任意两个数字都互不相同。

function verifyPostorder($postorder) {

    return isValid($postorder, 0, count($postorder) - 1);
}

function isValid($data, $left, $right) {
    if ($left >= $right) {
        return true;
    }

    $mid = $left;
    $root = $data[$right];
    // 找到第一个大于根节点的数值
    while ($data[$mid] < $root) {
        $mid++;
    }

    $tmp = $mid;
    // 比较右子树
    while ($tmp < $right) {
        if ($data[$tmp++] < $root) {
            return false;
        }
    }

    return isValid($data, $left, $mid - 1 ) &&
        isValid($data, $mid, $right - 1);
}
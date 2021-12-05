<?php
//
// 剑指 Offer 07. 重建二叉树

// 输入某二叉树的前序遍历和中序遍历的结果，请构建该二叉树并返回其根节点。
//假设输入的前序遍历和中序遍历的结果中都不含重复的数字。

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {
    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {
        if ($preorder == null) {
            return;
        }
        $root = $preorder[0];
        $inOrderLen = count($inorder);
        for ($i = 0; $i < $inOrderLen; $i++) {
            if ($inorder[$i] == $root) {
                break;
            }
        }

        $node = new TreeNode($root);
        $node->left = $this->buildTree(array_slice($preorder, 1, $i),
            array_slice($inorder, 0, $i));
        $node->right = $this->buildTree(array_slice($preorder, $i + 1),
            array_slice($inorder, $i + 1));
        return $node;
    }
}